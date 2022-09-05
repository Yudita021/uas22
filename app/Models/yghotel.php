<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class yghotel extends Model
{
    protected $fillable = ['jenis_kamar','nama_kamar','kapasitas','stok','keterangan','harga','image'];
}
