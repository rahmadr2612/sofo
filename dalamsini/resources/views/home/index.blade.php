
@extends('layout.landing.main')

@section('content')

    <main id="main">

        <!-- ======= Hero Section ======= -->
        @include('layout.landing.hero')
        <!-- End Hero -->

        <!-- ======= About Section ======= -->
        {{-- <section id="about" class="about">
            <div class="container">

            <div class="row">
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                <h3>Application</h3>
                <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                </p>
                <ul>
                    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
                <a href="#pricing" class="read-more">Learn Model <i class="bi bi-long-arrow-right"></i></a>
                </div>
            </div>

            </div>
        </section> --}}
        <!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Our Work</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-lg-center">
                        <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-receipt"></i>
                            <h4>KAIBO</h4>
                            <p>Robot pengantar barang (loading) Warehouse pada Line Sewing PT. Globalindo Intimates.</p>
                        </div>
                        <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-cube-alt"></i>
                            <h4>ROLANDO</h4>
                            <p>Robot Pengantar yang bekerja secara otomatis untuk pelayanan loket.</p>
                        </div>
                        <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-images"></i>
                            <h4>Aut occaecati</h4>
                            <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                        </div>
                        <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-shield"></i>
                            <h4>Beatae veritatis</h4>
                            <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 order-2 order-lg-4 hero-img " data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{ asset('assets/landing/img/robot/robot4.png')}}" width="100%" class="img-fluid animated">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Features Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Model Robot</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                @foreach ($robot as $row)
                    <div class="row ">
                        <div class="col-lg-4 col-md-5 offset-md-4">
                            <div class="box">
                                <span class="advanced">Terbaru</span>
                                <h3>Robot {{ $row->nama }}</h3>
                                {{-- <img src="{{ asset('assets/landing/img/robot/mekanik3.png')}}" width="100%"><br> --}}
                                {{-- <img src="{{ url('') }}//assets/image/robot-master/{{ $row->image }}" alt="" class="img-fluid me-3 b-r-10 img-100"> --}}
                                <img src="{{ url('') }}//assets/image/robot-master/{{ $row->image }}" alt="" width="100%">
                                <div class="btn-wrap">
                                    <a href="{{ url('') }}/robot/{{ $row->id }}" class="btn-buy">Select</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>FAQ</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="faq-list">
                <ul>
                <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                    <p>
                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="400">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                    </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="500">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                    </p>
                    </div>
                </li>

                </ul>
            </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                <div class="info-box mb-4">
                    <i class="bx bx-map"></i>
                    <h3>Alamat</h3>
                    <p> Jl. Nakula I No. 5-11 Semarang</p>
                </div>
                </div>

                <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p>contact@example.com</p>
                </div>
                </div>

                <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p>+1 5589 55488 55</p>
                </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-6 ">
                <img class="mb-4 mb-lg-0" src="{{ asset('assets/landing/img/robot/mekanik3.png')}}" style="width: 100%; height: 103%;">
                </div>

                <div class="col-lg-6">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                    </div>
                    <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
                </div>

            </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

@endsection