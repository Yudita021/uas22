@extends('pesanan.tema._main')
@section('judul', 'View')
@section('isi')
<br>
<section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              PILIH KAMAR
            </h3>
            <p class="subtitle-a">
              Kamar dengan kelas terbaik harga bersahabat
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      
      <div class="row">

        @foreach($room as $kamar)

        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="{{ route('edit.edit', $kamar->id) }}">
                @if ($kamar->image)
                <img src="{{ asset('storage/' . $kamar->image) }}" alt="" class="img-fluid">
                @else
                    <img src="../assets/img/post-1.jpg" alt="" class="img-fluid">
                @endif
                
              
              
              </a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category">Paket {{ $kamar->jenis_kamar }}  @currency($kamar->harga) / day</h6>
                  
                </div>
              </div>
              <h3 class="card-title"><a class="text-decoration-none" href="{{ route('edit.edit', $kamar->id) }}">{{ $kamar->nama_kamar }}</a></h3>
              <p class="card-description">
                {{$kamar->keterangan}}
              </p>
              <a href="{{ route('edit.edit', $kamar->id) }}" type="button" class="btn btn-sm btn-warning text-center"><i class="fa-solid fa-edit"></i></a>
            </div>
            
          </div>
        </div>
        @endforeach
    </div>
</div>
</section>

@endsection