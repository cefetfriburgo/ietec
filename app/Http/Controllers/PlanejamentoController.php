<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanejamentoController extends Controller {
    public function planejamento(){
        return view('planejamento');
    }
}

?>