<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use App\Question;

class GraficoController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }
    
    public function plotar(){

    	$lava = new Lavacharts;
    	$dados = $lava->DataTable();

    	$tads = Question::where('courses','=','1')->count();
    	$mamb = Question::where('courses','=','2')->count();
    	$mec = Question::where('courses','=','3')->count();
    	$soc = Question::where('courses','=','4')->count();
    	$div = Question::where('courses','=','5')->count();
    	$meme = Question::where('courses','=','6')->count();
    	$outro = Question::where('courses','=','7')->count();


    	$dados->addStringColumn('Categoria')
    		->addNumberColumn('Nº de Perguntas')
    		->addRow(['TADS',$tads])
    		->addRow(['Mamb',$mamb])
    		->addRow(['Mecanica',$mec])
    		->addRow(['Sociais',$soc])
    		->addRow(['Diversos',$div])
    		->addRow(['Memes',$meme]);

    		$lava->BarChart('Dados',$dados);

    		return view('grafico')->with(compact('lava'))->with('tipo','BarChart');


    }
}
