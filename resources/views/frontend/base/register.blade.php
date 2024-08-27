<!doctype html>
<html lang="en">

@include('frontend.components.head')

<body>
    <!--header-->
    @include('frontend.components.header')
    <!--//header-->
    <!-- inner banner -->
    @php
        $currentPage = 'Register Now';
    @endphp
    @include('frontend.components.breadcrumb')
    <!-- //inner banner -->
    <!-- register -->
    @include('frontend.components.register-form')
    <!-- //register -->
    <!-- support -->
    @include('frontend.components.support')
    <!-- support -->
    <!-- footer -->
    @include('frontend.components.footer')
    <!-- //footer -->
    @include('frontend.components.scripts')
</body>

</html>
