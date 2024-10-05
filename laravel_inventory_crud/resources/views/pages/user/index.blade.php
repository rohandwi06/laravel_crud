@extends('layout.template')

@section('content')

<div class="row m-2 mt-4">
    <div class="col-md-12">
        <div class="card">
            <h3 class="ms-3 mt-3 mb-3">Data User</h3>
            <form action="{{ route('tambah-user') }}" method="GET">
                <button class="btn btn-primary ms-3"><i class="fs fa-plus"></i> Tambah</button>
            </form>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dtUser as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->role ? $item->role->role : 'No Role' }}</td>
                            <td><a href="{{ route('edit-user', ['id' => $item->id]) }}">Edit</a> | <a href="{{ route('delete-user', ['id' => $item->id]) }}">Hapus</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





@endsection
