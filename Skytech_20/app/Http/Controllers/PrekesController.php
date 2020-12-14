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
        // dd($request);
        $isiminimas =  new Isiminimas();
        $isiminimas -> fk_preke = $request['ID'];
        $isiminimas -> fk_user = auth()->user()->id;
        $isiminimas -> save();
        return redirect() -> back();
     }



}
