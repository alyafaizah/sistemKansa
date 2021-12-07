<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header borer-0">
                <h3 class="mb-0">Laporan Keuangan</h3>
            </div>
            <form class="form-inline" method="get" action="{{url('/laporan/cari')}}">
                <div class="form-group" style="padding:30px;">
                    <a href="/cetakpdf" target="_blank" class="btn btn-primary">Cetak Laporan</a>
                </div>
            </form>
            <div class="table-responsive" style="padding:20px;">
                <table id="table-pemasukan" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Banyak Transaksi</th>
                            <th scope="col">Pemasukan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($keuangan as $e=>$k)
                        <tr>
                            <td>{{$e+1}}</td>
                            <td>{{date('d M Y', strtotime($k->tanggal))}}</td>
                            <td>{{$k->jumlah}}</td>
                            <td>{{number_format($k->pemasukan)}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>