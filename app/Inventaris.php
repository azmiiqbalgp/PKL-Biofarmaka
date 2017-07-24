<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
   public $timestamps = false;
   protected $primaryKey = 'id_inventaris';
   protected $fillable=['roles_id','kode_barang','nama_barang','merk_barang','tahun_barang','harga_satuan','jumlah_barang','satuan','jumlah_harga','sumber_dana','B','RR','RB','ket','lokasi','gambar'];
   
   public function inventaris()
   {
        return $this->belongsTo('App\User','roles_id');

   }
}
