<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function show(Request $request)
    {
      print_r($request->input());  

      return "show funtion";
    }

}
?>