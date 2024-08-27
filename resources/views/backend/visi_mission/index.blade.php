@extends('backend.base.index')
@section('title', 'Visi Mission')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header d-flex">
                <h5 class="card-title fw-semibold mt-2">Visi Misi</h5>
                <a href="/visi-mission/create" class="btn btn-primary ms-auto">+ Tambah Data</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kategori</th>
                            <th>Teks</th>
                            <th style="width: 100px;">Pengaturan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($visiMissions as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="text-capitalize">{{ $item->category }}</td>
                                <td>{{ Str::limit($item->text, 150, '...') }}</td>
                                <td class="w-25">
                                    <a href="/visi-mission/show/{{ $item->id }}"
                                        class="btn btn-outline-info w-100 my-1">Detail</a>
                                    <a href="/visi-mission/edit/{{ $item->id }}"
                                        class="btn btn-outline-warning w-100 my-1">Edit</a>
                                    @if ( $item->category == 'misi')
                                        <a href="/visi-mission/destroy/{{ $item->id }}"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')"
                                        class="btn btn-outline-danger w-100 my-1">Hapus</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
