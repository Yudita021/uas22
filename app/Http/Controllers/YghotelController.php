<?php

namespace App\Http\Controllers;
use App\Models\yghotel;
use Illuminate\Http\Request;

class YghotelController extends Controller
{
    public function indexkamar(){
        $room = Yghotel::all();
        return view('admin.kamar', compact('room'));
    }

    public function createkamar(){
        return view('admin.create');
    }

    public function storekamar(Request $request){
        $validatedData = $request->validate([
            'jenis_kamar'=>'required',
            'nama_kamar'=>'required',
            'jumlah_kamar'=>'required',
            'kapasitas'=>'required',
            'harga'=>'required',
            'image'=>'image',
            'keterangan'=>'required'
        ]);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        
        Yghotel::create($validatedData);
        return redirect('admin/kamar');
    }

    public function editkamar(Yghotel $room){
        return view('admin.edit', compact('room')) ;
    }
    
    public function updatekamar(Request $request, Yghotel $room)
    {
        $room->replicate([
            'jenis_kamar'=>'required',
            'nama_kamar'=>'required',
            'jumlah_kamar'=>'required',
            'kapasitas'=>'required',
            'harga'=>'required',
            'keterangan'=>'required'
        ]);
        $room->update($request->all());
        return redirect('admin/kamar') ;
    }

    public function destroy(Yghotel $room)
    {
        $room->delete();
        return redirect('admin/kamar');
    }
}
