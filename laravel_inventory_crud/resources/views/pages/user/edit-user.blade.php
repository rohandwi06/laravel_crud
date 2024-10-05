@extends('layout.template')

@section('content')

<form action="{{ url('/users/update',$user->id) }}" method="POST">
    @csrf

    <div class="row m-2 mt-4">
        <div class="col-md-12">
            <div class="card">
                <h3 class="ms-3 mt-3 mb-3">Tambah User</h3>
                <div class="card-body">

                    <div class="form-floating mb-3">
                        <input class="form-control" name="username" type="text" autocomplete="off" value="{{ $user->username }}" placeholder="Username"/>
                        <label>Username</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" name="password" type="password" autocomplete="off" value="{{ $user->password }}" placeholder="Password"/>
                        <label>Password</label>
                    </div>

                    <select name="id_role" id="role" class="form-control" required>
                        <option value="">Pilih Role</option>
                        @foreach($dtRole as $role)
                            <option value="{{ $role->id }}" {{ isset($user) && $user->id_role == $role->id ? 'selected' : '' }}>
                                {{ $role->role }}
                            </option>
                        @endforeach
                    </select>

                    <button class="btn btn-success mt-5" type="submit"><i class="fa-solid fa-check me-2"></i>Edit</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
