<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelatorioController extends Controller {

    public function relatorio() {
        return view('relatorio');
    }

    public function  relEmpresa($id){
        $data = "";
        return view('relatorio')->with($data);
    }
}


