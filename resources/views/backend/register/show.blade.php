@extends('backend.base.index')
@section('title', 'Registers')
@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{ url()->previous() }}" class="btn btn-primary mb-3"><i class="ti ti-arrow-left fw-bold fs-5"></i></a>
            <div class="card-header d-flex">
                <h5 class="card-title fw-semibold mt-2">Pesan</h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="w-25">Nama</th>
                            <td>:</td>
                            <td>{{ $register->name }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>:</td>
                            <th>
                                @if ($register->status)
                                    @if ($register->status > 1)
                                        <span class="badge text-bg-success">Lulus</span>
                                    @else
                                        <span class="badge text-bg-danger">Tidak Lulus</span>
                                    @endif
                                @else
                                    <span class="badge text-bg-dark">Perlu Dicek</span>
                                @endif

                            </th>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td>{{ $register->email }}</td>
                        </tr>
                        <tr>
                            <th>No Telepon</th>
                            <td>:</td>
                            <td>{{ $register->phone }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>:</td>
                            <td>{{ $register->gender }}</td>
                        </tr>
                        <tr>
                            <th>Jurusan</th>
                            <td>:</td>
                            <td>{{ $register->major }}</td>
                        </tr>
                        <tr>
                            <th>File</th>
                            <td>:</td>
                            <td><a href="{{ Storage::url($register->file) }}" target="__blank"
                                    class="btn btn-link">download</a></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>:</td>
                            <td>{{ $register->address }}</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <form action="/get-register/update-status/{{ $register->id }}" method="POST">
                                    @csrf
                                    <select name="status" id="status" class="form-select" onchange="this.form.submit()">
                                        <option value="">Pilih Status</option>
                                        <option value="2" @selected($register->status == 2)>Lulus</option>
                                        <option value="1" @selected($register->status == 1)>Tidak Lulus</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
