<?php
   
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Imagenes;
   
use Illuminate\Http\Request;
   
class DragDropController extends Controller
{
   
    /**
     * Generate Image upload View
     *
     * @return void
     */
    public function form()
    {
        return view('drag-drop-form');
    }
    
    /**
     * Image Upload Code
     *
     * @return void
     */
       public function uploadFiles(Request $request)
    {
        $image = $request->file('file');
        Storage::put('public/file.txt', json_encode($request->all()));
        
        $image = $request->file('file');
        
        $imageName = time().'.'.$image->extension();
        $path = $image->store('public/images');
        $temp=explode('/',$path);
        $path=$temp[2];
        // Storage::put('public/file.txt', $path);

   
        //  return response()->json(['success'=>$imageName]);
        // return redirect()->route('mensajes')->with($request->all());
        Imagenes::create([
            'inmueble'=>$request->id,
            'ruta'=>$path,
        ]);
        return response()->json(['success'=>$request->all()]);
    }
}