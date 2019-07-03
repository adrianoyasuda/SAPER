<?php

namespace App\Http\Controllers;

use Request;
use App\User;

class UserController extends Controller
{
    public function gerarRelatorio(){
    	$users = User::all();
    	
    	

    	return\PDF::loadView('relatorio',compact('users'))->setPaper('A4')->stream('relatorio_usuarios.pdf');
    }
}
