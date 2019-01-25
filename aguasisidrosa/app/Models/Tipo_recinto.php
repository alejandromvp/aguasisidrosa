<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipo_recinto extends Model
{
    use SoftDeletes;
    protected $table = 'tipo_recinto';
    protected $primaryKey = 'tipo_recinto_id';
    protected $fillable = ['tipo_recinto_nombre'];
    public $timestamps = true;
}
