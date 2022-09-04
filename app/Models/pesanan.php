<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    protected $fillable = ['id_kamar','checkin','checkout','jumlah_kamar','jumlah_orang','total_harga','pesan','id_pelanggan','nama','no_hp','email','alamat'];
}
