@extends('admin.tema._main')
@section('judul', 'Book Hotel')
@section('isi')
<div class="row mt-2">
    <div class="col-12">
    
        <div class="card">
          <div class="card-header"><b>DAFTAR BOOKING</b>
          {{-- <a href="" class="btn btn-sm ms-2 float-right btn-primary"><i class="fa-solid fa-square-plus"></i> TAMBAH DATA SOAL</a> --}}
          </div>
         
        <div class="container">
            <div class="class-header">           
           
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr class="text-center">
                            <th>No</th>
                            <th>JENIS KAMAR</th>
                            <th>NAMA PELANGGAN</th>
                            <th>Jumlah Kamar</th>
                            <th>Jumlah Orang</th>
                            <th>Checkin</th>
                            <th>Checkout</th>
                            <th>Aksi</th>
                        </tr>
                        <tbody>
                            @foreach ($order as $book)
                                
                            
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $book->jenis_kamar }}</td>
                                <td>{{ $book->nama }}</td>
                                <td>{{ $book->jumlah_kamar }}</td>
                                <td>{{ $book->jumlah_orang }}</td>
                                <td>{{ $book->checkin }}</td>
                                <td>{{ $book->checkout }}</td>
                                <td align="center">
                                
                                  <form action="" method="post">
                                  
                                    <a href="" class="btn btn-sm btn-primary text-center">Lihat</a>
                                  </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
  @endsection