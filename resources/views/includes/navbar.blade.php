<nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
        <li><a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a></li>
        <li
            class="dropdown {{ Request::is('tentang') || Request::is('kata_sambutan_dekan') || Request::is('visimisi') || Request::is('struktur_organisasi') || Request::is('tujuanvokasi') ? 'active' : '' }}">
            <a href="#"
                class="nav-link scrollto {{ Request::is('tentang') || Request::is('kata_sambutan_dekan') || Request::is('visimisi') || Request::is('struktur_organisasi') || Request::is('tujuanvokasi') ? 'active' : '' }}">Profil
                <i class="fas fa-caret-down"></i></a>
            <ul>
                <li><a class="nav-link scrollto {{ Request::is('tentang') ? 'active' : '' }}" href="/tentang">Tentang
                        Vokasi</a></li>
                <li><a class="nav-link scrollto {{ Request::is('kata_sambutan_dekan') ? 'active' : '' }}"
                        href="/kata_sambutan_dekan">Kata Sambutan Dekan Vokasi</a></li>
                <li><a class="nav-link scrollto {{ Request::is('visimisi') ? 'active' : '' }}" href="/visimisi">Visi
                        Misi Vokasi</a></li>
                <li><a class="nav-link scrollto {{ Request::is('tujuanvokasi') ? 'active' : '' }}"
                        href="/tujuanvokasi">Tujuan Vokasi</a></li>
                <li><a class="nav-link scrollto {{ Request::is('struktur_organisasi') ? 'active' : '' }}"
                        href="/struktur_organisasi">Struktur Organisasi</a></li>
            </ul>
        </li>


        <li
            class="dropdown {{ Request::is('dosen*') || Request::is('alumni') || Request::is('prestasi*') ? 'active' : '' }}">
            <a href="#"
                class="nav-link scrollto {{ Request::is('dosen*') || Request::is('alumni') || Request::is('prestasi*') ? 'active' : '' }}">Civitas
                <i class="fas fa-caret-down"></i>
            </a>
            <ul>
                <li><a class="nav-link scrollto {{ Request::is('dosen') ? 'active' : '' }}" href="/dosen">Dosen
                        Vokasi</a></li>
                <li class="dropdown {{ Request::is('prestasi*') ? 'active' : '' }}">
                    <a href="#" class="nav-link scrollto">Mahasiswa Vokasi <i class="fas fa-caret-right"></i></a>
                    <ul>
                        <li><a class="nav-link scrollto {{ Request::is('prestasi') ? 'active' : '' }}"
                                href="/prestasi">Prestasi Mahasiswa Vokasi</a></li>
                        <!-- Tambahkan item dropdown untuk prestasi mahasiswa lainnya di sini jika diperlukan -->
                    </ul>
                </li>
                <li><a class="nav-link scrollto {{ Request::is('alumni') ? 'active' : '' }}" href="/alumni">Alumni</a>
                </li>
            </ul>
        </li>

        <li
            class="dropdown {{ Request::is('prodi*') || Request::is('kurikulum*') || Request::is('prestasi') || Request::is('beasiswa') || Request::is('kalender_akademik') ? 'active' : '' }}">
            <a href="#"
                class="nav-link scrollto {{ Request::is('prodi*') || Request::is('kurikulum*') || Request::is('beasiswa') || Request::is('kalender_akademik') ? 'active' : '' }}">Akademik
                <i class="fas fa-caret-down"></i></a>
            <ul>
                <li class="dropdown {{ Request::is('prodi*') ? 'active' : '' }}">
                    <a href="#" class="nav-link scrollto {{ Request::is('prodi*') ? 'active' : '' }}">Program
                        Studi <i class="fas fa-caret-right"></i></a>
                    <ul>
                        @foreach ($prodi as $item)
                            <li><a href="/prodi/?q={{ $item->slug }}">{{ $item->nama }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="dropdown {{ Request::is('kurikulum*') ? 'active' : '' }}">
                    <a href="#"
                        class="nav-link scrollto {{ Request::is('kurikulum*') ? 'active' : '' }}">Kurikulum Akademik <i
                            class="fas fa-caret-right"></i></a>
                    <ul>
                        @foreach ($prodi as $item)
                            <li><a href="/kurikulum/?q={{ $item->slug }}">{{ $item->nama }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a class="nav-link scrollto {{ Request::is('kalender_akademik') ? 'active' : '' }}"
                        href="/kalender_akademik">Kalender Akademik </a></li>
                <li><a class="nav-link scrollto {{ Request::is('beasiswa') ? 'active' : '' }}"
                        href="/beasiswa">Beasiswa Akademik</a></li>
            </ul>
        </li>
        <li
            class="dropdown {{ Request::is('prestasi') || Request::is('event') || Request::is('berita') || Request::is('pengumuman') ? 'active' : '' }}">
            <a href="#"
                class="nav-link scrollto {{ Request::is('event') || Request::is('berita') || Request::is('pengumuman') ? 'active' : '' }}">Info
                Vokasi
                <i class="fas fa-caret-down"></i></a>
            <ul>
                <li><a class="nav-link scrollto {{ Request::is('berita') ? 'active' : '' }}" href="/berita">Berita
                        Vokasi</a></li>
                <li><a class="nav-link scrollto {{ Request::is('pengumuman') ? 'active' : '' }}"
                        href="/pengumuman">Pengumuman Vokasi</a></li>
                <li><a class="nav-link scrollto {{ Request::is('event') ? 'active' : '' }}" href="/event">Agenda</a>
                </li>
            </ul>
        </li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>
