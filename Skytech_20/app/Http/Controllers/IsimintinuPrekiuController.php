<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Preke;
use App\Models\Isiminimas;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class IsimintinuPrekiuController extends Controller
{
    public function atvaizduotiPrekes()
    {
        $userId = auth()->user()->id;
        $isimintinos_prekes = DB::table('isiminimas')->select('fk_preke')->where('fk_user' , '=', $userId)->get();

       $merged = null;

       foreach ($isimintinos_prekes as $preke)
       {
           $result = DB::table('prekes')->select('Kodas', 'Pavadinimas', 'Gamintojas', 'Aprašymas', 'Kaina')->where('id', '=', $preke -> fk_preke  )->get();
           $merged = $result->merge($merged);
       }
        return view('isimintinosprekes', compact('merged'));
      
    }

    public function filtras($kategorija)
    {
        $userId = auth()->user()->id;
        $isimintinos_prekes = DB::table('isiminimas')->select('fk_preke')->where('fk_user' , '=', $userId)->get();

       $merged = null;

        foreach ($isimintinos_prekes as $preke)
        {
            if($kategorija != null)
                $result = DB::table('prekes')->select('Kodas', 'Pavadinimas', 'Gamintojas', 'Aprašymas', 'Kaina')->where('id', '=', $preke -> fk_preke)->where('kategorija', '=', $kategorija)->get();
            else
                $result = DB::table('prekes')->select('Kodas', 'Pavadinimas', 'Gamintojas', 'Aprašymas', 'Kaina')->where('id', '=', $preke -> fk_preke)->get();
            $merged = $result -> merge($merged);
        }

        
  

        return view('isimintinosprekes') -> with('merged', $merged);
    }
}
