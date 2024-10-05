@extends('layout.template')

@section('content')

<div class="row m-2">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5>Edit Kategori</h5>
                <form action="{{ route('update-kategori', ['id' => $kateg->id]) }}" method="POST">
                    @csrf
                    <input type="text" class="form-control" name="nama_kategori" autocomplete="off" value="{{ $kateg->nama_kategori }}" required>
                    <button class="btn btn-primary mt-2" type="submit"><i class="fa-solid fa-check"></i>  Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
