@extends('backend.base.index')
@section('title', 'Announcements')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header d-flex">
                <h5 class="card-title fw-semibold mt-2">Edit Pengumuman</h5>
            </div>
            <div class="card-body">
                <form action="/announcement/update/{{ $announcement->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="announcement_title" class="form-label">Judul Pengumuman</label>
                        <input type="text" name="announcement_title" id="announcement_title" class="form-control"
                            placeholder="Masukan Judul Pengumuman" value="{{ $announcement->announcement_title }}">
                    </div>
                    <div class="mb-3">
                        <label for="announcement_image" class="form-label">Gambar Pengumuman</label>
                        <input type="file" name="announcement_image" id="announcement_image" class="form-control"
                            placeholder="Masukan Gambar Pengumuman">
                    </div>
                    <div class="mb-3">
                        <label for="announcement_description" class="form-label">Description Pengumuman</label>
                        <textarea rows="5" name="announcement_description" id="announcement_description" class="form-control"
                            placeholder="Masukan Description Pengumuman">{{ $announcement->announcement_description }}</textarea>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-outline-primary">
                </form>
            </div>
        </div>
    </div>
@endsection
