@extends('backend.base.index')
@section('title', 'About')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header d-flex">
                <h5 class="card-title fw-semibold mt-2">Edit Tentang Sekolah</h5>
            </div>
            <div class="card-body">
                <form action="/about-profile/update/{{ $about->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="school_logo" class="form-label">Logo Sekolah</label>
                        <input type="file" name="school_logo" id="school_logo" class="form-control"
                            placeholder="Masukan Logo Sekolah">
                    </div>
                    <div class="mb-3">
                        <label for="school_name" class="form-label">Nama Sekolah</label>
                        <input type="text" name="school_name" id="school_name" class="form-control"
                            placeholder="Masukan Nama Sekolah" value="{{ $about->school_name }}">
                    </div>
                    <div class="mb-3">
                        <label for="school_tagline" class="form-label">Tagline Sekolah</label>
                        <input type="text" name="school_tagline" id="school_tagline" class="form-control"
                            placeholder="Masukan Tagline Sekolah" value="{{ $about->school_tagline }}">
                    </div>
                    <div class="mb-3">
                        <label for="school_description" class="form-label">Description Sekolah</label>
                        <textarea rows="5" name="school_description" id="school_description" class="form-control"
                            placeholder="Masukan Description Sekolah">{{ $about->school_description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="school_since" class="form-label">Since Sekolah</label>
                        <input type="date" name="school_since" id="school_since" class="form-control"
                            placeholder="Masukan Since Sekolah" value="{{ $about->since->format('Y-m-d') }}">
                    </div>
                    <input type="submit" value="Submit" class="btn btn-outline-primary">
                </form>
            </div>
        </div>
    </div>
@endsection
