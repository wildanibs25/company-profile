@extends('backend.base.index')
@section('title', 'Teachers')
@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{ url()->previous() }}" class="btn btn-primary mb-3"><i class="ti ti-arrow-left fw-bold fs-5"></i></a>
            <div class="card-header d-flex">
                <h5 class="card-title fw-semibold mt-2">Guru</h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Nama Guru</th>
                            <td>:</td>
                            <td>{{ $teacher->teacher_name }}</td>
                        </tr>
                        <tr>
                            <th style="width: 150px;">Foto Guru</th>
                            <td>:</td>
                            <td>
                                <img src="{{ Storage::url($teacher->teacher_photo) }}" alt="Logo Sekolahan"
                                    class="img-fluid rounded"
                                    style="width:200px; height:200px; object-fit:contain; object-position:center;">
                            </td>
                        </tr>
                        <tr>
                            <th>Mata Pelajaran</th>
                            <td>:</td>
                            <td>{{ $teacher->teacher_major }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
