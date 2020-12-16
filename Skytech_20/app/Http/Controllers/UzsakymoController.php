<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preke;
use App\Models\Uzsakymas;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class UzsakymoController extends Controller
{
    public function uzsakymas()
    {
        $uzsakymai = Uzsakymas::orderBy('created_at')->get()->all();
        return view('uzsakymusarasas', compact('uzsakymai'));
    }
}
