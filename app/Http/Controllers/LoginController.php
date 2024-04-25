<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propiedades;
use App\Models\Imagenes;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propiedades = Propiedades::paginate();
        $imagenes = Imagenes::get();

        // $inmuebles = DB::table('propiedades')
        //     ->leftjoin('imagenes', 'propiedades.id', '=', 'imagenes.inmueble')
        //     ->select('propiedades.*', 'imagenes.ruta')
        //     ->get();


        // return view('login.portal', compact('propiedades'))
        return view('login.portal', compact('propiedades', 'imagenes'))
            ->with('i', (request()->input('page', 1) - 1) * $propiedades->perPage());

        // return view('login.portal');
    }
    public function login()
    {
        return view('auth.login');
    }

    public function main()
    {
        return view('login.main');
    }
}
