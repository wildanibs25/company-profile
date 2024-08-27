<!doctype html>
<html lang="en">

@include('frontend.components.head')

<body>
    <!--header-->
    @include('frontend.components.header')
    <!--//header-->
    <!-- inner banner -->
    @php
        $currentPage = 'Announcement';
    @endphp
    @include('frontend.components.breadcrumb')
    <!-- //inner banner -->
    <!-- about section -->
    @include('frontend.components.announcement-detail')
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
