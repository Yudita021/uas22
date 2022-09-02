<?php

namespace App\Http\Controllers;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function indexadmin(){
        $order = Pesanan::join('pelanggans','pelanggans.id_pelanggan','=','pesanans.id_pelanggan')
        ->join('yghotels','yghotels.id_kamar','=','pesanans.id_kamar')
        ->get(['pesanans.*', 'pelanggans.*','yghotels.jenis_kamar']);
        
        
        return view('admin.index', compact('order'));
    }
}
