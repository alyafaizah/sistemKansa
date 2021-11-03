<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Order;


class BodyController extends Controller
{
    //
    public function kansalogin()
    {
        return view('kansalogin');
    }

    public function kansaberandakasir()
    {
        return view('kansaberandakasir');
    }

    public function kansatransaksi2()
    {
        return view('kansatransaksi2');
    }

    public function test()
    {
        return view('test');
    }
    public function kansariwayat()
    {
        return view('kansariwayat');
    }

    public function index()
    {
        return view('transaksi.index');
    }

    public function detailtransaksi($no_order)
    {
        $order = Order::with('tiketOrder')->where('no_order', $no_order)->first();

        return view('transaksi.detailtransaksi', compact('order'));
    }
}