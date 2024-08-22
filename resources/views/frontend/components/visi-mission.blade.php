<section class="w3l-companies-hny-6 position-relative">
    <div class="cusrtomer-layout py-5">
        <div class="container py-md-4 py-3">
            <div class="title-heading-w3 text-center mx-auto">
                <h3 class="title-big">Visi - Misi</h3>
            </div>
            <div id="owl-demo1" class="owl-carousel owl-theme mt-5">
                @if ($visi)
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <div class="testi-des">
                                    <div class="peopl">
                                        <h3 class="text-danger mb-3">Visi</h3>
                                    </div>
                                </div>
                                <blockquote>
                                    <p>{{ $visi?->text }}</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="card w-100">
                        <h4 class="card-body text-center fw-bold">Visi Belum Ada</h4>
                    </div>
                @endif
                @if (count($misi) > 0)
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <div class="testi-des">
                                    <div class="peopl">
                                        <h3 class="text-danger mb-3">Misi</h3>
                                    </div>
                                </div>
                                <blockquote class="px-5 text-left">
                                    @foreach ($misi as $item)
                                        <div class="d-flex mx-5">
                                            <p class="mr-2">{{ $loop->iteration }}.</p><p>{{ $item->text }}</p>
                                        </div>
                                    @endforeach
                                </blockquote>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="card w-100">
                        <h4 class="card-body text-center fw-bold">Misi Belum Ada</h4>
                    </div>
                @endif


            </div>
        </div>
        <div class="quote-special">
            <i class="fa fa-quote-left" aria-hidden="true"></i>
        </div>
    </div>
</section>
