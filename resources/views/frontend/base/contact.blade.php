<!doctype html>
<html lang="en">

@include('frontend.components.head')

<body>
    <!--header-->
    @include('frontend.components.header')
    <!--//header-->
    <!-- inner banner -->
    @php
        $currentPage = 'Contact Us';
    @endphp
    @include('frontend.components.breadcrumb')
    <!-- //inner banner -->
    <!-- contact -->
    @include('frontend.components.contact-form')
    <!-- //contact -->
    <!-- support -->
    @include('frontend.components.support')
    <!-- support -->
    <!-- footer -->
    @include('frontend.components.footer')
    <!-- //footer -->
    @include('frontend.components.scripts')
</body>

</html>
