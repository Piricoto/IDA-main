<?php

namespace App\Http\Controllers;

use App\Models\Propiedades;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class DashboardController extends Controller
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
   
   
    public function index()
    {
        $propiedades = Propiedades::paginate(1);
        return view('dashboard', [
            'propiedades' => $propiedades,
        ]);
    }
}
