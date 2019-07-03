<?php

namespace App\Http\Controllers;

use Request;
use App\Question;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function postQuestion(){

        $objQuestion = new Question();
        $objQuestion->title = (Request::input('title'));
        $objQuestion->img_url = (Request::input('link'));
        $objQuestion->description = (Request::input('description'));
        $objQuestion->courses = (Request::input('courses'));
        $objQuestion->points = 0;
        $objQuestion->user_id = (Request::input('userid'));
        $objQuestion->save();

        return view('home');
    }

    public function listar(){

        return view('home');
    }
}
