<?php

namespace App\Http\Controllers;

use Request;
use App\Question;


class MambController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function listar(){
        $question = Question::where('courses', 3)->latest()->get();

        return view('mamb')->with('questions', $question);
    }
}