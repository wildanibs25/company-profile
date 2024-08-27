@extends('backend.base.index')
@section('title', 'Users')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header d-flex">
                <h5 class="card-title fw-semibold mt-2">Edit Pengguna</h5>
            </div>
            <div class="card-body">
                <form action="/user/update/{{ $user->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Pengguna</label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Masukan Nama Pengguna" value="{{ $user->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Pengguna</label>
                        <input type="email" name="email" id="email" class="form-control"
                            placeholder="Masukan Email Pengguna" value="{{ $user->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password Pengguna</label>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Masukan Password Pengguna">
                    </div>
                    <input type="submit" value="Submit" class="btn btn-outline-primary">
                </form>
            </div>
        </div>
    </div>
@endsection
