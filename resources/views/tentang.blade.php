<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>VOKASI Institut Teknologi Del</title>
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

    <!-- ========= ========================================================================================================================================================= -->


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    {{-- <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/vendor/aos/aos.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet"> --}}

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/css/variables.css') }}"
        rel="stylesheet">
    <!-- <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/css/variables-blue.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/css/variables-green.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/css/variables-orange.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/css/variables-purple.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/css/variables-red.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/css/variables-pink.css') }}" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/css/main.css') }}" rel="stylesheet">

</head>

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
                    <li><a class="nav-link scrollto" href="/">Beranda</a></li>
                    <li><a class="nav-link scrollto active" href="/tentang">Tentang</a></li>
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

    <main id="main">

        <!-- ======= Breadcrumbs  ======= -->
        <section style="margin-bottom:1%" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="breadcrumbs-title">Tentang Fakultas Vokasi Institut Teknologi Del</h2>
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="/">
                                <span itemprop="name">Beranda</span>
                            </a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <span itemprop="name" style="color: #1977cc">Tentang</span>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- Akhir Breadcrumbs Section -->


        <section class="w3l-index3" id="about1">
            <div class="container py-lg-4 py-md-2">
                <div class="row">
                    <div class="col-lg-6 mb-lg-0 mb-md-4 mb-4">
                        <img src="{{ asset('assets/asset about/assets/images/foto luhut tentang.webp') }}"
                            alt="" class="radius-image-full img-fluid">
                    </div>
                    <div class="col-lg-6 pl-lg-4">
                        <div class="header-title">
                            <span class="sub-title">Tentang Fakultas Vokasi Institut Teknologi Del</span>
                            <h3 class="hny-title text-left" style="margin-bottom: 1%; margin-top: 1%">Sejarah
                                Vokasi</h3>
                        </div>

                        <p class="mt-2">Jenderal TNI (Purn.) Luhut B. Pandjaitan mendirikan Yayasan Del pada
                            tanggal 30 Agustus 2001. Tekad yang kuat untuk berpartisipasi
                            pada program pemerintahan dalam bidang pendidikan, sosial, kemanusiaan, seni dan budaya, dan
                            kelestarian lingkungan.
                            <br>
                            Pendidikan vokasi merupakan jenjang pendidikan pertama di Institut
                            Teknologi Del sejak berdiri pada tahun 2001 (dahulu bernama Politeknik Informatika Del).
                            Vokasi merupakan pendidikan tinggi dengan fokus pada praktik kerja yang dapat menunjang
                            keahlian di bidang studi tertentu. Program vokasi bertujuan mempersiapkan lulusannya
                            menjadi tenaga yang siap kerja dan mampu bersaing secara global di Dunia Usaha dan Dunia
                            Industri (DUDI).
                            <br>
                            Fakultas Vokasi Institut Teknologi Del Di Institut Teknologi Del memiliki 3 program
                            studi pada jenjang Diploma 3 (D3) dan Diploma 4 (D4):
                        <ol>
                            <li>D4 (Sarjana Terapan) Teknologi Rekayasa Perangkat Lunak</li>
                            <li>D3 Teknologi Informasi</li>
                            <li>D3 Teknologi Komputer</li>
                        </ol>
                        Ketiga program studi vokasi di IT Del telah terakreditasi B dari BAN-PT.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Program Studi Fakultas Vokasi</h2>
                </div>

                <div class="row gy-5">

                    <!-- D4 (Sarjana Terapan) Teknologi Rekayasa Perangkat Lunak -->
                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-item">
                            <div class="img">
                                <img src="{{ asset('assets/img/halaman tentang/foto prodi 1.jpg') }}"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="fas fa-university"></i>
                                </div>
                                <a href="/programstudiD4TRPL" class="stretched-link">
                                    <h3>D4 (Sarjana Terapan) Teknologi Rekayasa Perangkat Lunak</h3>
                                </a>
                                <p class="text-left">Sarjana Terapan (Diploma 4) Teknologi Rekayasa Perangkat Lunak
                                    (Sarjana Terapan TRPL) merupakan program studi pada pendidikan vokasi.</p>
                                <a href="/programstudiD4TRPL" class="btn btn-primary mt-3"
                                    style="background-color: #0B60B0; border-color: #0B60B0;">Kunjungi...</a>
                            </div>
                        </div>
                    </div>

                    <!-- D3 Teknologi Informasi -->
                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item">
                            <div class="img">
                                <img src="{{ asset('assets/img/halaman tentang/foto prodi 3.jpg') }}"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="fas fa-university"></i>
                                </div>
                                <a href="/programstudiD3TI" class="stretched-link">
                                    <h3>D3 Teknologi Informasi</h3>
                                </a>
                                <p class="text-left">Mampu membangun, mengembangkan dan memelihara perangkat lunak
                                    dengan mengikuti dan menerapkan metode rekayasa perangkat lunak yang baik dan benar,
                                    yang mencakup perangkat lunak pada platform desktop, web, dan mobile.</p>
                                <a href="/programstudiD3TI" class="btn btn-primary mt-3"
                                    style="background-color: #0B60B0; border-color: #0B60B0;">Kunjungi...</a>
                            </div>
                        </div>
                    </div>

                    <!-- D3 Teknologi Komputer -->
                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-item">
                            <div class="img">
                                <img src="{{ asset('assets/img/halaman tentang/foto prodi 2.jpg') }}"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="fas fa-university"></i>
                                </div>
                                <a href="/programstudiD3TK" class="stretched-link">
                                    <h3>D3 Teknologi Komputer</h3>
                                </a>
                                <p class="text-left">Memiliki keahlian untuk merancang dan memelihara Jaringan Komputer
                                    dengan mengikuti fase pembangunan jaringan komputer melalui penerapan metodologi
                                    pembangunan sistem untuk meningkatkan keterampilan di bidang Jaringan Komputer.</p>
                                <a href="/programstudiD3TK" class="btn btn-primary mt-3"
                                    style="background-color: #0B60B0; border-color: #0B60B0;">Kunjungi...</a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </section><!-- End Services Section -->



        <section class="w3l-servicesblock py-4" id="about">
            <div class="container py-lg-4 py-md-2">
                <div class="row">
                    <div class="col-lg-6 about-right-faq align-self mb-lg-0 mb-sm-4 mb-4 pr-lg-4">
                        <div class="header-title mb-md-4 mb-4">
                            <span class="sub-title">Visi dan Misi Fakultas Vokasi</span>
                            <h3 class="hny-title text-left" style="margin-bottom: 1%; margin-top: 1%">Visi</h3>
                            <div class="grids_info" style="margin-bottom: 3%">
                                <p>Menjadi lembaga pendidikan vokasi yang unggul dan berperan dalam pengembangan dan
                                    pemanfaatan teknologi yang mengintegrasikan dunia pendidikan dengan kebutuhan dunia
                                    usaha dan dunia industri akan tenaga profesional informatika dan komputer yang mampu
                                    bersaing secara global.</p>
                            </div>
                            <div class="header-title mb-md-4 mb-4">
                                <h3 class="hny-title text-left" style="margin-bottom: 1%; margin-top: 1%">Misi
                                </h3>
                                <div class="grids_info">
                                    <p>Menyelenggarakan proses pendidikan vokasi yang unggul, berkesinambungan, dan
                                        bermanfaat bagi masyarakat dalam lingkungan pendidikan yang kondusif, didukung
                                        dengan tenaga pendidik yang memiliki kompetensi pada bidang informatika dan
                                        komputer, serta melibatkan dunia usaha dan dunia industri dalam pengembangan
                                        kemampuan peserta didik. Melaksanakan kegiatan penelitian untuk mengembangkan,
                                        menciptakan, dan menyebarkan ilmu pengetahuan dan teknologi terapan pada bidang
                                        informatika dan komputer. Melaksanakan kegiatan pengabdian kepada masyarakat
                                        melalui diseminasi teknologi informatika dan komputer kepada masyarakat di
                                        berbagai bidang.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 left-wthree-img mt-lg-0 mt-3">
                        <img src="{{ asset('assets/asset about/assets/images/vokasi misi.jpg') }}" alt=""
                            class="img-fluid radius-image">
                    </div>
                </div>
            </div>
        </section>

        <section class="w3l-skills" id="skills">
            <div class="container py-lg-4 py-md-2">
                <div class="row">
                    <div class="col-lg-6 pr-lg-4 mb-lg-0 mb-4">
                        <img src="{{ asset('assets/asset about/assets/images/tujuan tentang.jpeg') }}" alt=""
                            class="radius-image-full img-fluid">
                    </div>
                    <div class="col-lg-6">
                        <div class="header-title mb-3">
                            <span class="sub-title">Tujuan Vakultas Vokasi</span>
                            <h3 class="hny-title text-left">Landasan Vokasi</h3>
                        </div>
                        <p>Terwujudnya lulusan yang mampu bersaing secara global dan berperilaku MarTuhan, Marroha,
                            Marbisuk dalam disiplin ilmu informatika dan komputer.</p>
                        <h3 class="hny-title text-left" style="margin-top: 2%">Sasaran Vokasi</h3>
                        <div class="skills-bars mt-3">
                            <div class="progress-info">
                                <h6 class="progress-title">Menghasilkan profesional unggul di bidang informatika
                                    dan komputer yang berperilaku MarTuhan, Marroha, Marbisuk yang mempunyai
                                    ciri-ciri utama beriman dan bertakwa kepada Tuhan Yang Maha Esa, bijak, ahli,
                                    terampil dalam bidangnya, berwawasan luas, memiliki sifat kepeloporan serta
                                    memiliki kesadaran dan tanggungjawab sosial.</h6>
                                <h6 class="progress-title">Menghasilkan karya ilmu pengetahuan dan teknologi
                                    terapan yang berorientasi pada perkembangan keilmuan, pembelajaran dan
                                    pemanfaatan di masyarakat.</h6>
                                <h6 class="progress-title">Menghasilkan karya pengabdian dan inovasi yang membawa
                                    kesejahteraan bagi masyarakat.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w3l-form-25-section" id="subscribe"
            style="background-image: url('assets/asset about/assets/images/visi misi.jpg');">
            <div class="form-25-main">
                <div class="container py-4">
                    <div class="row subscription-grids py-4">
                        <div class="col-lg-7 subscription-left forms-25-info">
                            <div class="header-title">
                                <h3 class="p-0">DEL bermakna sebagai “Selangkah Lebih Maju” dalam karsa dan karya.
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-5 subscription-right pl-lg-4 mt-lg-0 mt-3 text-lg-right">
                            <a href="/prestasi" class="btn btn-style btn-white mr-lg-4 mr-sm-3"> Lihat Prestasi <span
                                    class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                                    <li><a href="/tentang">Tentang Del</a></li>
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
                                    <a href="https://www.youtube.com/@institutteknologidel1337"
                                        data-toggle="tooltip" data-placement="top" title
                                        data-original-title="YouTube"><i class="fa fa-youtube text-danger"></i></a>
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


    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>



    <!-- ======== assets 1 ===================================================================================================================================================================== -->
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>



    <!-- ======== assets 2 ===================================================================================================================================================================== -->

    <!-- Scripts -->
    <script>
        window.addEventListener('scroll', function() {
            var movetop = document.getElementById('movetop');
            if (window.scrollY > 20) {
                movetop.style.display = 'block';
            } else {
                movetop.style.display = 'none';
            }
        });

        function topFunction() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
    <!-- /Scripts -->

    <!-- /Section -->

    <!-- Copyright -->
    <!-- Scripts -->
    <script src="{{ asset('assets/asset about/assets/js/jquery-3.3.1.min.js') }}"></script> <!-- Common jquery plugin -->
    <script src="{{ asset('assets/asset about/assets/js/theme-change.js') }}"></script><!-- theme switch js (light and dark)-->
    <!--/MENU-JS-->
    <script>
        window.addEventListener('scroll', function() {
            var siteHeader = document.getElementById('site-header');
            if (window.scrollY >= 80) {
                siteHeader.classList.add('nav-fixed');
            } else {
                siteHeader.classList.remove('nav-fixed');
            }
        });

        document.querySelector('.navbar-toggler').addEventListener('click', function() {
            document.querySelector('header').classList.toggle('active');
        });

        window.addEventListener('DOMContentLoaded', function() {
            if (window.innerWidth > 991) {
                document.querySelector('header').classList.remove('active');
            }
            window.addEventListener('resize', function() {
                if (window.innerWidth > 991) {
                    document.querySelector('header').classList.remove('active');
                }
            });
        });
    </script>
    <!--/MENU-JS-->

    <!-- disable body scroll which navbar is in active -->
    <script>
        document.querySelector('.navbar-toggler').addEventListener('click', function() {
            document.body.classList.toggle('noscroll');
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="{{ asset('assets/asset about/assets/js/bootstrap.min.js') }}"></script>
    <!-- //bootstrap-->


    <!-- ================================================================================================================= -->



    <!-- Vendor JS Files -->
    <script
        src="{{ asset('assets/assets - untuk program studi di halaman tentang/vendor/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
    <script src="{{ asset('assets/assets - untuk program studi di halaman tentang/vendor/aos/aos.js') }}"></script>
    <script
        src="{{ asset('assets/assets - untuk program studi di halaman tentang/vendor/glightbox/js/glightbox.min.js') }}">
    </script>
    <script
        src="{{ asset('assets/assets - untuk program studi di halaman tentang/vendor/isotope-layout/isotope.pkgd.min.js') }}">
    </script>
    <script src="{{ asset('assets/assets - untuk program studi di halaman tentang/vendor/swiper/swiper-bundle.min.js') }}">
    </script>
    <script src="{{ asset('assets/assets - untuk program studi di halaman tentang/vendor/php-email-form/validate.js') }}">
    </script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/assets - untuk program studi di halaman tentang/js/main.js') }}"></script>
</body>

</html>
