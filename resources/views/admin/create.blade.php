@extends('admin.tema._main')
@section('judul', 'Tambah Kamar')
@section('isi')



    <div class="row mt-2">
        <div class="col-12">
        
            <div class="card">
              <div class="card-header"><b>TAMBAH DATA KAMAR</b>
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
                        <form action="{{route('kamar.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Jenis Kamar</label>
                                <input type="dropdown" name="jenis_kamar" class="form-control">
                            </div>
    
                            <div class="form-group">
                                <label for="">Nama Kamar</label>
                                <input type="text" name="nama_kamar" class="form-control" value="{{ old('nama_kamar') }}">
                            </div>
    
                            <div class="form-group">
                                <label for="">Jumlah Kamar</label>
                                <input type="text" name="jumlah_kamar" class="form-control" value="{{ old('jumlah_kamar') }}">
                            </div>

                            <div class="form-group">
                                <label for="">Kapasitas</label>
                                <input type="text" name="kapasitas" class="form-control" value="{{ old('kapasitas') }}">
                            </div>

                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="text" name="harga" class="form-control" value="{{ old('harga') }}">
                            </div>
    
                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <textarea name="keterangan" id="" cols="30" rows="5" class="form-control">{{ old('keterangan') }}</textarea>
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