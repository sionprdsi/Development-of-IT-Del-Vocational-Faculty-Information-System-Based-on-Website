<!DOCTYPE html>
<html lang="en">

<head>
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


    <!-- ============================ -->
    {{-- <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet"> --}}


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


        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container" data-aos="fade-up">

                <div class="position-relative h-100">
                    <div class="slides-1 portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/app-1.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/product-1.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/branding-1.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/books-1.jpg" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>

                <div class="row justify-content-between gy-4 mt-4">

                    <div class="col-lg-8">
                        <div class="portfolio-description">
                            <h2>This is an example of portfolio detail</h2>
                            <p>
                                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi
                                labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque
                                itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur
                                dignissimos. Sequi nulla at esse enim cum deserunt eius.
                            </p>
                            <p>
                                Amet consequatur qui dolore veniam voluptatem voluptatem sit. Non aspernatur atque natus
                                ut cum nam et. Praesentium error dolores rerum minus sequi quia veritatis eum. Eos et
                                doloribus doloremque nesciunt molestiae laboriosam.
                            </p>

                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <div>
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                </div>
                            </div>

                            <p>
                                Impedit ipsum quae et aliquid doloribus et voluptatem quasi. Perspiciatis occaecati
                                earum et magnam animi. Quibusdam non qui ea vitae suscipit vitae sunt. Repudiandae
                                incidunt cumque minus deserunt assumenda tempore. Delectus voluptas necessitatibus est.

                            <p>
                                Sunt voluptatum sapiente facilis quo odio aut ipsum repellat debitis. Molestiae et autem
                                libero. Explicabo et quod necessitatibus similique quis dolor eum. Numquam eaque
                                praesentium rem et qui nesciunt.
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="portfolio-info">
                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Category</strong> <span>Web design</span></li>
                                <li><strong>Client</strong> <span>ASU Company</span></li>
                                <li><strong>Project date</strong> <span>01 March, 2020</span></li>
                                <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                                <li><a href="#" class="btn-visit align-self-start">Visit Website</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

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
