<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>VOKASI Institut Teknologi Del</title>
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


    <!-- ============== 2 ========================================================================================================================================================= -->

    <!--/google-fonts-->
    <link href="//fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <!--//google-fonts-->
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/asset about/assets/css/style-starter.css') }}">
    {{-- <link href="{{ asset('assets/asset about/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/asset about/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/asset about/assets/css/aos.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/asset about/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/asset about/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet"> --}}


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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope"></i> <a href="info@example.com">info@del.ac.id</a>
                <i class="bi bi-phone"></i> +62 632 331234
            </div>
            <div class="d-none d-lg-flex social-links align-items-center">
                <a href="https://twitter.com/institut_del" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/Institut.Teknologi.Del/?ref=embed_page" class="facebook"><i
                        class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/it.del/" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/school/institut-teknologi-del/" class="linkedin"><i
                        class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </div>
    <!-- ======= Akhir Top Bar ======= -->

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
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="/">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="/tentang">Tentang</a></li>
                    <li class="dropdown scrollto"><a href="#"><span>Program Studi</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/programstudiD4TRPL">D-IV Teknologi Rekayasa Perangkat Lunak</a></li>
                            <li><a href="/programstudiD3TK">D-III Teknologi Komputer</a></li>
                            <li><a href="/programstudiD3TI">D-III Teknologi Informasi</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="/prestasi">Prestasi</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- Akhir navbar -->

        </div>
    </header>
    <!-- ======= Akhir Header ======= -->


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <video autoplay muted loop
            style="position: absolute; top: 0; left: 0; width: 100%; height: 90vh; object-fit: cover;">
            <source src="{{ asset('assets/img/video profil.mp4') }}" type="video/mp4">
            <!-- Jika browser tidak mendukung format video MP4, Anda dapat menambahkan sumber video lainnya di bawah ini -->
            <!-- <source src="{{ asset('assets/video/nama_video.webm') }}" type="video/webm"> -->
            <!-- <source src="{{ asset('assets/video/nama_video.ogg') }}" type="video/ogg"> -->
            Maaf, browser Anda tidak mendukung tag video.
        </video>
        <div class="container">
            <img src="{{ asset('assets/img/Institut Teknologi Del.png') }}" alt="Logo Fakultas Vokasi IT Del">
            <h1 style="font-family: 'Roboto', sans-serif;">Fakultas Vokasi<br>Institut Teknologi Del</h1>
        </div>

    </section>
    <!-- Akhir Hero -->


    <main id="main">


        <!-- =======  Tentang Fakultas Vokasi ======= -->
        <div class="content-1 py-5">
            <div class="container py-md-5">
                <div class="row content-1-grids">
                    <div class="col-lg-4 content-1-left forms-25-info">
                        <div class="header-title reveal fade-bottom">
                            <span class="sub-title" style="color: #0B60B0">Tentang Fakultas Vokasi</span>
                            <h3 class="hny-title" style="margin-top: 5%">Sekilas Sejarah Singkat Fakultas Vokasi IT
                                Del</h3>
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
                                <h3 class="hny-title text-left">Kenapa Harus <B>Fakultas Vokasi?</B></h3>
                            </div>
                            <p class="mt-3">Beberapa keunggulan dari pendidikan vokasi adalah: belajar di program
                                studi yang spesifik, belajar sesuai minat dan profesi yang diinginkan, siap kerja karena
                                dibekali kemampuan praktik yang tinggi, sehingga lulusan pendidikan vokasi banyak
                                dibutuhkan perusahaan.
                                Menyelenggarakan proses pendidikan vokasi yang unggul, didukung dengan tenaga
                                pendidik yang memiliki kompetensi pada bidang informatika dan komputer, serta melibatkan
                                dunia usaha dan dunia industri dalam pengembangan kemampuan peserta didik.</p>
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


        <!-- =======  Kilas Vokasi ======= -->
        <section class="w3l-blogpost-content py-5">
            <div class="container py-md-5">
                <div class="header-title mb-md-5 mt-4">
                    <span class="sub-title">Kilas Vokasi</span>
                    <h3 class="hny-title text-left">Berita dan Pengumuman dari <b>Fakultas Vokasi</b></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative zoom">
                                <a href="https://www.del.ac.id/?p=15337">
                                    <img class="card-img-bottom d-block radius-image-full"
                                        src="{{ asset('assets/img/berita1.jpeg') }}" alt="Card image cap">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <a href="https://www.del.ac.id/?p=15337" class="blog-desc">IT Del Peringkat 1 Nasional
                                    untuk
                                    Computing Track dan Innovation Track pada Huawei ICT Competition 2023
                                </a>
                                <div class="author align-items-center">
                                    <img src="" alt="" class="img-fluid rounded-circle">
                                    <ul class="blog-meta">
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value" style="margin-left: -23%"> February 06 2024
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                        <div class="card">
                            <div class="card-header p-0 position-relative zoom">
                                <a href="https://www.del.ac.id/?p=15386">
                                    <img class="card-img-bottom d-block radius-image-full"
                                        src="{{ asset('assets/img/berita2.jpeg') }}" alt="Card image cap">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <a href="https://www.del.ac.id/?p=15386" class="blog-desc">Kegiatan Pemberangkatan dan
                                    Onboarding
                                    Mahasiswa MBKM Peserta PMM 4 dan MSIB 6 IT Del</a>
                                <div class="author align-items-center">
                                    <img src="" alt="" class="img-fluid rounded-circle">
                                    <ul class="blog-meta">
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value" style="margin-left: -23%"> January 24 2024
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                        <div class="card">
                            <div class="card-header p-0 position-relative zoom">
                                <a href="https://www.del.ac.id/?p=15439">
                                    <img class="card-img-bottom d-block radius-image-full"
                                        src="{{ asset('assets/img/berita3.jpeg') }}" alt="Card image cap">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <a href="https://www.del.ac.id/?p=15439" class="blog-desc">IT Del dan PT Privy
                                    Identitas Digital
                                    Jalin Kerjasama terkait Training and Oportunities Program (TOP)
                                </a>
                                <div class="author align-items-center">
                                    <img src="" alt="" class="img-fluid rounded-circle">
                                    <ul class="blog-meta">
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value" style="margin-left: -23%"> February 12 2024
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-end">
                    <a href="https://www.del.ac.id/?cat=7" class="btn btn-style btn-primary mt-sm-4 mt-3"
                        style="padding: 8px 16px; font-size: 14px; background-color: #0B60B0; border-color: #0B60B0;">Lihat
                        Selengkapnya <span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                </div>
            </div>
        </section>
        <!-- ======= Akhir Kilas Vokasi ======= -->


        <!-- ======= =======Program Studi ================ -->
        <section id="de partments" class="departments">
            <div class="container">
                <div class="section-title">
                    <h2>Program Studi</h2>
                    <p>Vokasi merupakan pendidikan tinggi dengan
                        fokus pada
                        praktik
                        kerja yang dapat menunjang keahlian di bidang studi tertentu.</p>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Sarjana
                                    Terapan
                                    (D-IV) Teknologi
                                    Rekayasa Perangkat
                                    Lunak</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">D-III Teknologi
                                    Komputer </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">D-III Teknologi
                                    Informasi</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3 class="hny-title text-left">Tentang <B>Diploma 4 atau Sarjana Terapan
                                                Teknologi Rekayasa Perangkat Lunak</B></h3>
                                        <p class="fst-italic"><b>Visi : </b>
                                            Menjadikan Program Studi Teknologi Rekayasa Perangkat Lunak Program
                                            Sarjana
                                            Terapan sebagai batu
                                            loncatan menuju masa depan Teknologi Informasi yang mengintegrasikan
                                            dunia
                                            pendidikan dengan
                                            kebutuhan usaha akan tenaga profesional informatika yang mampu
                                            bersaing
                                            secara global.</p>
                                        <p>Sarjana Terapan (Diploma 4) Teknologi Rekayasa Perangkat Lunak
                                            (Sarjana
                                            Terapan TRPL) merupakan
                                            program studi pada pendidikan vokasi. Diploma 4 (D4) adalah nama
                                            lain dari
                                            Sarjana Terapan.
                                            Program
                                            studi Sarjana Terapan TRPL berdiri pada tahun 2012 sesuai dengan SK
                                            Menteri
                                            Pendidikan dan
                                            Kebudayaan Republik Indonesia No. 238/E/O/2012 pada tanggal 6 Juli
                                            2012
                                            dengan nama Sarjana
                                            Terapan
                                            (DIV) Teknik Informatika.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assets/img/programstudi.jpeg') }}" alt=""
                                            class="img-fluid" style="width: 100%; max-width: 100%;">
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <a href="/programstudiD4TRPL" class="btn btn-style btn-primary mt-sm-4 mt-3"
                                        style="padding: 8px 16px; font-size: 14px; background-color: #0B60B0; border-color: #0B60B0;">Lihat
                                        Selengkapnya <span class="fa fa-chevron-right ml-2"
                                            aria-hidden="true"></span></a>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3 class="hny-title text-left"><b>Program Studi Teknologi Komputer Program
                                                Diploma Tiga</b></h3>
                                        <p class="fst-italic"><b>Visi : </b>
                                            Menjadi program studi unggulan pada program pendidikan dan
                                            penelitian
                                            terapan di bidang
                                            pengembangan
                                            teknologi informasi yang bertaraf nasional dan internasional pada
                                            tahun
                                            2024.</p>
                                        <p>Program Studi Teknik Komputer adalah salah satu program studi yang
                                            diselenggarakan Institut
                                            Teknologi Del yang terletak di daerah pedesaan Tobasa, yang membuka
                                            peluang
                                            bagi siswa berprestasi
                                            untuk mengenyam pendidikan dengan mutu yang tidak kalah dengan
                                            pendidikan
                                            bermutu bagus yang
                                            diselenggarakan di kota besar.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assets/img/programstudi2.jpeg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <a href="/programstudiD3TK" class="btn btn-style btn-primary mt-sm-4 mt-3"
                                        style="padding: 8px 16px; font-size: 14px; background-color: #0B60B0; border-color: #0B60B0;">Lihat
                                        Selengkapnya <span class="fa fa-chevron-right ml-2"
                                            aria-hidden="true"></span></a>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3 class="hny-title text-left"><b>Diploma Tiga Program Studi Teknologi
                                                Informasi</b></h3>
                                        <p class="fst-italic"><b>Visi : </b>
                                            Menjadi program studi unggulan pada program pendidikan dan
                                            penelitian
                                            terapan di bidang
                                            pengembangan
                                            teknologi informasi yang bertaraf nasional dan internasional pada
                                            tahun
                                            2024.
                                        </p>
                                        <p>
                                            Visi dan Misi Program Studi Teknologi Informasi Diploma Tiga

                                            Struktur Kurikulum Program Studi Teknologi Informasi Diploma Tiga
                                            Profil Lulusan dan Capaian Pembelajaran Lulusan Program Studi
                                            Teknologi
                                            Informasi Diploma Tiga

                                            Program Studi Teknologi Informasi Diploma Tiga adalah salah satu
                                            dari 3
                                            (tiga) program studi yang
                                            dikelola oleh Institut Teknologi Del (IT Del) yang berdiri pada
                                            tahun 2001
                                            sesuai SK No.
                                            222/D/O/2001 tertanggal 28 September 2001 dengan nama Program Studi
                                            Teknologi Informasi. Program
                                            studi ini berlokasi di Jl. Sisingamangaraja, Desa Sitoluama,
                                            Kecamatan
                                            Laguboti, Toba Samosir,
                                            Propinsi Sumatera Utara </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assets/img/programstudi3.png') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <a href="/programstudiD3TI" class="btn btn-style btn-primary mt-sm-4 mt-3"
                                        style="padding: 8px 16px; font-size: 14px; background-color: #0B60B0; border-color: #0B60B0;">Lihat
                                        Selengkapnya <span class="fa fa-chevron-right ml-2"
                                            aria-hidden="true"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- ============ Akhir Program Studi =================-->




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

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('assets/img/galeri/galeri1.png') }}" class="galelry-lightbox">
                                <img src="{{ asset('assets/img/galeri/galeri1.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('assets/img/galeri/galeri2.jpg') }}" class="galelry-lightbox">
                                <img src="{{ asset('assets/img/galeri/galeri2.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('assets/img/galeri/galeri3.jpg') }}" class="galelry-lightbox">
                                <img src="{{ asset('assets/img/galeri/galeri3.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('assets/img/galeri/galeri4.png') }}" class="galelry-lightbox">
                                <img src="{{ asset('assets/img/galeri/galeri4.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('assets/img/galeri/galeri5.jpg') }}" class="galelry-lightbox">
                                <img src="{{ asset('assets/img/galeri/galeri5.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('assets/img/galeri/galeri6.jpeg') }}" class="galelry-lightbox">
                                <img src="{{ asset('assets/img/galeri/galeri6.jpeg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('assets/img/galeri/galeri7.jpg') }}" class="galelry-lightbox">
                                <img src="{{ asset('assets/img/galeri/galeri7.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('assets/img/galeri/galeri8.jpg') }}" class="galelry-lightbox">
                                <img src="{{ asset('assets/img/galeri/galeri8.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
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


        <!-- ======= Virtual Tour ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container text-center" data-aos="zoom-out">
                <a href="" class="glightbox play-btn"></a>
                <h3>Virtual Tour</h3>
                <p>
                    Mari kita mulai menjelajahi Kampus Virtual kami! Temukan beragam fasilitas termasuk ruang kelas,
                    perpustakaan,
                    dan laboratorium digital. Terhubung dengan sesama pelajar dari seluruh dunia. Ayo jelajahi!
                </p>
                <a class="cta-btn" href="https://www.del.ac.id/?page_id=140">Jelajah Kampus Virtual</a>
            </div>
        </section>
        <!-- ======= Akhir Virtual Tour ======= -->


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
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15945.469382960226!2d99.12957838715819!3d2.383215200000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e00fdad2d7341%3A0xf59ef99c591fe451!2sInstitut%20Teknologi%20Del!5e0!3m2!1sid!2sid!4v1709219006585!5m2!1sid!2sid"
                    style="border:0; width: 100%; height: 500px;" frameborder="0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>
        <!-- ======= Akhir Peta Kampus ======= -->


        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <footer class="footer_area section_padding_130_0">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-footer-widget section_padding_0_130">
                            <img src="{{ asset('assets/img/footer/footer.png') }}" alt="Footer Logo" class="footer-logo mb-3"
                                style="max-width: 130px;">

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
                                    <li><a href="#">Tentang Del</a></li>
                                    <li><a href="#">Pendaftaran Mahasiswa Baru</a></li>
                                    <li><a href="#">Informasi Beasiswa</a></li>
                                    <li><a href="#">Unduhan</a></li>
                                    <li><a href="#">Karir</a></li>
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
                                        data-toggle="tooltip" data-placement="top" title data-original-title="Twitter"><i
                                            class="fa fa-twitter text-info"></i></a>
                                    <a href="https://www.youtube.com/channel/UCyzrsLKGZPQFGHIDfN53koQ"
                                        data-toggle="tooltip" data-placement="top" title data-original-title="YouTube"><i
                                            class="fa fa-youtube text-danger"></i></a>
                                    <a href="https://www.instagram.com/it.del?igsh=MTlnNnQybnM2NHVubA=="
                                        data-toggle="tooltip" data-placement="top" title
                                        data-original-title="Instagram"><i class="fa fa-instagram text-purple"></i></a>
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


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const galleryItems = document.querySelectorAll('.gallery .gallery-item');
            const prevButton = document.querySelector('.pagination-container .prev');
            const nextButton = document.querySelector('.pagination-container .next');

            const itemsPerPage = 4; // Ubah sesuai dengan jumlah item per halaman
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
