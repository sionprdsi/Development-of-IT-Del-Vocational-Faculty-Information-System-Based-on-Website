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
            @include('includes.navbar')
            <!-- Akhir navbar -->

        </div>
    </header>
    <!-- ======= Akhir Header ======= -->

    <main id="main">

        <!-- ======= Breadcrumbs  ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="breadcrumbs-title">Berita Seputar Fakultas Vokasi</h2>
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="/">
                                <span itemprop="name">Beranda</span>
                            </a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="/berita">
                                <span itemprop="name" style="color: #1977cc">Berita Fakultas Vokasi</span>
                            </a>
                            <meta itemprop="position" content="2" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="#">
                                <span itemprop="name">Baca Berita</span>
                            </a>
                            <meta itemprop="position" content="1" />
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- Akhir Breadcrumbs Section -->

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

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">
                        <article class="entry">
                            <div class="entry-img">
                                <img src="{{ asset('storage/berita/' . str_replace('public/berita/', '', $berita->foto)) }}"
                                    alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                {{ $berita->judul }}
                            </h2>
                            <p style="color: #8a8a8a; margin-top: 0; margin-bottom: 20px; font-size: 14px; display: flex; align-items: center;">
                                <span style="margin-right: 8px;">
                                    <i class="far fa-calendar-alt" style="color: #0B60B0; font-size: 18px;"></i>
                                </span>
                                <span style="font-style: italic;">{{ $berita->tanggal }}</span>
                            </p>

                            <div class="entry-content">
                                {!! $berita->konten !!}
                            </div>
                        </article>
                        <!-- End blog entry -->
                    </div>
                    <!-- End blog entries list -->



                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Pencarian</h3>
                            <div class="sidebar-item search-form">
                                <form action="{{ route('berita', $berita->slug) }}" method="GET">
                                    <input type="text" name="cari" placeholder="Cari berita...">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>

                            </div><!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Program Studi</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    @foreach ($prodi as $item)
                                        <li style="text-decoration: none; color:black"><a
                                                href="/prodi/?q={{ $item->slug }}">{{ $item->nama }} </a></li>
                                    @endforeach
                                </ul>
                            </div><!-- End sidebar categories-->

                            <h3 class="sidebar-title">Kilas Vokasi</h3>
                            <div class="sidebar-item recent-posts">

                                @foreach ($news as $new)
                                    <div class="post-item clearfix">
                                        <img src="{{ asset('storage/berita/' . str_replace('public/berita/', '', $new->foto)) }}"
                                            alt="" class="img-fluid">
                                        <h4 style="text-decoration: none; color:black">
                                            <a href="{{ route('berita.read', $new->slug) }}">
                                                {{ \Illuminate\Support\Str::limit($new->judul, 60) }}
                                            </a>
                                        </h4>
                                    </div>
                                @endforeach

                            </div><!-- End sidebar recent posts-->

                            <!-- Pengumuman -->
                            <h3 class="sidebar-title">Pengumuman</h3>
                            <div class="sidebar-item recent-posts">
                                @foreach ($announcement as $pengumuman)
                                    <div class="post-item clearfix">
                                        <img src="{{ asset('storage/foto_pengumuman/' . str_replace('public/foto_pengumuman/', '', $pengumuman->foto)) }}"
                                            alt="" class="img-fluid">
                                        <h4 style="text-decoration: none; color:black">
                                            <a href="#" data-toggle="modal"
                                                data-target="#modal-{{ $pengumuman->id }}">
                                                <b style="color: red;">[{{ $pengumuman->keterangan }}]</b>
                                                {{ \Illuminate\Support\Str::limit($pengumuman->judul, 60) }}
                                            </a>
                                        </h4>
                                    </div>
                                @endforeach
                                <!-- Pindahkan tombol "Selengkapnya mengenai Pengumuman..." di luar loop -->
                                <div class="sidebar-item tags" style="margin-top: 10px;">
                                    <a href="/pengumuman" class="btn btn-primary btn-sm"
                                    style="background-color: #007BFF; color: #fff; border-radius: 20px; padding: 5px 10px; border: none;">Selengkapnya mengenai Pengumuman...</a>
                                </div>
                            </div><!-- End sidebar recent posts-->

                            <h3 class="sidebar-title"><i class="fas fa-link"></i> Link</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://apipuro.del.ac.id/v1/file/e153b6e1b2b5eb074bc747f953615932">Pedoman
                                            Akademik 2021/2022</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://apipuro.del.ac.id/v1/file/b7ba4f13314e641b92f3a08e6ffa6bea">Kalender
                                            Akademik T.A. 2023/2024</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://apipuro.del.ac.id/v1/file/f4526f134dc70f9568d2ecbfe0471098">Kalender
                                            Kegiatan Kemahasiswaan 2022/2023</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://apipuro.del.ac.id/v1/file/bb8a366791a6e01f81af015816a72caf">Pedoman
                                            PKM Institut Teknologi Del</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="http://puskom.del.ac.id/">Peraturan Penggunaan Fasilitas Laboratorium
                                            Komputasi</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://apipuro.del.ac.id/v1/file/7ac27730a659c0a85d9c56bfa25b1e0e">Surat
                                            Edaran Penerima Beasiswa Prestasi dan Penghargaan 2021</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://apipuro.del.ac.id/v1/file/7beab51e372ab8a676af1c3d9c10360a">Addendum
                                            SK Rektor Tentang Biaya Pendaftaran, Biaya Pendidikan Dan Biaya Wisuda TA
                                            2020/2021</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://cis.del.ac.id/dashboard/link/view">Referensi Perpustakaan:
                                            Jurnal / Paper / Book</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://apipuro.del.ac.id/v1/file/561e23644092e75531d32b3ca59d6fc3">SOP
                                            Pemakaian Entrance Hall oleh Mahasiswa IT Del</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://apipuro.del.ac.id/v1/file/f4cf524c658b13d1dd39a2ace59baa24">Surat
                                            Edaran WR 1 Manajemen Komplain Mahasiswa</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://apipuro.del.ac.id/v1/file/1c93e1a9ea7542238cb2534d8cc1d91e">Surat
                                            Edaran WR1 tentang Pengelolaan Waktu dengan Baik dan Ijin Keluar Kampus</a>
                                    </li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://apipuro.del.ac.id/v1/file/2a994858fe11012c42f62dfc8ef090eb">Pedoman
                                            Penetapan Sanksi Pelanggaran Mahasiswa</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://cis.del.ac.id/artk/artikel-post/view?q=B1EV3ReTYkvmNUFg-CD7X1Vr_BcgH-O4nYTUaH3J1Yo">Dokumen
                                            User Manual Aplikasi IT Del</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://apipuro.del.ac.id/v1/file/1dfb80eb87b3122dd4607bec6f4437be">Panduan
                                            Sistem Kredit Kegiatan Mahasiswa (SKKM)</a></li>
                                </ul>
                            </div><!-- End sidebar tags-->


                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>


            </div>
        </section><!-- End Blog Section -->



        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <footer class="footer_area section_padding_130_0">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-footer-widget section_padding_0_130">
                            <img src="{{ asset('assets/img/footer/footer.png') }}" alt="Footer Logo"
                                class="footer-logo mb-3" style="max-width: 130px;">

                            <div class="copywrite-text mb-5">
                                <p class="mb-0"><i class="lni-heart mr-1"></i><a class="ml-1"
                                        href="#">Fakultas Vokasi</a>
                                </p>
                                <p class="mb-0"><i class="lni-heart mr-1"></i><a class="ml-1"
                                        href="#">Institut Teknologi
                                        Del</a></p>
                                <br>
                                <p class="mb-0" style="text-align: justify;"><i class="lni-heart mr-1"></i><a
                                        class="ml-1" href="#">Jl. Sisingamangaraja, Sitoluama Laguboti, Toba
                                        Samosir Sumatera Utara,
                                        Indonesia</a></p>

                            </div>


                        </div>
                    </div>



                    <div class="col-12 col-sm-6 col-lg">
                        <div class="single-footer-widget section_padding_0_130">

                            <h5 class="widget-title">Pranala Penting</h5>

                            <div class="footer_menu">
                                <ul>
                                    <li><a href="https://www.del.ac.id/?page_id=1006">Tentang Del</a></li>
                                    <li><a href="https://spmb.del.ac.id/">Pendaftaran Mahasiswa Baru</a></li>
                                    <li><a href="https://www.del.ac.id/?page_id=14564">Informasi Beasiswa</a></li>
                                    {{-- <li><a href="#">Unduhan</a></li> --}}
                                    <li><a href="https://www.del.ac.id/?page_id=7511">Karir</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>



                    <div class="col-12 col-sm-6 col-lg">
                        <div class="single-footer-widget section_padding_0_130">

                            <h5 class="widget-title">Hubungi Kami</h5>

                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">Kode Pos: 22381</a></li>
                                    <li><a href="#">Telp : +62 632 331234</a></li>
                                    <li><a href="#">Email : info@del.ac.id</a></li>
                                    <li><a href="#">Karir : karir@del.ac.id</a></li>
                                </ul>
                                <br>
                                <style>
                                    .footer_social_area .fa-instagram {
                                        color: purple;
                                    }
                                </style>

                                <div class="footer_social_area">
                                    <a href="https://www.facebook.com/profile.php?id=403538753086034&fref=ts"
                                        data-toggle="tooltip" data-placement="top" title
                                        data-original-title="Facebook"><i class="fa fa-facebook text-primary"></i></a>
                                    <a href="https://twitter.com/intent/follow?original_referer=https%3A%2F%2Fwww.del.ac.id%2F&ref_src=twsrc%5Etfw%7Ctwcamp%5Ebuttonembed%7Ctwterm%5Efollow%7Ctwgr%5Einstitut_del&region=follow_link&screen_name=institut_del"
                                        data-toggle="tooltip" data-placement="top" title
                                        data-original-title="Twitter"><i class="fa fa-twitter text-info"></i></a>
                                    <a href="https://www.youtube.com/@institutteknologidel1337" data-toggle="tooltip"
                                        data-placement="top" title data-original-title="YouTube"><i
                                            class="fa fa-youtube text-danger"></i></a>
                                    <a href="https://www.instagram.com/vokasi.itdel?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                        data-toggle="tooltip" data-placement="top" title
                                        data-original-title="Instagram"><i
                                            class="fa fa-instagram text-purple"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

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
