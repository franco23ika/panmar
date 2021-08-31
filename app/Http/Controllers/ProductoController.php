<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        return view('producto');
    }
    public function dlete_full(Request $request){
         
                $texto = $request->get('categorias');
        $re="";
                
                for ($i=0; $i <count($texto) ; $i++) { 
                    $re.=$texto[$i]."<br>";
                }
                return $re;
    }
}
