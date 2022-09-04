<?php

namespace App\Http\Controllers;
use App\Models\Pesanan;
use App\Models\Yghotel;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function indexpesanan(){
        $order = Pesanan::join('yghotels','yghotels.id','=','pesanans.id_kamar')
        ->get(['pesanans.*','yghotels.jenis_kamar']);
        
        return view('admin.index', compact('order'));
    }

    public function indexorder(){
        $order = Pesanan::join('yghotels','yghotels.id','=','pesanans.id_kamar')
        ->get(['pesanans.*','yghotels.jenis_kamar','yghotels.nama_kamar'], 'yghotels.total_harga');
        
        return view('pesanan.index', compact('order'));
    }

    public function createorder(){
        return view('pesanan.create');
    }

    public function storeorder(Request $request){
        Pesanan::create($request->all());
        return redirect('order/view');
    }

    // public function vieworder(Pesanan $room){
    //     return view('pesanan.view', compact('room')) ;
    // }

    public function vieworder(){
        $room = Yghotel::all();
        return view('pesanan.view', compact('room'));
    }
}
