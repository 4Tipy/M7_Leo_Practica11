<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class controladorEjercicio1 extends Controller
{
        public function ej1(){
            return view ('ej1');
        }
        
        public function sufrimiento($pepo = ''){
            $textoFinal = 'Hola, ';
            $textoFinal .= ($pepo == '')?'mundo':$pepo;
            return view ('sufrimiento')  -> with (['text' => 'Hello World']);
        }  
}
