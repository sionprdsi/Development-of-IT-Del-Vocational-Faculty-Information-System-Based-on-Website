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

        .team-list img {
            width: 50%;
        }

        .team-list .content {
            width: 50%;
        }

        .team-list .content .follow {
            position: absolute;
            bottom: 24px;
        }

        .team-list:hover {
            -webkit-transform: scale(1.05);
            transform: scale(1.05);
        }

        .team,
        .team-list {
            -webkit-transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55) 0s;
            transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55) 0s;
        }

        .team .content .title,
        .team-list .content .title {
            font-size: 18px;
        }

        .team .overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            opacity: 0;
            -webkit-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        .team .member-position,
        .team .team-social {
            position: absolute;
            bottom: -35px;
            right: 0;
            left: 0;
            margin: auto 10%;
            z-index: 99;
        }

        .team .team-social {
            bottom: 40px;
            opacity: 0;
            -webkit-transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55) 0s;
            transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55) 0s;
        }

        .team:hover {
            -webkit-transform: translateY(-7px);
            transform: translateY(-7px);
            -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
        }

        .team:hover .overlay {
            opacity: 0.6;
        }

        .team:hover .team-social {
            opacity: 1;
        }

        @media (max-width: 768px) {

            .team-list img,
            .team-list .content {
                width: 100%;
                float: none !important;
            }

            .team-list img .follow,
            .team-list .content .follow {
                position: relative;
                bottom: 0;
            }
        }

        .list-inline-item:not(:last-child) {
            margin-right: 0px;
            margin-bottom: 0px;
        }

        .rounded {
            border-radius: 5px !important;
        }

        .social-icon.social li a {
            color: #adb5bd;
            border-color: #adb5bd;
        }

        .social-icon li a {
            color: #35404e;
            border: 1px solid #35404e;
            display: inline-block;
            height: 32px;
            text-align: center;
            font-size: 15px;
            width: 32px;
            line-height: 30px;
            -webkit-transition: all 0.4s ease;
            transition: all 0.4s ease;
            overflow: hidden;
            position: relative;
        }

        a {
            text-decoration: none !important;
        }


        .pagination-container {
            margin-top: 100px;
            /* Tambah jarak di atas pagination */
            padding-bottom: 50px;
            /* Tambah jarak di bawah pagination */
        }

        .pagination .page-item.disabled .page-link {
            cursor: not-allowed;
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
        <section style="margin-bottom: 0%;" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="breadcrumbs-title">Dosen Vokasi</h2>
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="/">
                                <span itemprop="name">Beranda</span>
                            </a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="/dosen">
                                <span itemprop="name" style="color: #1977cc">Dosen Vokasi</span>
                            </a>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- Akhir Breadcrumbs Section -->


        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css"
            integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
        <div class="container mt-5">
            <div class="row mb-4">
                <div class="col-lg-3">
                    <form action="{{ route('dosen') }}" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari Nama Dosen" name="search"
                                style="border-radius: 20px 0 0 20px;">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary"
                                        style="background-color: #007BFF; color: #fff; border-radius: 0 10px 20px 0; padding: 7px 17px; border: none;">
                                    <i class="fas fa-search"></i> Cari
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-4">
                    <form action="{{ route('dosen') }}" method="GET">
                        <div class="input-group mb-3">
                            <select class="form-control" name="prodi_id" style="border-radius: 20px 0 0 20px;">
                                <option value="">Pilih Prodi</option>
                                @foreach ($prodi as $p)
                                    <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                @endforeach
                            </select>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary"
                                        style="background-color: #007BFF; color: #fff; border-radius: 0 10px 20px 0; padding: 7px 17px; border: none;">
                                    <i class="fas fa-search"></i> Filter Prodi
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                @foreach ($dosenPaginate as $dosen)
                    <div class="col-lg-3 col-md-6 col-12 mt-4">
                        <div class="card border-0 shadow" style="transition: transform .2s; cursor: pointer;">
                            <a href="{{ route('detaildosen', ['id' => $dosen->id]) }}" class="text-decoration-none"
                                style="color: inherit;">
                                <img src="{{ $dosen->gambar ? asset('storage/gambar/' . str_replace('public/gambar/', '', $dosen->gambar)) : '' }}"
                                    class="card-img-top rounded-top" alt=""
                                    style="height: 300px; object-fit: cover;">
                                <div class="card-body text-center">
                                    <h5 class="card-title mb-0" style="font-weight: bold;">{!! $dosen->nama !!}
                                    </h5>
                                    <p class="card-text" style="margin-top: 5px; font-size: smaller; color: gray;">
                                        {!! $dosen->jabatan !!}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            @if (!empty($notifikasi))
                <div class="alert alert-info my-4" role="alert">
                    {{ $notifikasi }}
                </div>
            @endif

            <div class="pagination-container mt-5">
                <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                    <ul class="pagination">
                        @if ($dosenPaginate->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link">&laquo;</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $dosenPaginate->previousPageUrl() }}"
                                    aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                        @endif

                        @foreach ($dosenPaginate->links()->elements[0] as $page => $url)
                            @if ($page == $dosenPaginate->currentPage())
                                <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                            @else
                                <li class="page-item"><a class="page-link"
                                        href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach

                        @if ($dosenPaginate->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $dosenPaginate->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <span class="page-link">&raquo;</span>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
        <script>
            // Periksa apakah notifikasi harus ditampilkan
            @if (session('error'))
                document.getElementById('namaNotFound').style.display = 'block';
            @endif

            // Add hover effect for the cards
            document.querySelectorAll('.card').forEach(card => {
                card.addEventListener('mouseenter', () => {
                    card.style.transform = 'scale(1.05)';
                });
                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'scale(1)';
                });
            });
        </script>


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
