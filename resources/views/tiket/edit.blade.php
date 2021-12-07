<x-app-layout>
    <form action="{{ url ('tiket/'.$model->id) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <br>
        <h3 style="margin: auto;margin-left:10px;">Silahkan isi form di bawah ini</h3>
        <div class="mb-3 mt-4 row" style="margin-left:20px;">
            <label class="col-sm-1 col-form-label">Nama</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="nama" value="{{$model->nama}}">
            </div>
        </div>
        <div class="mb-3 mt-4 row" style="margin-left:20px;">
            <label class="col-sm-1 col-form-label">Harga</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="harga" value="{{$model->harga}}">
            </div>
        </div>
        <button class="btn btn-success" type="submit" style="margin-left:20px;">Simpan</button>
    </form>
</x-app-layout>