<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Transaksi;

class BodyController extends Controller
{
    //
    public function kansalogin(){
        return view('kansalogin');
    }
    public $kategori_id;
    public function submit(){
        $transaksi = Transaksi::create([
            'kategori_id'=>$this->kategori,
            'qty'=>1
        ]);
        $transaksi->total = $transaksi->kategori->harga;
        $transaksi->save();

        session()->flash('message', 'product berhasil di tambah');
    }

    public function kansatransaksi(){
        //$kategoris=Kategori::orderBY('id','asc')->get();
        //return view('kansatransaksi');
        return view('kansatransaksi',[
            'kategoris'=>Kategori::orderBY('nama','asc')->get(),
            'transaksis' => Transaksi::get()
        ]);
    }

    public function kansaberandakasir(){
        return view('kansaberandakasir');
    }
    
    public function kansatransaksi2(){
        return view('kansatransaksi2');
    }

    public function test(){
        return view('test');
    }
    public function kansariwayat(){
        return view ('kansariwayat');
    }
}
