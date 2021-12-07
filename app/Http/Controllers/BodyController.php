<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class BodyController extends Controller
{
    // public function test()
    // {
    //     return view('test');
    // }
    // public function kansariwayat()
    // {
    //     return view('kansariwayat');
    // }

    public function index()
    {
        return view('transaksi.index');
    }

    public function detailtransaksi($no_order)
    {
        $order = Order::with('tiketOrder')->where('no_order', $no_order)->first();

        return view('transaksi.detailtransaksi', compact('order'));
    }

    public function riwayat()
    {
        return view('invoice.riwayat');
    }

    public function keuangan()
    {
        return view('laporan.keuangan');
    }

    public function cetakpdf()
    {
        $cetakpdf = Order::get();
        $cetakpdf = \DB::table('orders')->select([
            \DB::raw('count(*) as jumlah'),
            \DB::raw('sum(grand_total) as pemasukan'),
            \DB::raw('DATE(created_at) as tanggal')
        ])
            ->groupBy('tanggal')
            ->whereRaw('DATE(created_at)>=?', [date('Y-m-d', strtotime('-30 days'))])
            ->orderBy('tanggal', 'asc')
            ->get()
            ->toArray();

        return view('laporan.cetakpdf', compact('cetakpdf'));
    }

    public function periode(Request $request)
    {
        $tanggal_awal = $request->tanggal_awal;
        $tanggal_akhir = $request->tanggal_akhir;

        $title = "Filter riwayat transaksi dari $tanggal_awal sampai $tanggal_akhir";
        $data = Order::where('created_at', '>=', $tanggal_awal)->where('created_at', '<=', $tanggal_akhir)->get();

        return view('invoice.filterriwayat', compact('title', 'data'));
    }

    public function role()
    {
        $role = Auth::user()->role;

        if ($role == '1') {
            return view('invoice.riwayat');
        } else {
            return view('transaksi.index');
        }
    }
}
