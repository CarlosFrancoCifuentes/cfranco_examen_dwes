<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $publications = Publication::all();
        return view('publications.index', ["publications" => $publications]);
    }
    public function getPublication($id){
        $publication = Publication::find($id);
        return view('publications.getPublication', compact("publication"));
    }
    public function create(){
        return view('publications.create');
    }
    public function add(Request $request){
        $publication = new Publication();
        $publication->titulo = $request->titulo;
        $publication->extracto = $request->extracto;
        $publication->contenido = $request->contenido;
        $publication->caducable = $request->caducable;
        $publication->comentable = $request->comentable;
        $publication->save();

        return redirect()->route('publications.index');
    }
}
