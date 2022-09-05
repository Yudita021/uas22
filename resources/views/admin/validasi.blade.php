@extends('admin.tema._main')
@section('judul', 'VALIDASI PESANAN')
@section('isi')

<div class="row mt-2">
    <div class="col-12">
    
        <div class="card">
          <div class="card-header"><b>Validasi Pesanan Id Order : {{  $order->id  }}  </b>
          {{-- <a href="" class="btn btn-sm ms-2 float-right btn-primary"><i class="fa-solid fa-square-plus"></i> TAMBAH DATA SOAL</a> --}}
          </div>
         
        <div class="container">
            <div class="class-header">           
           
                <div class="card-body">

                    
                    
                   
<form action="{{route('pesanan.update', $order->id)}}" method="post">
    @csrf
    @method('PATCH')
    <div class="form-group mb-2">
        <h4 for="">Id Pelanggan : {{ $order->id_pelanggan }}</h4>
        
    </div>
    <div class="form-group mb-2">
        <h4 for="">Nama Pelanggan : {{ $order->nama }}</h4>
        
    </div>

    <div class="form-group mb-2">
        <h4 for="">Email : {{ $order->email }}</h4>
        
    </div>

    <div class="form-group mb-2">
        <h4 for="">No Hp : {{ $order->no_hp }}</h4>
        
    </div>


    <div class="form-group mb-3">
        <h4 for="">Alamat : {{ $order->alamat }}</h4>
 
    
          @php
if ($order->status == "Menunggu") {
  @endphp 
  <div class="form-group mb-3 mt-3 col-5">
        <label for="">STATUS</label>
        <select class="form-control mb-3" id="sel1" name="status" required>
            <option value="{{ $order->status }}">{{$order->status}}</option>
            <option value="Menunggu">Menunggu</option>
            <option value="CheckIN">Check IN</option>
            <option value="CheckOUT">Check OUT</option>
            <option value="Canceled">Canceled</option>
          </select>
          <button type="submit" name="submit" class="btn btn-m btn-primary">Validasi Status</button>
    <a href="{{url('admin/kamar')}}" class="btn btn-m btn-danger float-right"> Batal</a>
  @php
}
@endphp

@php
if ($order->status == "CheckIN") {
  @endphp 
  <div class="form-group mb-3 mt-3 col-5">
        <label for="">STATUS</label>
        <select class="form-control mb-3" id="sel1" name="status" required>
            <option value="{{ $order->status }}">{{$order->status}}</option>
            <option value="CheckOUT">Check OUT</option>
          </select>
          <button type="submit" name="submit" class="btn btn-m btn-primary">Validasi Status</button>
    <a href="{{url('admin/kamar')}}" class="btn btn-m btn-danger float-right"> Batal</a>
  @php
}
@endphp

@php
if ($order->status == "CheckOUT") {
  @endphp 

  <h3 style="color:orange">PELANGGAN SUDAH CKECK OUT</h3>
    <a href="{{url('admin/')}}" class="btn btn-m btn-danger float-right"> Kembali</a>
  @php
}
if ($order->status == "Canceled") {
  @endphp 

  <h3 style="color:orange">PESANAN KAMAR HOTEL DIBATALKAN</h3>
    <a href="{{url('admin/')}}" class="btn btn-m btn-danger float-right"> Kembali</a>
  @php
}
@endphp


    
</form>
</div>
</div>
</div>
</div>
</div>
</div>
  

@endsection