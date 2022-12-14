<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Empresa extends Model
{

    protected $table = 'empresa';
    protected $fillable = array('nome',  'status', 'capital_social', 'setor_id');
    
    protected $guarded = ['id'];

    use HasFactory;

    public static function getByName($name) {
        return DB::table('empresa')
                        ->join('setor', 'empresa.setor_id', '=', 'setor.id')
                        ->select('empresa.id as empresa_id'
                                , 'empresa.nome as nome_empresa'
                                , 'empresa.capital_social as capital_social'
                                , 'empresa.descricao as descricao'
                                , 'empresa.status as status'
                                , 'setor.nome as setor')
                        ->where('empresa.nome',  'like', '%' . $name . '%')
                        ->orderBy('empresa.nome', 'asc')
                        ->get();
    }

}
