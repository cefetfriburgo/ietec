<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller {

    public function listSetor () {
        $empresas = $this->listEmpresas();
        $data = '{"labels": ' . $empresas . ',' ;
        $data .= '"datasets": [';
        $data .= '  {"label": "Empresas por Setor" ';
        $data .= '    , "backgroundColor": ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850", "#000"]';
        $data .= '    , "data": [-10, 45, 30, 21, 5, -60]';
        $data .= '   }]}';
        return $data;
    }

    public function maisUtilizadas () {
        
        $data = '{"labels": ["JS", "PHP", "HTML", "CSS", "PYTHON"],';
        $data .= '"datasets": [';
        $data .= '{"label": "Mais Utilizada" ';
        $data .= ', "backgroundColor": ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"]';
        $data .= ', "data": [7000, 4090, 3650, 2514, 11111]';
        $data .= '}]}';
        return $data;
    }
    public function populacao () {
        
        $data = '{"labels": ["JS", "PHP", "CPP", "CSS", "HTML"],';
        $data .= '"datasets": [';
        $data .= '{"label": "População (mi)" ,';
        $data .= ' "backgroundColor": ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"]';
        $data .= ', "data": [2478, 5267, 734, 784, 433]';
        $data .= '}]}';
        return $data;
    }

    public function listEmpresas() {
        return '["Intelicia", "Microhard", "Brinnance", "NVideo", "Samsunga", "Negativo"]'; 
    }

    public function getDash() {
        
        return view('dashboard');
    }
}
