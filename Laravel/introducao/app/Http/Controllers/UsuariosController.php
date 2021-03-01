<?php

namespace App\Http\Controllers;

use App\Models\produto;
use App\Models\usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function login(Request $request){
        $email = $request->email;
        $senha = $request->password;
        
        $usuarios = usuario::where('email','=',$email)->where('senha','=',$senha)->first();
        return $usuarios;
        /*if ($usuarios > 0) {
            @session_start();
            $_SESSION['id_usario'] = $usuarios->id;
            return $_SESSION['id_usario'];
            // $produtos = produto::orderby('id','desc')->paginate();
            // return view('produtos.index',['produtos'=> $produtos]);
        } else {
            echo "<script language='javascript'> window.alert('Dados Incorretos')</script>";
            return view('home');
        }*/
    }
}
