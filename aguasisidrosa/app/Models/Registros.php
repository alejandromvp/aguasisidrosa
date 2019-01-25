<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registros extends Model
{
    use SoftDeletes;
    protected $table = 'registros';
     protected $primaryKey = 'id_registro';
    protected $fillable = ['id_variable', 'info'];
    public $timestamps = true;

     public function variable() { 
    	return $this->belongsTo('App\Models\variables', 'id_variable','id_variable');  
	}
}
