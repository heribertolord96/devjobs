<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacante;
use App\Models\Ubicacion;
class InicioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $vacantes = Vacante::latest()->where('activa', true)->take(10)->get();
        $ubicaciones = Ubicacion::all();

        return view('inicio.index', compact('vacantes', 'ubicaciones'));
    }
}
