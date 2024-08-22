@extends('backend.base.index')
@section('title', 'Users')
@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{ url()->previous() }}" class="btn btn-primary mb-3"><i class="ti ti-arrow-left fw-bold fs-5"></i></a>
            <div class="card-header d-flex">
                <h5 class="card-title fw-semibold mt-2">Pengguna</h5>
                @if ($user->id == Auth::id())
                    <a href="/user/edit/{{ $user->id }}" class="btn btn-primary ms-auto">Update</a>
                @endif
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
