<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Models\Usuario;
use \App\Models\EnderecoUsuario;

class HomeController extends Controller
{
    public function index()
    {
        $usuarios_enderecos = Usuario::select('*')
        ->join('endereco_usuarios', 'endereco_usuarios.id_usuario', '=', 'usuarios.id')
        ->join('tipo_usuarios', 'tipo_usuarios.id_usuario', '=', 'usuarios.id')
        ->where('tipo_usuarios.tipo', '=', 'admin')->get();
        return view('home.index', ['usuarios_enderecos'=>$usuarios_enderecos]);
    }
}
