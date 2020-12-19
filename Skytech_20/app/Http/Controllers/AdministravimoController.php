<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Uzsakymas;
use DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdministravimoController extends Controller
{
    public function klientai(){
        $users = user::where('user_type', 'user')->get();
        return view('klientai', ['users'=>$users]);
    }

    public function klientas($id){
        $user = user::find($id);
        $orders = uzsakymas::where('fk_vartotojas', $id)->get();
        return view('klientas', compact('user','orders'));
    }

    public function darbuotojas($id){
        $user = user::find($id);
        return view('darbuotojas', ['user'=>$user]);
    }
    public function darbuotojai(){
        $users = user::where('user_type', 'worker')
                        ->get();
        return view('darbuotojai', ['users'=>$users]);
    }

    public function salintiDarbuotoja(Request $request){
        $bilietai = \Illuminate\Support\Facades\DB::table('bilietas')->select('*')->where('fk_darbuotojas' , '=', $request['ID'])->get();
        DB::table('bilietas')->where('fk_darbuotojas', '=',  $request['ID'])->delete();
        DB::table('users')->where('id', '=',  $request['ID'])->delete();
        $request ->session()->flash('success', 'Darbuotojas pašalintas sėkmingai');
        return redirect()->route('darbuotojai');
    }

    public function redaguoti($id){
        $user = user::find($id);

        return view('darbuotojoredag', ['user'=>$user]);
    }

    public function pridetiDarbuotoja(Request $request){
        if (Auth::user())
        {
            $validate = null;
            $validate = $request->validate([
                'name' => 'required|min:2',
                'surname' => 'required|min:2',
                'address'=> 'required',
                'telephone'=> 'required',
                'email' => 'required|email|unique:users'
            ]);
            if($validate)
            {

                User::create([
                    'name' => $request['name'],
                    'surname' => $request['surname'],
                    'telephone' => $request['telephone'],
                    'address' => $request['address'],
                    'email' => $request['email'],
                    'password' => Hash::make($request['password']),
                    'user_type' => 'worker',
                ]);
                return redirect()->back();
            }
            else
                return redirect()->back();

        }
        else
            return redirect()->back();
    }

    public function redaguotiDarbuotoja(Request $request){
        $id = $request->input('editid');
        $user = User::find($id);
        $email = $user->email;
        if (Auth::user())
        {
            $validate = null;
            if ($email == $request['email'])
            {
                $validate = $request->validate([
                    'name' => 'required|min:2',
                    'surname' => 'required|min:2',
                    'address'=> 'required',
                    'telephone'=> 'required',
                    'email' => 'required|email'
                ]);
            }
            else
            {
                $validate = $request->validate([
                    'name' => 'required|min:2',
                    'surname' => 'required|min:2',
                    'address'=> 'required',
                    'telephone'=> 'required',
                    'email' => 'required|email|unique:users'
                ]);
            }

            if($validate)
            {
                $user->name = $request['name'];
                $user->email = $request['email'];
                $user->surname = $request['surname'];
                $user->telephone = $request['telephone'];
                $user->address = $request['address'];
                $user->save();
                $request ->session()->flash('success', 'Duomenis pavyko atnaujinti');
                return redirect()->back();
            }
            else
                return redirect()->back();

        }
        else
            return redirect()->back();
    }

    public function uzsakymai(){
        $uzsakymai = Uzsakymas::all();
        return view('uzsakymusarasas', ['uzsakymai'=>$uzsakymai]);
    }
}
