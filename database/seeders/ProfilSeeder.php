<?php

namespace Database\Seeders;

use App\Models\Profil;
use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profil::create([
            'nama' => '<h1><span style="font-family: georgia, palatino, serif; font-size: 36pt; color: #ffffff;">Insitut Teknologi Del</span></h1><h1>&nbsp;</h1><h1><span style="font-family: georgia, palatino, serif; font-size: 36pt; color: #ffffff;">Fakultas Vokasi</span></h1>',
            'alamat' => '<p style="text-align: justify;">Institut Teknologi Del Jl. Sisingamangaraja, Sitoluama Laguboti, Toba Samosir Sumatera Utara, Indonesia</p>',
            'kode_pos' => 22381,
            'telepon' => '082632331234',
            'email' => 'info@del.ac.id',
            'karir' => 'karir@del.ac.id',
            'logo' => 'public/logos/r32uDu3ubsIsYILywFWTQL9yWjKqTWfxuqA2Ly8r.png',
            'video' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.367330226955!2d99.14605787586032!3d2.383220557381434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e00fdad2d7341%3A0xf59ef99c591fe451!2sInstitut%20Teknologi%20Del!5e0!3m2!1sid!2sid!4v1715324361059!5m2!1sid!2sid\\',
            'peta' => '<p style="text-align: justify;">Temukan Keunggulan dalam Program Studi yang Berfokus, Menyesuaikan Belajar dengan Passion dan Profesi, dan Siap Bersaing di Dunia Kerja dengan Kemampuan Praktis yang Teruji. Bergabunglah di <strong>FAKULTAS VOKASI</strong> dalam Perjalanan Membangun Masa Depan yang gemilang dan <strong>Menuju Indonesia Emas</strong>, dengan Pendidikan <strong>Vokasi</strong> yang Mengutamakan Kualitas, Didukung oleh Jajaran Pengajar Berpengalaman di Bidang Informatika dan Komputer, dan Membuka Peluang melalui Keterlibatan Langsung dari Dunia Usaha dan Industri dalam Menyempurnakan Potensi Anda</p>',
            'kenapa_vokasi' => 'https://web.facebook.com/Institut.Teknologi.Del/',
            'facebook' => 'https://twitter.com/intent/follow?original_referer=https%3A%2F%2Fwww.del.ac.id%2F&ref_src=twsrc%5Etfw%7Ctwcamp%5Ebuttonembed%7Ctwterm%5Efollow%7Ctwgr%5Einstitut_del&region=follow_link&screen_name=institut_del',
            'twitter' => 'https://www.youtube.com/@institutteknologidel1337',
            'youtube' => 'https://www.instagram.com/vokasi.itdel/',
            'instagram' => '2024-05-14 18:19:36',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
