@extends('admin.tema._main')
@section('judul', 'Dashboard')
@section('isi')
<div class="row mt-2">
    <div class="col-12">
    
        <div class="card">
          <div class="card-header"><b>DAFTAR BOOKING</b>
          {{-- <a href="" class="btn btn-sm ms-2 float-right btn-primary"><i class="fa-solid fa-square-plus"></i> TAMBAH DATA SOAL</a> --}}
          </div>
         
        <div class="container">
            <div class="class-header">           
           
                <div class="card-body table-responsive ">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr class="text-center table-dark">
                            <th>No</th>
                            <th>Id Pelanggan</th>
                            <th>Nama Pelanggan</th>
                            
                            <th>Checkin</th>
                            <th>Checkout</th>
                            <th>Hari</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                            
                        </tr>
                    </thead>
                        <tbody>
                            @foreach ($order as $book)
                                
                            
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $book->id_pelanggan }}</td>
                                <td>{{ $book->nama }}</td>
                                <td>{{ $book->checkin }}</td>
                                <td>{{ $book->checkout }}</td>

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
                                <td>
                                @php
                                    $int1 = $days;
                                    $int2 = $book->harga;
                                    $int3 = $book->jumlah_kamar;
                                    $sum = $int1 * $int2 * $int3;
                                    
                                @endphp 
                                @currency($sum)   
                                </td>
                                <td></td>
                                
                                {{-- <td>{{ $book->jstatus }}</td> --}}
                                <td>lihat</td>
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