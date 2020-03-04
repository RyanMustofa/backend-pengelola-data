<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = "pembayarans";
    protected $fillable = ['nama','kelas','jumlah','baru_dibayar','lunas'];
}
