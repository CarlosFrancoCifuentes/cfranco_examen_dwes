<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $publication = Publication::orderBy("id", "desc")->paginate();
        return view('publications.index', compact("publication"));
    }
}
