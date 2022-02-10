<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $contactos = Publicacion::orderBy("id", "desc")->paginate();
        return view('publicaciones.index', compact("publicaciones"));
    }
}
