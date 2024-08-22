<!doctype html>
<html lang="en">

@include('frontend.components.head')

<body>
    <!--header-->
    @include('frontend.components.header')
    <!--//header-->
    <!-- banner section -->
    @include('frontend.components.banner')
    <!-- //banner section -->
    <!-- banner bottom section -->
    @include('frontend.components.major')
    <!-- //banner bottom section -->
    <!-- middle section -->
    @include('frontend.components.headmaster')
    <!-- //middle section -->
    <!-- teams 32 block -->
    @include('frontend.components.teacher')
    <!-- //teams 32 block -->
    <!-- testimonials -->
    @include('frontend.components.visi-mission')
    <!--//testimonials-->
    <!-- blog section -->
    @include('frontend.components.announcement')
    <!-- //blog section -->
    <!-- footer -->
    @include('frontend.components.footer')
    <!-- //footer -->
    @include('frontend.components.scripts')
</body>

</html>
