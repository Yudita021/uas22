@extends('pesanan.tema._main')
@section('judul', 'Membuat Pesanan')
@section('isi')


    <div class="row mt-2">
        <div class="col-12">
        
            <div class="card">
              <div class="card-header"><b>PEMESANAN</b>
              {{-- <a href="" class="btn btn-sm ms-2 float-right btn-primary"><i class="fa-solid fa-square-plus"></i> TAMBAH DATA SOAL</a> --}}
              </div>
              @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
             
            <div class="container">
                <div class="class-header">           
               
                    <div class="card-body">
                        <form action="{{route('order.store')}}" method="post">
                            @csrf
                            {{-- <div class="form-group">
                                <label for="">ID Pesanan</label>
                                <input type="text" name="id" class="form-control" value="{{ old('id') }}">
                            </div> --}}
                                <label for="">ID Kamar</label>
                                <input type="text" name="id_kamar" class="form-control" value="{{ old('id_kamar') }}">
                            </div>
    
                            <div class="form-group">
                                <label for="">Checkin</label>
                                <input type="date" name="checkin" class="form-control" value="{{ old('checkin') }}">
                            </div>
    
                            <div class="form-group">
                                <label for="">Checkout</label>
                                <input type="date" name="checkout" class="form-control" value="{{ old('checkout') }}">
                            </div>

                            <div class="form-group">
                                <label for="">Jumlah Kamar</label>
                                <input type="text" name="jumlah_kamar" class="form-control" value="{{ old('jumlah_kamar') }}">
                            </div>

                            <div class="form-group">
                                <label for="">Jumlah Orang</label>
                                <input type="text" name="jumlah_orang" class="form-control" value="{{ old('jumlah_orang') }}">
                            </div>
    
                            <div class="form-group">
                                <label for="">Pesan</label>
                                <textarea name="pesan" id="" cols="30" rows="5" class="form-control">{{ old('pesan') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Total Harga</label>
                                <input type="text" name="total_harga" class="form-control" value="{{ old('total_harga') }}">
                            </div>
    
                <div class="container">
                <div class="class-header">           
               
                            <div class="form-group">
                                <label for="">ID Pelanggan</label>
                                <input type="dropdown" name="id_pelanggan" class="form-control" value="{{ old('id_pelanggan') }}">
                            </div>
    
                            <div class="form-group">
                                <label for="">Nama Pelanggan</label>
                                <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                            </div>
    
                            <div class="form-group">
                                <label for="">No HP</label>
                                <input type="text" name="no_hp" class="form-control" value="{{ old('no_hp') }}">
                            </div>

                            <div class="form-group">
                                <label for="">email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                            </div>
    
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="alamat" id="" cols="30" rows="5" class="form-control">{{ old('alamat') }}</textarea>
                            </div>
    
                            
                        

                    </div>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-lg btn-success">Submit <i class="fa-solid fa-file-circle-plus"></i></button>
                            <a href="{{url('admin/kamar')}}" class="btn btn-lg btn-danger float-right"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection