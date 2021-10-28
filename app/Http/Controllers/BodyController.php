<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BodyController extends Controller
{
    //
    public function kansalogin(){
        return view('kansalogin');
    }

    public function kansatransaksi(){
        return view('kansatransaksi');
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
