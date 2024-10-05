@extends('layout.template')

@section('content')

<form action="{{ route('store-barang') }}" method="POST">
    @csrf

    <div class="row m-2 mt-4">
        <div class="col-md-12">
            <div class="card">
                <h3 class="ms-3 mt-3 mb-3">Tambah User</h3>
                <div class="card-body">

                    <div class="form-floating mb-3">
                        <input class="form-control" name="nama_barang" type="text" autocomplete="off" placeholder="Nama Barang" required/>
                        <label>Nama Barang</label>
                    </div>

                    <select name="id_kategori" id="role" class="form-control" required>
                        <option value="">Pilih Kategori</option>
                        @foreach($kateg as $item)
                            <option value="{{ $item->id }}">
                                {{ $item->kategori }}
                            </option>
                        @endforeach
                    </select>

                    <div class="form-floating mb-3 mt-3">
                        <input class="form-control" name="stok_barang" type="number" autocomplete="off" placeholder="Stok Barang" required/>
                        <label>Stok Barang</label>
                    </div>

                    <button class="btn btn-success mt-5" type="submit"><i class="fs fa-plus"></i>Tambah</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
