<section class="contact py-5" id="contact">
    <div class="container py-md-4 py-3">
        <div class="title-main text-center mx-auto mb-md-4">
            <h3 class="title-big">Segera Daftarkan Diri Anda</h3>
            <p class="sub-title mt-2">Cum doctus civibus efficiantur in imperdiet deterruisset. Cras efficitur,
                metus gravida suscipit cursus, dui diam pre lorem id lectus.</p>
        </div>
        <div class="main-grid-contact">
            <div class="row mt-5 mx-0">
                <!-- contact form -->
                <div class="col-12 content-form-right p-0">
                    <div class="form-w3ls p-md-5 p-4">
                        <h4 class="mb-4 sec-title-w3">Registrasi</h4>
                        <form method="post" action="/send-register" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 form-group pr-sm-1">
                                    <input class="form-control" type="text" name="first_name" id="first_name"
                                        placeholder="First Name" required="">
                                </div>
                                <div class="col-sm-6 form-group pl-sm-1">
                                    <input class="form-control" type="text" name="last_name" id="last_name"
                                        placeholder="Last Name" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group pr-sm-1">
                                    <input class="form-control" type="email" name="email" id="email"
                                        placeholder="Email" required="">
                                </div>
                                <div class="col-sm-6 form-group pl-sm-1">
                                    <input class="form-control" type="text" name="phone" id="phone"
                                        placeholder="No Telepon" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group pr-sm-1">
                                    <select class="form-control" name="gender" id="gender" style="height: 50px;"
                                        required="">
                                        <option value="" selected>Pilih Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 form-group pl-sm-1">
                                    <select class="form-control" name="major" id="major" style="height: 50px;"
                                        required="">
                                        <option value="" selected>Pilih Jurusan</option>
                                        @forelse ($majors as $item)
                                            <option value="{{ $item->major_name }}">{{ $item->major_name }}</option>
                                        @empty
                                            <option value="">Tidak Ada Kelas</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control-file" type="file" name="file" id="file"
                                    placeholder="File" required="">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="address" id="address" placeholder="Address" required=""></textarea>
                            </div>
                            <div class="input-group1 text-right">
                                <button class="btn button-style" type="submit">Submit
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
