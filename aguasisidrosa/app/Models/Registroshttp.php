<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registroshttp extends Model
{
    use SoftDeletes;
    protected $table = 'registros';
    protected $primaryKey = 'id_registro';
    protected $fillable = ['id_variable', 'info'];
    public $timestamps = true;
}

