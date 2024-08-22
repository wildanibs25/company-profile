@extends('backend.base.index')
@section('title', 'Teachers')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header d-flex">
                <h5 class="card-title fw-semibold mt-2">Tambah Guru</h5>
            </div>
            <div class="card-body">
                <form action="/teacher/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="teacher_name" class="form-label">Nama Guru</label>
                        <input type="text" name="teacher_name" id="teacher_name" class="form-control"
                            placeholder="Masukan Nama Guru" value="{{ old('teacher_name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="teacher_photo" class="form-label">Foto Guru</label>
                        <input type="file" name="teacher_photo" id="teacher_photo" class="form-control"
                            placeholder="Masukan Foto Guru">
                    </div>
                    <div class="mb-3">
                        <label for="teacher_major" class="form-label">Jurusan Guru</label>
                        <input type="text" name="teacher_major" id="teacher_major" class="form-control"
                            placeholder="Masukan Jurusan Guru" value="{{ old('teacher_major') }}">
                    </div>
                    <input type="submit" value="Submit" class="btn btn-outline-primary">
                </form>
            </div>
        </div>
    </div>
@endsection
