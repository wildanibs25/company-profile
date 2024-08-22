@extends('backend.base.index')
@section('title', 'About')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header d-flex">
                <h5 class="card-title fw-semibold mt-2">Tentang Sekolah</h5>
                <a href="/about/edit/{{ $about->id }}" class="btn btn-primary ms-auto">Edit</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th style="width: 150px;">Logo</th>
                            <td>:</td>
                            <td>
                                <img src="{{ Storage::url($about->school_logo) }}" alt="Logo Sekolahan"
                                    class="img-fluid rounded"
                                    style="width:200px; height:200px; object-fit:contain; object-position:center;">
                            </td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>{{ $about->school_name }}</td>
                        </tr>
                        <tr>
                            <th>Tagline</th>
                            <td>:</td>
                            <td>{{ $about->school_tagline }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>:</td>
                            <td>{{ $about->school_description }}</td>
                        </tr>
                        <tr>
                            <th>Berdiri Tahun</th>
                            <td>:</td>
                            <td>{{ $about->since->format('d F Y') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
