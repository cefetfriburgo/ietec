<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class MonitoramentoController extends Controller{

        public function monitoramento(){
            return view('monitoramento');
        }
    }
?>
