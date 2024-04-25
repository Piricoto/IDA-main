<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('files.index');
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('files.create');
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $request->all();
        $request->validate([
            'file' => 'required|image|max:2048'
        ]);

        $imagenes = $request->file('file')->store('public/imagenes');

        $url = Storage::url($imagenes);

        File::create([
            'name' =>$imagenes,
            'ruta' => $url, ]);

        
     
    }

    /**
     * Display the specified resource.
     */
    public function show($file)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
      
    }

    public function destroy($id)
    {
       
    }
}
