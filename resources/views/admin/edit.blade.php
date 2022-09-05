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

                    
                    
                   
<form action="{{route('kamar.update', $room->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="form-group">
        <label for="">Jenis Kamar</label>
        <select class="form-control" id="sel1" name="jenis_kamar" required>
            <option value="{{ $room->jenis_kamar }}">{{$room->jenis_kamar}}</option>
            <option value="VVIP">VVIP</option>
            <option value="VIP">VIP</option>
            <option value="REGULER">REGULER</option>
          </select>

    <div class="form-group">
        <label for="">Nama Kamar</label>
        <input type="text" name="nama_kamar" class="form-control" value="{{ $room->nama_kamar }}">
    </div>

    <div class="form-group">
        <label for="">Jumlah Kamar</label>
        <input type="text" name="stok" class="form-control" value="{{ $room->stok }}">
    </div>

    <div class="form-group">
        <label for="">Kapasitas</label>
        <input type="text" name="kapasitas" class="form-control" value="{{ $room->kapasitas }}">
    </div>

    <div class="form-group">
        <label for="">Harga</label>
        <input type="text" name="harga" class="form-control" value="{{ $room->harga }}">
    </div>

    <div class="mb-2 mt-3 col-3">
        <label for="formFile" class="form-label">Gambar Kamar</label>
<input type="hidden" name="oldImage" value="{{ $room->image }}">

        @if($room->image)
        <img src="{{ asset('storage/'.$room->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
        @else
        <img class="img-preview img-fluid mb-3 col-sm-5">
        @endif

        
        <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
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

<script>
    function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
    }
    }
  
</script>
@endsection