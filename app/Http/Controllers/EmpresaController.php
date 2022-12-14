<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PlanejamentoEmpresa;
use App\Models\Empresa;

class EmpresaController extends Controller {

    public function list() {
        $scriptSQL = "SELECT empresa.nome from empresa ";
        
        return "['CEFET', 'HAGA', '3F']";
    }

    public function get($id) {
        $scriptSQL = "SELECT empresa.id from empresa where id=".$id;
        return "uma determinada empresa com id ". $id;
    }

    public function getByName($name){
        //return Empresa::where('nome', 'LIKE', '%'.$name.'%')->get();
        return Empresa::getByName($name);
    }

    public function listaPlanejamento($id) {
        $data = [];
        $data['planos'] = PlanejamentoEmpresa::all();
        return view('empresa.planejamento', $data);
    }

    public function detalharPlano($plano_id) {
        $plano = PlanejamentoEmpresa::find($plano_id);
        return $plano;
        //return view('empresa.plano', $plano);
    }
    public function editarPlano($plano_id) {
        
        echo $plano_id;
    }

    public function removerPlano($plano_id) {
        
        echo $plano_id;
    }
}
