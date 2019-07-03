<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use App\Question;

class GraficoController extends Controller
{
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
    		->addRow(['MAMB',$mamb])
    		->addRow(['MEC',$mec])
    		->addRow(['SOC',$soc])
    		->addRow(['DIV',$div])
    		->addRow(['MEME',$meme])
    		->addRow(['ELSE',$outro]);

    		$lava->BarChart('Dados',$dados);

    		return view('grafico')->with(compact('lava'))->with('tipo','BarChart');


    }
}
