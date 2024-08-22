@extends('backend.base.index')
@section('title', 'Majors')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header d-flex">
                <h5 class="card-title fw-semibold mt-2">Tambah Jurusan</h5>
            </div>
            <div class="card-body">
                <form action="/major/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="major_name" class="form-label">Nama Jurusan</label>
                        <input type="text" name="major_name" id="major_name" class="form-control"
                            placeholder="Masukan Nama Jurusan" value="{{ old('major_name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="major_image" class="form-label">Gambar Jurusan</label>
                        <input type="file" name="major_image" id="major_image" class="form-control"
                            placeholder="Masukan Gambar Jurusan">
                    </div>
                    <div class="mb-3">
                        <label for="head" class="form-label">Kepala Jurusan</label>
                        <input type="text" name="head" id="head" class="form-control"
                            placeholder="Masukan Kepala Jurusan" value="{{ old('head') }}">
                    </div>
                    <div class="mb-3">
                        <label for="major_description" class="form-label">Description Jurusan</label>
                        <textarea rows="5" name="major_description" id="major_description" class="form-control"
                            placeholder="Masukan Description Jurusan">{{ old('major_description') }}</textarea>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-outline-primary">
                </form>
            </div>
        </div>
    </div>
@endsection
