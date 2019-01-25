<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Localidad extends Model
{
    use SoftDeletes;
    protected $table = 'localidad';
    protected $primaryKey = 'localidad_id';
    protected $fillable = ['localidad_codigo', 'localidad_nombre', 'localidad_orden'];
    public $timestamps = true;

    //protected $with = [ 'Propiedad', ];
}
