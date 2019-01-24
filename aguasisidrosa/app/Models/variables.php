<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class variables extends Model
{
    
	use SoftDeletes;
    protected $table = 'variables';
     protected $primaryKey = 'id';
    protected $fillable = ['variables'];
    public $timestamps = true;

    //protected $with = [ 'Propiedad', ];
}
