<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PlanejamentoEmpresa;

class EmpresaController extends Controller {


    public function listaPlanejamento() {
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
