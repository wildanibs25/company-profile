<section class="w3l-servicesblock py-md-5 py-4">
    <div class="container pb-2">
        <div class="row align-items-center">
            <div class="col-lg-6 left-wthree-img pr-lg-4">
                <img src="{{ Storage::url($headmaster->headmaster_photo) }}" alt="" class="img-fluid w-100 h-100" style="object-fit: :cover; object-position:center;">
            </div>
            <div class="col-lg-6 about-right-faq align-self mb-lg-0 mb-5 pl-xl-5">
                <h6>Kepala Sekolah</h6>
                <h3 class="title-big mb-3">{{ $headmaster->headmaster_name }}</h3>
                <p class="">{{ Str::limit($headmaster->headmaster_description, 300, '...') }}</p>
                <a class="btn button-style button-2 mt-lg-5 mt-4" href="about.html">Read More<i
                        class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</section>
