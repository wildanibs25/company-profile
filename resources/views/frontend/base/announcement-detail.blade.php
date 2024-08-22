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
        $currentPage = "Announcement";
    @endphp
    @include('frontend.components.breadcrumb')
    <!-- //inner banner -->
    <!-- about section -->
    <section class="w3l-servicesblock py-md-5 py-4">
    <div class="container pb-2">
        <div class="row align-items-center">
            <div class="col-lg-6 left-wthree-img pr-lg-4">
                <img src="{{ Storage::url($announcement->announcement_image) }}" alt="" class="img-fluid w-100 h-100" style="object-fit: :cover; object-position:center;">
            </div>
            <div class="col-lg-6 about-right-faq align-self mb-lg-0 mb-5 pl-xl-5">
                <h6>Announcement</h6>
                <h3 class="title-big mb-3">{{ $announcement->announcement_title }}</h3>
                <p class="">{{ $announcement->announcement_description }}</p>
            </div>
        </div>
    </div>
</section>

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
