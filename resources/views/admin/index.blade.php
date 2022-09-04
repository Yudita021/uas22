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
                        <form class="form" method="get" action="{{ route('search.admin') }}">
                            <div class="form-group w-50">
                                <label for="search" class="d-block mr-2">Pencarian</label>
                                <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan Id No KTP/Passport">
                                <button type="submit" class="btn btn-primary mb-1">Cari</button>
                            </div>
                        </form>
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
                                
                                @php if($book->status == "Menunggu"){
                                    echo"<td style='color:rgb(255, 196, 0)'> <b>$book->status </b> </td>";
                                }
                                if($book->status == "CheckIN"){
                                    echo"<td style='color:green'> <b> $book->status </b> </td>";
                                }
                                if($book->status == "CheckOUT"){
                                    echo"<td style='color:darkblue'> <b> $book->status </b> </td>";
                                }
                                if($book->status == "Canceled"){
                                    echo"<td style='color:red'> <b> $book->status </b></td>";
                                };
                                @endphp
                                
                                
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