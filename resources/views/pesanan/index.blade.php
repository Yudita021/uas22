@extends('pesanan.tema._main')
@section('judul', 'Daftar Pesanan')
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
                            <th>Id Pelanggan</th>
                            <th>Nama Pelanggan</th>
                            <th>Jumlah Pesan</th>
                            <th>Jenis Kamar</th>
                            <th>Nama Kamar</th>
                            <th>Checkin</th>
                            <th>Total Hari</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            
                        </tr>
                        <tbody>
                            @foreach ($order as $book)
                                
                            
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $book->id_pelanggan }}</td>
                                <td>{{ $book->nama }}</td>
                                <td>{{ $book->jumlah_kamar }}</td>
                                <td>{{ $book->jenis_kamar }}</td>
                                <td>{{ $book->nama_kamar }}</td>
                                <td>{{ $book->checkin }}</td>

                                {{-- Untuk menampilkan JUmlah HAri --}}
                                <td>@php
                                    $fdate = $book->checkin;
                                    $tdate = $book->checkout;
                                    $datetime1 = new DateTime($fdate);
                                    $datetime2 = new DateTime($tdate);
                                    $interval = $datetime1->diff($datetime2);
                                    $days = $interval->format('%a');
                                    echo $days;
                                @endphp</td>
                                <td>{{ $book->total_harga }}</td>
                                <td></td>
                                
                                {{-- <td>{{ $book->jstatus }}</td> --}}
                                
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
