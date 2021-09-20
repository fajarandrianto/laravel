<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magang extends Model
{
    protected $table = 'magangs';
    protected $fillable = ['id','nis','nama','jurusan','asal_sekolah','jenis_kelamin','telp_siswa','napem','telp_pem','mulai','akhir','divisi'];
    public $timestamps=false;
}
