<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControladorAdmin extends Controller
{
   public function articulos(){
    return view ('articulo') -> with (['text' => 'Bienvenidos a la pagina de articulos']);
   }
}
