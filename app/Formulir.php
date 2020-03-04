<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
   protected $table = "formulirs";

   protected $fillable = ['nama_pendaftar','alamat_pendaftar','tanggal_lahir','nama_wali','nama_ayah','nama_ibu','status'];
   public function user(){
      return  $this->belongsTo('App\User');
   }
}
