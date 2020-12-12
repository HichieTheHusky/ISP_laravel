<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Bilietas;
use App\Models\Zinutes;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PagalbosController extends Controller
{
    //
    public function makeBilietas(Request $request)
    {
        $users = User::where('user_type',User::ROLE_WORKER)->get()->all();
        $maxrand = count($users) - 1;
        $number = rand(0,$maxrand);

        $bilietas = new Bilietas();
        $bilietas->fk_vartotojas = auth()->user()->id;
        $bilietas->fk_darbuotojas = $users[$number]['id'];
        $bilietas->pavadinimas = $request['pavadinimas'];
        $bilietas->kategorija = $request['kategorija'];
        $bilietas->save();

        $zinutes = new Zinutes();
        $zinutes->fk_rasytojas = auth()->user()->id;
        $zinutes->fk_bilietas = $bilietas->getAttribute('id');
        $zinutes->tekstas = $request['tekstas'];
        $zinutes->save();

        return redirect()->route('pagalbos');
    }

    public function bilietai()
    {
        $userId = auth()->user()->id;
        $bilietas = Bilietas::orderBy('created_at')->where('fk_vartotojas',$userId)->get()->all();
        return view('pagalbos', compact('bilietas'));
    }

    public function bilietas(Request $id)
    {

        $bilietas = Bilietas::find($id['ID']);
        $zinutes = Zinutes::where('fk_bilietas',$bilietas->getAttribute('id'))->get()->all();
        return view('bilietas', compact('bilietas','zinutes'));
    }
    public function makeZinutes(Request $request)
    {

        $zinutes = new Zinutes();
        $zinutes->fk_rasytojas = auth()->user()->id;
        $zinutes->fk_bilietas = $request['id'];
        $zinutes->tekstas = $request['tekstas'];
        $zinutes->save();

        $bilietas = Bilietas::find($request['id']);
        $zinutes = Zinutes::where('fk_bilietas',$bilietas->getAttribute('id'))->get()->all();

        return view('bilietas', compact('bilietas','zinutes'));
    }
}
