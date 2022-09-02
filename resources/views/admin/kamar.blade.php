@extends('admin.tema._main')
@section('judul', 'Daftar Kamar')
@section('isi')

<div class="row mt-2">
    <div class="col-12">
    
        <div class="card">
          <div class="card-header"><b>DAFTAR KAMAR YG HOTEL</b>
          <a href="{{route('kamar.create')}}" class="btn btn-sm ms-2 float-right btn-primary"><i class="fa-solid fa-square-plus"></i> TAMBAH DATA KAMAR</a>
          </div>
         
        <div class="container">
            <div class="class-header">           
           
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Jenis Kamar</th>
                            <th>Nama Kamar</th>
                            <th>Jumlah Kamar</th>
                            <th>Kapasitas</th>
                            <th>Harga</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                        <tbody>
                            @foreach ($room as $book)
                                
                            
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $book->jenis_kamar }}</td>
                                <td>{{ $book->nama_kamar}}</td>
                                <td>{{ $book->jumlah_kamar }}</td>
                                <td>{{ $book->kapasitas }}</td>
                                <td>{{ $book->harga }}</td>
                                <td>{{ $book->keterangan }}</td>
                                <td align="center">
                                
                                    <form action="{{route('kamar.remove', $book->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm ('Anda Yakin?')"><i class="fa-solid fa-trash"></i></button>
                                    <a href="{{ route('kamar.edit', $book->id) }}" type="button" class="btn btn-sm btn-warning text-center"><i class="fa-solid fa-edit"></i></a>
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
  </div>
@endsection