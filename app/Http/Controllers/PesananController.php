<?php

namespace App\Http\Controllers;
use App\Models\Pesanan;
use App\Models\Yghotel;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function indexpesanan(){
        $order = Pesanan::join('yghotels','yghotels.id','=','pesanans.id_kamar')
        ->get(['pesanans.*','yghotels.jenis_kamar','yghotels.nama_kamar','yghotels.harga']);
        
        return view('admin.index', compact('order'));
    }

    public function indexorder(){
        $order = Pesanan::join('yghotels','yghotels.id','=','pesanans.id_kamar')->orderByDesc('id')
        ->get(['pesanans.*','yghotels.jenis_kamar','yghotels.nama_kamar','yghotels.harga']);
        
        return view('pesanan.index', compact('order'));
    }

    public function tampilkamar(Yghotel $room){
        return view('pesanan.create', compact('room')) ;
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

    public function viewwelcome(){
        $room = Yghotel::all();
        return view('welcome', compact('room'));
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $order = Pesanan::join('yghotels','yghotels.id','=','pesanans.id_kamar')
        ->where('id_pelanggan', 'like', "%" . $keyword . "%")->paginate(5);
        return view('pesanan.index', compact('order'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function searchadmin(Request $request)
    {
        $keyword = $request->search;
        $order = Pesanan::join('yghotels','yghotels.id','=','pesanans.id_kamar')
        ->where('id_pelanggan', 'like', "%" . $keyword . "%")->paginate(5);
        return view('admin.index', compact('order'))->with('i', (request()->input('page', 1) - 1) * 5);
    }




    public function editpesanan(Pesanan $order){
        return view('admin.validasi', compact('order')) ;
    }
    
    public function updatepesanan(Request $request, Pesanan $order)
    {
    $request->validate([
            'status'
        ]);
        
        $order->update($request->all());
        
        return redirect('admin/') ;
    }
}
