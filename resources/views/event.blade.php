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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var readMoreButtons = document.querySelectorAll(".read-more");

            readMoreButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    var targetModalId = button.getAttribute("data-target");
                    var targetModal = document.getElementById(targetModalId);

                    if (targetModal) {
                        var bsModal = new bootstrap.Modal(targetModal);
                        bsModal.show();
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".read-more").click(function() {
                var modalId = $(this).data('target');
                $(modalId).modal('show');
            });
        });
    </script>

    <style>
        .entry-content {
            margin-bottom: 10px;
        }

        .content-wrapper {
            display: flex;
            align-items: center;
        }

        .content-wrapper p {
            margin: 0;
            flex-grow: 1;
        }

        .read-more-btn {
            margin-left: 10px;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 1px 4px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            font-size: 0.8em;
            /* Memperkecil ukuran teks */
        }

        .read-more-btn:hover {
            background-color: #0056b3;
        }

        .modal-content {
            padding: 20px;
        }

        .modal-body img {
            max-width: 100%;
            height: auto;
        }

        .entry-title {
            margin-bottom: 10px;
            color: #1977cc;
            text-decoration: none;
            line-height: 1.5;
            /* Menambahkan jarak antar baris */
        }

        .entry-title b {
            color: red;
            margin-right: 5px;
            /* Memberikan jarak setelah elemen <b> */
        }

        .read-more {
            text-decoration: none;
            color: inherit;
        }

        @import url('https://fonts.googleapis.com/css?family=Oswald');

        * {
            margin: 0;
            padding: 0;
            border: 0;
            box-sizing: border-box
        }

        body {
            font-family: arial
        }

        .fl-left {
            float: left
        }

        .fl-right {
            float: right
        }

        .row {
            overflow: hidden
        }

        .card {
            display: table-row;
            width: 49%;
            background-color: #fff;
            color: #989898;
            margin-bottom: 10px;
            font-family: 'Oswald', sans-serif;
            text-transform: uppercase;
            border-radius: 4px;
            position: relative
        }

        .card+.card {
            margin-left: 2%
        }

        .date {
            display: table-cell;
            width: 25%;
            position: relative;
            text-align: center;
            border-right: 2px dashed #dadde6
        }

        .date:before,
        .date:after {
            content: "";
            display: block;
            width: 30px;
            height: 30px;
            background-color: #DADDE6;
            position: absolute;
            top: -15px;
            right: -15px;
            z-index: 1;
            border-radius: 50%
        }

        .date:after {
            top: auto;
            bottom: -15px
        }

        .date time {
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        .date time span {
            display: block
        }

        .date time span:first-child {
            color: #2b2b2b;
            font-weight: 600;
            font-size: 250%
        }

        .date time span:last-child {
            text-transform: uppercase;
            font-weight: 600;
            margin-top: -10px
        }

        .card-cont {
            display: table-cell;
            width: 75%;
            font-size: 85%;
            padding: 10px 10px 30px 50px
        }


        .card-cont .even-date i,
        .card-cont .even-info i,
        .card-cont .even-date time,
        .card-cont .even-info p {
            display: table-cell
        }

        .card-cont .even-date i,
        .card-cont .even-info i {
            padding: 5% 5% 0 0
        }

        .card-cont .even-info p {
            padding: 30px 50px 0 0
        }

        .card-cont .even-date time span {
            display: block
        }

        .card-cont a {
            display: block;
            text-decoration: none;
            width: 80px;
            height: 30px;
            background-color: #D8DDE0;
            color: #fff;
            text-align: center;
            line-height: 30px;
            border-radius: 2px;
            position: absolute;
            right: 10px;
            bottom: 10px
        }

        .row:last-child .card:first-child .card-cont a {
            background-color: #037FDD
        }

        .row:last-child .card:last-child .card-cont a {
            background-color: #F8504C
        }

        @media screen and (max-width: 860px) {
            .card {
                display: block;
                float: none;
                width: 100%;
                margin-bottom: 10px
            }

            .card+.card {
                margin-left: 0
            }

            .card-cont .even-date,
            .card-cont .even-info {
                font-size: 75%
            }
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
                    <h2 class="breadcrumbs-title">Agenda Fakultas Vokasi</h2>
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="/">
                                <span itemprop="name">Beranda</span>
                            </a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="/event">
                                <span itemprop="name" style="color: #1977cc">Agenda</span>
                            </a>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- Akhir Breadcrumbs Section -->

        <!-- Modals untuk menampilkan konten pengumuman lengkap -->
        @foreach ($events as $item)
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

                        <!-- ======= Blog Section ======= -->
                        <section id="blog" class="blog" style="padding: 10px 0; background: #f9f9f9;">
                            <div class="container" style="max-width: 1200px; margin: 0 auto;" data-aos="fade-up">
                                <h3
                                    style="text-transform: uppercase; font-weight: 900; border-left: 10px solid #fec500; padding-left: 10px; margin-bottom: 30px; color: #333;">
                                    Agenda</h3>

                                <div class="row"
                                    style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                                    <!-- Notifikasi -->
                                    @if (isset($notifikasi) && !empty($notifikasi))
                                        <div class="alert alert-info mb-4" role="alert">
                                            {{ $notifikasi }}
                                        </div>
                                    @else
                                        @foreach ($events as $event)
                                            <article class="card"
                                                style="width: 48%; background-color: #fff; color: #989898; margin-bottom: 20px; font-family: 'Oswald', sans-serif; text-transform: uppercase; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden;">
                                                <div style="display: flex;">
                                                    <section class="date"
                                                        style="width: 25%; text-align: center; border-right: 2px dashed #dadde6; background-color: #f7f7f7; display: flex; flex-direction: column; justify-content: center; padding: 20px; margin-left: -10px;">
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
                                                        style="width: 100%; padding: 20px; display: flex; flex-direction: column;">
                                                        <h3
                                                            style="text-transform: uppercase; font-weight: 900; border-left: 10px solid #fec500; padding-left: 10px; margin-bottom: 20px; font-size: 1.5em; color: #333; font-weight: bold;">
                                                            {{ $event->nama }}
                                                        </h3>
                                                        <div class="card-info"
                                                            style="display: flex; flex-direction: column; gap: 10px;">
                                                            <div class="even-date"
                                                                style="display: flex; align-items: center; font-size: 14px; color: #333;">
                                                                <i class="fa fa-calendar"
                                                                    style="color: #888; margin-right: 10px;"></i>
                                                                <time>
                                                                    <span>{{ \Carbon\Carbon::parse($event->tanggal)->format('d M Y') }}</span>
                                                                    <span
                                                                        style="font-weight: bold;">{{ $event->keterangan }}</span>
                                                                </time>
                                                            </div>
                                                            <div class="even-info"
                                                                style="display: flex; align-items: center; font-size: 14px; color: #333;">
                                                                <i class="fa fa-map-marker"
                                                                    style="color: #888; margin-right: 10px;"></i>
                                                                <p style="margin: 0;">{{ $event->detail }}</p>
                                                            </div>
                                                            <!-- Tambah bagian ini untuk menampilkan tanggal pembuatan posting -->
                                                            <div class="even-info"
                                                                style="display: flex; align-items: center; font-size: 12px; color: #888;">
                                                                <span style="margin-right: 5px;">Tanggal
                                                                    Posting:</span>
                                                                <span>{{ $event->created_at->format('d M Y H:i:s') }}</span>
                                                            </div>
                                                            <!-- Akhir bagian yang ditambahkan -->
                                                        </div>
                                                    </section>
                                                </div>
                                            </article>
                                        @endforeach
                                        <!-- Pagination -->
                                        @if ($events->hasPages())
                                            <nav aria-label="Page navigation example" class="ms-auto">
                                                <ul class="pagination">
                                                    @if ($events->onFirstPage())
                                                        <li class="page-item disabled">
                                                            <span class="page-link">&laquo;</span>
                                                        </li>
                                                    @else
                                                        <li class="page-item">
                                                            <a class="page-link"
                                                                href="{{ $events->previousPageUrl() }}"
                                                                aria-label="Previous">
                                                                <span aria-hidden="true">&laquo;</span>
                                                            </a>
                                                        </li>
                                                    @endif

                                                    @foreach ($events->links()->elements[0] as $page => $url)
                                                        @if ($page == $events->currentPage())
                                                            <li class="page-item active"><span
                                                                    class="page-link">{{ $page }}</span></li>
                                                        @else
                                                            <li class="page-item"><a class="page-link"
                                                                    href="{{ $url }}">{{ $page }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach

                                                    @if ($events->hasMorePages())
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $events->nextPageUrl() }}"
                                                                aria-label="Next">
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
                                        @endif
                                        <!-- Pagination -->
                                    @endif
                                </div>
                            </div>
                        </section>


                    </div><!-- End blog entries list -->


                    <!-- sidebar -->
                    @include('includes/sidebar4')
                    <!-- Akhir sidebar -->

                </div>


            </div>
        </section><!-- End Blog Section -->


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
