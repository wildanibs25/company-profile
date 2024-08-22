@extends('backend.base.index')
@section('title', 'Headmaster')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header d-flex">
                <h5 class="card-title fw-semibold mt-2">Edit Kepala Sekolah</h5>
            </div>
            <div class="card-body">
                <form action="/headmaster/update/{{ $headmaster->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="headmaster_name" class="form-label">Nama Kepala Sekolah</label>
                        <input type="text" name="headmaster_name" id="headmaster_name" class="form-control"
                            placeholder="Masukan Nama Kepala Sekolah" value="{{ $headmaster->headmaster_name }}">
                    </div>
                    <div class="mb-3">
                        <label for="headmaster_photo" class="form-label">Foto Kepala Sekolah</label>
                        <input type="file" name="headmaster_photo" id="headmaster_photo" class="form-control"
                            placeholder="Masukan Foto Kepala Sekolah">
                    </div>
                    <div class="mb-3">
                        <label for="headmaster_description" class="form-label">Description Kepala Sekolah</label>
                        <textarea rows="5" name="headmaster_description" id="headmaster_description" class="form-control"
                            placeholder="Masukan Description Kepala Sekolah">{{ $headmaster->headmaster_description }}</textarea>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-outline-primary">
                </form>
            </div>
        </div>
    </div>
@endsection
