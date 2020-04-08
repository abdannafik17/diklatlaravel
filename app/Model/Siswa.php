<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Telepon;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';

    protected $fillable = [
    	'nisn', 'nama_depan', 'nama_akhir', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin'
    ];

    protected $dates = ['tanggal_lahir'];

    public function telepon() {
    	return $this->hasOne('App\Model\Telepon', 'id_siswa');
    }
}
