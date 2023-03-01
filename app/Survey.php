<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    public $timestamps = false;
    protected $table = 'survey';
    protected $fillable = ['nama_pensurvey','nik','unique_id','nama','foto','foto2','foto3','foto4','foto5'];

    public function pemohon() {
        return $this->hasOne('App\Model\Pemohon');
    }

    public function galeri() {
        return $this->belongsTo('App\Model\Galeri');
    }
}
