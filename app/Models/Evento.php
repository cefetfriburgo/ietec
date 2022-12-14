<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $table = 'evento';
    public $timestamps = false;

    protected $fillable = array('nome', 'tipo', 'ano', 'data_realizacao');

    protected $guarded = ['id'];

}
