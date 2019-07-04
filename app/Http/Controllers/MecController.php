<?php

namespace App\Http\Controllers;

use Request;
use App\Question;


class MecController extends Controller
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
        $question = Question::where('courses', 4)->latest()->get();

        return view('mec')->with('questions', $question);
    }
}