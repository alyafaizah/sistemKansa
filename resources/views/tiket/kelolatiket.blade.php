<x-app-layout>
    <div class="row" style="margin:20px;">
        <div class="col-md-12">
            <div class="box box-warning">
                <div class="box-header">
                    <p>
                        <a class="btn btn-sm btn-flat btn-success" href="tiket/create">Tambah Tiket</a>
                        <button class="btn btn-sm btn-flat btn-success" onClick="window.location.reload();"><i class="fa fa-refresh" style="color:beige;"></i> Refresh</button>
                    </p>
                </div>

                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-stripped myTable">
                            <thead>
                                <tr style="text-align:center;">
                                    <th>Jenis Tiket</th>
                                    <th>Harga</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datas as $key=>$value)
                                <tr style="text-align:center;">
                                    <td>{{ $value -> nama}}</td>
                                    <td>{{ $value -> harga}}</td>
                                    <td><a class="btn btn-primary btn-sm" href="{{ url('tiket/'.$value->id.'/edit') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                    <td>
                                        <form action="{{ url('tiket/'.$value->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>