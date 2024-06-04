<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<footer class="footer_area section_padding_130_0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-footer-widget section_padding_0_130">
                    <img src="{{ asset('storage/logos/' . str_replace('public/logos/', '', $profil->logo)) }}"
                        alt="Logo {{ $profil->nama }}" class="footer-logo mb-3" style="max-width: 130px;">
                    <p class="mb-0"><i class="lni-heart mr-1"></i>
                        <a style="color: black;" class="widget-title" href="/">Fakultas Vokasi</a>
                    </p>
                    <div class="copywrite-text mb-5">
                        <p class="mb-0" style="text-align: justify;"><i class="lni-heart mr-1"></i><a class="ml-1"
                                >{!! $profil->alamat !!}</a></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg">
                <div class="single-footer-widget section_padding_0_130">
                    <h5 class="widget-title">Pranala Penting</h5>
                    <div class="footer_menu">
                        <ul>
                            <li><a href="https://www.del.ac.id/?page_id=1006">Tentang Institut Teknologi Del</a></li>
                            <li><a href="https://www.del.ac.id/?page_id=14564">Informasi Beasiswa Institut Teknologi Del</a></li>
                            <li><a href="https://spmb.del.ac.id/">Pendaftaran Mahasiswa Baru</a></li>
                            <li><a href="https://www.del.ac.id/?page_id=7511">Karir</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg">
                <div class="single-footer-widget section_padding_0_130">
                    <h5 class="widget-title">Hubungi Kami</h5>
                    <div class="footer_menu">
                        <ul>
                            <li><a >Kode Pos: {{ $profil->kode_pos }}</a></li>
                            <li><a >Telp : {{ $profil->telepon }}</a></li>
                            <li><a >Email : {{ $profil->email }}</a></li>
                            <li><a >Karir : {{ $profil->karir }}</a></li>
                        </ul>
                        <br>
                        <style>
                            .footer_social_area .fa-instagram {
                                color: purple;
                            }
                        </style>
                        <div class="footer_social_area">
                            <a href="{!! $profil->facebook !!}" data-toggle="tooltip" data-placement="top" title
                                data-original-title="Facebook"><i class="fa fa-facebook text-primary"></i></a>
                            <a href="{!! $profil->twitter !!}" data-toggle="tooltip" data-placement="top" title
                                data-original-title="Twitter"><i class="fa fa-twitter text-info"></i></a>
                            <a href="{!! $profil->youtube !!}" data-toggle="tooltip" data-placement="top" title
                                data-original-title="YouTube"><i class="fa fa-youtube text-danger"></i></a>
                            <a href="{!! $profil->instagram !!}" data-toggle="tooltip" data-placement="top" title
                                data-original-title="Instagram"><i class="fa fa-instagram text-purple"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <p>&copy; 2024 FKVokasi-IT Del. All Rights Reserved | Institut Teknologi Del</p>
    </div>
</footer>
