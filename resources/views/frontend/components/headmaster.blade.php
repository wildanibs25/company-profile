<section class="w3l-servicesblock py-md-5 py-4">
    <div class="container pb-2">
        <div class="row align-items-center">
            <div class="col-lg-6 left-wthree-img pr-lg-4">
                <img src="{{ Storage::url($headmaster->headmaster_photo) }}" alt="" class="img-fluid w-100 h-100" style="object-fit: :cover; object-position:center;">
            </div>
            <div class="col-lg-6 about-right-faq align-self mb-lg-0 mb-5 pl-xl-5">
                <h6>Kepala Sekolah</h6>
                <h3 class="title-big mb-3">{{ $headmaster->headmaster_name }}</h3>
                <p class="">{{ $headmaster->headmaster_description }}</p>
            </div>
        </div>
    </div>
</section>
