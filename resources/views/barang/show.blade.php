@extends('layouts.app2')

@section('content')
<div class="mt-3">
    <h3>Transaksi Penjualan</h3>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                 {{$error}}
                @endforeach
        </div>
    @else
    <!-- menampilkan data barang yang di input-->
        <p>Nama Pembeli : {{$nama}}</p>
        <p>Tanggal Transaksi : {{$tanggal}}</p>
        <p>Kode Barang : {{$kode}}</p>
        <p>Nama Barang : {{$namaBarang}}</p>
        <p>Harga Barang : Rp. {{$harga}}</p>
        <p>Jumlah Beli : {{$jumlah}}</p>
        <p>Total : Rp. {{$total}}</p>
        <p>Diskon : {{$jumlahDiskon > 0 ? $diskon."% =" : ''}} {{$jumlahDiskon}}</p>
        <p>PPN : 10% = {{$ppn}}</p>
        <p>Total Bayar : Rp.{{$TotalAkhir}} </P>
    @endif

@endsection