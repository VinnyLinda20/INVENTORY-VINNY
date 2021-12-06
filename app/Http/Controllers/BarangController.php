<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Void_;

class BarangController extends Controller
{
    //menampilkan isi dari tabel data barang
    private $items = [
        [
            'code' =>'B001',
            'name' =>'Buku',
            'price' =>2000,
            'qty' => 100,
            'diskon'=>0.1, 
            'max'=>30,
            'PPN'=>0.1 
        ],
        [
            'code' =>'B002',
            'name' =>'Pulpen',
            'price' =>1500,
            'qty' => 100,
            'diskon'=>0.075, 
            'max'=>20,
            'PPN'=>0.1 
        ],
        [
            'code' =>'B003',
            'name' =>'Pensil',
            'price' =>1000,
            'qty' => 100,
            'diskon'=>0.05, 
            'max'=>20,
            'PPN'=>0.1 
        ],
        [
            'code' =>'B004',
            'name' =>'Penghapus',
            'price' =>500,
            'qty' => 100,
            'diskon'=>0.05, 
            'max'=>35,
            'PPN'=>0.1 
        ],
        [
            'code' =>'B001',
            'name' =>'Penggaris',
            'price' =>1300,
            'qty' => 100,
            'diskon'=>0.075, 
            'max'=>30,
            'PPN'=>0.1 
        ],
        ];

    public function index(){
        return view('barang.index',['data'=>$this-> items]);
    }
    public function add(){
        return view('barang.add');
    }
    public function addProcess(Request $request){
        $nama = $request -> namaPembeli;
        $kode = $request -> kodeBarang;
        $jumlah = $request->jumlah;
        $tanggal = date("d F Y");
        $check = false;

        foreach ($this->items as $item){
            //menambahkan variabel
            if($kode == $item['code']){
                $harga = $item['price'];
                $namaBarang = $item['name'];
                $stok = $item['qty'];
                $jumlahAkhir = $item['max'];
                $diskon = $item['diskon'];
                $check = true;
            }
        }

        //menampilkan notifikasi barang
        if($check == false){
            return view('barang.show')-> withErrors("Kode Barang $kode Tidak Ada Dalam Daftar");
        }else{
            if($jumlah > $stok){
                return view('barang.show')->withErrors("Data Tidak Bisa diproses, Stok Barang $kode Hanya Tinggal $stok");
            }else{
            //menghitung diskon dan pajak
            $jumlahDiskon = 0;
            $total = (int)$jumlah * (int)$harga;
            $ppn = $total * 0.1;
            if($jumlah >= $jumlahAkhir){
                $jumlahDiskon = $diskon * $total;
            }else{
                $jumlahDiskon = 0;
            }
            $TotalAkhir = $total + $ppn - $jumlahDiskon;
            return view('barang.show',['nama'=>$nama,'kode'=>$kode,'jumlah'=>$jumlah,'tanggal'=>$tanggal,'harga'=>$harga,'namaBarang'=>$namaBarang,'total'=>$total, 'ppn'=>$ppn,'jumlahDiskon'=>$jumlahDiskon,'TotalAkhir'=>$TotalAkhir,'diskon'=>$diskon*100]);
        }
    }

}
}





    # code...


