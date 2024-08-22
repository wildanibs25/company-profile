@extends('backend.base.index')
@section('title', 'Contacts')
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
                            <th>Nama</th>
                            <td>:</td>
                            <td>{{ $contact->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td>{{ $contact->email }}</td>
                        </tr>
                        <tr>
                            <th>No Telepon</th>
                            <td>:</td>
                            <td>{{ $contact->phone }}</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <span class="fw-bold fs-4">Message : </span>
                                <p class="mt-4">{{ $contact->message }}</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
