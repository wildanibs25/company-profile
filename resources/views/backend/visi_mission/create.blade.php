@extends('backend.base.index')
@section('title', 'Visi Missions')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header d-flex">
                <h5 class="card-title fw-semibold mt-2">Tambah Visi Misi</h5>
            </div>
            <div class="card-body">
                <form action="/visi-mission/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="category" class="form-label">Kategori</label>
                        <select name="category" id="category" class="form-select">
                            <option value="">Pilih Kategori</option>
                            <option value="visi" @selected(old('category') == 'visi')>Visi</option>
                            <option value="misi" @selected(old('category') == 'misi')>Misi</option>
                        </select>

                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Text</label>
                        <textarea rows="5" name="text" id="text" class="form-control" placeholder="Masukan Text Visi-Misi">{{ old('text') }}</textarea>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-outline-primary">
                </form>
            </div>
        </div>
    </div>
@endsection
