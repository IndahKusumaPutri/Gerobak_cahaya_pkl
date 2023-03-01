<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    public $timestamps = false;
    protected $table = 'galeri';
    protected $fillable = array('id_survey','unique_id','nama_usaha','nama_pemilik','gambar_gerobak','deskriprsi');

    public function survey() {
        return $this->belongsTo('App\Model\Survey');
    }
}
