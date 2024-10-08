@extends('backend.base.index')
@section('title', 'Majors')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header d-flex">
                <h5 class="card-title fw-semibold mt-2">Jurusan</h5>
                <a href="/major/create" class="btn btn-primary ms-auto">+ Tambah Data</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Jurusan</th>
                            <th>Foto Jurusan</th>
                            <th>Kepala Jurusan</th>
                            <th>Deskripsi Jurusan</th>
                            <th style="width: 100px;">Pengaturan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($majors as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->major_name }}</td>
                                <td><img src="{{ Storage::url($item->major_image) }}" alt="" class="img-fluid rounded"
                                        style="width:150px; height:150px; object-fit:contain; object-position:center;"></td>
                                <td>{{ $item->head }}</td>
                                <td>{{ Str::limit($item->major_description, 150, '...') }}</td>
                                <td>
                                    <a href="/major/show/{{ $item->id }}"
                                        class="btn btn-outline-info w-100 my-1">Detail</a>
                                    <a href="/major/edit/{{ $item->id }}"
                                        class="btn btn-outline-warning w-100 my-1">Edit</a>
                                    <a href="/major/destroy/{{ $item->id }}"
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
