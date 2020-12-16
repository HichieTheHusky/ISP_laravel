<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Preke;
use App\Models\Isiminimas;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class PrekesController extends Controller
{
    public function prekes()
    {
        $prekes = Preke::orderBy('created_at')->get()->all();
        return view('prekes', compact('prekes'));
    }

    public function isimintiPreke(Request $request)
    {
        if (Isiminimas::where('fk_preke', '=', $request['ID']) -> where('fk_user', '=', auth()->user()->id) -> exists()) 
        {
            $request ->session()->flash('success', 'Ši prekė jau buvo įtraukta į sąrašą');
            return redirect() -> back();
        }   
        else
        {
            $isiminimas =  new Isiminimas();
            $isiminimas -> fk_preke = $request['ID'];
            $isiminimas -> fk_user = auth()->user()->id;
            $isiminimas -> save();
            $request ->session()->flash('success', 'Prekė įtraukta į įsimintinų prekių sąrašą');
            return redirect() -> back();
        }
    }
    
    public function pridetiPreke(Request $request)
    {
        if (Auth::user())
        {
            $validate = null;
            $validate = $request->validate([
                'kodas' => 'required|min:2',
                'pavadinimas' => 'required|min:2',
                'gamintojas'=> 'required',
                'aprašymas'=> 'required',
                'kaina' => 'required',
                'kiekis' => 'required',
                'kategorija' => 'required'
                
            ]);
            if($validate)
            {
                preke::create([
                    'kodas' => $request['kodas'],
                    'pavadinimas' => $request['pavadinimas'],
                    'gamintojas' => $request['gamintojas'],
                    'aprašymas' => $request['aprašymas'],
                    'kaina' => $request['kaina'],
                    'kiekis' => $request['kiekis'],
                    'kategorija' => $request['kategorija'],
                    'fk_id' => auth()->user()->id
                ]);
                return redirect()->back();
            }
            else
                return redirect()->back();

        }
        else
            return redirect()->back();
    }
    public function filtruoti($kategorija)
    {
        if($kategorija != null)
            $prekes = Preke::where('kategorija', $kategorija) -> get() -> all();
        else
            $prekes = Preke::orderBy('created_at')->get()->all();

        return view('prekes') -> with('prekes', $prekes);
    }
}
