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
        /* Gaya CSS Anda */
        .header-title {
            margin-bottom: 5px;
            margin-top: 20px;
        }

        .entry-title a {
            color: #000;
            text-decoration: none;
        }

        .entry-title a:hover {
            color: #00f;
        }

        .kurikulum-table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }

        .kurikulum-table th,
        .kurikulum-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .kurikulum-table th {
            background-color: #f2f2f2;
        }


        /* Reset CSS */
        ol,
        ul {
            list-style: none;
            /* Menghapus list style default */
            padding-left: 0;
            /* Menghapus padding default */
            margin: 0;
            /* Menghapus margin default */
        }

        /* Spesifik CSS untuk dosen-list */
        ol.dosen-list {
            padding-left: 40px;
            /* Padding khusus untuk ol.dosen-list */
            list-style: decimal;
            /* Menentukan gaya list decimal (angka) */
            counter-reset: dosen-counter;
            /* Reset counter untuk custom counter */
        }

        ol.dosen-list li {
            margin-bottom: 10px;
            /* Spasi antara item list */
            position: relative;
            /* Mengatur posisi relatif untuk list item */
        }

        ol.dosen-list li::before {
            content: counter(dosen-counter) ". ";
            /* Menampilkan angka sebelum item */
            counter-increment: dosen-counter;
            /* Increment counter */
            position: absolute;
            /* Mengatur posisi absolut untuk angka */
            left: -30px;
            /* Menentukan posisi angka */
        }

        .dosen-link {
            color: black;
            /* Warna awal tautan */
            text-decoration: none;
            /* Menghapus garis bawah pada tautan */
        }

        .dosen-link:hover {
            color: #007BFF;
            /* Warna tautan saat dihover */
        }

        .dosen-link:active {
            color: #007BFF;
            /* Warna tautan saat ditekan */
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
                    <h2 class="breadcrumbs-title">Program Studi Fakultas Vokasi</h2>
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="/">
                                <span itemprop="name">Beranda</span>
                            </a>
                        </li>
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <span itemprop="name" style="color: #1977cc">{{ $detail->nama }}</span>
                            <meta itemprop="position" content="3" />
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- Akhir Breadcrumbs Section -->

        <!-- Modals untuk menampilkan konten pengumuman lengkap -->
        @foreach ($announcement as $item)
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


        <!-- Modal -->
        <div class="modal fade" id="programStudyModal" tabindex="-1" role="dialog"
            aria-labelledby="programStudyModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background-color: #f8f9fa; border-radius: 20px;">
                    <div class="modal-header"
                        style="border-bottom: none; background-color: #007BFF; color: #fff; border-top-left-radius: 20px; border-top-right-radius: 20px;">
                        <h5 style="color: #fff;" class="modal-title" id="programStudyModalLabel">Pilih Program Studi
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="color: #fff;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul style="padding: 0;">
                            @foreach ($prodi as $item)
                                <li><a style="color: #007BFF;"
                                        href="/kurikulum/?q={{ $item->slug }}">{{ $item->nama }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">
                        <article class="entry entry-single">
                            <div class="header-title mb-md-5 mt-4">
                                <span class="sub-title">Tentang, Visi-Misi, Profil Lulusan, Tujuan, Struktur
                                    Kurikulum</span>
                                <h3 class="hny-title text-left">{{ $detail->nama }}</h3>
                            </div>
                            <div class="entry-img">
                                <img src="{{ asset('storage/prodi/' . $detail->foto) }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="header-title mb-md-5 mt-4">
                                <h2 class="entry-title">
                                    <span style="font-size: 20px;" class="sub-title">Tentang
                                        {{ $detail->nama }}</span>
                                </h2>
                            </div>
                            <div class="entry-content">
                                <p>{!! nl2br($detail->sejarah) !!}</p>
                                <div class="header-title mb-md-5 mt-4">
                                    <h2 class="entry-title">
                                        <span style="font-size: 30px;" class="sub-title">Visi Misi Program
                                            Studi</span>
                                    </h2>
                                    <h3>Visi</h3>
                                    <p>{!! $detail->visi !!}</p>
                                    <h3>Misi</h3>
                                    <p>{!! $detail->misi !!}</p>
                                </div>
                                <div class="header-title mb-md-5 mt-4">
                                    <h2 class="entry-title" style="font-size: 230%">
                                        <span style="font-size: 30px;" class="sub-title">Tujuan Pendidikan Program
                                            Studi</span>
                                    </h2>
                                    <p>{!! nl2br($detail->tujuan) !!}</p>
                                </div>
                                <div class="header-title mb-md-5 mt-4">
                                    <h2 class="entry-title" style="font-size: 230%">
                                        <span style="font-size: 30px;" class="sub-title">Profil Lulusan Program
                                            Studi</span>
                                    </h2>
                                    <p>{!! nl2br($detail->lulusan) !!}</p>
                                </div>

                                <div class="header-title mb-md-5 mt-4">
                                    <h2 class="entry-title">
                                        <span class="sub-title" style="font-size: 30px;">Struktur Kurikulum Program
                                            Studi</span>
                                    </h2>
                                    @if ($detail)
                                        <p>{!! $detail->kurikulum !!}</p>
                                    @endif
                                    <br> <!-- Tambahkan jarak di sini -->
                                    <p>Untuk informasi lebih lanjut mengenai kurikulum setiap program studi, silakan
                                        klik pada tombol di bawah ini:
                                    </p>
                                    <button type="button" class="btn"
                                        style="background-color: #007BFF; color: #fff; border-radius: 20px; padding: 5px 14px; border: none;"
                                        data-toggle="modal" data-target="#programStudyModal">Akademik</button>
                                </div>
                                <div class="header-title mb-md-5 mt-4">
                                    <h2 class="entry-title" style="font-size: 170%">
                                        <span style="font-size: 30px;" class="sub-title">Dosen Pengajar Program
                                            Studi</span>
                                    </h2>
                                    <p>{!! $detail->teks_dosen !!}</p>
                                    <ol class="dosen-list">
                                        @foreach ($dosen as $item)
                                            <li>
                                                <strong>
                                                    <a href="{{ route('detaildosen', ['id' => $item->id]) }}"
                                                        class="dosen-link" target="_blank">{!! $item->nama !!}</a>
                                                </strong>
                                            </li>
                                        @endforeach
                                    </ol>
                                </div>
                        </article>
                    </div>


                    <!-- sidebar -->
                    @include('includes/sidebar')
                    <!-- Akhir sidebar -->


                </div>

            </div>
        </section><!-- End Blog Single Section -->

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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var navbarContent = document.getElementById("navbarContent");
            var toggleProgramStudy = document.getElementById("toggleProgramStudy");
            var closeNavbar = document.getElementById("closeNavbar");

            // Toggle navbar visibility
            toggleProgramStudy.addEventListener("click", function() {
                navbarContent.classList.toggle("active");
            });

            // Close navbar
            closeNavbar.addEventListener("click", function() {
                navbarContent.classList.remove("active");
            });
        });
    </script>

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
