<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- style font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- icons fontawesone  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css style -->
    <link rel="stylesheet" href="{{ asset('fe/css/styles.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('fe/img/logo.png') }}" alt="Bootstrap" width="150" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('sewa') ? 'active' : '' }}"
                            href="{{ route('sewa') }}">Sewa</a>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('lacak') ? 'active' : '' }}"
                            href="{{ route('lacak') }}">Lacak Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#armada">Armada</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                </ul>
                <a href="{{ route('sewa') }}" class="btn btn-primary">Sewa Sekarang</a>
            </div>
        </div>
    </nav>

    @yield('header')

    <main>

        @yield('content')

        <section class="promo">
            <div class="container">
                <div class="mt-4 p-4 jumbo">
                    <div class="d-flex justify-content-between">
                        <div class="title">
                            <h2>Anda Tertarik ?</h2>
                            <p>Silakan hubungi kami dan download
                                e-brochure untuk informasi lebih lanjut.
                                Hubungi Kami Segera</p>
                        </div>
                        <div class="tombol">
                            <a href="#" class="btn btn-primary">Hubungi Kami</a>
                        </div>
                    </div>
                </div>

                <!-- #e3e5f2 -->
            </div>
        </section>
    </main>

    <!-- start footer -->
    <footer class="text-center text-lg-start text-muted shadow-nih bg-light" id="kontak">
        <div class="container">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Mari Terhubung Dengan Sosial Media Kami</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section>
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-10 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fa-solid fa-bus me-2"></i>BUSON TICKETING
                            </h6>
                            <p>
                                Jasa Penyedia Tiket Online Transportasi Darat BUS Antar Kota Antar Provinsi, Satu Pintu
                                Untuk Seluruh Armada Bus
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Usefull Link
                            </h6>
                            <p>
                                <a href="#" class="text-reset">Categories</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Product</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Coupon</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Term Of Service</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-10 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Usefull Link
                            </h6>
                            <p>
                                <a href="#" class="text-reset">Categories</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Product</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Coupon</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Term Of Service</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.968621549917!2d109.47324111490393!3d-7.357413974433867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6555c74c09332d%3A0x6a554a9a56775ed1!2sBus%20Pariwisata%20Alfariz%20Trans!5e0!3m2!1sid!2sid!4v1681059642779!5m2!1sid!2sid"
                                style="border:0; width:100%; height:200px; border-radius:15px;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

        </div>
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2022 Copyright Made With ♥
            <a class="text-reset" href="/">ALFARIZ TRANS</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- end footer -->

    <!-- jquery and js bootstrap 5 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script type="text/javascript">
            Swal.fire({
                title: 'Terima Kasih',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Tutup'
            });
        </script>
    @endif
    @if (session('galat'))
        <script type="text/javascript">
            Swal.fire({
                title: 'Mohon Maaf',
                text: '{{ session('galat') }}',
                icon: 'error',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Tutup'
            });
        </script>
    @endif
    @yield('scripts')
</body>

</html>
