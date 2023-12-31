<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $builder = Movie::where('title', 'Il Padrino');

        $films = $builder->orderBy('title', 'desc')->get();

        return view('movie.index', compact('films'));
    }
}
