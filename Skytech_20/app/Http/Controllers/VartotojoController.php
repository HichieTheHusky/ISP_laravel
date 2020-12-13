<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class VartotojoController extends Controller
{
    public function profilis($id)
    {
        $user  = User::find($id);
        if ($user)
            return view('Vartotojo.profilis') -> withUser($user);
        else
            return redirect()->back();
    }

    public function redagavimas()
    {
        if (Auth::user()) {
            $user  = User::find(Auth::user()->id);
            if ($user)
                return view('/profilisredagavimas')->withUser($user);
            else
                return redirect()->back();
        }
    }
    public function atnaujinimas(Request $request)
    {
        $user = User::find(Auth::user()->id);
        if ($user)
         {
             $validate = null;
            if (Auth::user() -> email === $request['email']) 
            {
                $validate = $request->validate([
                    'name' => 'required|min:2',
                    'email' => 'required|email'
                ]);
            }
            else
            {
                $validate = $request->validate([
                    'name' => 'required|min:2',
                    'email' => 'required|email|unique:users'
                ]);
            }
            if($validate)
            {
                $user->name = $request['name'];
                $user->email = $request['email'];
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
}
