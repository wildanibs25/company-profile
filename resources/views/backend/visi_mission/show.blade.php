@extends('backend.base.index')
@section('title', 'Visi Missions')
@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{ url()->previous() }}" class="btn btn-primary mb-3"><i class="ti ti-arrow-left fw-bold fs-5"></i></a>
            <div class="card-header d-flex">
                <h5 class="card-title fw-semibold mt-2">Visi Misi</h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="w-25">Kategori</th>
                            <td style="width: 10px;">:</td>
                            <td class="text-capitalize">{{ $visiMission->category }}</td>
                        </tr>
                        <tr>
                            <th>Text {{ $visiMission->category == 'visi' ? 'Visi' : 'Misi' }}</th>
                            <td>:</td>
                            <td class="text-capitalize">{{ $visiMission->text }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
