<div class="w3l-grids-block-5 py-5">
    <section id="grids5-block" class="pt-md-4 pb-md-5 py-4 mb-5">
        <div class="container">
            <div class="title-main text-center mx-auto mb-4">
                <h3 class="title-big">Pengumuman</h3>
            </div>
            <div class="row mt-sm-5 pt-lg-2">
                @forelse ($announcement as $item)
                    <div class="col-lg-4 col-sm-6 mt-lg-0 mt-sm-0 mt-4">
                        <div class=" grids5-info">
                            <a href="#blog">
                                <img src="{{ Storage::url($item->announcement_image) }}" alt="" />
                            </a>
                            <div class="blog-info">
                                <h5>{{ $item->created_at->format("d F Y") }}</h5>
                                <h4><a href="#blog">{{ $item->announcement_title }}</a></h4>
                                <p>{{ Str::limit($item->announcement_description, 150) }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="card w-100">
                            <h4 class="card-body text-center fw-bold">Pengumuman Belum Ada</h4>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</div>
