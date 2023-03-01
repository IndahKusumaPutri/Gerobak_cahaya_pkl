<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemohon extends Model
{
    public $timestamps = false;
    protected $table = 'pemohon';
    protected $fillable = ['nik','unique_id','nama','jenkel','tempat_lahir','tanggal_lahir','no_kk','telp','sps','jps','rencana_usaha',
    'email','alamat','provinsi','kabupaten','kecamatan','kelurahan','jenis_usaha','foto','foto2','foto3','foto4','foto5'];

    public function survey() {
        return $this->belongsTo('App\Model\Survey');
    }

    public function galeri() {
        return $this->belongsTo('App\Model\Galeri');
    }
}
