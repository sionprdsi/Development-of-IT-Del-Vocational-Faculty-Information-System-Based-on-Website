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
                    <h2 class="breadcrumbs-title">Kalender Akademik Fakultas Vokasi</h2>
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="/">
                                <span itemprop="name">Beranda</span>
                            </a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="/kalender_akademik">
                                <span itemprop="name" style="color: #1977cc">Kalender Akademik</span>
                            </a>
                            <meta itemprop="position" content="2" />
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

        <section id="blog" class="blog" style="padding: 50px 0;">
            <div class="container" data-aos="fade-up">

                <div class="row">


                    <div class="col-lg-8 entries">
                        <article class="entry entry-single">
                            @foreach ($kalenderAkademik as $kalender)
                                <div class="header-title mb-md-5 mt-4">
                                    <h2
                                        style="color: #0B60B0; font-size: 32px; font-weight: bold; margin-bottom: 20px; text-align: center; text-transform: uppercase; letter-spacing: 2px; border-bottom: 2px solid #0B60B0; padding-bottom: 10px;">
                                        Kalender Akademik
                                    </h2>
                                </div>
                                <div class="entry-img">
                                    <img src="{{ $kalender->foto ? asset('storage/foto/' . str_replace('public/foto/', '', $kalender->foto)) : 'https://via.placeholder.com/300' }}"
                                        alt="" class="img-fluid"
                                        style="display: block; margin: 0 auto; max-width: 100%; height: auto;">
                                </div>

                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <h5 style="font-weight: bold; color: #333; margin-bottom: 10px;">
                                            {{ $kalender->judul }}</h5>
                                        <p style="line-height: 1.6; color: #555; margin-bottom: 20px;">
                                            {{ $kalender->konten }}</p>
                                        <p style="margin-bottom: 10px;">
                                            <span style="color: #8a8a8a; font-size: 14px;">
                                                <i class="far fa-calendar-alt"
                                                    style="color: #0B60B0; font-size: 16px; margin-right: 4px;"></i>
                                                <span>Tanggal posting: {{ $kalender->tanggal }}</span>
                                            </span>
                                        </p>

                                        <div>
                                            <span
                                                style="color: #007BFF; display: inline-block; vertical-align: middle; margin-right: 10px;">
                                                File: <a
                                                    href="{{ asset('storage/pdf/' . str_replace('public/pdf/', '', $kalender->file_pdf)) }}"
                                                    target="_blank">{{ str_replace('public/pdf/', '', $kalender->file_pdf) }}</a>
                                            </span>
                                            <a href="{{ asset('storage/pdf/' . str_replace('public/pdf/', '', $kalender->file_pdf)) }}"
                                                style="font-size: 15px; background-color: #007BFF; color: #fff; border-radius: 20px; padding: 2px 9px; border: none; display: inline-block; vertical-align: middle;"
                                                class="btn btn-primary" target="_blank">Lihat PDF</a>
                                        </div>

                                        @if ($kalender->file_pdf)
                                            <div class="d-flex justify-content-between align-items-center"
                                                style="margin-top: 20px;">
                                                <div
                                                    style="width: 100%; height: 1200px; weight: 50%; overflow-y: auto; border: 1px solid #ddd; padding: 10px;">
                                                    <canvas id="pdf-viewer" style="border: 1px solid black;"></canvas>
                                                </div>
                                            </div>
                                        @else
                                            <span style="color: #d9534f; font-weight: bold;">Tidak Ada File PDF</span>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </article>
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>


                    <!-- sidebar -->
                    @include('includes/sidebar')
                    <!-- Akhir sidebar -->

                </div>

            </div>
        </section>


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





    <script>
        // Fetch PDF document
        const url = "{{ asset('storage/pdf/' . str_replace('public/pdf/', '', $kalender->file_pdf)) }}";
        const pdfjsLib = window['pdfjs-dist/build/pdf'];
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.worker.min.js';

        pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
            const pdfDoc = pdfDoc_;
            const canvas = document.getElementById('pdf-viewer');
            const ctx = canvas.getContext('2d');

            // Display the first three pages
            const numPages = Math.min(pdfDoc.numPages, 3);
            let pageNumber = 1;

            function renderPage(pageNumber) {
                pdfDoc.getPage(pageNumber).then(function(page) {
                    const viewport = page.getViewport({
                        scale: 1.5
                    });
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    const renderContext = {
                        canvasContext: ctx,
                        viewport: viewport
                    };
                    page.render(renderContext);
                });
            }

            for (let i = 1; i <= numPages; i++) {
                renderPage(i);
            }
        });
    </script>

</body>

</html>
