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
                    <h2 class="breadcrumbs-title">Pengumuman Fakultas Vokasi</h2>
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="/">
                                <span itemprop="name">Beranda</span>
                            </a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="/pengumuman">
                                <span itemprop="name" style="color: #1977cc">Pengumuman Vokasi</span>
                            </a>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- Akhir Breadcrumbs Section -->

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
                        <!-- Form filter -->
                        <div class="filter-form mb-4">
                            <form action="{{ route('pengumuman') }}" method="GET">
                                <div class="form-row align-items-center">
                                    <div class="col-auto">
                                        <input type="text" name="filter" id="filter"
                                            class="form-control mb-2"
                                            placeholder="Filter berdasarkan tanggal (YYYY-MM-DD)">
                                    </div>
                                    <div class="col-auto">
                                        <select name="sort" class="form-control mb-2">
                                            <option value="">Urutkan berdasarkan...</option>
                                            <option value="terbaru">Tanggal Terbaru</option>
                                            <option value="terlama">Tanggal Terlama</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <button
                                            style="background-color: #007BFF; color: #fff; border-radius: 20px; padding: 7px 17px; border: none;"
                                            type="submit" class="btn btn-primary mb-2">
                                            <i class="fas fa-search"></i> Cari
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Notifikasi -->
                        @if (isset($notifikasi) && !empty($notifikasi))
                            <div class="alert alert-info" role="alert">
                                {{ $notifikasi }}
                            </div>
                        @endif

                        <!-- Pengumuman -->
                        <div class="pengumuman-list">
                            @foreach ($pengumumans as $item)
                                <article class="entry d-flex border rounded-lg p-4 mb-4">
                                    <div class="img mr-4" style="flex: 0 0 120px;">
                                        <!-- Tampilkan gambar pengumuman -->
                                        @if ($item->foto)
                                            <img src="{{ asset('storage/foto_pengumuman/' . str_replace('public/foto_pengumuman/', '', $item->foto)) }}"
                                                class="img-fluid" alt="{{ $item->judul }}">
                                        @else
                                            <img src="{{ asset('default-image.jpg') }}" class="img-fluid"
                                                alt="Default Image">
                                        @endif
                                    </div>

                                    <div class="entry-content" style="flex: 1;">
                                        <h2 class="entry-title mb-3">
                                            <!-- Tambahkan tombol "Baca Selengkapnya" untuk membuka modals -->
                                            <a href="#" class="read-more" data-toggle="modal"
                                                data-target="#modal-{{ $item->id }}">
                                                <span class="text-danger">[{{ $item->keterangan }}]</span>
                                                {{ $item->judul }}
                                            </a>
                                        </h2>

                                        <!-- Tampilkan cuplikan konten pengumuman -->
                                        <div class="content-wrapper mb-3">
                                            <p class="mb-0">
                                                {{ implode(' ', array_slice(explode(' ', strip_tags($item->konten)), 0, 17)) }}...
                                                <a class="read-more-btn" href="#" data-toggle="modal"
                                                    data-target="#modal-{{ $item->id }}">Baca Selengkapnya</a>
                                            </p>
                                        </div>
                                        <p class="mb-0"><b>Keterangan:</b> {{ $item->keterangan }}</p>

                                        <div class="entry-date mt-3" style="text-align: right;">
                                            <span class="date font-weight-bold p-2 rounded"
                                                style="background-color: #f8f9fa;">{{ date('d M Y', strtotime($item->tanggal)) }}</span>
                                        </div>
                                    </div>
                                </article><!-- End blog entry -->
                            @endforeach
                        </div>

                        {{-- <!-- Bagian paginasi -->
                        <div class="pagination-section">
                            <div class="row">
                                <div class="col-12">
                                    {{ $pengumumans->links() }}
                                </div>
                            </div>
                        </div> --}}
                    </div><!-- End blog entries list -->


                    <!-- sidebar -->
                    @include('includes/sidebar3')
                    <!-- Akhir sidebar -->

                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation example" class="ms-auto">
                    <ul class="pagination">
                        @if ($pengumumans->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link">&laquo;</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $pengumumans->previousPageUrl() }}"
                                    aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                        @endif

                        @foreach ($pengumumans->links()->elements[0] as $page => $url)
                            @if ($page == $pengumumans->currentPage())
                                <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                            @else
                                <li class="page-item"><a class="page-link"
                                        href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach

                        @if ($pengumumans->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $pengumumans->nextPageUrl() }}" aria-label="Next">
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
                <!-- Pagination -->

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
