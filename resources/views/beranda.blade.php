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
        .carousel-inner {
            min-height: 50vh;
            /* Set minimum height to 50% of the viewport height */
        }

        .carousel-item {
            position: relative;
        }

        .carousel-img {
            width: 100%;
            height: 50vh;
            /* Set the height to 50% of the viewport height */
            object-fit: cover;
        }

        .carousel-item-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            /* background-color: rgba(0, 0, 0, 0.5); */
            padding: 20px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .carousel-logo {
            max-width: 160px;
            margin-bottom: 10px;
        }

        .carousel-title {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            font-size: 1em;
            color: white;

        }


        /* Media queries for responsive design */
        @media (min-width: 768px) {
            .carousel-inner {
                min-height: 60vh;
                /* Adjust for larger screens */
            }

            .carousel-img {
                height: 60vh;
            }

            .carousel-title {
                font-size: 2em;
            }
        }

        @media (min-width: 992px) {
            .carousel-inner {
                min-height: 70vh;
                /* Adjust for even larger screens */
            }

            .carousel-img {
                height: 70vh;
            }

            .carousel-title {
                font-size: 2.5em;
            }
        }

        @media (min-width: 1200px) {
            .carousel-inner {
                min-height: 80vh;
                /* Adjust for the largest screens */
            }

            .carousel-img {
                height: 86vh;
            }

            .carousel-title {
                font-size: 4em;
                margin-top: 2%;
            }

        }

        /* berita / pengumuman*/
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background: rgba(0, 0, 0, 0.5); */
            z-index: 1;
        }

        .card-saut {
            /* position: absolute; */
            bottom: -12px;
            left: 0;
            width: 100%;
            padding: 10px;
            /* background-color: rgba(0, 0, 0, 0.5); */
            color: white;
            text-align: left;
            font-weight: bold;
        }

        .card-nn {
            position: absolute;
            bottom: 246px;
            left: 0;
            width: 100%;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            text-align: center;
        }

        .card-body {
            padding-top: 2px;
            /* Menambahkan ruang antara judul dan konten */
        }

        .card-body .blog-desc {
            color: white;
            font-weight: bold;
            /* Membuat teks judul menjadi tebal */
            font-family: Arial, sans-serif;
            /* Menentukan jenis font */
        }

        .card-sion {
            position: absolute;
            bottom: 550px;
            left: 0;
            width: 100%;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            text-align: center;
        }

        /* pengumuman */
        .card-title {
            /* position: absolute; */
            bottom: -12px;
            left: 0;
            width: 100%;
            padding: 10px;
            /* background-color: rgba(0, 0, 0, 0.5); */
            color: white;
            text-align: left;
            font-weight: bold;
        }

        .custom-list .list-group-item {
            border: none;
            border-radius: 0;
            background-color: transparent;
            transition: all 0.3s ease;
        }

        .custom-list .list-group-item:hover {
            background-color: #f8f9fa;
            color: #333;
            cursor: pointer;
        }

        .text-primary {
            color: #007bff !important;
            /* Warna biru */
        }

        .modal-header {
            background-color: #007bff;
            color: #fff;
        }

        .modal-title {
            color: #fff;
        }

        .modal-content {
            border-radius: 0.5rem;
        }

        .read-more {
            color: #007bff;
            text-decoration: none;
        }

        .read-more:hover {
            text-decoration: underline;
        }

        .custom-list .list-group-item {
            border: none;
            border-radius: 0;
            background-color: transparent;
            transition: all 0.3s ease;
        }

        .custom-list .list-group-item:hover {
            background-color: #f8f9fa;
            color: #333;
            cursor: pointer;
        }

        .post-item {
            display: flex;
            align-items: center;
        }

        .post-item img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
            object-fit: cover;
        }

        .post-item h6 {
            margin: 0;
            font-size: 0.875rem;
            /* Ukuran font lebih kecil */
        }

        .post-item .text-muted {
            font-size: 0.75rem;
            /* Ukuran font lebih kecil */
        }

        .card-sion h5 {
            font-size: 1rem;
            /* Ukuran font lebih kecil untuk judul "Pengumuman Lainnya" */
            margin: 0;
        }




        body {
            margin-top: 20px;
        }

        .border-5,
        .border-w-5 {
            border-width: 5px !important;
        }

        .border-white {
            border: 1px solid transparent;
            border-color: #fff !important;
        }

        hr.hr-primary {
            border-top-color: #CC164D !important;
        }

        em {
            font-style: italic;
        }

        .font-weight-normal {
            font-weight: 400 !important;
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

    <!-- Modals for each pengumuman -->
    @foreach ($pengumumans as $item)
        <div class="modal fade" id="modal-{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="modal-{{ $item->id }}-label" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-{{ $item->id }}-label">{{ $item->judul }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            @if ($item->foto)
                                <img src="{{ asset('storage/foto_pengumuman/' . str_replace('public/foto_pengumuman/', '', $item->foto)) }}"
                                    class="img-fluid" alt="{{ $item->judul }}">
                            @else
                                <img src="{{ asset('default-image.jpg') }}" class="img-fluid" alt="Default Image">
                            @endif
                        </div>
                        <div class="mb-3">
                            <p><b>Keterangan:</b> {{ $item->keterangan }}</p>
                        </div>
                        <div class="entry-content">
                            {!! $item->konten !!}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


    <main id="main">

        <!-- ======= Akhir Header ======= -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 50px">
            <ol class="carousel-indicators">
                @foreach ($slider as $index => $item)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}"
                        @if ($index == 0) class="active" @endif></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach ($slider as $index => $item)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img src="{{ asset('storage/slider/' . str_replace('public/slider/', '', $item->foto)) }}"
                            class="d-block w-100 carousel-img" alt="slider {{ $index + 1 }}">
                        <div class="carousel-item-text">
                            <img src="{{ asset('storage/logos/' . str_replace('public/logos/', '', $profil->logo)) }}"
                                alt="Logo {{ $profil->nama }}" class="carousel-logo">
                                <h4 style="font-family: 'Roboto', sans-serif;" class="carousel-title">{!! $profil->nama !!}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- ======= Akhir Header ======= -->


        <!-- =======  Tentang Fakultas Vokasi ======= -->
        <div class="content-1 py-5">
            <div class="container py-md-5">
                <div class="row content-1-grids">
                    <div class="col-lg-4 content-1-left forms-25-info">
                        <div class="header-title reveal fade-bottom">
                            <span class="sub-title" style="color: #0B60B0">Tentang Fakultas Vokasi</span>
                            <h3 class="hny-title text-left"
                                style="margin-top: 5%; word-spacing: 0.2em; line-height: 1.5;">Sekilas Sejarah Singkat
                                <b>FAKULTAS VOKASI</b> Institut Teknologi Del
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-4 content-1-right pl-lg-5 mt-lg-0 mt-4 reveal fade-left">
                        <p class="">Pendidikan vokasi merupakan jenjang pendidikan pertama di Institut Teknologi
                            Del sejak berdiri pada tahun 2001 (dahulu bernama Politeknik Informatika Del). Vokasi
                            merupakan pendidikan tinggi dengan fokus pada praktik kerja yang dapat menunjang keahlian di
                            bidang studi tertentu. Program vokasi bertujuan mempersiapkan lulusannya menjadi tenaga yang
                            siap kerja dan mampu bersaing secara global di Dunia Usaha dan Dunia Industri (DUDI).
                        </p>
                    </div>
                    <div class="col-lg-4 content-1-right pl-lg-5 mt-lg-0 mt-4 reveal fade-left">
                        <p class=""><b>SASARAN FAKULTAS VOKASI</b>

                            Terwujudnya lulusan yang mampu bersaing secara global dan berperilaku MarTuhan, Marroha,
                            Marbisuk dalam disiplin ilmu informatika dan komputer.
                            Terwujudnya penelitian dan produk informatika dan komputer yang berkualitas dan dapat
                            meningkatkan daya saing.
                        </p>
                        <div class="text-center mt-4">
                            <a href="/tentang" class="btn btn-style btn-primary mt-sm-4 mt-3"
                                style="padding: 8px 16px; font-size: 14px; background-color: #0B60B0; border-color: #0B60B0;">Lihat
                                Selengkapnya <span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- =======  Akhir Tentang Fakultas Vokasi ======= -->



        <!-- =======  Prestasi Vokasi ======= -->
        <section class="w3l-index3" id="about1">
            <div class="midd-w3 py-4"> <!-- Ubah nilai padding di sini, misalnya py-4 -->
                <div class="container py-lg-4 py-md-3"> <!-- Ubah nilai padding di sini, misalnya py-lg-4 py-md-3 -->
                    <div class="row">
                        <div class="col-lg-6 mb-lg-0 mb-md-4 mb-4">
                            <!-- Ubah nilai margin-bottom di sini, misalnya mb-md-4 mb-4 -->
                            <img src="{{ asset('assets/img/prestasi.jpg') }}" alt=""
                                class="radius-image-full img-fluid">
                        </div>
                        <div class="col-lg-6 pl-lg-5">
                            <div class="header-title">
                                <span class="sub-title">Prestasi Vokasi</span>
                                <h3 class="hny-title text-left">Kenapa Harus <B>FAKULTAS VOKASI ?</B></h3>
                            </div>
                            <p class="mt-3">{!! $profil->kenapa_vokasi !!}</p>
                            <a href="/prestasi" class="btn btn-style btn-primary mt-sm-4 mt-3"
                                style="padding: 8px 16px; font-size: 14px; background-color: #0B60B0; border-color: #0B60B0;">Lihat
                                Prestasi <span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                            <!-- Ubah nilai margin-top di sini, misalnya mt-sm-4 mt-3 -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======  Akhir Prestasi Vokasi ======= -->


        {{-- <div class="container py-7">
            <h2 class="text-uppercase text-letter-spacing-xs my-0 text-dark font-weight-bold">
                Our Team <i class="ion-ios-body pl-1 text-primary op-8 z-index-1"></i>
            </h2>
            <hr class="hr-primary w-15 hr-xl ml-0 mb-5">
            <div class="row mb-5">
                <div class="col-md-6 order-md-2">
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Personal Trainer 1"
                        class="img-fluid border-white border-w-5 w-50 w-md-80 w-lg-60 rounded-circle">
                </div>
                <div class="col-md-6 flex-valign text-md-right">
                    <h3 class="text-uppercase text-letter-spacing-xs mt-0 mb-1 text-dark font-weight-bold">
                        Mike Jones
                    </h3>
                    <h5 class="my-0 font-weight-normal">
                        <em>Strength Coach</em>
                    </h5>
                    <hr class="hr-primary w-70 ml-0 ml-md-auto mr-md-0 mb-3">
                    <p>Aptent dolore enim facilisi humo magna melior nisl occuro. Ad os sed utinam. Accumsan autem
                        brevitas
                        esse exerci ludus ratis.</p>
                    <p>Adipiscing nimis sed tego turpis. Abico genitus quadrum qui singularis te.</p>
                    <a href="#join" data-toggle="scroll-link" class="text-sm font-weight-bold"><i
                            class="fa fa-chevron-right text-xs text-pink"></i> Train with Mike</a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-6 text-md-right">
                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Personal Trainer 2"
                        class="img-fluid border-white border-w-5 w-50 w-md-80 w-lg-60 rounded-circle">
                </div>
                <div class="col-md-6 flex-valign">
                    <h3 class="text-uppercase text-letter-spacing-xs mt-0 mb-1 text-dark font-weight-bold">
                        Kim Kirk
                    </h3>
                    <h5 class="my-0 font-weight-normal">
                        <em>Prenatal Specialist</em>
                    </h5>
                    <hr class="hr-primary w-70 ml-0 mb-3">
                    <p>Commoveo gilvus iaceo nutus pagus tincidunt. Eligo nutus proprius saluto vulputate. Brevitas
                        eligo et
                        fere quadrum quae ratis.</p>
                    <p>Eum pecus quis. Accumsan genitus humo inhibeo ut vel. Augue bene enim gemino ideo ille luptatum
                        os
                        veniam venio.</p>
                    <a href="#join" data-toggle="scroll-link" class="text-sm font-weight-bold"><i
                            class="fa fa-chevron-right text-xs text-pink"></i> Train with Kim</a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-6 order-md-2">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Personal Trainer 3"
                        class="img-fluid border-white border-w-5 w-50 w-md-80 w-lg-60 rounded-circle">
                </div>
                <div class="col-md-6 flex-valign text-md-right">
                    <h3 class="text-uppercase text-letter-spacing-xs mt-0 mb-1 text-dark font-weight-bold">
                        Kurt Marler
                    </h3>
                    <h5 class="my-0 font-weight-normal">
                        <em>CrossFit Trainer</em>
                    </h5>
                    <hr class="hr-primary w-70 ml-0 ml-md-auto mr-md-0 mb-3">
                    <p>Causa dolor et immitto typicus. Gilvus minim nunc pala suscipere tation usitas volutpat. Abbas
                        abdo
                        meus.</p>
                    <p>Amet incassum mos quidem refoveo tation usitas vicis vulpes. Abigo accumsan acsi adipiscing esca
                        hendrerit interdico occuro suscipere torqueo.</p>
                    <a href="#join" data-toggle="scroll-link" class="text-sm font-weight-bold"><i
                            class="fa fa-chevron-right text-xs text-pink"></i> Train with Kurt</a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-6 text-md-right">
                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="Personal Trainer 4"
                        class="img-fluid border-white border-w-5 w-50 w-md-80 w-lg-60 rounded-circle">
                </div>
                <div class="col-md-6 flex-valign">
                    <h3 class="text-uppercase text-letter-spacing-xs mt-0 mb-1 text-dark font-weight-bold">
                        Lina Andrews
                    </h3>
                    <h5 class="my-0 font-weight-normal">
                        <em>Yoga Specialist</em>
                    </h5>
                    <hr class="hr-primary w-70 ml-0 mb-3">
                    <p>Abico diam scisco. Amet conventio ex ille iriure metuo olim probo. Conventio esca incassum metuo
                        ulciscor.</p>
                    <p>Abdo appellatio decet jus mauris neque plaga sino wisi ymo.</p>
                    <a href="#join" data-toggle="scroll-link" class="text-sm font-weight-bold"><i
                            class="fa fa-chevron-right text-xs text-pink"></i> Train with Lina</a>
                </div>
            </div>
        </div> --}}
        <section style="background-color: #EEF5FF;" id="call-to-action" class="call-to-action">
            <div class="container text-center" style="margin-top: 20px;">
                @if ($profil->video)
                    <h3 style="font-family: 'Roboto', sans-serif; font-size: 54px;">Get To Know Institut Teknologi Del</h3>
                    <p>
                        Video Tentang Institut Teknologi Del
                    </p>
                    <div class="embed-responsive embed-responsive-16by9" style="max-width: 640px; margin: 0 auto;">
                        <!-- Lebarkan container -->
                        <video class="embed-responsive-item" controls style="width: 100%; height: auto;">
                            <!-- Sesuaikan proporsi video -->
                            <source src="{{ Storage::url($profil->video) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                @endif
                <a class="cta-btn" href="/tentang">Tentang Fakultas Vokasi</a>
            </div>
        </div>
        <!-- Video Container -->
        <div id="video-container" class="video-container">
            <video id="my-video" controls width="800" height="450"> <!-- Sesuaikan dimensi video -->
                <source src="#" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <button id="close-video-btn" class="close-video-btn" onclick="closeVideo()">&times;</button>
        </div>
        </section>

        <!-- ======= Program Studi ======= -->
        <section id="departments" class="departments">
            <div class="container">
                <div class="section-title">
                    <h2>Program Studi</h2>
                    <p>Vokasi merupakan pendidikan tinggi dengan fokus pada praktik kerja yang dapat menunjang keahlian
                        di bidang studi tertentu.</p>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            @php $no = 1; @endphp
                            @foreach ($prodi as $item)
                                <li class="nav-item">
                                    <a class="nav-link{{ $no == 1 ? ' active' : '' }}" data-bs-toggle="tab"
                                        href="#tab-{{ $no }}">{{ $item->nama }}</a>
                                </li>
                                @php $no++; @endphp
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content">
                            @php $no = 1; @endphp
                            @foreach ($prodi as $item)
                                <div class="tab-pane{{ $no == 1 ? ' active show' : '' }}"
                                    id="tab-{{ $no }}">
                                    <div class="row gy-4">
                                        <div class="col-lg-8 details order-2 order-lg-1">
                                            <h3 class="hny-title text-left">{{ $item->nama }}</h3>
                                            <p class="fst-italic" style="display: flex; align-items: center;"><b>Visi
                                                    : </b>&nbsp;<span
                                                    style="display: inline;">{!! $item->visi !!}</span></p>
                                            <p style="margin-top: 3%">
                                                {!! \Illuminate\Support\Str::limit(strip_tags($item->sejarah), 380, '...') !!}
                                            </p>
                                        </div>
                                        <div class="col-lg-4 text-center order-1 order-lg-2">
                                            <!-- Tampilkan gambar dari halaman prodi -->
                                            <img src="{{ asset('storage/prodi/' . $item->foto) }}"
                                                alt="{{ $item->nama }}" class="img-fluid"
                                                style="width: 100%; max-width: 100%;">
                                        </div>
                                    </div>
                                    <div class="text-center mt-4">
                                        <!-- Ganti tautan dengan tautan yang sesuai -->
                                        <a href="/prodi/?q={{ $item->slug }}"
                                            class="btn btn-style btn-primary mt-sm-4 mt-3"
                                            style="padding: 8px 16px; font-size: 14px; background-color: #0B60B0; border-color: #0B60B0; text-decoration: none;">
                                            Selengkapnya {{ $item->nama }} <span class="fa fa-chevron-right ml-2"
                                                aria-hidden="true"></span>
                                        </a>
                                    </div>
                                </div>
                                @php $no++; @endphp
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ============ Akhir Program Studi =================-->


        <!-- ============ Berita =================-->
        <section class="w3l-blogpost-content py-5">
            <div class="container py-md-5">
                <div class="header-title mb-md-5 mt-4">
                    <span class="sub-title">Kilas Vokasi</span>
                    <h3 class="hny-title text-left">Berita Terkini dari <b>FAKULTAS VOKASI</b></h3>
                </div>
                <div class="row">
                    <!-- Berita Utama 1 -->
                    <div class="col-lg-8 mb-4">
                        @foreach ($berita->take(1) as $item)
                            <div class="card mb-4 shadow-sm">
                                <a href="{{ route('berita.read', $item->slug) }}" class="text-decoration-none">
                                    <div class="card-header p-0 position-relative">
                                        <img src="{{ asset('storage/berita/' . str_replace('public/berita/', '', $item->foto)) }}"
                                            alt="" class="img-fluid rounded-top mb-3">
                                        <div class="overlay"></div>
                                    </div>
                                    <div style="overflow: hidden;" class="card-body blog-details">
                                        <div class="d-flex align-items-center mb-2"
                                            style="color: #8a8a8a; font-size: 14px;">
                                            <i class="fas fa-calendar-alt"
                                                style="color: #0B60B0; margin-right: 4px;"></i>
                                            <span
                                                style="margin: 0;">{{ date('d M Y', strtotime($item->tanggal)) }}</span>
                                        </div>

                                        <a href="{{ route('berita.read', $item->slug) }}"
                                            class="blog-desc h5 text-decoration-none text-dark fw-bold">
                                            {{ $item->judul }}
                                        </a>
                                        <p class="mt-3">
                                            {!! \Illuminate\Support\Str::limit(strip_tags($item->konten), 1000, '...') !!}
                                            <a href="{{ route('berita.read', $item->slug) }}"
                                                class="read-more text-primary fw-bold">Baca Selengkapnya</a>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <!-- Berita Lainnya -->
                    <div class="col-lg-4">
                        @foreach ($berita->slice(1, 2) as $item)
                            <div class="card mb-4 shadow-sm">
                                <a href="{{ route('berita.read', $item->slug) }}" class="text-decoration-none">
                                    <div class="card-header p-0 position-relative">
                                        <img src="{{ asset('storage/berita/' . str_replace('public/berita/', '', $item->foto)) }}"
                                            alt="" class="img-fluid rounded-top mb-3">
                                        <div class="overlay"></div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <i class="far fa-calendar-alt"
                                                style="color: #0B60B0; margin-right: 4px;"></i>
                                            <small
                                                class="text-muted">{{ date('d M Y', strtotime($item->tanggal)) }}</small>
                                            <h6 class="card-saut text-dark fw-bold">{{ $item->judul }}</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        <div class="row mt-4">
                            <div class="col-12 text-end">
                                <a href="/berita" class="btn btn-style btn-primary mt-sm-4 mt-3"
                                    style="padding: 8px 16px; font-size: 14px; background-color: #0B60B0; border-color: #0B60B0;">
                                    Lihat Berita Lainnya <span class="fa fa-chevron-right ms-2"
                                        aria-hidden="true"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ============ Akhir Berita =================-->



        <!-- ============ Pengumuman =================-->
        <div class="container py-md-5">
            <div class="header-title mb-md-5 mt-4">
                <span class="sub-title">Pengumuman Vokasi</span>
                <h3 class="hny-title text-left">Pengumuman dari <b>FAKULTAS VOKASI</b></h3>
            </div>
            <div class="row">
                <!-- Pengumuman Utama -->
                @if ($pengumumans->isNotEmpty())
                    <div class="col-lg-8 mb-4 ">
                        <div class="card h-100 border-0 shadow">
                            <div class="card-header" style="background-color: #0C64B4; color: white;">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div> <!-- Menambahkan ikon untuk memberikan sentuhan visual -->
                                        <i class="fas fa-bullhorn text-warning"> {{ $pengumumans[0]->keterangan }}</i>
                                    </div>
                                    <div>
                                        <h2 class="card-nn fs-4 mb-0"> <!-- Mengubah ukuran judul -->
                                            <a href="#" class="clickable" data-toggle="modal"
                                                data-target="#modal-{{ $pengumumans[0]->id }}" style="color: white;">
                                                <strong>{{ $pengumumans[0]->judul }}</strong>
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                @if ($pengumumans[0]->foto)
                                    <a href="#" class="clickable" data-toggle="modal"
                                        data-target="#modal-{{ $pengumumans[0]->id }}">
                                        <img src="{{ asset('storage/foto_pengumuman/' . str_replace('public/foto_pengumuman/', '', $pengumumans[0]->foto)) }}"
                                            class="card-img-top mb-3 img-fluid rounded"
                                            alt="{{ $pengumumans[0]->judul }}"
                                            style="max-height: 300px; object-fit: cover;">
                                    </a>
                                @else
                                    <img src="{{ asset('default-image.jpg') }}"
                                        class="card-img-top mb-3 img-fluid rounded" alt="Default Image"
                                        style="max-height: 300px; object-fit: cover;">
                                @endif
                                <p class="card-text">
                                    {{ implode(' ', array_slice(explode(' ', strip_tags($pengumumans[0]->konten)), 0, 57)) }}...
                                    <a href="#" class="read-more text-primary clickable" data-toggle="modal"
                                        data-target="#modal-{{ $pengumumans[0]->id }}">Baca Selengkapnya</a>
                                </p>
                                <div class="card-text bg-light p-3 rounded">
                                    <small class="text-muted">
                                        <i style="color: #0B60B0;" class="far fa-calendar-alt"></i>
                                        <strong>Tanggal:</strong>
                                        <span
                                            class="text-danger">{{ date('d M Y', strtotime($pengumumans[0]->tanggal)) }}</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="card-header" style="background-color: #0C64B4;">
                                <h5 style="font-size: 1rem; margin: 0; color: white;">Pengumuman Lainnya</h5>
                            </div>

                            <div class="card-body">
                                <ul class="list-group custom-list">
                                    @foreach ($pengumumans->skip(1) as $item)
                                        <li class="list-group-item list-group-item-action d-flex align-items-center">
                                            <div class="post-item clearfix d-flex">
                                                @if ($item->foto)
                                                    <img src="{{ asset('storage/foto_pengumuman/' . str_replace('public/foto_pengumuman/', '', $item->foto)) }}"
                                                        alt="" class="img-fluid"
                                                        style="width: 50px; height: 50px; margin-right: 10px;">
                                                @else
                                                    <img src="{{ asset('default-image.jpg') }}" alt="Default Image"
                                                        class="img-fluid"
                                                        style="width: 50px; height: 50px; margin-right: 10px;">
                                                @endif
                                                <div>
                                                    <h6 style="margin: 0;">
                                                        <a href="#" data-toggle="modal"
                                                            data-target="#modal-{{ $item->id }}"
                                                            class="text-primary">
                                                            <span style="color: red;">[{{ $item->keterangan }}]</span>
                                                            <!-- Menambahkan warna untuk keterangan -->
                                                            <span
                                                                class="text-primary">{{ \Illuminate\Support\Str::limit($item->judul, 40) }}</span>
                                                        </a>
                                                    </h6>
                                                    <!-- Perbarui tampilan tanggal -->
                                                    <span class="text-muted" style="font-size: 0.875rem;">
                                                        <i style="color: #0B60B0;" class="far fa-calendar-alt"></i>
                                                        <!-- Menambahkan ikon kalender -->
                                                        <span
                                                            class="text-danger">{{ date('d M Y', strtotime($item->tanggal)) }}</span>
                                                        <!-- Menyoroti tanggal -->
                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" data-toggle="modal"
                                                    data-target="#modal-{{ $item->id }}" class="text-primary">
                                                    <i class="fas fa-chevron-right text-muted"></i>
                                                </a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>

                @endif
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="text-end">
                            <a href="/pengumuman" class="btn btn-style btn-primary mt-sm-4 mt-3"
                                style="padding: 8px 16px; font-size: 14px; background-color: #0B60B0; border-color: #0B60B0;">
                                Lihat Pengumuman Lainnya<span class="fa fa-chevron-right ml-2"
                                    aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============ Akhir Pengumuman =================-->


        <!-- Modals for each pengumuman -->
        @foreach ($pengumumans as $item)
            <div class="modal fade" id="modal-{{ $item->id }}" tabindex="-1" role="dialog"
                aria-labelledby="modal-{{ $item->id }}-label" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-{{ $item->id }}-label">
                                {{ $item->judul }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                @if ($item->foto)
                                    <img src="{{ asset('storage/foto_pengumuman/' . str_replace('public/foto_pengumuman/', '', $item->foto)) }}"
                                        class="img-fluid" alt="{{ $item->judul }}">
                                @else
                                    <img src="{{ asset('default-image.jpg') }}" class="img-fluid"
                                        alt="Default Image">
                                @endif
                            </div>
                            <div class="mb-3">
                                <p><b>Keterangan:</b> {{ $item->keterangan }}</p>
                            </div>
                            <div class="entry-content">
                                {!! $item->konten !!}
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach



        <!-- ======= Agenda ======= -->
        <section id="blog" class="blog" style="padding: 80px 0; background: #EEF5FF;">
            <div class="container" style="max-width: 1200px; margin: 0 auto;" data-aos="fade-up">
                <h3
                    style="text-transform: uppercase; font-weight: 900; border-left: 10px solid #fec500; padding-left: 10px; margin-bottom: 30px; color: #333;">
                    Agenda Fakultas Vokasi</h3>

                <div class="row" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                    @foreach ($events as $event)
                        <article class="card"
                            style="width: 48%; background-color: #fff; color: #989898; margin-bottom: 20px; font-family: 'Oswald', sans-serif; text-transform: uppercase; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden;">
                            <div style="display: flex;">
                                <section class="date"
                                    style="width: 25%; text-align: center; border-right: 2px dashed #dadde6; background-color: #f7f7f7; display: flex; flex-direction: column; justify-content: center; padding: 20px; margin-left: -2%;">
                                    <time datetime="{{ $event->tanggal }}">
                                        <span
                                            style="display: block; color: #2b2b2b; font-weight: 600; font-size: 2.5em;">{{ \Carbon\Carbon::parse($event->tanggal)->format('d') }}</span>
                                        <span
                                            style="display: block; text-transform: uppercase; font-weight: 600; font-size: 1.5em;">{{ \Carbon\Carbon::parse($event->tanggal)->format('M') }}</span>
                                        <span
                                            style="display: block; font-size: 1em;">{{ \Carbon\Carbon::parse($event->tanggal)->format('Y') }}</span>
                                    </time>
                                </section>
                                <section class="card-cont"
                                    style="width: 75%; padding: 20px; display: flex; flex-direction: column;">
                                    <h3
                                        style="text-transform: uppercase; font-weight: 900; border-left: 10px solid #fec500; padding-left: 10px; margin-bottom: 30px; font-size: 1.5em; margin-bottom: 10px; color: #333; font-weight: bold;">
                                        {{ $event->nama }}</h3>
                                    <div class="even-date"
                                        style="display: flex; align-items: center; font-size: 14px; color: #333; margin-bottom: 5px;">
                                        <i class="fa fa-calendar" style="color: #888; margin-right: 10px;"></i>
                                        <time style="display: flex; flex-direction: column;">
                                            <span>{{ \Carbon\Carbon::parse($event->tanggal)->format('d M Y') }}</span>
                                            <span style="font-weight: bold;">{{ $event->keterangan }}</span>
                                        </time>
                                    </div>
                                    <div class="even-info"
                                        style="display: flex; align-items: center; font-size: 14px; color: #333;">
                                        <i class="fa fa-map-marker" style="color: #888; margin-right: 10px;"></i>
                                        <p style="margin: 0;">{{ $event->detail }}</p>
                                    </div>
                                    <!-- Tambah bagian ini untuk menampilkan tanggal pembuatan posting -->
                                    <div class="even-info"
                                        style="display: flex; align-items: center; font-size: 12px; color: #888; margin-top: 10%;">
                                        <span style="margin-right: 5px;">Tanggal Posting:</span>
                                        <span>{{ $event->created_at->format('d M Y H:i:s') }}</span>
                                    </div>
                                    <!-- Akhir bagian yang ditambahkan -->
                                </section>
                            </div>
                        </article>
                    @endforeach
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="text-end">
                                <a href="/event" class="btn btn-style btn-primary mt-sm-4 mt-3"
                                    style="padding: 8px 16px; font-size: 14px; background-color: #0B60B0; border-color: #0B60B0;">
                                    Lihat Agenda Lainnya<span class="fa fa-chevron-right ml-2"
                                        aria-hidden="true"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============ BOX =================-->
        <section class="w3l-bottom-grids-6 py-5" id="features"
            style="background-image: url('{{ asset('assets/img/box.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="container py-lg-5 py-md-4">
                <div class="grids-area-hny main-cont-wthree-fea row">
                    <!-- /feature-left-->
                    <div class="col-md-6 grids-feature mt-4">
                        <div class="area-box">
                            <div class="row">
                                <div class="col-sm-2 icon">
                                    <span class="fa fa-user-plus"></span>
                                </div>
                                <div class="col-sm-10 area-box-info">
                                    <h4><a href="#feature" class="title-head">
                                            SPMB IT Del
                                            <b>Informasi Penerimaan Mahasiswa Baru Institut Teknologi Del</b>
                                        </a></h4>
                                    <p class="mt-3">Temukan semua yang perlu Anda ketahui tentang proses penerimaan
                                        mahasiswa baru di Institut Teknologi Del.</p>
                                    <a class="btn btn-primary btn-style mt-4" href="https://spmb.del.ac.id/"
                                        style="background-color: #0B60B0;">Lihat Disini! <span
                                            class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 grids-feature mt-4">
                        <div class="area-box">
                            <div class="row">
                                <div class="col-sm-2 icon">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <div class="col-sm-10 area-box-info">
                                    <h4><a href="#feature" class="title-head">Akses Cepat ke <b>Website Resmi Institut
                                                Teknologi Del</b></a>
                                    </h4>
                                    <p class="mt-3">Temukan semua yang Anda butuhkan di website resmi Institut
                                        Teknologi Del. Mulai dari informasi akademik hingga berita terkini.</p>
                                    <a class="btn btn-primary btn-style mt-4" href="https://www.del.ac.id/"
                                        style="background-color: #0B60B0;">Akses Disini!<span
                                            class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ============ Akhir BOX =================-->


        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="section-title">
                <h2>Alumni Fakultas Vokasi</h2>
            </div>

            <div class="container">
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <!-- Testimonial items here -->
                        @foreach ($alumni as $k)
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <img src="{{ $k->image ? asset('storage/image/' . str_replace('public/image/', '', $k->image)) : 'https://bootdey.com/img/Content/avatar/avatar8.png' }}"
                                            alt="{{ $k->name }}" class="testimonial-img">
                                        <h3>{{ $k->name }}</h3>
                                        <h4>{{ $k->work_at }}</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            {{ $k->testimonial }}
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
                        @endforeach
                    </div>
                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Navigation buttons -->
                </div>
            </div>
        </section><!-- End Testimonials Section -->


        <!-- ======= Galeri ====== -->
        <section id="gallery" class="gallery">
            <div class="container">
                <div class="section-title">
                    <h2>Galeri Vokasi</h2>
                    <p>Di sini, Anda akan menemukan perjalanan yang memukau melalui ragam karya kreatif, inspiratif, dan
                        inovatif yang lahir dari keahlian dan semangat di bidang vokasi. Dari seni tradisional hingga
                        teknologi modern, kami hadirkan beragam eksplorasi visual yang memperkaya pemahaman akan
                        pentingnya vokasi dalam menginspirasi dan memajukan masyarakat. Sertai kami dalam petualangan
                        melintasi dunia vokasi yang penuh warna, di mana setiap karya memiliki cerita dan makna yang
                        mendalam, menanti untuk diungkapkan.</p>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row g-0">
                    @foreach ($galeri->take(11) as $item)
                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="{{ asset('storage/galeri/' . str_replace('public/galeri/', '', $item->foto)) }}"
                                    class="galelry-lightbox">
                                    <img src="{{ asset('storage/galeri/' . str_replace('public/galeri/', '', $item->foto)) }}"
                                        alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pagination-container">
                    <button class="prev" style="background-color: #0B60B0;"><i
                            class="fas fa-chevron-left"></i></button>
                    <button class="next" style="background-color: #0B60B0;"><i
                            class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </section>
        <!-- ========= Akhir Galeri ========= -->


        <!-- ======= Peta Kampus ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <h2>Peta Kampus</h2>
                    <p>Raih Pengalaman Eksplorasi yang Mendalam dan Temukan Setiap Sudut Kampus Institut Teknologi Del
                        Melalui Fitur Peta Kampus Interaktif Ini, Memungkinkan Anda Menyelami Setiap Detil, Mulai Dari
                        Lokasi Fasilitas Akademik dan Laboratorium Hingga Tempat-tempat Inspiratif dan Area Rekreasi,
                        Membantu Anda Membangun Pengetahuan, Kreativitas, dan Koneksi yang Tak Terbatas.</p>
                </div>
            </div>
            <div>
                <iframe src="{{ $profil->peta }}" style="border:0; width: 100%; height: 500px;" frameborder="0"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>
        <!-- ======= Akhir Peta Kampus ======= -->


        <!-- footer -->
        @include('includes/footer')
        <!-- Akhir footer -->


        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript"></script>
    </main>



    <script>
        // Fungsi untuk membuka video
        function openVideo() {
            document.getElementById('video-container').style.display = 'block';
            document.getElementById('my-video').play();
        }

        // Fungsi untuk menutup video
        function closeVideo() {
            document.getElementById('video-container').style.display = 'none';
            document.getElementById('my-video').pause();
        }

        // Tambahkan event listener untuk tombol play
        document.querySelector('.play-btn').addEventListener('click', openVideo);
    </script>

    <!-- ============================ -->


    <!-- ======= Tombol Keatas ======= -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- ======= Akhir Tombol Keatas ======= -->

    <script>
        // Tambahkan event listener untuk judul
        document.querySelector('.card-title').addEventListener('click', function() {
            // Manually munculkan modals saat judul diklik
            $('#modal-{{ $pengumumans[0]->id }}').modal('show');
        });
    </script>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>


    <!-- ============================ -->


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const galleryItems = document.querySelectorAll('.gallery .gallery-item');
            const prevButton = document.querySelector('.pagination-container .prev');
            const nextButton = document.querySelector('.pagination-container .next');

            const itemsPerPage = 8; // Ubah sesuai dengan jumlah item per halaman
            let currentPage = 1;

            function showPage(page) {
                const startIndex = (page - 1) * itemsPerPage;
                const endIndex = page * itemsPerPage;

                galleryItems.forEach((item, index) => {
                    if (index >= startIndex && index < endIndex) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }

            function goToPage(page) {
                currentPage = page;
                showPage(currentPage);
            }

            prevButton.addEventListener('click', function() {
                if (currentPage > 1) {
                    goToPage(currentPage - 1);
                }
            });

            nextButton.addEventListener('click', function() {
                const totalPages = Math.ceil(galleryItems.length / itemsPerPage);
                if (currentPage < totalPages) {
                    goToPage(currentPage + 1);
                }
            });

            showPage(currentPage);
        });
    </script>
</body>

</html>
