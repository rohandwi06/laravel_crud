@extends('layout.template')

@section('content')

<div class="row m-2 mt-4">
    <div class="col-md-12">
        <div class="card">
            <h3 class="ms-3 mt-3 mb-3">Data Barang</h3>
            <form action="{{ route('tambah-barang') }}" method="GET">
                <button class="btn btn-primary ms-3"><i class="fs fa-plus"></i> Tambah</button>
            </form>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Stok Barang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $item)
                        <tr>

                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama_barang }}</td>
                            <td>{{ $item->kategori ? $item->kategori->kategori : 'No Kategori' }}</td>
                            <td>{{ $item->stok_barang }}</td>
                            <td><a href="{{ route('edit-barang', ['id' => $item->id]) }}">Edit</a> | <a href="{{ route('delete-barang', ['id' => $item->id]) }}">Hapus</a></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
