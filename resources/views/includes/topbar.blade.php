<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
        <div class="contact-info d-flex align-items-center"> <i class="bi bi-envelope"></i> <a
                href="mailto:{{ $profil->email }}">{{ $profil->email }}</a> <i class="bi bi-phone"></i>
            {{ $profil->telepon }} </div>
        <div class="d-none d-lg-flex social-links align-items-center"> <a class="nav-link scrollto"
                href="https://www.del.ac.id/">Institut Teknologi Del</a> <span class="divider" style="margin: 0 10px;">|</span>
            <a style="margin-left: -12px;" class="nav-link scrollto {{ Request::is('berita') ? 'active' : '' }}" href="/berita">Berita Vokasi</a><span class="divider" style="margin: 0 10px;">|</span>
            <a style="margin-left: -12px;" class="nav-link scrollto {{ Request::is('event') ? 'active' : '' }}" href="/event">Agenda</a>
            @if ($profil->twitter)
                <a href="{{ $profil->twitter }}" class="twitter"><i class="bi bi-twitter"></i></a>
                @endif @if ($profil->facebook)
                    <a href="{{ $profil->facebook }}" class="facebook"><i class="bi bi-facebook"></i></a>
                    @endif @if ($profil->youtube)
                        <a href="{{ $profil->youtube }}" class="youtube"><i class="bi bi-youtube"></i></a>
                        @endif @if ($profil->instagram)
                            <a href="{{ $profil->instagram }}" class="instagram"><i class="bi bi-instagram"></i></a>
                        @endif <a href="https://www.linkedin.com/school/institut-teknologi-del/"
                            class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
    </div>
</div> <!-- ======= Akhir Top Bar ======= -->
