<section class="contact py-5" id="contact">
        <div class="container py-md-4 py-3">
            <div class="title-main text-center mx-auto mb-md-4">
                <h3 class="title-big">Hubungi Kami</h3>
                <p class="sub-title mt-2">Cum doctus civibus efficiantur in imperdiet deterruisset. Cras efficitur,
                    metus gravida suscipit cursus, dui diam pre lorem id lectus.</p>
            </div>
            <div class="main-grid-contact">
                <div class="row mt-5 mx-0">
                    <!-- map -->
                    <div class="col-lg-6 map mt-lg-0 mt-3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.246698585201!2d110.18838807355087!3d-7.3261643720455005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8279c46755dd%3A0x9223743148783b9a!2sSMK%20Negeri%202%20Temanggung!5e0!3m2!1sid!2sid!4v1724233639921!5m2!1sid!2sid"
                            allowfullscreen></iframe>
                    </div>
                    <!-- contact form -->
                    <div class="col-lg-6 content-form-right p-0">
                        <div class="form-w3ls p-md-5 p-4">
                            <h4 class="mb-4 sec-title-w3">Send us a message</h4>
                            <form method="post" action="/send-contact">
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
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" id="email"
                                        placeholder="Email" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="phone" id="phone"
                                        placeholder="No Telepon" required="">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" placeholder="Message" required=""></textarea>
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
