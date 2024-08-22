<!doctype html>
<html lang="en">
@php
    $about = App\Models\About::first();
@endphp
@include('backend.components.head')

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="/" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="{{ Storage::url($about->school_logo) }}" class="img-fluid "
                                        style="width:150px; height:150px; object-fit:contain; object-position:center;"
                                        alt="">
                                </a>
                                <p class="text-center">{{ $about->school_name }}</p>
                                <form action="/authenticate" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Username</label>
                                        <input type="email" name="email" id="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            aria-describedby="emailHelp" placeholder="Masukkan Email Anda"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <div class="text-danger fw-light ms-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" id="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Masukkan Password Anda">
                                        @error('password')
                                            <div class="text-danger fw-light ms-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input primary" type="checkbox" value="1"
                                                name="remember" id="remember">
                                            <label class="form-check-label text-dark" for="remember">
                                                Remeber this Device
                                            </label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('backend.components.scripts')
</body>

</html>
