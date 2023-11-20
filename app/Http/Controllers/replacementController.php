<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\replacement;

class replacementController extends Controller
{
    public function index() 
    {
        return view('replacement.all_replacement', [
            "title" => "Replacements",
            "replacements" => replacement::all()
        ]);
    }

    public function show($replacement)
    {
        return view ('replacement.detail_replacement', [
            "title" => "detail.replacement",
            "replacement" => replacement::find($replacement)
        ]);
    }
}
