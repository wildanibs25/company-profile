@extends('backend.base.index')
@section('title', 'Contacts')
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
                            <th class="w-25">Pengaturan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->status ? "Dibaca" : "Belum Dibaca" }}</td>
                                <td>{{ $item->created_at->format("d M Y") }}</td>
                                <td>
                                    <a href="/get-contact/show/{{ $item->id }}"
                                        class="btn btn-outline-info w-100 my-1">Detail</a>
                                    <a href="/get-contact/destroy/{{ $item->id }}"
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
