<div class="w3l-index-block4 pb-5" id="about">
    <div class="features-bg pb-lg-5 pt-lg-4 py-4">
        <div class="container">
            <div class="title-main text-center mx-auto mb-md-4">
                <h3 class="title-big">Tentang Sekolah</h3>
                <p class="sub-title mt-2">{{ $about->school_description }}</p>
            </div>
            <div class="row">
                @forelse ($majors as $item)
                    <div class="col-lg-4 col-md-6 features15-col-text">
                        <a href="courses.html" class="d-flex feature-unit align-items-center" style="height: 250px;">
                            <div class="col-4">
                                <div class="features15-info">
                                    <img class="img-fluid" src="{{ Storage::url($item->major_image) }}" alt=" ">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="features15-para">
                                    <h4>{{ $item->major_name }}</h4>
                                    <h6>{{ $item->head }}</h6>
                                    <p>{{ Str::limit($item->major_description, 40, '...') }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="card w-100">
                            <h4 class="card-body text-center fw-bold">Kelas Belum Ada</h4>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
