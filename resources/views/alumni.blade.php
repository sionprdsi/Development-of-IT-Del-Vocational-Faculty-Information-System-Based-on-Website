<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Fakultas Vokasi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/asset about/assets/images/Institut Teknologi Del.png') }}" rel="icon">

    <!-- =========== 1 ============================================================================================================================================================ -->

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">


    <!-- Vendor CSS File -->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- ============== 2 ========================================================================================================================================================= -->

    <!--/google-fonts-->
    <link href="//fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <!--//google-fonts-->
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/asset about/assets/css/style-starter.css') }}">
    <link href="{{ asset('assets/asset about/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/asset about/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/asset about/assets/css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/asset about/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/asset about/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


    <script>
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");

            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;

                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                } else {
                    reveals[i].classList.remove("active");
                }
            }
        }

        window.addEventListener("scroll", reveal);
    </script>


    <!-- ============== 3 ========================================================================================================================================================= -->

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/assets - prestasi/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets - prestasi/css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets - prestasi/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets - prestasi/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets - prestasi/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets - prestasi/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets - prestasi/css/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets - prestasi/css/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/assets - prestasi/css/style.css') }}" rel="stylesheet">


    <style>
        body {
            margin-top: 0px;
        }

        .py-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .pt-5 {
            padding-top: 3rem !important;
        }

        .my-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important;
        }

        .border-0 {
            border: 0 !important;
        }

        .position-relative {
            position: relative !important;
        }

        .shadow-lg {
            box-shadow: 0 1rem 3rem rgb(0 0 0 / 18%) !important;
        }

        .card {
            position: relative;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: .25rem;
        }

        .member-profile {
            top: -50px;
            left: 0;
        }

        .text-center {
            text-align: center !important;
        }

        .w-100 {
            width: 100% !important;
        }

        .position-absolute {
            position: absolute !important;
        }

        .member-profile img {
            width: 175px;
            height: 150px;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .mx-auto {
            margin-right: auto !important;
            margin-left: auto !important;
        }

        .shadow-sm {
            box-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 8%) !important;
        }
    </style>

</head>

<body>

    <!-- topbar -->
    @include('includes/topbar')
    <!-- Akhir topbar -->

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <!-- Tambahkan logo disini -->
            <h1 class="logo me-auto">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/Institut Teknologi Del.png') }}">
                    Fakultas Vokasi
                </a>
            </h1>

            <!-- navbar -->
            @include('includes/navbar')
            <!-- Akhir navbar -->

        </div>
    </header>
    <!-- ======= Akhir Header ======= -->

    <main id="main">

        <!-- ======= Breadcrumbs  ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="breadcrumbs-title">Alumni Vokasi</h2>
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="/">
                                <span itemprop="name">Beranda</span>
                            </a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <span itemprop="name" style="color: #1977cc">Alumni Vokasi</span>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- Akhir Breadcrumbs Section -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/svg-with-js.min.css"
            integrity="sha512-W3ZfgmZ5g1rCPFiCbOb+tn7g7sQWOQCB1AkDqrBG1Yp3iDjY9KYFh/k1AWxrt85LX5BRazEAuv+5DV2YZwghag=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <section id="blog" class="blog py-5" >
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-12 entries">
                        <article class="entry entry-single">
                            <section class="team-section py-5">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        @foreach ($alumni as $k)
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <div class="card border-0 shadow-lg pt-5 my-5 position-relative">
                                                    <div class="card-body p-4">
                                                        <div
                                                            class="member-profile position-absolute w-100 text-center">
                                                            <img class="rounded-circle mx-auto d-inline-block shadow-sm"
                                                                src="{{ $k->image ? asset('storage/image/' . str_replace('public/image/', '', $k->image)) : 'https://bootdey.com/img/Content/avatar/avatar8.png' }}"
                                                                alt="{{ $k->name }}">
                                                        </div>
                                                        <div class="card-text pt-5">
                                                            <h5
                                                                class="member-name mb-0 text-center text-primary font-weight-bold">
                                                                {{ $k->name }}
                                                            </h5>
                                                            <div class="mb-3 text-center">{{ $k->work_at }}</div>
                                                            <div class="mb-3 text-center">Tahun Lulusan:
                                                                <b>{{ $k->graduation_year }}</b></div>
                                                            <div>{{ $k->testimonial }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </section>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <style>
            .card {
                border: none;
                border-radius: 12px;
                transition: all 0.3s ease-in-out;
            }

            .card:hover {
                box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            }

            .card-header {
                border-top-left-radius: 12px;
                border-top-right-radius: 12px;
            }

            .card-body {
                border-bottom-left-radius: 12px;
                border-bottom-right-radius: 12px;
            }

            .card-title {
                font-weight: bold;
                margin: 0;
                padding: 0;
            }

            .img-fluid {
                border-radius: 10px;
            }

            .text-primary {
                color: #0B60B0 !important;
            }

            .text-secondary {
                color: #6c757d !important;
            }

            .text-muted {
                font-size: 16px;
                color: #8a8a8a;
            }

            .text-center h4,
            .text-center h5 {
                margin-top: 0.5rem;
            }
        </style>



        <!-- footer -->
        @include('includes/footer')
        <!-- Akhir footer -->

        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript"></script>
    </main><!-- End #main -->

    <!-- ======= Tombol Keatas ======= -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- ======= Akhir Tombol Keatas ======= -->


    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/assets - prestasi/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/assets - prestasi/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/assets - prestasi/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/assets - prestasi/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/assets - prestasi/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/assets - prestasi/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/assets - prestasi/js/main.js') }}"></script>


</body>

</html>
