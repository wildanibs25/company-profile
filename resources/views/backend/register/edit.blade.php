@extends('backend.base.index')
@section('title', 'Registers')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header d-flex">
                <h5 class="card-title fw-semibold mt-2">Edit Registrasi</h5>
            </div>
            <div class="card-body">
                <form action="/get-register/update/{{ $register->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Masukan Nama"
                            value="{{ $register->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Masukan Email"
                            value="{{ $register->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">No Telepon</label>
                        <input type="tel" name="phone" id="phone" class="form-control"
                            placeholder="Masukan No Telepon" value="{{ $register->phone }}">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="gender" id="gender">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki" @selected($register->gender == 'Laki-laki')>Laki-laki</option>
                            <option value="Perempuan" @selected($register->gender == 'Perempuan')>Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="major" class="form-label">Jurusan</label>
                        <select class="form-select" name="major" id="major">
                            <option value="" selected>Pilih Jurusan</option>
                            @forelse ($majors as $item)
                                <option value="{{ $item->major_name }}" @selected($item->major_name == $register->major)>{{ $item->major_name }}</option>
                            @empty
                                <option value="">Tidak Ada Kelas</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label">File Registrasi</label>
                        <input type="file" name="file" id="file" class="form-control"
                            placeholder="Masukan File Registrasi">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <textarea name="address" id="address" class="form-control" placeholder="Masukan Alamat" rows="5">{{ $register->address }}</textarea>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-outline-primary">
                </form>
            </div>
        </div>
    </div>
@endsection
