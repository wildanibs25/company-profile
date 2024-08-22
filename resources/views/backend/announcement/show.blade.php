@extends('backend.base.index')
@section('title', 'Announcements')
@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{ url()->previous() }}" class="btn btn-primary mb-3"><i class="ti ti-arrow-left fw-bold fs-5"></i></a>
            <div class="card-header d-flex">
                <h5 class="card-title fw-semibold mt-2">Pengumuman</h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Nama Pengumuman</th>
                            <td>:</td>
                            <td>{{ $announcement->announcement_title }}</td>
                        </tr>
                        <tr>
                            <th style="width: 150px;">Gambar Pengumuman</th>
                            <td>:</td>
                            <td>
                                <img src="{{ Storage::url($announcement->announcement_image) }}" alt="Logo Sekolahan"
                                    class="img-fluid rounded"
                                    style="width:200px; height:200px; object-fit:contain; object-position:center;">
                            </td>
                        </tr>
                        <tr>
                            <th>Description Pengumuman</th>
                            <td>:</td>
                            <td>{{ $announcement->announcement_description }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
