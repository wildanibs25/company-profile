@extends('backend.base.index')
@section('title', 'Teachers')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header d-flex">
                <h5 class="card-title fw-semibold mt-2">Guru</h5>
                <a href="/teacher/create" class="btn btn-primary ms-auto">+ Tambah Data</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Guru</th>
                            <th>Foto Guru</th>
                            <th>Mata Pelajaran</th>
                            <th style="width: 100px;">Pengaturan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->teacher_name }}</td>
                                <td><img src="{{ Storage::url($item->teacher_photo) }}" alt="" class="img-fluid rounded"
                                        style="width:150px; height:150px; object-fit:contain; object-position:center;"></td>
                                <td>{{ $item->teacher_major }}</td>
                                <td>
                                    <a href="/teacher/show/{{ $item->id }}"
                                        class="btn btn-outline-info w-100 my-1">Detail</a>
                                    <a href="/teacher/edit/{{ $item->id }}"
                                        class="btn btn-outline-warning w-100 my-1">Edit</a>
                                    <a href="/teacher/destroy/{{ $item->id }}"
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
