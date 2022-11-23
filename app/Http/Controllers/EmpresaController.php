<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PlanejamentoEmpresa;

class EmpresaController extends Controller {

    public function list() {
        $scriptSQL = "SELECT * from empresa ";
        
        return "['CEFET', 'HAGA', '3F']";
    }

    public function get($id) {
        $scriptSQL = "SELECT * from empresa where id=".$id;
        return "uma determinada empresa com id ". $id;
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
