@extends('backend.base.index')
@section('title', 'Headmaster')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header d-flex">
                <h5 class="card-title fw-semibold mt-2">Kepala Sekolah</h5>
                <a href="/headmaster/edit/{{ $headmaster->id }}" class="btn btn-primary ms-auto">Edit</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th style="width: 150px;">Foto</th>
                            <td>:</td>
                            <td>
                                <img src="{{ Storage::url($headmaster->headmaster_photo) }}" alt="Foto Kepala Sekolah"
                                    class="img-fluid rounded"
                                    style="width:200px; height:200px; object-fit:contain; object-position:center;">
                            </td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>{{ $headmaster->headmaster_name }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>:</td>
                            <td>{{ $headmaster->headmaster_description }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
