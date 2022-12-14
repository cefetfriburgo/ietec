<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Relatorio;

class RelatorioController extends Controller {

    public function relatorio() {
        
        return view('relatorio');
    }

    public function  relEmpresa($id){
        $data = "";
        return view('relatorio')->with($data);
    }

    public function relFatSetor($setorId, $ano) {
        $resultado = Relatorio::getRelFaturamentoPorSetor($setorId, $ano);
        //print_r($resultado);
        return view('/relatorios/relFatSetor')->with('resultado',$resultado);
    }
}


