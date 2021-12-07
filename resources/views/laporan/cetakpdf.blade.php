<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table.static {
            position: relative;
            border: 1px solid #543535;
        }
    </style>
    <title>Laporan Penjualan Tiket</title>
</head>

<body>
    <div class="form-group">
        <p align="center"><b>Laporan Penjualan Tiket</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Banyak Transaksi</th>
                <th>Pemasukan</th>
            </tr>
            @foreach ($cetakpdf as $e=>$k)
            <tr align="center">
                <td>{{$e+1}}</td>
                <td>{{date('d M Y', strtotime($k->tanggal))}}</td>
                <td>{{$k->jumlah}}</td>
                <td>{{number_format($k->pemasukan)}}</td>
            </tr>
            @endforeach
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>