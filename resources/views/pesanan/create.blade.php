@extends('pesanan.tema._main')
@section('judul', 'Form Pemesanan')
@section('isi')


<div class="row mt-2">
    <div class="col-12">
    
        <div class="card">
          <div class="card-header"><b>FORM PEMESANAN KAMAR {{ $room->jenis_kamar }} CLASS</b>
          {{-- <a href="" class="btn btn-sm ms-2 float-right btn-primary"><i class="fa-solid fa-square-plus"></i> TAMBAH DATA SOAL</a> --}}
          </div>
         
        <div class="container">
            <div class="class-header">           
           
                <div class="card-body">                   
                   
<form action="{{route('order.store')}}" method="post">
    @csrf
    <input type="hidden" name="id_kamar" class="form-control" value="{{ $room->id }}">
<div class="row">
    <div class="col-md-6 mb-3">
    <h1>{{ $room->nama_kamar }}</h1>
    <img src="{{ asset('storage/' . $room->image) }}" width="85%" alt="">
</div>


<div class="col-md-6">

<div class="form-group mb-2">
    <label for="">Tanggal Check In :</label>
    <input type="date" name="checkin" class="form-control" value="{{ old('checkin') }}" required>
</div>

<div class="form-group mb-2">
    <label for="">Tanggal Check Out :</label>
    <input type="date" name="checkout" class="form-control" value="{{ old('checkout') }}" required>
</div>

<div class="form-group mb-2">
    <label for="">Jumlah Kamar :</label>
    <input type="number" name="jumlah_kamar" class="form-control" value="{{ old('jumlah_kamar') }}" required>
</div>

<div class="form-group mb-2">
    <label for="">Jumlah Orang :</label>
    <input type="number" name="jumlah_orang" class="form-control" value="{{ old('jumlah_orang') }}" required>
</div>

<div class="form-group mb-2">
    <label for="">Pesan Untuk Hotel :</label>
    <textarea name="pesan" id="" cols="30" rows="5" class="form-control">{{ old('pesan') }}</textarea>
</div>

</div>
</div>  

</div>
</div>
</div>
</div>
</div>
</div>

<div class="row mt-2">
    <div class="col-12">
    
        <div class="card">
          <div class="card-header"><b>MASUKAN DATA DIRI</b>
          {{-- <a href="" class="btn btn-sm ms-2 float-right btn-primary"><i class="fa-solid fa-square-plus"></i> TAMBAH DATA SOAL</a> --}}
          </div>
         
        <div class="container">
            <div class="class-header">           
           
                <div class="card-body">
                    <div class="form-group mb-2">
                        <label for="">ID No KTP / Passport :</label>
                        <input type="number" name="id_pelanggan" class="form-control" value="{{ old('id_pelanggan') }}" required>
                    </div>
                
                    <div class="form-group mb-2">
                        <label for="">Nama Pelanggan :</label>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
                    </div>
                
                    <div class="form-group mb-2">
                        <label for="">No HP :</label>
                        <input type="number" name="no_hp" class="form-control" value="{{ old('no_hp') }}" required>
                    </div>
                
                    <div class="form-group mb-2">
                        <label for="">Email :</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                    </div>
                
                    <div class="form-group mb-3">
                        <label for="">Alamat :</label>
                        <textarea required name="alamat" id="" cols="30" rows="5" class="form-control">{{ old('alamat') }}</textarea>
                    </div>
                    
                    <input type="hidden" name="status" class="form-control" value="Menunggu" required>

                    <button type="submit" name="submit" class="btn btn-m btn-success">Submit <i class="fa-solid fa-file-circle-plus"></i></button>
                    <a href="{{url('admin/kamar')}}" class="btn btn-m btn-danger float-right"><i class="fa-solid fa-arrow-left"></i> Kembali</a>

                </div>
            </div>
        </div>
        </div>
            </div>
            </div>
        </form>
@endsection