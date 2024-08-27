@extends('backend.base.index')
@section('title', 'Registers')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header d-flex">
                <h5 class="card-title fw-semibold mt-2">Pesan</h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th style="width: 100px;">Pengaturan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registers as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->major }}</td>
                                <td>{{ $item->status ? ($item->status > 1 ? 'Lulus' : 'Tidak Lulus') : 'Belum Dicek' }}</td>
                                <td>{{ $item->created_at->format('d M Y') }}</td>
                                <td>
                                    <a href="/get-register/show/{{ $item->id }}"
                                        class="btn btn-outline-info w-100 my-1">Detail</a>
                                    <a href="/get-register/edit/{{ $item->id }}"
                                        class="btn btn-outline-warning w-100 my-1">Edit</a>
                                    <a href="/get-register/destroy/{{ $item->id }}"
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
