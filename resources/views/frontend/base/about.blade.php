<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

@include('frontend.components.head')

<body>
    <!--header-->
    @include('frontend.components.header')
    <!--//header-->
    <!-- inner banner -->
    @php
        $currentPage = "About Us";
    @endphp
    @include('frontend.components.breadcrumb')
    <!-- //inner banner -->
    <!-- about section -->
    @include('')
    <!-- //about section -->
    <!-- testimonials -->
    @include('frontend.components.visi-mission')
    <!--//testimonials-->
    <!-- teams 32 block -->
    @include('frontend.components.teacher')
    <!-- //teams 32 block -->
    <!-- footer -->
    @include('frontend.components.footer')
    <!-- //footer -->
    @include('frontend.components.scripts')
</body>

</html>
