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
                    <h2 class="breadcrumbs-title">Prestasi Mahasiswa Vokasi</h2>
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="/">
                                <span itemprop="name">Beranda</span>
                            </a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="/prestasi">
                                <span itemprop="name" style="color: #1977cc">Prestasi</span>
                            </a>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- Akhir Breadcrumbs Section -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-8 entries">

                        <!-- Filter Tahun -->
                        <div style="margin-bottom: 20px; text-align: center;">
                            <form action="{{ route('prestasi') }}" method="GET"
                                style="display: inline-flex; align-items: center;">
                                <label for="tahun" style="margin-right: 10px; font-weight: bold;">Filter by
                                    Year:</label>
                                <select name="tahun" id="tahun"
                                    style="padding: 5px 10px; border-radius: 4px; border: 1px solid #ddd; margin-right: 10px; font-size: 14px;">
                                    <option value="">All Years</option>
                                    @foreach ($prestasiByYear as $tahun => $prestasis)
                                        <option value="{{ $tahun }}"
                                            {{ $selectedYear == $tahun ? 'selected' : '' }}>{{ $tahun }}
                                        </option>
                                    @endforeach
                                </select>
                                <button type="submit"
                                    style="padding: 5px 15px; background-color: #007bff; color: white; border: none; border-radius: 4px; font-size: 14px; cursor: pointer;">Filter</button>
                            </form>
                        </div>
                        <!-- Notifikasi -->
                        @if (isset($notifikasi) && !empty($notifikasi))
                            <div class="alert alert-info mb-4" role="alert">
                                {{ $notifikasi }}
                            </div>
                        @endif
                        @foreach ($prestasiByYear as $tahun => $prestasis)
                            <article class="entry">
                                <div class="container py-5">
                                    <!-- Link to Google Fonts -->
                                    <link
                                        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
                                        rel="stylesheet">

                                    <header class="text-center text-white"
                                        style="background-color: #f8f9fa; color: #333; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); font-family: 'Roboto', sans-serif;">
                                        <h1 class="display-4"
                                            style="font-size: 2em; margin-bottom: 10px; font-weight: 700;">Prestasi
                                            Mahasiswa</h1>
                                        <p class="lead mb-0"
                                            style="font-size: 1.2em; margin-top: 0; font-weight: 400;">Tahun
                                            {{ $tahun }}</p>
                                    </header>

                                    <!-- Tambahkan opsi jumlah entri di bawah setiap tahun -->
                                    <div style="margin-top: 20px; text-align: center;">
                                        <form action="{{ route('prestasi') }}" method="GET"
                                            style="display: inline-flex; align-items: center;">
                                            <input type="hidden" name="tahun" value="{{ $tahun }}">
                                            <label for="jumlah_entri_{{ $tahun }}"
                                                style="margin-right: 10px; font-weight: bold;">Show</label>
                                            <div style="position: relative; display: inline-block;">
                                                <select name="jumlah_entri_{{ $tahun }}"
                                                    id="jumlah_entri_{{ $tahun }}"
                                                    style="appearance: none; padding: 5px 30px 5px 10px; border-radius: 4px; border: 1px solid #ddd; margin-right: 10px; font-size: 14px; background: white url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMCAxMCIgd2lkdGg9IjEwIiBoZWlnaHQ9IjEwIj48cGF0aCBkPSJNNSAwbC01IDUgNSA1IDUtNXoiIGZpbGw9IiNjY2MiLz48L3N2Zz4=') no-repeat right 10px center; background-size: 10px 10px;">
                                                    <option value="5"
                                                        {{ $request->input('jumlah_entri_' . $tahun) == 5 ? 'selected' : '' }}>
                                                        5</option>
                                                    <option value="10"
                                                        {{ $request->input('jumlah_entri_' . $tahun) == 10 ? 'selected' : '' }}>
                                                        10</option>
                                                    <option value="15"
                                                        {{ $request->input('jumlah_entri_' . $tahun) == 15 ? 'selected' : '' }}>
                                                        15</option>
                                                    <option value="20"
                                                        {{ $request->input('jumlah_entri_' . $tahun) == 20 ? 'selected' : '' }}>
                                                        20</option>
                                                </select>
                                            </div>
                                            <label for="jumlah_entri_{{ $tahun }}"
                                                style="margin-right: 10px; font-weight: bold;">entries</label>
                                            <button type="submit"
                                                style="padding: 5px 15px; background-color: #007bff; color: white; border: none; border-radius: 4px; font-size: 14px; cursor: pointer;">Terapkan</button>
                                        </form>
                                    </div>
                                    <div class="row py-5">
                                        <div class="col-lg-10 mx-auto">
                                            <div class="card rounded shadow border-0">
                                                <div class="card-body p-5 bg-white rounded">
                                                    <div class="table-responsive">
                                                        <table id="example" style="width:100%"
                                                            class="table table-striped table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama</th>
                                                                    <th>Nama Prestasi</th>
                                                                    <th>Prestasi</th>
                                                                    <th>Tingkat</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($prestasis as $index => $prestasi)
                                                                    <tr>
                                                                        <td>{{ $index + 1 }}</td>
                                                                        <td>{{ $prestasi->nama }}</td>
                                                                        <td>{{ $prestasi->nama_prestasi }}</td>
                                                                        <td>{{ $prestasi->juara }}</td>
                                                                        <td>{{ $prestasi->tingkat }}</td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </article><!-- End blog entry -->
                        @endforeach
                        <!-- Pagination -->
                        <nav aria-label="Page navigation example" class="ms-auto">
                            <ul class="pagination">
                                @if ($prestasiQuery->previousPageUrl())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $prestasiQuery->previousPageUrl() }}"
                                            aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                @else
                                    <li class="page-item disabled">
                                        <span class="page-link">&laquo;</span>
                                    </li>
                                @endif

                                <li class="page-item active">
                                    <span class="page-link">{{ $prestasiQuery->currentPage() }}</span>
                                </li>

                                @if ($prestasiQuery->nextPageUrl())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $prestasiQuery->nextPageUrl() }}"
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
                        <!-- Pagination -->
                    </div><!-- End blog entries list -->

                    <!-- sidebar -->
                    @include('includes/sidebar5')
                    <!-- Akhir sidebar -->
                </div>


            </div>
        </section><!-- End Blog Section -->




        <!-- footer -->
        @include('includes/footer')
        <!-- Akhir footer -->


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
        $(function() {
            $(document).ready(function() {
                $('#example').DataTable();
            });
        });
    </script>
</body>

</html>
