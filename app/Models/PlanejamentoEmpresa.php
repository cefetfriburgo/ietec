<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanejamentoEmpresa extends Model
{
    protected $table = 'planejamento_empresa';
    protected $fillable = array('nome_empresa',  'tipo', 'assunto', 'data');
    
    protected $guarded = ['id'];
    use HasFactory;
}
