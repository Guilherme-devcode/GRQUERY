<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Consulta;

use App\Models\Medico;

class QueryController extends Controller
{
   public function index(){

       $consultas=Consulta::all();

       return view('dashboard', ['consultas'=>$consultas]);
   }
}
