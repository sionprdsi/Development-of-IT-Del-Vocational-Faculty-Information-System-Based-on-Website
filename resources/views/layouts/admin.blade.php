<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Laravel SB Admin 2">
    <meta name="author" content="Alejandro RH">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon" type="image/png">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.home') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    {{-- <i class="fas fa-laugh-wink"></i> --}}
                </div>
                <div class="sidebar-brand-text mx-3">Admin Fakultas Vokasi</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->routeIs('admin.home') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">Halaman Beranda Vokasi</div>

            <!-- Nav Item - Pages Collapse Menu 1 -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Halaman Beranda</span>
                </a>
                <div id="collapseTwo"
                    class="collapse {{ Request::is('admin/profil', 'admin/slider', 'admin/galeri') ? 'show' : '' }}"
                    aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Beranda:</h6>
                        <a class="collapse-item {{ request()->routeIs('admin.profil') ? 'active' : '' }}"
                            href="{{ route('admin.profil') }}">
                            <i class="fas fa-fw fa-info-circle"></i>
                            <span>Profil Kampus</span>
                        </a>
                        <h6 class="collapse-header">Carousel Gambar Beranda :</h6>
                        <a class="collapse-item {{ request()->routeIs('admin.slider') ? 'active' : '' }}"
                            href="{{ route('admin.slider') }}">
                            <i class="fas fa-fw fa-sliders-h"></i>
                            <span>Slider</span>
                        </a>
                        <h6 class="collapse-header">Galeri Beranda :</h6>
                        <a class="collapse-item {{ request()->routeIs('admin.galeri') ? 'active' : '' }}"
                            href="{{ route('admin.galeri') }}">
                            <i class="fas fa-fw fa-images"></i>
                            <span>Galeri</span>
                        </a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">Halaman Profil Vokasi</div>

            <!-- Nav Item - Halaman Profil Vokasi -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTentang"
                    aria-expanded="false" aria-controls="collapseTentang">
                    <i class="fas fa-fw fa-university"></i>
                    <span>Halaman Profil Vokasi</span>
                </a>
                <div id="collapseTentang"
                    class="collapse {{ Request::is('admin/tentang', 'admin/sambutan_dekan', 'admin/visimisi', 'admin/tujuan') ? 'show' : '' }}"
                    aria-labelledby="headingTentang" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Halaman Tentang Vokasi :</h6>
                        <a class="collapse-item {{ request()->routeIs('admin.tentang') ? 'active' : '' }}"
                            href="{{ route('admin.tentang') }}">
                            <i class="fas fa-fw fa-info"></i>
                            <span>Tentang Kampus</span>
                        </a>
                        <h6 class="collapse-header">Halaman Kata Sambutan :</h6>
                        <a class="collapse-item {{ request()->routeIs('admin.sambutan_dekan') ? 'active' : '' }}"
                            href="{{ route('admin.sambutan_dekan') }}">
                            <i class="fas fa-fw fa-image"></i>
                            <span>Kata Sambutan</span>
                        </a>
                        <h6 class="collapse-header">Halaman Visi Misi Vokasi :</h6>
                        <a class="collapse-item {{ request()->routeIs('admin.visimisi') ? 'active' : '' }}"
                            href="{{ route('admin.visimisi') }}">
                            <i class="fas fa-fw fa-info"></i>
                            <span>Visi Misi</span>
                        </a>
                        <h6 class="collapse-header">Halaman Tujuan Vokasi :</h6>
                        <a class="collapse-item {{ request()->routeIs('admin.tujuan') ? 'active' : '' }}"
                            href="{{ route('admin.tujuan') }}">
                            <i class="fas fa-fw fa-info"></i>
                            <span>Tujuan</span>
                        </a>
                        <h6 class="collapse-header">Struktur Organisasi :</h6>
                        <a class="collapse-item {{ request()->routeIs('admin.struktur_organisasi') ? 'active' : '' }}"
                            href="{{ route('admin.struktur_organisasi') }}">
                            <i class="fas fa-fw fa-info"></i>
                            <span>Struktur Organisasi</span>
                        </a>
                    </div>
                </div>
            </li>


            <hr class="sidebar-divider">

            <!-- Nav Item - Halaman Civitas -->
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/dosen', 'admin/prestasi', 'admin/alumni') ? 'active' : '' }}" href="#" data-toggle="collapse" data-target="#collapseCivitas"
                    aria-expanded="{{ Request::is('admin/dosen', 'admin/prestasi', 'admin/alumni') ? 'true' : 'false' }}" aria-controls="collapseCivitas">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Halaman Civitas</span>
                </a>
                <div id="collapseCivitas"
                    class="collapse {{ Request::is('admin/dosen', 'admin/prestasi', 'admin/alumni') ? 'show' : '' }}"
                    aria-labelledby="headingCivitas" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Halaman Dosen:</h6>
                        <a class="collapse-item {{ request()->routeIs('admin.dosen') ? 'active' : '' }}"
                            href="{{ route('admin.dosen') }}">
                            <i class="fas fa-fw fa-user-tie"></i>
                            <span>Profil Dosen</span>
                        </a>
                        <h6 class="collapse-header">Halaman Mahasiswa:</h6>
                        <a class="collapse-item {{ request()->routeIs('admin.prestasi') ? 'active' : '' }}"
                            href="{{ route('admin.prestasi') }}">
                            <i class="fas fa-fw fa-user-graduate"></i>
                            <span>Prestasi Mahasiswa</span>
                        </a>
                        <h6 class="collapse-header">Halaman Alumni:</h6>
                        <a class="collapse-item {{ request()->routeIs('admin.alumni') ? 'active' : '' }}"
                            href="{{ route('admin.alumni') }}">
                            <i class="fas fa-fw fa-user-alt"></i>
                            <span>Alumni</span>
                        </a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">Halaman Akademik</div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAkademik"
                    aria-expanded="false" aria-controls="collapseAkademik">
                    <i class="fas fa-fw fa-graduation-cap"></i>
                    <span>Akademik</span>
                </a>
                <div id="collapseAkademik"
                    class="collapse {{ Request::is('admin/prodi', 'admin/semester', 'admin/kalender_akademik', 'admin/beasiswa') ? 'show' : '' }}"
                    aria-labelledby="headingAkademik" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Halaman Program Studi:</h6>
                        <a class="collapse-item {{ request()->routeIs('admin.prodi') ? 'active' : '' }}"
                            href="{{ route('admin.prodi') }}">
                            <i class="fas fa-fw fa-book"></i>
                            <span>Program Studi</span>
                        </a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Kurikulum Prodi:</h6>
                        <a class="collapse-item {{ request()->routeIs('admin.semester') ? 'active' : '' }}"
                            href="{{ route('admin.semester') }}">
                            <i class="fas fa-fw fa-file-alt"></i>
                            <span>Semester</span>
                        </a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Kalender Akademik:</h6>
                        <a class="collapse-item {{ request()->routeIs('admin.kalender_akademik') ? 'active' : '' }}"
                            href="{{ route('admin.kalender_akademik') }}">
                            <i class="fas fa-fw fa-calendar"></i>
                            <span>Kalender</span>
                        </a>
                        <h6 class="collapse-header">Beasiswa Akademik:</h6>
                        <a class="collapse-item {{ request()->routeIs('admin.beasiswa') ? 'active' : '' }}"
                            href="{{ route('admin.beasiswa') }}">
                            <i class="fas fa-fw fa-money-bill-alt"></i>
                            <span>Info Beasiswa</span>
                        </a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">Info Vokasi</div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse"
                    data-target="#collapseInfoVokasi" aria-expanded="false" aria-controls="collapseInfoVokasi">
                    <i class="fas fa-fw fa-info-circle"></i>
                    <span>Info Vokasi</span>
                </a>
                <div id="collapseInfoVokasi"
                    class="collapse {{ Request::is('admin/berita', 'admin/pengumuman', 'admin/event') ? 'show' : '' }}"
                    aria-labelledby="headingInfoVokasi" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Berita Vokasi:</h6>
                        <a class="collapse-item {{ request()->routeIs('admin.berita') ? 'active' : '' }}"
                            href="{{ route('admin.berita') }}">
                            <i class="fas fa-fw fa-newspaper"></i>
                            <span>Berita Vokasi</span>
                        </a>
                        <h6 class="collapse-header">Pengumuman Vokasi:</h6>
                        <a class="collapse-item {{ request()->routeIs('admin.pengumuman') ? 'active' : '' }}"
                            href="{{ route('admin.pengumuman') }}">
                            <i class="fas fa-fw fa-bullhorn"></i>
                            <span>Pengumuman</span>
                        </a>
                        <h6 class="collapse-header">Agenda Vokasi:</h6>
                        <a class="collapse-item {{ request()->routeIs('admin.event') ? 'active' : '' }}"
                            href="{{ route('admin.event') }}">
                            <i class="fas fa-fw fa-calendar"></i>
                            <span>Agenda</span>
                        </a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <figure class="img-profile rounded-circle avatar font-weight-bold"
                                    data-initial="{{ Auth::user()->name[0] }}"></figure>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Logout') }}
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('main-content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">

                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('Yakin mau logout?') }}</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">*</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-link" type="button" data-dismiss="modal">{{ __('Batal') }}</button>
                    <a class="btn btn-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>

</html>
