<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller {

    public function listEmpresasPorSetor () {
        $data = '{"labels": ["Intelicia", "Microhard", "Brinnance", "NVideo", "Samsunga", "Negativo"],';
        $data .= '"datasets": [';
        $data .= '  {"label": "Renda Anual" ';
        $data .= '    , "backgroundColor": ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850", "#000"]';
        $data .= '    , "data": [-10, 45, 30, 21, 5, -60]';
        $data .= '   }]}';
        return $data;
    }
}
