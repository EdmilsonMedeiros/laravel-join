<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Models\Usuario;
use \App\Models\EnderecoUsuario;
use \App\Models\TipoUsuario;

class HomeController extends Controller
{
    public function index()
    {
        //CONSULTA USUÁRIOS:
        $usuarios = Usuario::select('*')->get();
        //CONSULTA ENDEREÇOS:
        $enderecos = EnderecoUsuario::select('*')->get();
        $usuarios_id = Usuario::select('*')->get();
        //PERCORRE E RECUPERA OS ID's:
        foreach($usuarios_id as $usu_id){
            $usu_id = array();
            $usu_id = $usu_id;
            $tipos_usuario = TipoUsuario::select('*')
            ->where('tipo_usuarios.tipo', 'admin')->get()
            ->where('tipo_usuarios.id_usuario', $usu_id);
        }
        return view( 'home.index',
        ['usuarios'=>$usuarios, 'enderecos'=>$enderecos, 'usuarios_id'=>$usuarios_id, 'usuarios_id'=>$usuarios_id
        , 'tipos_usuario'=>$tipos_usuario]
        );
    }
}
