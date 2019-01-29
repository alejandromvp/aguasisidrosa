<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Arduino extends Model
{
    use SoftDeletes;
    protected $table = 'arduino';
    protected $primaryKey = 'arduino_id';
    protected $fillable = ['nombre_arduino', 'tag'];
    public $timestamps = true;

   
}
