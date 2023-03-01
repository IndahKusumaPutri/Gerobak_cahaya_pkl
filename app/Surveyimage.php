<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surveyimage extends Model
{
    protected $table = 'survey_image';
    protected $fillable = ['survey_unique_id','image'];   
}
