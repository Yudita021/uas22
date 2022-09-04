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
               
                    <div class="card-body responsive">
                        <form action="{{route('kamar.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-2 col-4">
                                <label for="">Jenis Kamar</label>
                                <select class="form-control" id="sel1" name="jenis_kamar" required>
                                    <option value="">--- PILIH ---</option>
                                    <option value="VVIP">VVIP</option>
                                    <option value="VIP">VIP</option>
                                    <option value="REGULER">REGULER</option>
                                  </select>
                                
                            </div>
    
                            <div class="form-group mb-2 col-10">
                                <label for="">Nama Kamar</label>
                                <input required type="text" name="nama_kamar" class="form-control" value="{{ old('nama_kamar') }}">
                            </div>
    
                            <div class="form-group mb-2 col-4">
                                <label for="">Jumlah</label>
                                <input required type="number" name="jumlah_kamar" class="form-control" value="{{ old('jumlah_kamar') }}">
                            </div>

                            <div class="form-group mb-2 col-4">
                                <label for="">Kapasitas</label>
                                <input required type="number" name="kapasitas" class="form-control" value="{{ old('kapasitas') }}">
                            </div>

                            <div class="form-group mb-2 col-4">
                                <label for="">Harga</label>
                                <input required type="number" name="harga" class="form-control" value="{{ old('harga') }}">
                            </div>
                            <div class="mb-2 mt-3 col-3">
                                <label for="formFile" class="form-label">Gambar Kamar</label>
                                <input class="form-control" type="file" id="image" name="image">
                              </div>
                            <div class="form-group col-8 mb-3">
                                <label for="">Keterangan</label>
                                <textarea required name="keterangan" id="" rows="3" class="form-control">{{ old('keterangan') }}</textarea>
                            </div>
    
                            <button type="submit" name="submit" class="btn btn-m btn-success"><i class="fa-solid fa-file-circle-plus"></i> Submit Data </button>
                            <a href="{{url('admin/kamar')}}" class="btn btn-m btn-danger float-right ms-4"> Batal</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection