<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Fakultas Vokasi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/Institut Teknologi Del.png') }}" rel="icon">
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

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets - Copy/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets - Copy/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets - Copy/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets - Copy/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets - Copy/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets - Copy/css/main.css') }}" rel="stylesheet">


    <!-- ============== 3 ========================================================================================================================================================= -->

    <!--/google-fonts-->
    <link href="//fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/asset about/assets/css/style-starter.css') }}">
    <link href="{{ asset('assets/asset about/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/asset about/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/asset about/assets/css/aos.css') }}" rel="stylesheet"> --}}
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

    <style>
        body {
            margin-top: 20px;
        }

        /*profile page*/

        .left-profile-card .user-profile {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: auto;
            margin-bottom: 20px;
        }

        .left-profile-card h3 {
            font-size: 18px;
            margin-bottom: 0;
            font-weight: 700;
        }

        .left-profile-card p {
            margin-bottom: 5px;
        }

        .left-profile-card .progress-bar {
            background-color: var(--main-color);
        }

        .personal-info {
            margin-bottom: 30px;
        }

        .personal-info .personal-list {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .personal-list li {
            margin-bottom: 5px;
        }

        .personal-info h3 {
            margin-bottom: 10px;
        }

        .personal-info p {
            margin-bottom: 5px;
            font-size: 14px;
        }

        .personal-info i {
            font-size: 15px;
            color: var(--main-color);
            ;
            margin-right: 15px;
            width: 18px;
        }

        .skill {
            margin-bottom: 30px;
        }

        .skill h3 {
            margin-bottom: 15px;
        }

        .skill p {
            margin-bottom: 5px;
        }

        .languages h3 {
            margin-bottom: 15px;
        }

        .languages p {
            margin-bottom: 5px;
        }


        /* Update the main color for a lighter blue theme */
        :root {
            --main-color: #C9E3FF;
            /* Slightly lighter blue color */
        }

        .card-header {
            background-color: var(--main-color);
            border-bottom: 1px solid #5a9bd4;
        }

        .nav-pills .nav-link {
            color: #1a1a1a;
            /* Dark text color for contrast */
            font-family: 'Montserrat', sans-serif;
            /* New font: Montserrat */
            font-size: 16px;
            text-align: center;
            border-radius: 0;
            /* Remove border-radius if you want square tabs */
            margin: 0 5px;
        }

        .nav-pills .nav-link.active,
        .nav-pills .nav-link:hover {
            background-color: #007bff;
            /* Blue color for both active and hover states */
            color: #fff;
            /* White text color for active and hover states */
        }

        .nav-item {
            flex: 1;
            text-align: center;
        }

        .right-profile-card h3 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .right-profile-card .nav-pills .nav-link {
            border-radius: 26px;
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
                    <img src="{{ asset('storage/logos/' . str_replace('public/logos/', '', $profil->logo)) }}"
                        alt="Logo {{ $profil->nama }}">
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
        <section style="margin-bottom: 1%;" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="breadcrumbs-title">Profil Dosen Fakultas Vokasi</h2>
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="/">
                                <span itemprop="name">Beranda</span>
                            </a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="/dosen">
                                <span itemprop="name">Dosen Fakultas Vokasi</span>
                            </a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <span itemprop="name" style="color: #1977cc">{{ $detaildosen->nama }}</span>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- Akhir Breadcrumbs Section -->


        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <div class="card left-profile-card shadow-sm border-0 rounded">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <img src="{{ $detaildosen->gambar ? asset('storage/gambar/' . str_replace('public/gambar/', '', $detaildosen->gambar)) : '' }}"
                                        alt="" class="user-profile img-fluid rounded-circle mb-3"
                                        style="width: 150px; height: 150px; object-fit: cover; border: 3px solid #0B60B0;">
                                    <h3 class="h4 mb-2" style="color: #0B60B0;">{{ $detaildosen->nama }}</h3>
                                    <p class="mb-2" style="font-size: 16px; color: #6c757d;">{!! $detaildosen->jabatan !!}
                                    </p>
                                    <p class="mb-2" style="font-size: 16px; color: #6c757d;">NIDN:
                                        {!! $detaildosen->nidn !!}</p>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 text-center">
                                    <h4 class="mb-2" style="font-size: 20px; color: #0B60B0;"><i
                                            class="fas fa-university"
                                            style="color: #0B60B0; margin-right: 5px;"></i>Fakultas</h4>
                                    <p class="mb-0" style="font-size: 16px; color: #6c757d;">
                                        {{ $detaildosen->prodi->nama }}</p>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 text-center">
                                    <h4 class="h5 mb-3" style="color: #0B60B0;">Social Media</h4>
                                    <!-- Tambahkan ikon social media di sini -->
                                    @if ($detaildosen->media_sosial)
                                        @foreach ($detaildosen->media_sosial as $social_media)
                                            @if ($social_media->platform == 'facebook')
                                                <a href="{{ $social_media->url }}"
                                                    style="color: #0B60B0; margin: 0 10px;"><i
                                                        class="fab fa-facebook-f"></i></a>
                                            @elseif($social_media->platform == 'twitter')
                                                <a href="{{ $social_media->url }}"
                                                    style="color: #0B60B0; margin: 0 10px;"><i
                                                        class="fab fa-twitter"></i></a>
                                            @elseif($social_media->platform == 'linkedin')
                                                <a href="{{ $social_media->url }}"
                                                    style="color: #0B60B0; margin: 0 10px;"><i
                                                        class="fab fa-linkedin-in"></i></a>
                                            @endif
                                        @endforeach
                                    @else
                                        <p class="mb-0">Tidak ada informasi media sosial yang tersedia.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="card right-profile-card shadow-sm" style="border-radius: 10px; overflow: hidden;">
                        <div class="card-header alert-primary"
                            style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                            <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill"
                                        href="#tentang" role="tab" aria-selected="true">
                                        <div class="tab-icon rounded-circle"><i class="fas fa-info-circle"></i></div>
                                        <span class="tab-text">Tentang</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-education-tab" data-toggle="pill"
                                        href="#pendidikan" role="tab" aria-selected="false">
                                        <div class="tab-icon rounded-circle"><i class="fas fa-graduation-cap"></i>
                                        </div>
                                        <span class="tab-text">Pendidikan</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-timeline-tab" data-toggle="pill" href="#prestasi"
                                        role="tab" aria-selected="false">
                                        <div class="tab-icon rounded-circle"><i class="fas fa-award"></i></div>
                                        <span class="tab-text">Prestasi</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-document-tab" data-toggle="pill" href="#publikasi"
                                        role="tab" aria-selected="false">
                                        <div class="tab-icon rounded-circle"><i class="fas fa-book"></i></div>
                                        <span class="tab-text">Publikasi</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-document-tab" data-toggle="pill" href="#keahlian"
                                        role="tab" aria-selected="false">
                                        <div class="tab-icon rounded-circle"><i class="fas fa-code"></i></div>
                                        <span class="tab-text">Keahlian</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-document-tab" data-toggle="pill"
                                        href="#pengalaman_kerja" role="tab" aria-selected="false">
                                        <div class="tab-icon rounded-circle"><i class="fas fa-briefcase"></i></div>
                                        <span class="tab-text">Pengalaman Kerja</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-document-tab" data-toggle="pill"
                                        href="#pengabdian_masyarakat" role="tab" aria-selected="false">
                                        <div class="tab-icon rounded-circle"><i class="fas fa-users"></i></div>
                                        <span class="tab-text">Pengabdian Kepada Masyarakat</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="tentang" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <div class="work-container">
                                        <h3>Tentang {{ $detaildosen->nama }}</h3>
                                        <p>{!! $detaildosen->tentang !!}</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pendidikan" role="tabpanel">
                                    <div class="work-container">
                                        <h3>Latar Belakang Pendidikan</h3>
                                        <p>{!! $detaildosen->pendidikan !!}</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="prestasi" role="tabpanel">
                                    <div class="work-container">
                                        <h3>Prestasi dan Penghargaan</h3>
                                        <p>{!! $detaildosen->prestasi !!}</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="publikasi" role="tabpanel">
                                    <div class="work-container">
                                        <h3>Publikasi & Penelitian</h3>
                                        <p>{!! $detaildosen->publikasi !!}</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="keahlian" role="tabpanel">
                                    <div class="work-container">
                                        <h3>Keahlian</h3>
                                        <p>{!! $detaildosen->keahlian !!}</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pengalaman_kerja" role="tabpanel">
                                    <div class="work-container">
                                        <h3>Pengalaman Kerja</h3>
                                        <p>{!! $detaildosen->pengalaman_kerja !!}</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pengabdian_masyarakat" role="tabpanel">
                                    <div class="work-container">
                                        <h3>Pengabdian Kepada Masyarakat</h3>
                                        <p>{!! $detaildosen->pengabdian_masyarakat !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <!-- ======= Peta Kampus ======= -->
        <section id="contact" class="contact">

        </section>
        <!-- ======= Akhir Peta Kampus ======= -->


        <!-- footer -->
        @include('includes/footer')
        <!-- Akhir footer -->


        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript"></script>
    </main>




    <!-- ======= Tombol Keatas ======= -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- ======= Akhir Tombol Keatas ======= -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>


    <!-- ============================ -->


</body>

</html>
