<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\User;

class UserController extends Controller{
    public function gerarRelatorio(){

		$id = Auth::id();

    	if($id == 1):
    	    	$users = User::all();
    	    	
    	    	return\PDF::loadView('relatorio',compact('users'))->setPaper('A4')->stream('relatorio_usuarios.pdf');
    	else:
    		return Redirect('https://i.kym-cdn.com/photos/images/original/000/913/758/a12.jpg');
    	endif;
    }
}
