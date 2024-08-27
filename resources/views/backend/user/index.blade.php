@extends('backend.base.index')
@section('title', 'Users')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header d-flex">
                <h5 class="card-title fw-semibold mt-2">Pengguna</h5>
                <a href="/user/create" class="btn btn-primary ms-auto">+ Tambah Data</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th style="width: 100px;">Pengaturan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <a href="/user/show/{{ $item->id }}"
                                        class="btn btn-outline-info w-100 my-1">Detail</a>
                                    <a href="/user/edit/{{ $item->id }}"
                                        class="btn btn-outline-warning w-100 my-1">Edit</a>
                                    <a href="/user/destroy/{{ $item->id }}"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')"
                                        class="btn btn-outline-danger w-100 my-1">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
