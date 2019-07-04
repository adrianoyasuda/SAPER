<?php

namespace App\Http\Controllers;

use Request;
use App\Question;


class DiversosController extends Controller
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
        $question = Question::where('courses', 6)->latest()->get();

        return view('diversos')->with('questions', $question);
    }
}