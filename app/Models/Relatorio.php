<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relatorio extends Model
{
    use HasFactory;

    //relatorio de faturamento por setor
    public static function getRelFaturamentoPorSetor($setorId, $ano) {
        // ano, valor total, valor por empresa, media, minimo, maximo, desvio padrao, nome do setor
        return ['ano' => 2022, 'val_total' => 1000000, 'minimo' => 5000];
        /*
        return ['ano' => 2022, 'val_total' => 1000000, 'minimo' => 5000
                , 'maximo' =>99000, 'desvio_padrao' => 20000, 'nome_setor' => 'TI'
                , ['nome_empresa'=>'Borges o Gato e a gata Christie', 'faturamento'=>30000, 'data' => '2022-10-10']
                , ['nome_empresa'=>'Aquafluxo', 'faturamento'=>30000, 'data' => '2022-10-10']
                , ['nome_empresa'=>'Alea engenharia', 'faturamento'=>30000, 'data' => '2022-10-10']
                , ['nome_empresa'=>'Agrimensor', 'faturamento'=>30000, 'data' => '2022-10-10']
                , ['nome_empresa'=>'Alterdata Software', 'faturamento'=>30000, 'data' => '2022-10-10']
                , ['nome_empresa'=>'AS3 Engenharia', 'faturamento'=>30000, 'data' => '2022-10-10']
                , ['nome_empresa'=>'CEFET', 'faturamento'=>30000, 'data' => '2022-10-10']
                , ['nome_empresa'=>'Flordelicia', 'faturamento'=>30000, 'data' => '2022-10-10']
                , ['nome_empresa'=>'Paladar', 'faturamento'=>30000, 'data' => '2022-10-10']
                , ['nome_empresa'=>'Faol', 'faturamento'=>30000, 'data' => '2022-10-10']
                ];
                */
    }

    // relatorio de eventos

    // relatorio de acompanhamento de empresa

    // relatorio de lucro realizado por empresa

    // relatorio de atividades de empresa

}
