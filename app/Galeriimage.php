<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeriimage extends Model
{
    protected $table = 'galeri_image';
    protected $fillable = ['galeri_unique_id','image'];   
}
