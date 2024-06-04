<div class="col-lg-4">

    <div class="sidebar">

        <h3 class="sidebar-title">Pencarian</h3>
        <div class="sidebar-item search-form">
            <form action="{{ route('event') }}" method="get">
                <input type="text" name="cari" placeholder="Cari Agenda...">
                <button style="background-color: #007BFF; color: #fff;" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End sidebar search formn-->

        <h3 class="sidebar-title">Program Studi</h3>
        <div class="sidebar-item categories">
            <ul>
                @foreach ($prodi as $item)
                    <li style="text-decoration: none; color:black"><a
                            href="/prodi/?q={{ $item->slug }}">{{ $item->nama }} </a></li>
                @endforeach
            </ul>
        </div><!-- End sidebar categories-->

        <h3 class="sidebar-title">Kilas Vokasi</h3>
        <div class="sidebar-item recent-posts">

            @foreach ($news as $new)
                <div class="post-item clearfix">
                    <img src="{{ asset('storage/berita/' . str_replace('public/berita/', '', $new->foto)) }}"
                        alt="" class="img-fluid">
                    <h4 style="text-decoration: none; color:black">
                        <a href="{{ route('berita.read', $new->slug) }}">
                            {{ \Illuminate\Support\Str::limit($new->judul, 60) }}
                        </a>
                    </h4>
                </div>
            @endforeach

        </div><!-- End sidebar recent posts-->


        <!-- Pengumuman -->
        <h3 class="sidebar-title">Pengumuman</h3>
        <div class="sidebar-item recent-posts">
            @foreach ($announcement as $pengumuman)
                <div class="post-item clearfix">
                    <img src="{{ asset('storage/foto_pengumuman/' . str_replace('public/foto_pengumuman/', '', $pengumuman->foto)) }}"
                        alt="" class="img-fluid">
                    <h4 style="text-decoration: none; color:black">
                        <a href="#" data-toggle="modal" data-target="#modal-{{ $pengumuman->id }}">
                            <b style="color: red;">[{{ $pengumuman->keterangan }}]</b>
                            {{ \Illuminate\Support\Str::limit($pengumuman->judul, 60) }}
                        </a>
                    </h4>
                </div>
            @endforeach
            <!-- Pindahkan tombol "Selengkapnya mengenai Pengumuman..." di luar loop -->
            <div class="sidebar-item tags" style="margin-top: 10px;">
                <a href="/pengumuman" class="btn btn-primary btn-sm"
                    style="background-color: #007BFF; color: #fff; border-radius: 20px; padding: 5px 10px; border: none;">Selengkapnya
                    mengenai Pengumuman...</a>
            </div>
        </div><!-- End sidebar recent posts-->


        <h3 class="sidebar-title"><i class="fas fa-link"></i> Link</h3>
        <div class="sidebar-item tags">
            <ul>
                <li><i class="fas fa-caret-right"></i> <a
                        href="https://apipuro.del.ac.id/v1/file/e153b6e1b2b5eb074bc747f953615932">Pedoman
                        Akademik 2021/2022</a></li>
                <li><i class="fas fa-caret-right"></i> <a
                        href="https://apipuro.del.ac.id/v1/file/b7ba4f13314e641b92f3a08e6ffa6bea">Kalender
                        Akademik T.A. 2023/2024</a></li>
                <li><i class="fas fa-caret-right"></i> <a
                        href="https://apipuro.del.ac.id/v1/file/f4526f134dc70f9568d2ecbfe0471098">Kalender
                        Kegiatan Kemahasiswaan 2022/2023</a></li>
                <li><i class="fas fa-caret-right"></i> <a
                        href="https://apipuro.del.ac.id/v1/file/bb8a366791a6e01f81af015816a72caf">Pedoman
                        PKM Institut Teknologi Del</a></li>
                <li><i class="fas fa-caret-right"></i> <a href="http://puskom.del.ac.id/">Peraturan Penggunaan Fasilitas
                        Laboratorium
                        Komputasi</a></li>
                <li><i class="fas fa-caret-right"></i> <a
                        href="https://apipuro.del.ac.id/v1/file/7ac27730a659c0a85d9c56bfa25b1e0e">Surat
                        Edaran Penerima Beasiswa Prestasi dan Penghargaan 2021</a></li>
                <li><i class="fas fa-caret-right"></i> <a
                        href="https://apipuro.del.ac.id/v1/file/7beab51e372ab8a676af1c3d9c10360a">Addendum
                        SK Rektor Tentang Biaya Pendaftaran, Biaya Pendidikan Dan Biaya Wisuda TA
                        2020/2021</a></li>
                <li><i class="fas fa-caret-right"></i> <a href="https://cis.del.ac.id/dashboard/link/view">Referensi
                        Perpustakaan:
                        Jurnal / Paper / Book</a></li>
                <li><i class="fas fa-caret-right"></i> <a
                        href="https://apipuro.del.ac.id/v1/file/561e23644092e75531d32b3ca59d6fc3">SOP
                        Pemakaian Entrance Hall oleh Mahasiswa IT Del</a></li>
                <li><i class="fas fa-caret-right"></i> <a
                        href="https://apipuro.del.ac.id/v1/file/f4cf524c658b13d1dd39a2ace59baa24">Surat
                        Edaran WR 1 Manajemen Komplain Mahasiswa</a></li>
                <li><i class="fas fa-caret-right"></i> <a
                        href="https://apipuro.del.ac.id/v1/file/1c93e1a9ea7542238cb2534d8cc1d91e">Surat
                        Edaran WR1 tentang Pengelolaan Waktu dengan Baik dan Ijin Keluar Kampus</a>
                </li>
                <li><i class="fas fa-caret-right"></i> <a
                        href="https://apipuro.del.ac.id/v1/file/2a994858fe11012c42f62dfc8ef090eb">Pedoman
                        Penetapan Sanksi Pelanggaran Mahasiswa</a></li>
                <li><i class="fas fa-caret-right"></i> <a
                        href="https://cis.del.ac.id/artk/artikel-post/view?q=B1EV3ReTYkvmNUFg-CD7X1Vr_BcgH-O4nYTUaH3J1Yo">Dokumen
                        User Manual Aplikasi IT Del</a></li>
                <li><i class="fas fa-caret-right"></i> <a
                        href="https://apipuro.del.ac.id/v1/file/1dfb80eb87b3122dd4607bec6f4437be">Panduan
                        Sistem Kredit Kegiatan Mahasiswa (SKKM)</a></li>
            </ul>
        </div><!-- End sidebar tags-->


    </div><!-- End sidebar -->

</div><!-- End blog sidebar -->
