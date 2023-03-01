<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemohonimage extends Model
{
    protected $table = 'pemohon_image';
    protected $fillable = ['pemohon_unique_id','image'];   
}
