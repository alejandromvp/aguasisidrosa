<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recintos extends Model
{
    use SoftDeletes;
    protected $table = 'recintos';
    protected $primaryKey = 'recinto_id';
    protected $fillable = ['recinto_nombre', 'recinto_orden', 'localidad_id', 'tipo_recinto_id'];
    public $timestamps = true;
}
