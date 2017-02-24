<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penggajian extends Model
{
    //
    protected $table='penggajians';
    protected $fillable=['kode_tunjangan_id','jumlah_jam_lembur','jumlah_uang_lembur','gaji_pokok','total_gaji','tanggal_pengambilan','status_pengambilan','petugas_penerima'];
 	protected $visible=['kode_tunjangan_id','jumlah_jam_lembur','jumlah_uang_lembur','gaji_pokok','total_gaji','tanggal_pengambilan','status_pengambilan','petugas_penerima'];
    public $timestamps =true;

    public function tunjangan_pegawai()
    {
    	return $this->belongsTo('App\tunjangan_pegawai','kode_tunjangan_id');
    }
    

}
