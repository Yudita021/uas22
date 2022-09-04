@extends('admin.tema._main')
@section('judul', 'Edit Kamar')
@section('isi')

<div class="row mt-2">
    <div class="col-12">
    
        <div class="card">
          <div class="card-header"><b>Edit DATA KAMAR</b>
          {{-- <a href="" class="btn btn-sm ms-2 float-right btn-primary"><i class="fa-solid fa-square-plus"></i> TAMBAH DATA SOAL</a> --}}
          </div>
         
        <div class="container">
            <div class="class-header">           
           
                <div class="card-body">

                    
                    
                   
<form action="{{route('kamar.update', $room->id)}}" method="post">
    @csrf
    @method('PATCH')

    <div class="form-group">
        <label for="">Jenis Kamar</label>
        <input type="text" name="jenis_kamar" class="form-control" value="{{ $room->jenis_kamar }}" required>
    </div>

    <div class="form-group">
        <label for="">Nama Kamar</label>
        <input type="text" name="nama_kamar" class="form-control" value="{{ $room->nama_kamar }}">
    </div>

    <div class="form-group">
        <label for="">Jumlah Kamar</label>
        <input type="text" name="jumlah_kamar" class="form-control" value="{{ $room->jumlah_kamar }}">
    </div>

    <div class="form-group">
        <label for="">Kapasitas</label>
        <input type="text" name="kapasitas" class="form-control" value="{{ $room->kapasitas }}">
    </div>

    <div class="form-group">
        <label for="">Harga</label>
        <input type="text" name="harga" class="form-control" value="{{ $room->harga }}">
    </div>

    <div class="form-group">
        <label for="">Keterangan</label>
        <textarea name="keterangan" id="" cols="30" rows="5" class="form-control">{{ $room->keterangan }}</textarea>
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