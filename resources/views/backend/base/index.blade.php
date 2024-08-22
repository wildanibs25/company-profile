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
        <!-- Sidebar Start -->
        @include('backend.components.sidebar')
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            @include('backend.components.header')
            <!--  Header End -->

            <div class="container-fluid">
                @include('backend.components.alerts')

                @yield('content')

                @include('backend.components.footer')
            </div>
        </div>
    </div>
    @include('backend.components.scripts')
</body>

</html>
