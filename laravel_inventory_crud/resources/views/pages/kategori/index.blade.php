@extends('layout.template')
@include('sweetalert::alert')

@section('content')
    <div class="row m-2 mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="mb-3">Data Kategori</h3>
                    <form action="{{ route('tambah-kategori') }}" method="POST">
                        @csrf
                        <input type="text" class="form-control" name="kategori" placeholder="Tambah Kategori" autocomplete="off" required>
                        <button class="btn btn-primary mt-3 mb-3" type="submit"><i class="fs fa-plus"></i>Tambah</button>
                    </form>
                    <table class="table table-bordered mt-2" id="datatablesSimple">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Nama Kategori</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dtKategori as $item)
                                <tr>
                                    <td class="text-center">{{ $item->id }}</td>
                                    <td class="text-center">{{ $item->kategori }}</td>
                                    <td class="text-center"><a href="{{ route('edit-kategori', ['id' => $item->id]) }}">Edit</a> | <a href="{{ route('delete-kategori', ['id' => $item->id]) }}">Hapus</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
