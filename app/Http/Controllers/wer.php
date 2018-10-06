<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wer extends Controller
{
    public function welcome()
    {
    	return view('welcome');
    }

    public function saludo()
    {
    	return "Hola";
    }

    public function wer()
    {
    	return "Funcion Wer";
    }

    public function suma()
    {
    	$a = 10;
    	$b = 15;
    	$c = $a + $b;
    	return "Resultado de la  suma: $c";
    }

    public function resta()
    {
    	$a = 10;
    	$b = 15;
    	$c = $a - $b;
    	return "Resultado de la resta es: $c"; 
    }
}
