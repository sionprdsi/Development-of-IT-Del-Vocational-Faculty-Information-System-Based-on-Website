-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Waktu pembuatan: 04 Jun 2024 pada 09.22
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fkvokasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `graduation_year` year(4) NOT NULL,
  `testimonial` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`id`, `name`, `image`, `work_at`, `graduation_year`, `testimonial`, `created_at`, `updated_at`) VALUES
(1, 'Lilis Pardosi Str.Kom', 'public/image/S2Rm3OG63H7X61jJRzHgYNvR8aOer2chh16Fk2Lc.jpg', 'Perusahaan Shopee Sebagai Fullstack Developer', 2023, 'Saya sangat berterima kasih kepada Fakultas Vokasi Institut Teknologi Del atas ilmu dan keterampilan yang diberikan selama studi saya. Pengalaman belajar di sana telah mempersiapkan saya dengan baik untuk menghadapi dunia kerja, termasuk posisi sebagai Fullstack Developer di Perusahaan Shopee. Saya merasa bangga menjadi bagian dari alumni Fakultas Vokasi Institut Teknologi Del.', '2024-06-02 18:06:31', '2024-06-04 00:20:10'),
(2, 'Riana Simanjuntak', 'public/image/dj39VNZlrBZaemJPWeB1kdmcnLSHEOrPO0edyxbY.jpg', 'Fullstack Developer di Perusahaan Shopee', 2023, 'Saya ingin menyampaikan rasa terima kasih yang sebesar-besarnya kepada Fakultas Vokasi Institut Teknologi Del atas pengalaman belajar yang luar biasa selama masa kuliah saya. Didukung oleh para dosen yang berkompeten dan kurikulum yang relevan dengan dunia kerja, saya merasa siap dan percaya diri ketika memasuki dunia industri. Selain itu, pendidikan karakter yang ditekankan oleh fakultas, seperti MarTuhan-Marroha-Marbisuk (3M), telah membantu saya dalam mengembangkan softskills yang sangat penting dalam karier saya sebagai Fullstack Developer di Perusahaan Shopee. Saya bangga menjadi bagian dari alumni Fakultas Vokasi Institut Teknologi Del yang telah memberikan dasar yang kuat bagi kesuksesan saya saat ini.', '2024-06-02 18:07:05', '2024-06-04 00:21:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_beasiswa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul_beasiswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_beasiswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_beasiswa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beasiswa`
--

INSERT INTO `beasiswa` (`id`, `foto_beasiswa`, `judul_beasiswa`, `jenis_beasiswa`, `deskripsi_beasiswa`, `created_at`, `updated_at`) VALUES
('a022fa55-7ed6-4de2-8ece-f6607f22cc76', 'public/foto_beasiswa/VJ6h9yeD77RpFQVGgX5NQVkUJXpCPveKpPkqTOYR.png', 'Beasiswa Institut Teknologi Del', 'Beasiswa Prestasi', 'Beasiswa Prestasi adalah jenis beasiswa yang diperoleh dari nilai IPK akhir semester per tahun ajaran yang diakumulasikan mendapat voucher Beasiswa SPP berdasarkan ketentuan akademik dari IPK perihal dana beasiswa prestasi. Beasiswa ini berlaku bagi seluruh mahasiswa IT Del setiap semester.', '2024-06-03 20:41:58', '2024-06-03 20:41:58'),
('9f7a790b-44ec-432d-b098-ddef8a2ab0b0', 'public/foto_beasiswa/vw5T2wAgRO8vR6lZCowRFwcEOhSSljJEj16cRihY.jpg', 'Beasiswa Institut Teknologi Del', 'Beasiswa KIP Kuliah', 'Beasiswa Bidikmisi/KIP Kuliah adalah jenis beasiswa yang diberikan oleh Kemendikbud melalui LLDikti 1 Medan. Tahap seleksi beasiswa dilakukan dengan calon peserta beasiswa yang telah mendaftarkan diri sebelumnya dari sekolah asal SMA sebelumnya dan kemudian diseleksi oleh pihak kampus untuk seleksi administrasi berkas-berkas untuk disampaikan kepada pihak LLDikti 1 Medan. Adapun jumlah dana beasiswa yang diberikan berupa SPP/biaya kuliah sebesar 2.400.000/semester dan uang saku sebesar Rp 4.200.000/semester (biaya dapat berubah sewaktu-waktu berdasarkan surat edaran ketentuan dari pihak Kemendikbud setiap tahunnya). Pemberian beasiswa diberikan berdasarkan kuota yang diterima setiap tahunnya oleh pihak kampus untuk selanjutnya diseleksi dan ditetapkan sebagai penerima beasiswa. Beasiswa ini hanya berlaku bagi mahasiswa program Diploma terakreditasi minimal B dan program Sarjana minimal terakreditasi C.', '2024-06-03 20:43:57', '2024-06-03 20:43:57'),
('150bd6ed-fd08-4928-a184-7324c07645d0', 'public/foto_beasiswa/OefREKcKlwDnbM3u6vUgv4mmWbCMkPjblDUlr1ua.jpg', 'Beasiswa Institut Teknologi Del', 'Beasiswa PPA (Peningkatan Prestasi Akademik)', 'Beasiswa PPA adalah jenis beasiswa prestasi akademik (berdasarkan IPK tertinggi) yang diberikan kepada mahasiswa terpilih seleksi setiap tahunnya oleh pihak kampus. Adapun jumlah dana beasiswa yang diberikan berupa uang saku sebesar Rp.2.400.000,- /semester (biaya dapat berubah sewaktu-waktu berdasarkan surat edaran ketentuan dari pihak LLDikti 1 Medan setiap tahunnya). Pemberian beasiswa diberikan berdasarkan kuota yang diterima setiap tahunnya oleh pihak kampus untuk selanjutnya diseleksi dan ditetapkan sebagai penerima beasiswa. Beasiswa ini berlaku bagi seluruh mahasiswa khusus tingkat I, II dan III (prodi sarjana, tidak berlaku untuk mahasiswa tingkat akhir diploma dan sarjana).', '2024-06-03 20:46:47', '2024-06-03 20:46:47'),
('2375643f-7186-4ea0-96f2-879a20654def', 'public/foto_beasiswa/c6ODAdEXSCdl9LqXmffh6uppKXq9yxmRpXRwNxtf.jpg', 'Beasiswa Institut Teknologi Del', 'Beasiswa Sea Scholarship', 'Beasiswa Sea Scholarship adalah jenis beasiswa yang diberikan oleh pihak PT. Garena Indonesia yang bergerak pada bidang perusahaan. Adapun beasiswa yang diberikan berupa biaya SPP per semester dan uang saku. Seleksi beasiswa setiap tahunnya dilakukan oleh pihak terkait secara langsung melalui seleksi berkas, psikotes dan wawancara via online/onsite. Beasiswa ini berlaku bagi seluruh mahasiswa yang sudah menjalani minimal 2 semester selama perkuliahan di IT Del.', '2024-06-03 20:48:05', '2024-06-03 20:48:05'),
('8a89f51f-1ced-4f8a-9a9c-f41e6af7b4b8', 'public/foto_beasiswa/FH2OofQePgghCaXc7Kwqwu42KeAQdDGZ5IBnsA9s.jpg', 'Beasiswa Institut Teknologi Del', 'Beasiswa Alumni', 'Beasiswa Alumni adalah jenis beasiswa yang diberikan oleh ikatan mahasiswa alumni Del. Adapun beasiswa yang diberikan berupa bantuan dana SPP sebesar 50% per semester disesuaikan setiap tahunnya berdasarkan dana SPP masing-masing mahasiswa penerima beasiswa berdasarkan angkatan tahun masuk perkuliahan. Seleksi dilakukan secara administrasi berkas dan wawancara.', '2024-06-03 20:48:29', '2024-06-03 21:34:30'),
('cdade3a8-4229-40b4-b051-80ad1f2085cf', 'public/foto_beasiswa/LKs886B0u6Md05SNWebg563rdVCRfU65sh36oiUP.jpg', 'Beasiswa PT. Toba Pulp Lestari Tbk (TPL)', 'Beasiswa dari PT. Toba Pulp Lestari Tbk (TPL)', 'Beasiswa PT Toba Pulp Lestari Tbk (TPL) adalah program beasiswa yang ditujukan untuk mendukung pendidikan mahasiswa berprestasi. Pada tahun ini, sebanyak 24 mahasiswa dari Institut Teknologi Del (IT Del) angkatan 2022 berhasil meraih beasiswa tersebut. Sebagai bentuk apresiasi dan simbolis penyerahan beasiswa, pihak TPL akan mengadakan acara seremonial pemberian sertifikat kepada para penerima beasiswa. Selain itu, dalam acara tersebut juga akan dilakukan penandatanganan Nota Kesepahaman (MoU) antara TPL dan IT Del, sebagai langkah awal kerja sama yang berkelanjutan antara kedua pihak. Program beasiswa ini diharapkan dapat memberikan motivasi dan dukungan kepada para mahasiswa untuk terus berprestasi dalam pendidikan mereka.', '2024-06-03 20:51:23', '2024-06-03 21:34:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `judul`, `foto`, `slug`, `konten`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 'Tiga Mahasiswa FAKULTAS VOKASI Institut Teknologi Del Lolos Program IIVOSMA (Indonesian International Vocation Student Mobility Award) 2022', 'public/berita/FSYsm1oP0XKphPt1r0ifrRaswXJBJwdcK96Fc4gM.png', 'tiga-mahasiswa-fakultas-vokasi-institut-teknologi-del-lolos-program-iivosma-indonesian-international-vocation-student-mobility-award-2022', '<p>Selamat kepada Fakultas Vokasi IT Del atas lolosnya 3 mahasiswa untuk mengikuti program IIVOSMA 2022 (Indonesian International Vocation Student Mobility Award) tahun 2022. IIVOSMA merupakan program yang diselenggarakan oleh Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi untuk memfasilitasi mahasiswa vokasi jenjang D3 dan D4 belajar di industri luar negeri selama 1 semester. Ketiga mahasiswa akan mengikuti studi pada bidang Information Technology di berbagai negara pada Semester 5 T.A 2022/2023.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>1. Risky Siahaan, IU Applied Science Germany</strong></p>\r\n<p><strong>2. Matthew Alfredo, Hanbat National University, Korea Selatan</strong></p>\r\n<p><strong>3. Joshua Silitonga, University Tun Hussein Onn Malaysia</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Pendidikan vokasi merupakan jenjang pendidikan pertama sejak Institut Teknologi Del berdiri pada tahun 2001 (dahulu bernama Politeknik Informatika Del). Pendidikan vokasi di IT Del telah menghasilkan ribuan lulusan yang kini tersebar di berbagai industri baik di dalam maupun luar negeri. Selain bekerja di startup-startup unicorn di Indonesia, di perusahaan nasional dan multinasional, lulusan pendidikan vokasi IT Del banyak berkontribusi dalam pengembangan daerah sebagai PNS di berbagai instansi di level kementerian dan pemerintah daerah.</p>\r\n<p>&nbsp;</p>\r\n<p>Vokasi merupakan pendidikan tinggi yang lebih terfokus pada praktik kerja yang dapat menunjang keahlian di bidang studi tertentu. Program vokasi ini bertujuan mempersiapkan alumninya menjadi tenaga yang siap kerja dan mampu bersaing secara global di Dunia Usaha dan Dunia Industri (DUDI). Ada empat jenjang pendidikan mulai dari D1, D2, D3, dan D4. Di Institut Teknologi Del sendiri terdapat 3 program studi vokasi yaitu:</p>\r\n<p>1. D4 (Sarjana Terapan) Teknologi Rekayasa Perangkat Lunak</p>\r\n<p>2. D3 Teknologi Informasi</p>\r\n<p>3. D3 Teknologi Komputer</p>\r\n<p>&nbsp;</p>\r\n<p>Ketiga program studi vokasi di IT Del telah terakreditasi B dari BAN-PT. Bahkan setelah menyelesaikan studi di jenjang D4, lulusan dapat langsung melanjutkan studi ke jenjang magister, karena Diploma (D4) atau disebut juga Sarjana Terapan adalah jenjang yang setara dengan S1.</p>\r\n<p>&nbsp;</p>\r\n<p>Beberapa keunggulan dari pendidikan vokasi adalah: belajar di program studi yang spesifik, belajar sesuai minat dan profesi yang diinginkan, siap kerja karena dibekali kemampuan praktik yang tinggi, sehingga lulusan pendidikan vokasi banyak dibutuhkan perusahaan.</p>\r\n<p>&nbsp;</p>\r\n<p>Ayo segera daftarkan dirimu ke program studi yang ada di Fakultas vokasi: Sarjana Terapan (D4) Teknologi Rekayasa Perangkat Lunak, D3 Teknologi Informasi, D3 Teknologi Komputer, jadilah bagian dari keluarga besar Fakultas Vokasi IT Del.</p>\r\n<p>&nbsp;</p>', '2022-06-10', '2024-05-14 11:26:41', '2024-05-15 11:09:58'),
(2, 'Penandatanganan Perjanjian Kerjasama Fakultas Vokasi IT Del dan SMK Negeri 1 Lumbanjulu', 'public/berita/MTnmQELbMMpXyTE4aIoXDA9IOrrnhfSxL84hxIxs.jpg', 'penandatanganan-perjanjian-kerjasama-fakultas-vokasi-it-del-dan-smk-negeri-1-lumbanjulu', '<p>Pada hari Rabu, 31 Januari 2024 telah dilaksanakan penandatanganan Perjanjian Kerja Sama (PKS) antara Fakultas Vokasi, Institut Teknologi Del dan SMK Negeri 1 Lumbanjulu tentang Kerjasama Penguji Eksternal Uji Kompetensi Keahlian (UKK) Praktek. Kerjasama ini meliputi pelaksanaan Uji Kompetensi, Penyiapan Materi Uji Kompetensi, dan Penerbitan Sertifikat Uji Kompetensi.</p>\r\n<p>Penandatanganan Kerjasama ini dilakukan oleh Ibu Riyanthi Angrainy Sianturi, S.Sos., M.Ds (Dekan Fakultas Vokasi IT Del) dan Bapak Drs. Mutiha Hutajulu, M.Pd (Kepala Sekolah SMA Negeri 1 Lumbanjulu) dan turut hadir juga Bapak Dr. Arnaldo Marulitua Sinaga, ST., M.InfoTech (Rektor IT Del) dan Bapak Humasak Tommy Argo Simanjuntak, ST., M.ISD (Wakil Rektor Bidang Kemitraan, Inovasi dan Kewirausahaan IT Del).</p>\r\n<p>&nbsp;</p>', '2024-02-12', '2024-05-14 11:31:23', '2024-05-15 11:08:08'),
(3, 'Monitoring dan Evaluasi (Monev) Internal Program Matching Fund (MF) Vokasi Tahun 2023', 'public/berita/Gi9GUjIEitRGfG53ff31kuu1n73Ww0tdgdztvp4c.jpg', 'monitoring-dan-evaluasi-monev-internal-program-matching-fund-mf-vokasi-tahun-2023', '<p>Sehubungan dengan akan dilaksanakannya kegiatan Monitoring dan Evaluasi (Monev) Program Matching Fund (MF) Vokasi oleh Direktorat Akademik Pendidikan Tinggi Vokasi, pada hari ini Senin tanggal 16 Oktober 2023, telah dilaksanakan Monev Internal Program Matching Fund (MF) Vokasi Tahun 2023 kepada tim penerima pendanaan Matching Fund 2023 dari Institut Teknologi Del, diantaranya:</p>\r\n<p>&nbsp;</p>\r\n<p>1. Nama :<strong> Ardiles Sinaga </strong></p>\r\n<p>Judul : <strong>Pengembangan Sistem Informasi Pengelolaan Sampah Rumah Tangga Berbasis Teknologi</strong></p>\r\n<p>&nbsp;</p>\r\n<p>2. Nama : <strong>Marojahan Mula Timbul Sigiro </strong></p>\r\n<p>Judul : <strong>Pemuktahiran Aplikasi Pelanggan Air Bersih Terintegrasi pada Dinas Perumahan dan Kawasan Permukiman di Kabupaten Humbang Hasundutan</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Acara Monev internal ini dilaksanakan mulai pukul 10.00 WIB hingga selesai bertempat di GD 512 IT Del. Kegiatan ini dihadiri oleh Ketua dan anggota tim, Reviewer, dan tim LPPM IT Del. Pada sesi Monev, Ketua pelaksana MF melaksanakan presentasi laporan kemajuan masing-masing. Kemudian pada sesi diskusi, Reviewer memberikan beberapa pertanyaan dan beberapa masukan untuk laporan yang telah dipresentasikan. Di akhir pertemuan, Reviewer dan LPPM berharap kegiatan Matching Fund dapat terlaksana dengan baik dan masukan-masukan dari Reviewer dapat menjadi masukan untuk perbaikan laporan yang akan disubmit oleh masing-masing tim.</p>', '2024-10-17', '2024-05-14 12:33:21', '2024-05-15 11:06:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosens`
--

CREATE TABLE `dosens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prodi_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tentang` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prestasi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publikasi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengalaman_kerja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keahlian` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengabdian_masyarakat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_sosial` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nidn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosens`
--

INSERT INTO `dosens` (`id`, `prodi_id`, `nama`, `gambar`, `tentang`, `jabatan`, `pendidikan`, `prestasi`, `publikasi`, `pengalaman_kerja`, `keahlian`, `pengabdian_masyarakat`, `media_sosial`, `nidn`, `created_at`, `updated_at`) VALUES
(1, 1, 'Riyanthi Angrainy Sianturi, S.Sos., M.Ds.', 'public/gambar/hXxFm2dNJy1gNTaS90VqzYno58dn0TlUQyg8Kahk.jpg', '<p style=\"text-align: justify;\">Menyelesaikan gelar Magister Desain dari Institut Teknologi Bandung pada tahun 2015 dengan fokus pada Desain Komunikasi Visual dan Desitination Branding, serta meraih gelar Sarjana Komunikasi dari Universitas Sumatera Utara pada tahun 2010 dengan keahlian dalam Komunikasi dan Fotografi, serta Diploma Sistem Informasi dari Politeknik Informatika Del pada tahun 2006 dengan spesialisasi dalam Software Engineering dan Web App, telah mendapatkan pengalaman serta keahlian yang luas dalam bidang desain dan teknologi informasi.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">Sebagai seorang dekan di Fakultas Vokasi Institut Teknologi Del (IT Del) sejak November 2021, saya telah memimpin dengan penuh dedikasi. Sebelumnya, saya juga telah menjabat sebagai Kepala Divisi Inovasi dan Kewirausahaan IT Del sejak Juli 2020, serta Kepala Pusat Pengembangan Karir dan Hubungan Alumni IT Del dari tahun 2017 hingga Februari 2021. Selain itu, saya juga telah menjadi dosen di bidang UI/UX, Human-Computer Interaction, dan Technopreneurship sejak tahun 2011 hingga saat ini. Keterampilan saya meliputi human-computer interaction, pengembangan wirausaha, pemecahan masalah dengan design thinking, dan penerapan user experience design.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">Pengalaman saya tidak hanya terbatas pada lingkungan akademis, tetapi juga mencakup kerja sama dengan organisasi non-pemerintah internasional. Sebagai Junior Data &amp; Information Specialist di USAID Decentralized Basic Education 1 dari tahun 2008 hingga 2010, saya bertanggung jawab atas pengelolaan data di wilayah provinsi Sumatera Utara dan menyelenggarakan pelatihan dalam penggunaan aplikasi yang dikembangkan oleh DBE1. Selain itu, sebagai Junior Programmer &amp; Trainer di Malteser International dari tahun 2006 hingga 2008, saya terlibat dalam pengembangan Sistem Informasi Puskesmas di Provinsi Nanggroe Aceh Darussalam dan melatih staf serta dokter di berbagai daerah dalam penggunaan sistem tersebut.</p>', 'Dekan Fakultas Vokasi', '<ul>\r\n<li style=\"text-align: justify;\"><strong>Institut Teknologi Bandung, Magister Desain</strong>, 2015<br /><em>Desain Komunikasi Visual, Desitination Branding</em></li>\r\n<li style=\"text-align: justify;\"><strong>Universitas Sumatera Utara, Sarjana Komunikasi</strong>, 2010<br /><em>Ilmu Komunikasi</em></li>\r\n<li style=\"text-align: justify;\"><strong>Politeknik Informatika Del, Diploma Sistem Informasi</strong>, 2006<br /><em>Software Engineering, Web App</em>&nbsp;<em>Development</em></li>\r\n</ul>', '<p style=\"text-align: justify;\"><strong>SERTIFIKASI KOMPETENSI</strong><br />- Agile Scrum Foundation, 2021 | The basics of Agile principles and Scrum methodology | Penyelenggara: EXIN</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>PENGHARGAAN</strong><br />- Dosen Berprestasi Institut Teknologi Del</p>\r\n<p style=\"text-align: justify;\">- 2023 | Prestasi pada pelaksanaan tridarma: pendidikan, penelitian dan pengabdian kepada masyarakat.</p>\r\n<p style=\"text-align: justify;\">- 2021 | Prestasi pada pelaksanaan tridarma.</p>', '<p style=\"text-align: justify;\"><strong>1.Desain Arsitektur Virtualisasi Pengembangan Sistem Informasi Manajemen Pengelolaan Sampah Rumah Tangga pada Bank Sampah Berbasis Container Docker</strong>, Jurnal Sebatik. <a href=\"https://jurnal.wicida.ac.id/index.php/sebatik/article/view/2405\" target=\"_new\" rel=\"noreferrer\">https://jurnal.wicida.ac.id/index.php/sebatik/article/view/2405</a></p>\r\n<p>&nbsp;</p>\r\n<p><strong>2. Analysis and The Preliminary Design for Backend Technology of Disaster Management Information System</strong>, 2023 IEEE International Conference on Data and Software Engineering (ICoDSE), 7-8 September 2023. <a href=\"https://ieeexplore.ieee.org/document/10291181\" target=\"_new\" rel=\"noreferrer\">https://ieeexplore.ieee.org/document/10291181</a></p>\r\n<p>&nbsp;</p>\r\n<p><strong>3. Development of Signer Portal for Digital Products by Using Iterative Model at PT RST</strong>, 2022 Seventh International Conference on Informatics and Computing (ICIC), 8-9 Desember 2022. <a href=\"https://ieeexplore.ieee.org/document/10007002\" target=\"_new\" rel=\"noreferrer\">https://ieeexplore.ieee.org/document/10007002</a></p>\r\n<p>&nbsp;</p>\r\n<p><strong>4. Development of Tourist Village Website to Increase Tourism in Lake Toba</strong>, The IJICS (International Journal of Informatics and Computer Science). <a href=\"https://ejurnal.stmik-budidarma.ac.id/index.php/ijics/article/view/4043\" target=\"_new\" rel=\"noreferrer\">https://ejurnal.stmik-budidarma.ac.id/index.php/ijics/article/view/4043</a></p>\r\n<p>&nbsp;</p>\r\n<p><strong>5. Perancangan Pengujian Fungsional dan Non Fungsional Aplikasi SIAPPARA di Kabupaten Humbang Hasundutan</strong>, J-Icon: Jurnal Komputer dan Informatika Universitas Nusa Cendana. <a href=\"https://ejurnal.undana.ac.id/index.php/jicon/article/view/4706\" target=\"_new\" rel=\"noreferrer\">https://ejurnal.undana.ac.id/index.php/jicon/article/view/4706</a></p>\r\n<p>&nbsp;</p>\r\n<p><strong>6. Perancangan Aplikasi &ldquo;SIAPPARA&rdquo; untuk Pelaporan Setoran Retribusi Pasar Kabupaten Humbang Hasundutan</strong>, J-Icon: Jurnal Komputer dan Informatika Universitas Nusa Cendana. <a href=\"https://ejurnal.undana.ac.id/index.php/jicon/article/view/5256\" target=\"_new\" rel=\"noreferrer\">https://ejurnal.undana.ac.id/index.php/jicon/article/view/5256</a></p>\r\n<p>&nbsp;</p>\r\n<p><strong>7. Komersialisasi e-Marketplace Berbasis Lokal: Aplikasi Web tobazone.com Pengembangan e-Marketplace berbasis lokal untuk UMKM pariwisata di Kawasan Danau Toba</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>8. Literasi Media Digital Pada Komunitas Pariwisata di Kawasan Danau Toba</strong>, Jurnal Magister Pariwisata (JUMPA) Universitas Udayana. <a href=\"https://ojs.unud.ac.id/index.php/jumpa/article/view/76040\" target=\"_new\" rel=\"noreferrer\">https://ojs.unud.ac.id/index.php/jumpa/article/view/76040</a></p>\r\n<p>&nbsp;</p>\r\n<p><strong>9. Pengembangan Aplikasi Gamifikasi untuk Pendidikan Anak Usia Dini</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>10. Pengembangan aplikasi mobile untuk pendukung pembelajaran anak usia dini dengan gamifikasi</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>11. Penerapan User Experience Design dalam Pengembangan Aplikasi Mobile Markopi</strong>, Jurnal Teknologi Informasi dan Ilmu Komputer (JTIIK) Universitas Brawijaya. <a href=\"https://jtiik.ub.ac.id/index.php/jtiik/article/view/2840\" target=\"_new\" rel=\"noreferrer\">https://jtiik.ub.ac.id/index.php/jtiik/article/view/2840</a></p>\r\n<p>&nbsp;</p>\r\n<p><strong>12. Applying User Centered design to Mobile Application for Children</strong>, Journal of Physics: Conference Series. <a href=\"https://iopscience.iop.org/article/10.1088/1742-6596/1175/1/012094\" target=\"_new\" rel=\"noreferrer\">https://iopscience.iop.org/article/10.1088/1742-6596/1175/1/012094</a></p>\r\n<p>&nbsp;</p>\r\n<p><strong>13. Kajian Identitas Branding Samosir (Studi Kasus: Visit Samosir Year 2014)</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>14. Kajian visual branding pariwisata kabupaten Samosir</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>15. Pelaksanaan Rencana Operasional Branding Samosir</strong>, Jurnal Visualita Universitas Komputer Indonesia. <a href=\"https://ojs.unikom.ac.id/index.php/visualita/article/view/1085\" target=\"_new\" rel=\"noreferrer\">https://ojs.unikom.ac.id/index.php/visualita/article/view/1085</a></p>\r\n<p>&nbsp;</p>', '<ol>\r\n<li><strong>Institut Teknologi Del (IT Del)</strong>\r\n<ul>\r\n<li>Dekan Fakultas Vokasi IT Del,&nbsp;<em>November 2021 &ndash; sekarang</em></li>\r\n<li>Kepala Divisi Inovasi dan Kewirausahaan IT Del,&nbsp;<em>Juli 2020 &ndash; Juli 2022</em></li>\r\n<li>Kepala Pusat Pengembangan Karir dan Hubungan Alumni IT Del,&nbsp;<em>2017 &ndash; Februari 2021</em></li>\r\n<li>Dosen bidang UI/UX, Human-Computer Interaction, Technopreneurship,&nbsp;<em>2011 &ndash; sekarang</em><br />Dosen di program studi Diploma 4 Teknologi Rekayasa Perangkat Lunak. Bidang keahlian pada keilmuan human-computer interaction, pengembangan wirausaha, pemecahan masalah dengan design thinking dan penerapan user experience design.</li>\r\n<li>&nbsp;</li>\r\n</ul>\r\n</li>\r\n<li><strong>USAID Decentralized Basic Education 1</strong>, Junior Data &amp; Information Specialist,&nbsp;<em>2008 &ndash; 2010</em>\r\n<ul>\r\n<li>Bekerja dengan international non-governmental organization dalam proyek Decentralized Basic Education 1 (DBE1).</li>\r\n<li>Bertanggungjawab dalam pengelolaan data di area provinsi Sumatera Utara, menyelenggarakan pelatihan dalam penggunaan aplikasi yang dikembangkan DBE1.</li>\r\n<li>&nbsp;</li>\r\n</ul>\r\n</li>\r\n<li><strong>Malteser International</strong>, Junior Programmer &amp; Trainer,&nbsp;<em>2006 &ndash; 2008</em>\r\n<ul>\r\n<li>Bekerja dengan international non-governmental organization dalam mengembangkan Sistem Informasi Puskesmas di provinsi Nanggroe Aceh Darussalam.</li>\r\n<li>Melatih staf dan dokter di Banda Aceh, Aceh Besar, Bireun, Aceh Utara, Lhokseumawe, Langsa and Aceh Tamiang dalam penggunaan Sistem Informasi Puskesmas.</li>\r\n</ul>\r\n</li>\r\n</ol>', '<ul>\r\n<li style=\"text-align: justify;\">1. User Experience Design: <em>user research, prototyping, user testing, heuristic evaluation.</em></li>\r\n<li style=\"text-align: justify;\">&nbsp;</li>\r\n<li style=\"text-align: justify;\">2. User Interface Design: <em>design system, prototype.</em></li>\r\n<li style=\"text-align: justify;\">&nbsp;</li>\r\n<li style=\"text-align: justify;\">3. Branding: <em>visual branding, destination branding.</em></li>\r\n<li style=\"text-align: justify;\">&nbsp;</li>\r\n<li style=\"text-align: justify;\">4. Photography: <em>landscape, event.</em></li>\r\n<li style=\"text-align: justify;\">&nbsp;</li>\r\n<li style=\"text-align: justify;\">5. Adobe Photoshop, Adobe Experience Design: <em>photo editing, prototyping.</em></li>\r\n</ul>', '<ol>\r\n<li><strong>Kajian Quality Tourism Wilayah Sumatera</strong><br /><em>Institut Teknologi Del dan Bank Indonesia Wilayah Sumatera, 2021</em></li>\r\n<li><strong>Penyusunan Revisi RIPARKAB (Rencana Induk Pembangunan Kepariwisataan Kabupaten) Kabupaten Pakpak Bharat</strong><br /><em>Institut Teknologi Del &amp; Dinas Pariwisata dan Kebudayaan Kabupaten Pakpak Bharat, 2021</em></li>\r\n<li><strong>Penyusunan Master Plan DED (Detail Engineering Design) Pembangunan Obyek Wisata Kabupaten Pakpak Bharat</strong><br /><em>Institut Teknologi Del &amp; Dinas Pariwisata dan Kebudayaan Kabupaten Pakpak Bharat, 2021</em></li>\r\n<li><strong>Pembangunan Website Geopark Kaldera Toba</strong><br /><em>Institut Teknologi Del &amp; Badan Pengelola Geopark Kaldera Toba, 2021</em><br />Pembagunan website berisi informasi terkait Kaldera Toba yang merupakan UNESCO Global Geoparks (UGGp) di Indonesia. Website ini dikelola oleh Badan Pengelola Geopark Kaldera Toba bersama dengan tim Institut Teknologi Del. Produk website dapat diakses pada&nbsp;<a href=\"https://calderatobageopark.org/\" target=\"_blank\" rel=\"noopener\">Website Geopark Kaldera Toba</a>.</li>\r\n<li><strong>Pembangunan Website Desa Wisata di Kawasan Danau Toba</strong><br /><em>Institut Teknologi Del &amp; Kementerian Pariwisata dan Ekonomi Kreatif Republik Indonesia, 2020 &ndash; 2021</em><br />Pembangunan 19 website desa wisata di seluruh Kawasan Danau Toba. Kegiatan mencakup pengumpulan kebutuhan, pembangunan website, pengisian konten, pendampingan perwakilan desa wisata untuk pengelolaan dan maintenance website. Berita tentang pembangunan website desa wisata:<br /><a href=\"https://www.radiodelfm.co.id/fasilitasi-wisatawan-website-desa-wisata-danau-toba-segera-di-launching/\" target=\"_blank\" rel=\"noopener\">Fasilitasi Wisatawan, Website Desa Wisata Danau Toba Segera di Launching</a><br /><a href=\"https://laketoba.travel/kemenparekraf-gelar-fgd-pengembangan-website-desa-wisata-di-danau-toba/\" target=\"_blank\" rel=\"noopener\">Kemenparekraf gelar FGD Pengembangan Website Desa Wisata di Danau Toba</a><br /><a href=\"https://www.radiodelfm.co.id/website-desa-wisata-rilis-it-del-gelar-pelatihan-bagi-pelaku-wisata-di-kawasan-danau-toba/\" target=\"_blank\" rel=\"noopener\">Website Desa Wisata Rilis, IT Del Gelar Pelatihan Bagi Pelaku Wisata di Kawasan Danau Toba</a></li>\r\n<li><strong>Sistem Informasi Pemungutan dan Penatausahaan Retribusi Pasar (SIAPPARA) di Kabupaten Humbang Hasundutan</strong><br /><em>Institut Teknologi Del &amp; Dinas Koperasi, Perdagangan dan Industri Kabupaten Humbang Hasundutan, 2020</em><br />Pengembangan sistem informasi mencakup pemungutan retribusi pasar rakyat se-Kabupaten Humbang Hasundutan, pelaporan retribusi.<br />Produk dapat diakses di:&nbsp;<a href=\"http://siappara.humbanghasundutankab.go.id/\" target=\"_blank\" rel=\"noopener\">http://siappara.humbanghasundutankab.go.id<br /></a>Berita tentang SIAPPARA:&nbsp;<a href=\"https://humbanghasundutankab.go.id/main/index.php/read/news/1540\" target=\"_blank\" rel=\"noopener\">Pemerintah Kabupaten Humbang Hasundutan Bekali Petugas Pasar Dengan Aplikasi Siappara</a></li>\r\n<li><strong>Kajian Digitalisasi Pariwisata di Kawasan Danau Toba</strong><br /><em>Yayasan Del &amp; Badan Aksesibilitas Telekomunikasi dan Informasi (BAKTI) Kementerian Komunikasi dan Informatika Republik Indonesia, 2019 &ndash; 2020</em><br />Pemberdayaan Komunitas Masyarakat dalam Digitalisasi Pariwisata Kawasan Danau Toba. Kegiatan yang dilaksanakan, yaitu: Melakukan investarisasi dan identifikasi potensi sumberdaya wisata Kawasan Danau Toba; Pembuatan database potensi sumberdaya wisata Toba; Melakukan pendampingan terhadap masyarakat lokal, untuk meningkatkan kesiapan pengembangan pariwisata berbasis pemberdayaan masyarakat; Digitalisasi data kepariwisataan dan promosi wisata Kawasan Danau Toba; Bekerjasama dengan pemerintah daerah (Dinas Pariwisata) sehingga program yang dilaksanakan tetap selaras dengan kebijakan pemerintah daerah.</li>\r\n<li><strong>Aplikasi Mobile Markopi</strong><br /><em>Institut Teknologi Del, 2018</em><br />Aplikasi mobile Android untuk budidaya kopi bagi petani. Tersedia di Playstore:&nbsp;<a href=\"https://play.google.com/store/apps/details?id=com.markopi.markopi_mobile\" target=\"_blank\" rel=\"noopener\">https://play.google.com/store/apps/details?id=com.markopi.markopi_mobile</a></li>\r\n</ol>', NULL, '0303110035', '2024-05-29 19:11:03', '2024-06-02 12:59:15'),
(2, 1, 'Dr. Arnaldo Marulitua Sinaga, ST., M.InfoTech.', 'public/gambar/6Vbum85vWVP2ND0739vuexupFb1vLKlSFF35Ytq9.jpg', 'Data belum diisi', 'Rektor Institut Teknologi Del', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', NULL, '0308010001', '2024-06-02 12:31:52', '2024-06-02 12:31:52'),
(3, 1, 'Ardiles Sinaga, S.T., M.T.', NULL, 'Data belum diisi', 'Kepala Program Studi Teknologi Rekayasa Perangkat Lunak', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', NULL, '0303220438', '2024-06-02 12:33:10', '2024-06-02 12:33:10'),
(4, 2, 'Goklas Henry Agus Panjaitan, S.Tr.Kom.,M.T.', NULL, 'Data belum diisi', 'Kepala Program Studi Teknologi Informasi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', NULL, '0309130081', '2024-06-02 12:33:46', '2024-06-02 12:33:46'),
(5, 3, 'Eka Stephani Sinambela, SST., M.Sc.', 'public/gambar/CZPkQXHNpebNLdraBAWHA7y4z7lDGq7jIMrQemqc.jpg', 'Data belum diisi', 'Kepala Program Studi Teknologi Komputer', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', NULL, '0309080019', '2024-06-02 12:34:21', '2024-06-02 12:34:21'),
(6, 1, 'Verawaty Situmorang, S.Kom., M.T.I', 'public/gambar/YCq1LqJbUpE9UuOborMFtgIDSKL7KamCqTbFHXN0.jpg', 'Data belum diisi', 'Dosen Fakultas Vokasi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', NULL, '0302120051', '2024-06-02 12:35:28', '2024-06-02 12:35:28'),
(7, 3, 'Sari Muthia Silalahi, S.Pd., M.Ed', 'public/gambar/W59DlxQkoOKX1g7Z6x4MRKHPAR26mMAGCzVOeeCd.jpg', 'Data belum diisi', 'Dosen Fakultas Vokasi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', NULL, '0304180277', '2024-06-02 12:38:21', '2024-06-02 12:38:21'),
(8, 3, 'Istas Manalu, S.Si., M.Sc', 'public/gambar/7wGp3ZCZbNQLocFDFShg9GO22fpttLK0KeWg2iW9.jpg', 'Data belum diisi', 'Dosen Fakultas Vokasi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', NULL, '0308180288', '2024-06-02 12:38:51', '2024-06-02 12:38:51'),
(9, 3, 'Gerry Italiano Wowiling, S.Tr.Kom., M.T.', 'public/gambar/WVDZVTy2dEYUf6v6xjEVJvH32fF3gVcKawt9tvzG.png', 'Data belum diisi', 'Dosen Fakultas Vokasi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', NULL, '0309110047', '2024-06-02 12:39:18', '2024-06-02 12:39:18'),
(10, 2, 'Monalisa Pasaribu, SS., M.Ed (TESOL)', 'public/gambar/SdIhBeQgxCDkCQR5p6W8GVXqW1FNmuW4IhLotcoF.jpg', 'Data belum diisi', 'Dosen Fakultas Vokasi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', NULL, '0306180281', '2024-06-02 12:40:10', '2024-06-02 12:40:10'),
(11, 2, 'Tegar Arifin Prasetyo, S.Si., M.Si.', 'public/gambar/ResOt5LuiO3VdripwuK68TiygPzSH8563O9nXVOb.jpg', 'Data belum diisi', 'Dosen Fakultas Vokasi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', NULL, '0312200395', '2024-06-02 12:41:07', '2024-06-02 12:41:07'),
(12, 2, 'Rudy Chandra, S.Kom., M.Kom', 'public/gambar/EN5d07TEZZvVkFrLBkYXxv0T7wz9hLz3zOuEcGms.jpg', 'Data belum diisi', 'Dosen Fakultas Vokasi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', NULL, '0301220432', '2024-06-02 12:41:41', '2024-06-02 12:41:41'),
(13, 2, 'Hernawati Susanti Samosir, SST., M.Kom.', 'public/gambar/yv0yD7cKiKDzuVkNwxOTCSPc8o5hheCMAKYnZevU.jpg', 'Data belum diisi', 'Dosen Fakultas Vokasi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', NULL, '0309100028', '2024-06-02 12:42:43', '2024-06-02 12:42:43'),
(14, 2, 'Tiurma Lumban Gaol, SP., M.P', 'public/gambar/2ghoTf9EVcrXdJ6ozrDmza5BEfxvB9Onz0WoXUJr.jpg', 'Data belum diisi', 'Dosen Fakultas Vokasi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', NULL, '0309010005', '2024-06-02 13:01:06', '2024-06-02 13:01:06'),
(15, 3, 'Frengki Simatupang, S.Tr. Kom., M.T.', 'public/gambar/DBvDL5GsEeygIeUqcdmRtSOsLlkXAglAva81nkrt.jpg', '<p>Data belum diisi</p>', 'Dosen Fakultas Vokasi', '<p>Data belum diisi</p>', '<p>Data belum diisi</p>', '<p>Data belum diisi</p>', '<p>Data belum diisi</p>', '<p>Data belum diisi</p>', '<p>Data belum diisi</p>', NULL, '0309160220', '2024-06-02 13:02:44', '2024-06-02 13:04:27'),
(16, 3, 'Pandapotan Siagian, ST, M.Eng', NULL, 'Data belum diisi', 'Dosen Fakultas Vokasi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', NULL, '0302150136', '2024-06-02 13:03:53', '2024-06-02 13:03:53'),
(17, 3, 'Marojahan MT. Sigiro, ST., M.Sc', NULL, 'Data belum diisi', 'Dosen Fakultas Vokasi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', NULL, '0303070014', '2024-06-02 13:04:51', '2024-06-02 13:04:51'),
(18, 2, 'Togu Novriansyah Turnip, S.S.T., M.IM', NULL, 'Data belum diisi', 'Dosen Fakultas Vokasi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', NULL, '0309100024', '2024-06-02 13:05:18', '2024-06-02 13:05:18'),
(19, 1, 'Roy Deddy Hasiholan Lumban Tobing, S.T., M.ICT', NULL, 'Data belum diisi', 'Asisten Ahli', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', NULL, '0309090020', '2024-06-02 13:06:01', '2024-06-02 13:06:01'),
(20, 1, 'Rumondang Miranda Marsaulina, S.P, M.Si', 'public/gambar/UHmSxOGL6TlFpUNJED5TfqtIJA7wOM4tmloTUAYG.jpg', 'Data belum diisi', 'Dosen Fakultas Vokasi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', NULL, '0308130076', '2024-06-02 13:07:00', '2024-06-02 13:07:00'),
(21, 1, 'Yohanssen Pratama, S.Si, M.T', NULL, 'Data belum diisi', 'Dosen Fakultas Vokasi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', NULL, '0309150151', '2024-06-02 13:07:28', '2024-06-02 13:07:28'),
(22, 1, 'Ana Muliyana, M.Pd.', NULL, 'Data belum diisi', 'Dosen Fakultas Vokasi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', 'Data belum diisi', NULL, '0311230509', '2024-06-02 13:07:58', '2024-06-02 13:07:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `nama`, `detail`, `tanggal`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Pembekalan dan Pemberangkatan Mahasiswa KP', 'Auditorium Institut Teknologi Del', '2024-05-24', '09.50 WIB - selesai', '2024-05-25 12:15:17', '2024-05-25 22:22:54'),
(2, '[MBKM] Sosialisasi Bangkit Academy', 'Auditorium Institut Teknologi Del', '2024-05-28', '10.00-12.00 WIB', '2024-05-25 20:47:40', '2024-05-25 22:14:01'),
(3, 'Sosialisasi Pembekalan Softskill Mahasiswa Akt 2019 & 2020 - Kamis, 25 April 2024', 'Auditorium IT Del', '2024-05-25', '17.00 WIB - Selesai', '2024-05-25 21:52:25', '2024-05-25 22:17:13'),
(4, '[Kuliah Umum] Apple Developer Academy; Selasa, 23 April 2024', 'Auditorium Institut Teknologi Del', '2024-05-22', '15.00 - 17.00 WIB', '2024-05-25 21:52:33', '2024-05-25 22:17:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeris`
--

CREATE TABLE `galeris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galeris`
--

INSERT INTO `galeris` (`id`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'public/galeri/CAxhBNJcUnLlyEWnQzaai3yvpffs4nad1eoh3eiB.jpg', '2024-05-14 13:18:22', '2024-05-14 13:18:22'),
(2, 'public/galeri/H4cxP6u9ItsMQl9HeNZ0cN9nbkzmG759qovfFHaQ.jpg', '2024-05-14 13:18:41', '2024-05-14 13:18:41'),
(3, 'public/galeri/GHTxDFfsuYv1d7GkeQoyp1f9b2cExcseOIlJU0FS.jpg', '2024-05-14 13:18:47', '2024-05-14 13:18:47'),
(4, 'public/galeri/9EAwaN0xjfVu8ZXodlq1J2yrR2x6DZ25fw94YSju.jpg', '2024-05-14 13:18:53', '2024-05-14 13:18:53'),
(5, 'public/galeri/362UzSY6yVw600ihgwegiDXCBfqxH7pKZ3lzAV17.jpg', '2024-05-19 11:54:27', '2024-05-19 11:54:27'),
(6, 'public/galeri/thflMxqTuMATjq13X1DsH5e3uMNyLNpfPMXgrK98.jpg', '2024-05-19 11:54:35', '2024-05-19 11:54:35'),
(7, 'public/galeri/rm4BFOtAj8064TaasM0hVVwSYK4W2XIFk4kOZAbD.jpg', '2024-05-19 11:55:33', '2024-05-19 11:55:33'),
(8, 'public/galeri/FAxBM8ZpfvUSgeXKYJ6FPDWadcyod5AjbfA4bifn.jpg', '2024-05-19 11:57:10', '2024-05-19 11:57:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kalender_akademik`
--

CREATE TABLE `kalender_akademik` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kalender_akademik`
--

INSERT INTO `kalender_akademik` (`id`, `judul`, `konten`, `tanggal`, `keterangan`, `foto`, `file_pdf`, `created_at`, `updated_at`) VALUES
(1, 'Kalender Akademik T.A. 2023/2024', 'Berikut SK Rektor tentang Kalender Akademik Tahun Ajaran 2023/2024\r\n\r\n\r\nDemikian informasi ini kami sampaikan, terima kasih.\r\n\r\nSalam Sehat.', '2024-05-23', 'Kalender Akademik Tahun Ajaran (T.A.) 2022/2023\r\n\r\nInstitut Teknologi Del\r\n\r\n03 September 2022 s.d. 23 September 2023', 'public/foto/KlVFZ5JoVA2mNTE6oPwKxmx5N0uMHHNEeYR1SCOY.jpg', 'public/pdf/JoLPqtHBRIB1LjoKdNNNjASnCDWBneueBr9N2OWT.pdf', '2024-05-21 01:05:48', '2024-05-21 02:33:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kata_sambutan`
--

CREATE TABLE `kata_sambutan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teks_kata_sambutan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kata_sambutan`
--

INSERT INTO `kata_sambutan` (`id`, `judul`, `nama`, `teks_kata_sambutan`, `tanggal`, `foto`, `jabatan`, `created_at`, `updated_at`) VALUES
(1, 'Kata Sambutan Dekan Fakultas Vokasi Institut Teknologi Del', 'Riyanthi Angrainy Sianturi, S.Sos, M.Ds', '<p style=\"text-align: justify;\">Selamat pagi dan salam sejahtera bagi kita semua,</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">Yang terhormat, Rektor Institut Teknologi Del, para dosen, staf, mahasiswa, serta seluruh tamu undangan yang saya hormati.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">Pertama-tama, marilah kita panjatkan puji dan syukur kehadirat Tuhan Yang Maha Esa atas rahmat dan karunia-Nya sehingga kita dapat berkumpul di sini dalam keadaan sehat walafiat. Pada kesempatan yang berbahagia ini, izinkan saya, Riyanthi Angrainy Sianturi, S.Sos, M.Ds, selaku Dekan Fakultas Vokasi Institut Teknologi Del, menyampaikan kata sambutan ini.</p>\r\n<p style=\"text-align: justify;\">Saya merasa sangat terhormat dan bangga berdiri di hadapan Anda semua sebagai bagian dari keluarga besar IT Del. Perjalanan akademis dan profesional saya dimulai dengan memperoleh gelar Diploma Sistem Informasi dari Politeknik Informatika Del pada tahun 2006, yang kemudian dilanjutkan dengan gelar Sarjana Komunikasi dari Universitas Sumatera Utara pada tahun 2010, dengan fokus pada Komunikasi dan Fotografi. Tidak berhenti di situ, saya meraih gelar Magister Desain dari Institut Teknologi Bandung pada tahun 2015, dengan spesialisasi pada Desain Komunikasi Visual dan Destination Branding.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">Sejak November 2021, saya diberi amanah untuk memimpin Fakultas Vokasi IT Del. Sebelumnya, saya juga berkesempatan mengabdi sebagai Kepala Divisi Inovasi dan Kewirausahaan IT Del sejak Juli 2020 dan Kepala Pusat Pengembangan Karir dan Hubungan Alumni IT Del dari tahun 2017 hingga Februari 2021. Pengalaman saya juga mencakup peran sebagai dosen di bidang UI/UX, Human-Computer Interaction, dan Technopreneurship sejak tahun 2011 hingga saat ini. Dalam perjalanan ini, saya telah mengembangkan keterampilan dalam human-computer interaction, pengembangan wirausaha, pemecahan masalah dengan design thinking, dan penerapan user experience design.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">Selain berkarir di lingkungan akademis, saya juga berkesempatan bekerja dengan organisasi non-pemerintah internasional. Sebagai Junior Data &amp; Information Specialist di USAID Decentralized Basic Education 1 dari tahun 2008 hingga 2010, saya bertanggung jawab atas pengelolaan data di wilayah provinsi Sumatera Utara dan menyelenggarakan pelatihan dalam penggunaan aplikasi yang dikembangkan oleh DBE1. Saya juga pernah menjadi Junior Programmer &amp; Trainer di Malteser International dari tahun 2006 hingga 2008, dimana saya terlibat dalam pengembangan Sistem Informasi Puskesmas di Provinsi Nanggroe Aceh Darussalam dan melatih staf serta dokter dalam penggunaan sistem tersebut.</p>\r\n<p style=\"text-align: justify;\">Pengalaman-pengalaman ini telah memberikan saya wawasan dan keahlian yang luas dalam bidang desain dan teknologi informasi, yang saya harapkan dapat saya aplikasikan dalam memimpin Fakultas Vokasi IT Del menuju masa depan yang lebih cerah. Saya berkomitmen untuk terus berinovasi dan mendukung pengembangan mahasiswa, dosen, dan seluruh civitas akademika IT Del, serta menjadikan fakultas kita sebagai pusat unggulan dalam pendidikan vokasi.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>Terima kasih atas kepercayaan dan dukungan yang telah diberikan. Marilah kita bersama-sama melangkah maju, berkolaborasi, dan berinovasi untuk mencapai tujuan dan visi kita bersama.</strong></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><em><strong>Salam hormat,</strong></em></p>\r\n<p style=\"text-align: justify;\"><em><strong>Riyanthi Angrainy Sianturi, S.Sos, M.Ds. Dekan Fakultas Vokasi Institut Teknologi Del</strong></em></p>', '2024-05-29', 'public/sambutan_dekan/SnOHpHDgXFykJSOVG4ZYSuQaP5M8YqWju5569tJU.jpg', 'Dekan Fakultas Vokasi', '2024-05-24 23:35:32', '2024-05-29 19:08:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(73, '2024_05_20_122205_add_foto_pengumuman_to_pengumumans_table', 2),
(382, '2014_10_12_000000_create_users_table', 3),
(383, '2014_10_12_100000_create_password_reset_tokens_table', 3),
(384, '2019_08_19_000000_create_failed_jobs_table', 3),
(385, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(386, '2024_05_05_025402_create_profils_table', 3),
(387, '2024_05_05_025430_create_galeris_table', 3),
(388, '2024_05_05_025452_create_prestasis_table', 3),
(389, '2024_05_05_025501_create_prodis_table', 3),
(390, '2024_05_05_025511_create_semesters_table', 3),
(391, '2024_05_05_025526_create_dosens_table', 3),
(392, '2024_05_05_025541_create_tentangs_table', 3),
(393, '2024_05_09_133132_create_events_table', 3),
(394, '2024_05_11_222512_create_beritas_table', 3),
(395, '2024_05_11_222751_create_pengumumans_table', 3),
(396, '2024_05_11_225243_create_sliders_table', 3),
(397, '2024_05_23_150745_create_kalender_akademik_table', 3),
(398, '2024_05_26_061856_create_kata_sambutan_table', 3),
(399, '2024_05_27_203636_create_beasiswa_table', 3),
(400, '2024_06_03_045059_create_alumni_table', 3),
(401, '2024_06_03_145927_create_organisational_structures_table', 3),
(402, '2024_06_04_023126_modify_id_column_in_beasiswa_table', 4),
(403, '2024_06_04_023429_modify_jenis_beasiswa_column_in_beasiswa_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `organisational_structures`
--

CREATE TABLE `organisational_structures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_struktur_organisasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `organisational_structures`
--

INSERT INTO `organisational_structures` (`id`, `nama_struktur_organisasi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Struktur Organisasi Fakultas Vokasi', 'foto_struktur_organisasi/ezeue1hM22WLAtAilhEfnpUU1cLTvgRULRVWUh7U.jpg', '2024-06-03 01:41:39', '2024-06-03 02:07:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumumans`
--

CREATE TABLE `pengumumans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengumumans`
--

INSERT INTO `pengumumans` (`id`, `judul`, `konten`, `tanggal`, `keterangan`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Wisuda 398 Lulusan Institut Teknologi Del | Termasuk Fakultas Vokasi', 'Pada Hari Sabtu 23 September 2023, Institut Teknologi Del melaksanakan Wisuda untuk 398 Mahasiswa Sarjana dan Diploma. Turut hadir Bapak Dr. Honoris Causa Ir. Airlangga Hartarto, MBA, MMT (Menteri Koordinator Bidang Perekonomian Republik Indonesia), Bapak Rionald Silaban (Direktorat Jendral Kekayaan Negara),  Bapak Jend. TNI (Purn.) Luhut Binsar Pandjaitan, M.P.A (Ketua Pembina Yayasan Del), Ibu Intan Simanjuntak (Ketua Pengurus Yayasan Del), dan tamu undangan lainnya. Kegiatan Wisuda ini dilaksanakan di Gedung Serba Guna Yayasan Del dengan tema “Fostering Collaboration and Innovation towards Research Excellence”.', '2024-05-20', 'Wisuda', 'public/foto_pengumuman/CGovCTCjZwkzPSRn3I0UYZxpGSOzWpFasrPmYdr1.jpg', '2024-05-17 18:01:48', '2024-05-17 18:21:12'),
(2, 'Peserta yang Akan Mengikuti Apple Developer Foundation', '<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\" data-sider-select-id=\"93bfe0ee-abda-4bdb-8ee3-34235aabc120\">Dear Mahasiswa,</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">Berikut kami sampaikan nama-nama peserta yang akan mengikuti program&nbsp;<strong style=\"box-sizing: border-box;\">Apple Developer Foundation @ Infinite Learning</strong>, Batam:</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">&nbsp;</p>\r\n<table style=\"border-spacing: 0px; background-color: #ffffff; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px;\"><colgroup style=\"box-sizing: border-box;\"><col style=\"box-sizing: border-box;\" /><col style=\"box-sizing: border-box;\" /><col style=\"box-sizing: border-box;\" /><col style=\"box-sizing: border-box;\" /><col style=\"box-sizing: border-box;\" /><col style=\"box-sizing: border-box;\" /></colgroup>\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px;\"><strong style=\"box-sizing: border-box;\">No</strong></td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\"><strong style=\"box-sizing: border-box;\">NIM</strong></td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\"><strong style=\"box-sizing: border-box;\">Nama Lengkap</strong></td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\"><strong style=\"box-sizing: border-box;\">Jenis Kelamin</strong></td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\"><strong style=\"box-sizing: border-box;\">Angkatan</strong></td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\"><strong style=\"box-sizing: border-box;\">Program Studi</strong></td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">1</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11322006</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Anastasya Capritiani Marpaung</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Perempuan</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2022</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D3TI</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11322020</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Oktavia Letisya Simatupang</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Perempuan</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2022</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D3TI</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">3</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11322022</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Keren Simanjuntak</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Perempuan</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2022</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D3TI</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">4</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11322023</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Mananda Atalya Tambun</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Perempuan</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2022</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D3TI</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">5</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11322036</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Christian Yehezkil Gultom</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Laki-laki</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2022</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D3TI</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">6</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11322039</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Kenan Tomfie Bukit</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Laki-laki</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2022</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D3TI</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">7</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11322041</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Cecilia Limasti Cinta Situmorang</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Perempuan</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2022</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D3TI</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">8</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11322052</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Blessherin Gabriela Pangaribuan</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Perempuan</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2022</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D3TI</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">9</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11322058</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Dian Anggi Bellita Sitanggang</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Perempuan</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2022</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D3TI</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">10</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11322059</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Cesia Sauria Butarbutar</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Perempuan</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2022</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D3TI</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11322061</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Johanna Romauli Siagian</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Perempuan</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2022</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D3TI</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">12</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11322062</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Monica Silaban</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Perempuan</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2022</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D3TI</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">13</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11421006</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Samuel Emeraldo Simangunsong</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Laki-laki</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2021</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D4TRPL</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">14</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11421012</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Sopranita Panjaitan</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Perempuan</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2021</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D4TRPL</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">15</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11421033</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Natanael Oloan Simanullang</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Laki-laki</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2021</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D4TRPL</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">16</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11421034</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Exaudi Siregar</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Laki-laki</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2021</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D4TRPL</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">17</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11421037</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Otniel Simanungkalit</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Laki-laki</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2021</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D4TRPL</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">18</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11421039</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Josep Phyto Napitupulu</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Laki-laki</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2021</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D4TRPL</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">19</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11422012</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Sion Saut Parulian Pardosi</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Laki-laki</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2022</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D4TRPL</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">20</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11422013</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Johannes Bastian Jasa Sipayung</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Laki-laki</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2022</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D4TRPL</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">21</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11422021</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Lamria Sitorus</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Perempuan</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2022</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D4TRPL</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">22</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11422024</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Pangeran Silaen</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Laki-laki</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2022</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D4TRPL</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">23</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11422045</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Syahrial Jeremia Sinaga</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Laki-laki</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2022</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D4TRPL</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">24</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11422046</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Gilberd Nicolas Siboro</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Laki-laki</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2022</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">D4TRPL</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">25</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11S22009</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Dhea Grace A. Simanjuntak</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Perempuan</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2022</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">S1IF</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">26</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11S22036</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Rohit Panjaitan</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Laki-laki</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2022</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">S1IF</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">27</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11S22054</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Charlos Pardomuan Purba</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Laki-laki</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2022</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">S1IF</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">28</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">11S23040</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Wahyu Rizky F Simanjorang</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">Laki-laki</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">2023</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\">S1IF</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">Bagi mahasiswa di atas harap datang ke Ruang PPKHA pada hari ini apabila sudah tidak ada jadwal ujian atau pada pukul 17.00 WIB. Mohon bergabung dalam grup whatsapp melalui tautan&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; color: #3c8dbc; text-decoration-line: none;\" href=\"https://chat.whatsapp.com/LpmYsjKGqQO52wWIgjW2oq\">https://chat.whatsapp.com/LpmYsjKGqQO52wWIgjW2oq</a></p>', '2024-05-20', 'Bootcamp', 'public/foto_pengumuman/5O5f01unuSh2eWOmOyYBnRJ4x5PRaSwbQRDaTUZb.jpg', '2024-05-18 04:57:57', '2024-05-18 05:17:38'),
(3, 'Jadwal Seminar Proyek Akhir III D4TRPL 2024', '<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\" data-sider-select-id=\"0702defb-f63f-469b-b9ee-3e0c624f5421\">Dear Mahasiswa Peserta Proyek Akhir III (PA3),</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">Setiap kelompok dapat melihat&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; color: #3c8dbc; text-decoration-line: none;\" href=\"https://docs.google.com/spreadsheets/d/1nRcpT-9I5NGc2QFrb6QVQD_rrrTuSwHe/edit?usp=sharing&amp;ouid=100427666704579828469&amp;rtpof=true&amp;sd=true\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; user-select: text !important; background-color: #ffff00;\">Jadwal Seminar PA3</span></strong></a>, untuk mempersiapkan hal berikut:</p>\r\n<ol style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\">Penilaian usability diberikan kepada owner untuk dinilai, beserta dengan feedback terkait produk yang dihasilkan mahasiswa. Template form penilaian dapat diakses pada Modul Sesi 1 Template Dokumen PA3. Form penilaian usability dan form feedback yang telah diisi oleh owner, dimasukkan ke dalam amplop tertutup dan tidak diberbolehkan untuk dibaca mahasiswa.</li>\r\n<li style=\"box-sizing: border-box;\">Menyerahkan dokumen seminar pada hari Kamis, 30 Mei 2024, pada pukul 15:00 WIB bersamaan untuk semua kelompok, diwakili oleh ketua kelompok. Diserahkan kepada Koordinator PA3 di Gedung Vokasi.</li>\r\n<li style=\"box-sizing: border-box;\">Dokumen seminar adalah Software Technical Document (SWTD) beserta dengan semua lampiran. Dicetak booklet sebanyak 3 examplar, dimasukkan dalam 1 map kertas berwarna&nbsp;<strong style=\"box-sizing: border-box;\">HIJAU</strong>. Tuliskan nomor kelompok, judul PA3, hari / tanggal &amp; jam seminar pada bagian depan map di sticky notes dan tempelkan pada bagian cover setiap dokumen SWTD.</li>\r\n<li style=\"box-sizing: border-box;\">Mempersiapkan slide presentasi yang akan dipergunakan pada Seminar PA3</li>\r\n<li style=\"box-sizing: border-box;\">Mempersiapkan produk yang sudah selesai untuk didemonstrasikan pada saat seminar. Aplikasi berbasis web sudah dapat diakses pada sebuah domain, sedangkan aplikasi berbasis mobile disiapkan dalam bentuk file .apk.</li>\r\n<li style=\"box-sizing: border-box;\">Dress code adalah pakaian seminar.</li>\r\n</ol>', '2024-05-21', 'Info', 'public/foto_pengumuman/GtC9ghNZOg1ulWzwrTjvSznlLcBxXiyR06ssGBPZ.jpg', '2024-05-18 05:26:39', '2024-05-18 05:27:41'),
(4, 'Pemilihan Mahasiswa Berprestasi (PILMAPRES) Tahun 2024 Tingkat Diploma dan Sarjana - Seleksi Internal', '<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; text-align: justify; user-select: text !important;\" data-sider-select-id=\"fef164b6-a1d5-49eb-b978-8c8d51a3201a\">Dear All Mahasiswa.,</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; text-align: justify; user-select: text !important;\">Kami informasikan perihal Pemilihan Mahasiswa Berprestasi (PILMAPRES) Tahun 2024 ini terbagi menjadi dua program yaitu Sarjana dan Diploma.<br style=\"box-sizing: border-box;\" />Kegiatan Pilmapres tahun 2024.&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; color: #3c8dbc; text-decoration-line: none;\" href=\"https://pusatprestasinasional.kemdikbud.go.id/event/seni-budaya/dikti/pemilihan-mahasiswa-berprestasi-nasional-2024-2024-dikti\">https://pusatprestasinasional.kemdikbud.go.id/even...</a></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; text-align: justify; user-select: text !important;\">Oleh karena itu IT Del akan melaksanakan seleksi internal pilmapres. Mahasiswa yang berpeluang untuk mengikuti seleksi internal ini merupakan mahasiswa dengan syarat :</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; text-align: justify; user-select: text !important;\">1. Mahasiswa angkatan 2021 - 2023 untuk Jenjang Sarjana, dan mahasiswa angkatan 2022 - 2023 untuk Jenjang Diploma.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; text-align: justify; user-select: text !important;\">2. Memiliki IPK &gt; 3.00</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; text-align: justify; user-select: text !important;\">3. Memiliki Nilai Bahasa Inggris minimal AB</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; text-align: justify; user-select: text !important;\">4. Memiliki Nilai Perilaku minimal AB</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; text-align: justify; user-select: text !important;\">Kemahasiswaan sudah melakukan perankingan sehingga diperoleh daftar mahasiswa sesuai dengan syarat diatas dan dapat dilihat pada link berikut :<br style=\"box-sizing: border-box;\" /><a style=\"box-sizing: border-box; background-color: transparent; color: #3c8dbc; text-decoration-line: none;\" href=\"https://docs.google.com/spreadsheets/d/1Ic-LPWORiVYYshW0osFxBepmim3lAD30/edit?usp=sharing&amp;ouid=110119399531740138843&amp;rtpof=true&amp;sd=true\">https://docs.google.com/spreadsheets/d/1Ic-LPWORiV...</a></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; text-align: justify; user-select: text !important;\">Mahasiswa yang namanya terdapat pada link tersebut berpeluang untuk mengikuti seleksi internal Pilmapres 2024. Seleksi internal akan dilakukan mengikuti pedoman pilmapres yaitu seleksi capaian unggulan (prestasi), seleksi naskah Produk Inovatif untuk diploma dan seleksi Gagasan Kreatif untuk sarjana, seleksi presentasi berbahasa inggris, dan seleksi poster. Untuk lebih lengkapnya dapat dilihat pada pedoman pilmapres 2024.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; text-align: justify; user-select: text !important;\">Seleksi Internal akan dilaksanakan sesuai dengan timeline berikkut :</p>\r\n<ol style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\">Pengisian Form Pendaftaran :&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; color: #3c8dbc; text-decoration-line: none;\" href=\"https://bit.ly/Seleksi_Internal_PILMAPRES_ITDEL_2024\">https://bit.ly/Seleksi_Internal_PILMAPRES_ITDEL_20...</a><br style=\"box-sizing: border-box;\" />Pengisian formulir ini sama dengan kebersediaan mahasiswa untuk mengikuti seleksi pilmapres pada link berikut :<strong style=\"box-sizing: border-box;\">&nbsp;</strong>,&nbsp;<strong style=\"box-sizing: border-box;\">1 - 10 April 2024</strong></li>\r\n<li style=\"box-sizing: border-box;\">Join Pada WAG Pilmapres IT Del<strong style=\"box-sizing: border-box;\">&nbsp;==&gt;&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; color: #3c8dbc; text-decoration-line: none;\" href=\"https://chat.whatsapp.com/KxyW6KPIPW6L7LcKjk9nhJ\">https://chat.whatsapp.com/KxyW6KPIPW6L7LcKjk9nhJ</a></strong></li>\r\n<li style=\"box-sizing: border-box;\">Pengisian Capaian Unggulan : submit dokumen pada google form paling lama tanggal 9<strong style=\"box-sizing: border-box;\">&nbsp;April 2024</strong>&nbsp;(Templet :&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; color: #3c8dbc; text-decoration-line: none;\" href=\"https://docs.google.com/spreadsheets/d/1enq-G_KbY_osTQscU_Hlzn-lqEpid0pD/edit#gid=482797514\">https://docs.google.com/spreadsheets/d/1enq-G_KbY_...</a>)</li>\r\n<li style=\"box-sizing: border-box;\">Pengumpulan naskah&nbsp;<strong style=\"box-sizing: border-box;\"><em style=\"box-sizing: border-box;\">Produk Inovatif (PI) untuk Diploma</em></strong>&nbsp;dan&nbsp;<strong style=\"box-sizing: border-box;\"><em style=\"box-sizing: border-box;\">Gagasan Kreatif (GK) untuk Sarjana</em></strong>&nbsp;:&nbsp;<strong style=\"box-sizing: border-box;\">tanggal 1 - 10 April 2024</strong></li>\r\n<li style=\"box-sizing: border-box;\">Pengumpulan link video (upload di Youtube) presentasi berbahasa inggris : tanggal&nbsp;<strong style=\"box-sizing: border-box;\">1 - 10 April 2024</strong></li>\r\n<li style=\"box-sizing: border-box;\">Pengumpulan poster data diri dan poster PI/GK : tanggal&nbsp;<strong style=\"box-sizing: border-box;\">1 - 10 April 2024</strong></li>\r\n</ol>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; text-align: justify; user-select: text !important;\">Terlampir Pedoman untuk jenjang Diploma dan jenjang Sarjana. Jika terdapat hal yang ingin dikonfirmasi dapat menghubungi Kemahasiswaan IT Del.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; text-align: justify; user-select: text !important;\">Demikian kami sampaikan dan terima kasih dan salam.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; text-align: justify; user-select: text !important;\">Lembaga Kemahasiswaan</p>', '2024-05-21', 'Info', 'public/foto_pengumuman/iLkHptbl6T1MHaXwylE0XaouubsdsdMA1P8rx6sB.jpg', '2024-05-18 08:23:40', '2024-05-18 08:23:40'),
(5, 'Himbauan Kepada seluruh Mahasiswa Tentang \"Kegiatan Olimpiade Sains Indonesia\"', '<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\" data-sider-select-id=\"fe0ce027-8995-47f9-abf5-f920b29e95f9\">Dear Mahasiswa.,</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">Melalui pengumuman ini, kami menginformasikan tentang kegiatan Olimpiade Sains yang akan di adakan di kampus kita IT Del pada besok, Sabtu, 27 April 2024. Kami menghimbau kepada seluruh mahasiswa untuk menjaga ketertiban selama kegiatan tersebut berlangsung. Dan tidak lupa kami tekankan untuk:</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">1. Untuk jam pelaksanaan&nbsp;<strong style=\"box-sizing: border-box;\">jadwal makan</strong>&nbsp;sebagai berikut:</p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\">Sarapan Pagi : pukul 06.30 - 07.30 Wib</strong></li>\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\">Makan Siang : Pukul 11.30 - 13.00 Wib</strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">2.<strong style=\"box-sizing: border-box;\">&nbsp;menjaga dan memperhatikan</strong>&nbsp;barang bawaan nya&nbsp;<strong style=\"box-sizing: border-box;\">khususnya barang barang berharga seperti laptop, hp, dan sejenisnya</strong>&nbsp;agar tetap aman. Jika terjadi kehilangan maka akan menjadi tanggung jawab dari pemilik barang tersebut.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">3. Bagi yang menggunakan ruangan kelas untuk kegiantan kolaboratif atau kegiatan lainnya supaya tetap menjaga kebersihan dan kerapian kelas, dan&nbsp;<strong style=\"box-sizing: border-box;\">tidak meninggalkan barang apapun dengan sembarangan.</strong></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">4. Untuk mahasiswa yang tinggal di Asrama luar dan yang mempunyai sepeda, dihimbau untuk sementara tidak membawa sepeda kedalam kampus selama kegiatan ini berlangsung.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">Diharapkan kepada seluruh mahasiswa agar tetap menjaga prokes, ketertiban dan kedisiplinan selama menjadi mahasiswa IT Del dengan melaksanakan peraturan yang berada di kampus.<span class=\"redactor-invisible-space\" style=\"box-sizing: border-box; user-select: text !important;\"><br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" />Demikian informasi ini kami sampaikan. Terimakasih<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" />Salam<br style=\"box-sizing: border-box;\" /></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">Lembaga Kemahasiswaan</p>', '2024-05-21', 'Info', 'public/foto_pengumuman/DYHfDtPkRGLoFpXGK2aRwOrn6WeS2dQmlFT0GQwC.jpg', '2024-05-18 08:29:06', '2024-05-18 08:29:06'),
(6, 'Pengumuman Hasil Seleksi Magang BGI TA 2024/2025', '<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\" data-sider-select-id=\"4b3abf1d-94c5-4cdf-b790-6732d64953d0\">Dear All,</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">Pendaftaran dan seleksi magang mandiri yaitu Beijing Genomics Institute (BGI) telah selesai dilaksanakan, yaitu sebanyak 36 mahasiswa diberikan rekomendasi dan telah diseleksi melalui beberapa tahapan oleh internal BGI.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">Dari hasil seleksi, terdapat 10 orang mahasiswa IT Del yang dinyatakan lolos magang untuk tahun 2024/2025. Adapun mahasiswa yang lolos adalah :</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">1. 12S21058 - Grace Christina Yohanna Situmorang - S1 Sistem Informasi</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">2. 12S21051 - Martha Britany Napitupulu - S1 Sistem Informasi</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">3. 11S21016 - Putri Ayu Manurung - S1 Informatika</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">4. 11421021 - Sarah Rosiana Naibaho - Sarjana Terapan TRPL</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">5. 11S21008 - Missyolin Eunike Samosir - S1 Informatika</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">6. 12S21006 - Weny S. M. Sitinjak - S1 Sistem Informasi</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">7. 11S21054 - Anni Octavia Simorangkir - S1 Informatika</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">8. 14S21047 - Agnes Situmorang - S1 Teknik Elektro</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">9. 12S21037 - Immanuella E. Lumbantobing - S1 Sistem Informasi</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">10.12S21025 - Noni Jelia Feby Sipayung - S1 Sistem Informasi</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">Mahasiswa tersebut diperkirakan akan berangkat ke Mitra paling lama akhir Juni 2024, sedangkan pelaksanaan magang mulai tanggal 15 September 2024 sampai 1 Augustus 2025. Semoga magang mahasiswa dapat berjalan dengan lancar dan harapan nya mahasiswa IT Del semakin banyak yang tertarik dan mendapatkan kesempatan untuk magang di BGI China.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">Terlampir pengumuman daftar mahasiswa yang lolos magang BGI.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">Demikian pengumuman ini saya sampaikan, terimakasih.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">Salam,</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\"><strong style=\"box-sizing: border-box;\">Divisi pembelajaran di luar kampus</strong></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\"><strong style=\"box-sizing: border-box;\">UPT PP ESTEM</strong></p>', '2024-05-21', 'MBKM', 'public/foto_pengumuman/pd3QX08Sx7lXji9HAHD9eYFVakZmzLxSdly8Qlve.jpg', '2024-05-18 08:29:54', '2024-05-18 08:29:54'),
(7, 'Undangan! Pengukuhan 483 Mahasiswa IT Del Angkatan XXIII dan Dies Natalis ke XXII', '<p><span style=\"color: #777777; font-family: \'Source Sans Pro\', Arial, Tahoma, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Institut Teknologi Del , Sitoluama, 22 September 2023 Institut Teknologi Del menyelenggarakan Acara Pengukuhan Mahasiswa Baru Angkatan XXIII dan Dies Natalis ke XXII. Kegiatan ini dihadiri oleh Ketua Pembina Yayasan Del, Bapak Luhut Binsar Pandjaitan dan Ibu Devi Pandjaitan, Ketua Pengurus Yayasan Del, Ibu Intan Simanjuntak, Rektor IT Del Bapak Dr. Arnaldo Marulitua Sinaga, S.T., M.InfoTech, Senat akademik Prof. Roberd Saragih, Ketua supervisor Habibie Center Ilham Akbar Habibie, Dirjen Kekayaan Negara Rionald Silaban, CEO PT. Privy Marshall Pribadi, Wakil Ketua CNGR Internasional Fu Peiwen, bersama orang tua mahasiswa dan para undangan lainnya. Kegiatan ini dilaksanakan di Gedung Serba Guna Yayasan Del.</span></p>\r\n<p><span style=\"color: #777777; font-family: \'Source Sans Pro\', Arial, Tahoma, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Datang dan hadirlah pada tanggal </span><strong><span style=\"background-color: #ffffff; color: #777777; font-family: \'Source Sans Pro\', Arial, Tahoma, sans-serif; font-size: 14px; text-align: justify;\">22 September 2023.</span></strong></p>', '2024-05-21', 'Info', 'public/foto_pengumuman/4UpdN78KJ5EpOIUtn4G8fNT9ScBIQyZSR6koWptj.jpg', '2024-05-18 10:49:12', '2024-05-18 10:49:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasis`
--

CREATE TABLE `prestasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `juara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_prestasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prestasis`
--

INSERT INTO `prestasis` (`id`, `nama`, `juara`, `nama_prestasi`, `tingkat`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 'Rody Tolowom', 'Finalis', 'Konter Robot Indonesia (KRI) Kategori KRTMI', 'Wilayah', 2022, '2024-05-26 13:32:52', '2024-05-26 14:44:22'),
(2, 'Revi Angeli Siahaan', 'Pemenang Dana Hibah', 'PKM 8 Bidang Tahun 2022', 'Nasional', 2022, '2024-05-26 14:44:52', '2024-05-26 14:44:52'),
(3, 'Darwin Sibarani', 'Pemenang Dana Hibah', 'PKM 8 Bidang Tahun 2022', 'Nasional', 2022, '2024-05-26 14:45:15', '2024-05-26 14:45:15'),
(4, 'Cyntia Evelin Simamora', 'Pemenang Dana Hibah', 'PKM 8 Bidang Tahun 2022', 'Nasional', 2022, '2024-05-26 14:45:34', '2024-05-26 14:45:34'),
(5, 'Ricky Ananda Pardomuan Sitorus', 'Top 100', 'Indonesia Young Coders League 2021 Vol 2', 'Nasional', 2022, '2024-05-26 14:46:22', '2024-05-26 14:46:22'),
(6, 'Marcellino Kelly N. Lumban Gaol', 'Peserta', 'Program Garuda Academic and researCh of Excellence (Garuda ACE)', 'Internasional', 2022, '2024-05-26 14:46:41', '2024-05-26 14:46:41'),
(7, 'Wordyka Yehezkiel Nainggolan', 'Peserta', 'Program Garuda Academic and researCh of Excellence (Garuda ACE)', 'Internasional', 2022, '2024-05-26 14:46:57', '2024-05-26 14:46:57'),
(8, 'Jesica Panjaitan', 'Participant/Peserta', 'contribution in developing Sustainable Food Systems in North Sumatra', 'Nasional', 2023, '2024-05-26 14:47:21', '2024-05-26 14:47:21'),
(9, 'Rio Putrawan Zalukhu', 'Participant/Peserta', 'contribution in developing Sustainable Food Systems in North Sumatra', 'Nasional', 2023, '2024-05-26 14:47:42', '2024-05-26 14:47:42'),
(10, 'Sopranita Panjaitan', 'Harapan 1', 'GAMKI Got Talent', 'Wilayah', 2023, '2024-05-26 14:48:05', '2024-05-26 14:48:05'),
(11, 'Horas Amsal Marolop Siregar', 'Juara I', 'Huawei ICT Competition 2023 Indonesia (Innovation Track)', 'Nasional', 2023, '2024-05-26 14:48:24', '2024-05-26 14:48:24'),
(12, 'Cecilia Limasti Cinta Situmorang', 'Juara III', 'Lomba Video Promosi Perpustakaan', 'Lokal', 2023, '2024-05-26 14:48:44', '2024-05-26 14:48:44'),
(13, 'Jesica Panjaitan', 'Juara I', 'Huawei ICT Competition 2023 Indonesia (Computing Track)', 'Nasional', 2023, '2024-05-26 14:49:05', '2024-05-26 14:49:05'),
(14, 'Samuel Volder', 'Peserta', 'COMPFEST15 - Capture The Flag', 'Nasional', 2023, '2024-05-26 14:49:24', '2024-05-26 14:49:24'),
(15, 'Sarah Hutahaean', 'Juara 1', 'Festival Musik Rohani (FMR) IT Del', 'Wilayah', 2024, '2024-05-26 14:51:19', '2024-05-26 14:51:19'),
(16, 'Silvia Sari Rezeki Lubis', 'Awardee', 'Indonesian International Student Mobility Awards (IISMA)', 'Internasional', 2023, '2024-05-26 14:51:43', '2024-05-26 14:51:43'),
(17, 'Onra Imanuel Sihombing', 'Peserta', 'Huawei Summer Camp 2023 in China', 'Internasional', 2023, '2024-05-26 14:52:04', '2024-05-26 14:52:04'),
(18, 'Onra Imanuel Sihombing', 'Runner Up', 'Kompetisi Penyajian Data Wikimedia', 'Nasional', 2021, '2024-05-26 14:52:25', '2024-05-26 14:52:25'),
(19, 'Marcellino Kelly N Lumban Gaol', 'Peserta', 'Hacksprint Gerakan Nasional 1000 Startup Digital', 'Nasional', 2021, '2024-05-26 14:52:45', '2024-05-26 14:52:45'),
(20, 'Sarah Susanty Olyvia Tampubolon', 'Puteri Favorit', 'Putra Putri Kebudayaan Sumatera Utara', 'Wilayah', 2024, '2024-05-26 14:53:15', '2024-05-26 14:53:15'),
(21, 'Lydwina Gracella Purba', 'Peserta', 'Magang MSIB [PT Citi Asia Internasional]', 'Nasional', 2024, '2024-05-26 14:54:07', '2024-05-26 14:54:07'),
(22, 'Sonia Magdalena Pasaribu', 'Peserta', 'Magang MSIB  [PT Kinema Systrans Multimedia  Infinte Learning]', 'Nasional', 2024, '2024-05-26 14:54:28', '2024-05-26 14:54:28'),
(23, 'Theresya Gurning', 'Peserta', 'Gemastik Bidang Pengembangan Perangkat Lunak', 'Nasional', 2024, '2024-05-26 14:54:47', '2024-05-26 14:54:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodis`
--

CREATE TABLE `prodis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subjudul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sejarah` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `misi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tujuan` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lulusan` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kurikulum` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teks_dosen` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prodis`
--

INSERT INTO `prodis` (`id`, `nama`, `slug`, `judul`, `subjudul`, `foto`, `sejarah`, `visi`, `misi`, `tujuan`, `lulusan`, `kurikulum`, `teks_dosen`, `created_at`, `updated_at`) VALUES
(1, 'Sarjana Terapan (D-4) Teknologi Rekayasa Perangkat Lunak', 'sarjana-terapan-d-4-teknologi-rekayasa-perangkat-lunak', 'Sarjana Terapan (D-4) Teknologi Rekayasa Perangkat Lunak', NULL, 'JjxWg3qb4yiV3Qi7vbnRe7y9rTnZOhBvaFtwLRXG.jpg', '<p style=\"text-align: justify;\"><strong>Sarjana Terapan (Diploma 4) Teknologi Rekayasa Perangkat Lunak (Sarjana Terapan TRPL)</strong> merupakan program studi pada pendidikan vokasi. <strong>Diploma 4 (D4) adalah nama lain dari Sarjana Terapan.</strong> Program studi Sarjana Terapan TRPL berdiri pada tahun 2012 sesuai dengan SK Menteri Pendidikan dan Kebudayaan Republik Indonesia<em> No. 238/E/O/201</em>2 pada tanggal 6 Juli 2012 dengan nama Sarjana Terapan (DIV) Teknik Informatika. Perubahan nama dari program studi DIV Teknik Informatika menjadi <strong>DIV Teknologi Rekayasa Perangkat Lunak</strong> adalah mengikuti nomenklatur Program Studi sesuai Keputusan Menteri Riset, Teknologi, dan Pendidikan Tinggi Republik Indonesia <strong>Nomor 57/M/KPT/2019</strong>.</p>\r\n<p style=\"text-align: justify;\"><strong>Sarjana Terapan</strong> merupakan jenjang pendidikan diploma yang setara dengan jenjang sarjana. <strong>Sarjana Terapan</strong> adalah pendidikan vokasi sedangkan sarjana (S1) adalah pendidikan akademik. Bobot keilmuan D4 sama dengan S1 sehingga disebut setara. Perbedaan keduanya adalah pada komposisi mata kuliah.</p>\r\n<p style=\"text-align: justify;\"><strong>Kuliah di jenjang D4 </strong>mengedepankan kemampuan praktik yang dibutuhkan di dunia kerja, sekaligus pengetahuan ilmu yang lebih lengkap dibanding jenjang diploma dibawah D4. Mata kuliah D4 mengutamakan <strong>60% praktik dan 40% teori,</strong> berbeda dengan S1 bertitik berat pada teori dibandingkan praktik. Jika lebih senang terjun ke lapangan untuk memecahkan masalah, jenjang D4 menjadi pilihan yang sangat tepat. Karena bobot perkuliahan yang sama dengan S1, maka mahasiswa jenjang D4 bisa langsung melanjutkan studi ke jenjang S2. Bobot perkuliahan D4 dan S1 adalah minimum 144 SKS. Jadi, lulusan D4 tidak perlu melanjutkan pendidikan ekstensi terlebih dahulu.</p>\r\n<p style=\"text-align: justify;\"><strong>D4 (Sarjana Terapan) dan S1 (Sarjana)</strong> memiliki peluang kerja yang sama dengan keunggulan masing-masing. Bahkan untuk seleksi CPNS dan pegawai BUMN juga sudah menerima mahasiswa lulusan D4. Program D4 bersinergi erat dengan industri, maka kurikulum pendidikannya dirancang bersama industri, sehingga lulusan D4 menjadi ahli yang siap terjun dan bekerja di industri.</p>', '<h5 style=\"text-align: justify;\"><span style=\"font-size: 14pt;\"><em>Menjadikan <strong>Program Studi Teknologi Rekayasa Perangkat Lunak Program Sarjana Terapan</strong> sebagai batu loncatan menuju masa depan Teknologi Informasi yang mengintegrasikan dunia pendidikan dengan kebutuhan usaha akan tenaga profesional informatika yang mampu bersaing secara global.</em></span></h5>', '<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">◾Menyelenggarakan pendidikan vokasional yang mendidik dan menghasilkan sumber daya manusia yang mempunyai sikap memimpin, penuh kreativitas, berdisiplin tinggi, dan mampu memberikan solusi di bidang Teknologi Informasi secara global</p>\r\n<p style=\"text-align: justify;\">◾Membuat terobosan dalam dunia pendidikan dengan menciptakan lingkungan pendidikan yang sehat, kondusif dengan dukungan tenaga pengajar yang ahli dan profesional.</p>\r\n<p style=\"text-align: justify;\">◾ Menyelenggarakan program penelitian yang menghasilkan produk teknologi informasi yang memberikan solusi tepat guna dan inovatif untuk diterapkan di berbagai bidang kehidupan masyarakat.</p>\r\n<p style=\"text-align: justify;\">◾Menyelenggarakan proses pengabdian kepada masyarakat di dunia teknologi informasi melalui berbagai program diseminasi teknologi informasi terhadap masyarakat di berbagai bidang.</p>', '<p style=\"text-align: justify;\">Meningkatkan peringkat akreditasi program studi menjadi unggul.</p>\r\n<p style=\"text-align: justify;\">Mewujudkan tata kelola program studi yang berkualitas.</p>\r\n<p style=\"text-align: justify;\">Menghasilkan alumni yang memiliki pengetahuan dan keterampilan dalam bidang informatika yang gayut terhadap kebutuhan industri, berjiwa kepemimpinan, serta berkarakter mar-Tuhan, marroha, dan marbisuk. Meningkatkan kualitas sumber daya manusia serta sarana dan prasarana akademik.</p>\r\n<p style=\"text-align: justify;\">Menyediakan organisasi serta sarana dan prasarana penelitian yang berkualitas demi terwujudnya rencana dan peta jalan penelitian yang bertaraf nasional dalam bidang informatika.</p>\r\n<p style=\"text-align: justify;\">Menghasilkan karya penelitian yang berkualitas dan berdampak dalam bidang-bidang kajian yang menjadi unggulan program studi.</p>\r\n<p style=\"text-align: justify;\">Menghasilkan program-program pengabdian masyarakat untuk penerapan teknologi dalam bidang informatika dalam rangka berkontribusi terhadap penyelesaian masalah-masalah nyata yang dihadapi masyarakat.</p>\r\n<p style=\"text-align: justify;\">Meningkatkan kuantitas dan kualitas kerjasama dengan institusi pemerintahan maupun industri untuk pengembangan maupun penerapan ilmu pengetahuan dan teknologi dalam bidang informatika.</p>', '<h3 style=\"text-align: justify;\"><strong>Software Developer</strong></h3>\r\n<p style=\"text-align: justify;\">Software Developer adalah seseorang yang terlibat dalam seluruh fase pengembangan perangkat lunak, mulai dari penggalian kebutuhan, analisis, perancangan, pemrograman, hingga pengujian perangkat lunak. Mereka bertanggung jawab untuk membuat, menguji, dan memelihara aplikasi dan sistem perangkat lunak yang memenuhi kebutuhan pengguna dan organisasi.</p>\r\n<h3 style=\"line-height: 1.4; text-align: justify;\"><strong>Software Quality Assurance</strong></h3>\r\n<p style=\"line-height: 1.4; text-align: justify;\">Software Quality Assurance adalah spesialis yang fokus pada memastikan kualitas perangkat lunak. Bertanggung jawab untuk mengidentifikasi cacat atau bug dalam perangkat lunak dan memastikan bahwa perangkat lunak tersebut memenuhi standar kualitas yang ditetapkan.</p>\r\n<h3 style=\"line-height: 1.4; text-align: justify;\"><strong>IT Researcher</strong></h3>\r\n<p style=\"line-height: 1.4; text-align: justify;\">IT Researcher adalah profesional yang melakukan penelitian dalam bidang teknologi informasi untuk mengembangkan solusi baru, memperbaiki proses yang ada, dan mengeksplorasi teknologi terbaru. Mereka bertugas mengumpulkan dan menganalisis data, serta menghasilkan laporan dan rekomendasi yang dapat digunakan oleh organisasi untuk meningkatkan efisiensi dan efektivitas teknologi mereka.</p>\r\n<h3 style=\"line-height: 1.4; text-align: justify;\" data-sider-select-id=\"ac3e6b9e-0929-41c1-b473-8575d7fed47e\"><strong>IT preneur</strong></h3>\r\n<p style=\"line-height: 1.4; text-align: justify;\">IT Preneur adalah individu yang memulai dan mengelola usaha atau bisnis di bidang teknologi informasi. Mereka menciptakan produk atau layanan berbasis teknologi yang inovatif, serta mengembangkan strategi bisnis untuk memasarkan dan menjual produk mereka. IT Preneur harus memiliki keterampilan teknis yang kuat, serta kemampuan manajemen dan kewirausahaan untuk mengembangkan bisnis mereka.</p>\r\n<h3 style=\"line-height: 1.4; text-align: justify;\"><strong>System Analyst</strong></h3>\r\n<p style=\"line-height: 1.4; text-align: justify;\">System Analyst adalah profesional yang menganalisis dan merancang solusi sistem informasi untuk memenuhi kebutuhan bisnis. Mereka bekerja dengan pemangku kepentingan untuk memahami kebutuhan bisnis dan mengubahnya menjadi spesifikasi teknis yang dapat diimplementasikan oleh tim pengembang. System Analyst juga memastikan bahwa sistem yang dikembangkan efisien dan efektif dalam memenuhi tujuan bisnis.</p>\r\n<h3 style=\"line-height: 1.4; text-align: justify;\"><strong>Database Administrator (DBA)</strong></h3>\r\n<p style=\"line-height: 1.4; text-align: justify;\">Database Administrator adalah ahli yang mengelola dan memelihara sistem basis data. Mereka bertanggung jawab untuk memastikan bahwa basis data tersedia, aman, dan berkinerja optimal. Tugas DBA meliputi instalasi, konfigurasi, pemantauan, dan pemeliharaan basis data, serta pemulihan data dan pengelolaan keamanan data.</p>', '<p style=\"text-align: justify;\"><strong>Program studi Sarjana Terapan Teknologi Rekayasa Perangkat Lunak </strong>menggunakan irisan Body Of Knowledge (BOK) dari bidang studi Computer Science (CS) dan Software Engineering (SE) dengan area pengetahuan yang didetilkan pada dokumen Software Engineering Body Of Knowledge (SWEBOK). Cakupan ilmu yang diajarkan pada program studi Sarjana Terapan TRPL untuk mempersiapkan mahasiswa untuk menghasilkan perangkat lunak secara khusus yang berbasis web dan mobile dengan kompleksitas baik yang untuk skala kecil maupun yang kompleks. Struktur Matakuliah ditampilkan pada tabel di bawah ini.</p>\r\n<p style=\"text-align: justify;\"><em><strong>Daftar Mata Kuliah Program Studi Sarjana Terapan Teknologi Rekayasa Perangkat Lunak :</strong></em></p>', '<p style=\"text-align: justify;\">Dosen pengajar di program studi <strong>Sarjana Terapan Teknologi Rekayasa Perangkat Lunak</strong> adalah lulusan universitas terbaik di dalam dan luar negeri, dengan keahlian di bidang software development, software quality assurance, UI/UX, database, machine learning.</p>\r\n<p style=\"text-align: justify;\"><strong>Berikut adalah Dosen Program Studi Sarjana Terapan Teknologi Rekayasa Perangkat Lunak :</strong>.</p>', '2024-05-14 13:05:43', '2024-05-27 12:44:36'),
(2, 'Diploma Tiga (D-3) Teknologi Informasi', 'diploma-tiga-d-3-teknologi-informasi', 'Diploma Tiga (D-3) Teknologi Informasi', NULL, 'tMY8eypRZbCrvq50H0PkQFw718G5KIMl8BlchBys.jpg', '<p><strong>Program Studi Teknologi Informasi Diploma Tiga</strong> adalah salah satu dari 3 (tiga) program studi yang dikelola oleh Institut Teknologi Del (IT Del) yang berdiri pada tahun 2001 sesuai <em>SK No. 222/D/O/2001</em> tertanggal 28 September 2001 dengan nama Program Studi Teknologi Informasi. Program studi ini berlokasi di Jl. Sisingamangaraja, Desa Sitoluama, Kecamatan Laguboti, Toba Samosir, Propinsi Sumatera Utara berjarak kurang lebih 200 km (lima jam perjalanan mobil) dari Medan sebagai Ibukota Propinsi Sumatera Utara. Desa Sitoluama adalah suatu desa kecil yang berada di tepi Danau Toba dan dilalui oleh jalan raya lintas propinsi dan berjarak sekitar 10 KM dari Balige sebagai ibukota Kabupaten Tobasa.</p>\r\n<p><strong>Program Studi Teknologi Informasi Diploma Tiga</strong> mempunyai sasaran untuk menyelenggarakan proses pembelajaran yang dapat menumbuhkan-kembangkan daya nalar, daya cipta, daya kreasi dan keterampilan yang tinggi, yang dapat dikomunikasikan dan diaplikasikan pada bidang kehidupan.</p>\r\n<p>Prodi ini memperoleh perpanjangan ijin penyelenggaraan <strong>Program Studi Teknologi Informasi Diploma Tiga </strong>(10802) sesuai dengan SK Direktur Jenderal Pendidikan Tinggi <em>Nomor 3649/D/T/2004 tertanggal 9 September 2004</em>. Kemudian pada tanggal 11 Oktober 2007 memperoleh SK perpanjangan ulang <em>No. 3169/D/T/2007</em> dengan sebutan nama program studi adalah<strong> Program Studi Teknologi Informasi Diploma Tiga</strong>. Kemudian pada tanggal 3 Mei 2010 memperoleh SK perpanjangan ulang <em>No. 1854/D/T/K-I/2010</em> dengan sebutan nama program studi kembali menjadi <strong>Program Studi Teknologi Informasi Diploma Tiga.</strong></p>\r\n<p><strong>Program Studi Teknologi Informasi Diploma Tiga membekali mahasiswa dengan keterampilan dan pengetahuan pada&nbsp;<em>subject core</em>&nbsp;di bidang Teknik Informasi seperti&nbsp;<em>Software Engineering</em>,&nbsp;<em>Object-Oriented Analysis and Design</em>,&nbsp;<em>Software Testing</em>, Manajemen Proyek dan pembangunan perangkat lunak, dan bahasa pemograman Java serta meningkatkan keterampilan dan keahlian mahasiswa di dalam penggunaan teknologi dan aplikasi yang relevan dan berguna dalam penerapan Teknik Informatika di dunia kerja.</strong></p>', '<h5><span style=\"font-size: 14pt;\"><em>Menjadi <strong>Program Studi Diploma Tiga Teknologi Infomasi</strong> unggulan pada program pendidikan dan penelitian terapan di bidang pengembangan teknologi informasi yang bertaraf nasional dan internasional pada tahun 2024.</em></span></h5>', '<p>◾Menyelenggarakan pendidikan vokasi yang unggul untuk menghasilkan sumber daya manusia yang profesional di bidang teknologi informasi dan komunikasi;</p>\r\n<p>◾Membuat terobosan dalam dunia pendidikan dengan menciptakan lingkungan pendidikan yang sehat, kondusif dengan dukungan tenaga pengajar yang ahli dan profesional.</p>\r\n<p>◾Meningkatkan program penelitian terapan yang inovatif dan bertaraf nasional maupun internasional di bidang teknologi informasi dan komunikasi;</p>\r\n<p>◾Meningkatkan program pengabdian masyarakat melalui kerjasama dengan berbagai institusi pemerintahan dan industri di tingkat regional maupun nasional.</p>', '<p><strong>Tujuan Pendidikan Program Studi Teknologi Informasi Diploma Tiga : </strong></p>\r\n<p>Meningkatkan peringkat akreditasi program studi menjadi unggul.</p>\r\n<p>Mewujudkan tata kelola program studi yang berkualitas.</p>\r\n<p>Menghasilkan alumni yang memiliki pengetahuan dan keterampilan dalam bidang informatika yang gayut terhadap kebutuhan industri, berjiwa kepemimpinan, serta berkarakter <em><strong>mar-Tuhan, marroha, dan marbisuk</strong></em>.</p>\r\n<p>Meningkatkan kualitas sumber daya manusia serta sarana dan prasarana akademik.</p>\r\n<p>Menyediakan organisasi serta sarana dan prasarana penelitian yang berkualitas demi terwujudnya rencana dan peta jalan penelitian yang bertaraf nasional dalam bidang informatika.</p>\r\n<p>Menghasilkan karya penelitian yang berkualitas dan berdampak dalam bidang-bidang kajian yang menjadi unggulan program studi.</p>\r\n<p>Menghasilkan program&ndash;program pengabdian masyarakat untuk penerapan teknologi dalam bidang informatika dalam rangka berkontribusi terhadap penyelesaian masalah&ndash;masalah nyata yang dihadapi masyarakat.</p>\r\n<p>Meningkatkan kuantitas dan kualitas kerjasama dengan institusi pemerintahan maupun industri untuk pengembangan maupun penerapan ilmu pengetahuan dan teknologi dalam bidang informatika.</p>', '<h4><strong>Software Engineer</strong></h4>\r\n<p>Software Engineer adalah profesional yang merancang, mengembangkan, menguji, dan memelihara perangkat lunak. Mereka menggunakan prinsip-prinsip rekayasa dan pengetahuan pemrograman untuk menciptakan perangkat lunak yang efisien, dapat diandalkan, dan scalable. Software Engineer bekerja sama dengan tim lain untuk memastikan bahwa perangkat lunak yang dikembangkan memenuhi kebutuhan pengguna dan standar kualitas yang ditetapkan.</p>\r\n<h4><strong>Analyst Programmer</strong></h4>\r\n<p>Analyst Programmer adalah profesional yang menggabungkan peran analis sistem dan programmer. Mereka bertanggung jawab untuk menganalisis kebutuhan pengguna, merancang solusi sistem, serta menulis dan menguji kode program. Analyst Programmer juga memastikan bahwa solusi yang dikembangkan sesuai dengan spesifikasi dan dapat diintegrasikan dengan sistem yang ada.</p>\r\n<h4><strong>Web Application Developer</strong></h4>\r\n<p>Web Application Developer adalah spesialis yang fokus pada pengembangan aplikasi berbasis web. Mereka menggunakan teknologi seperti HTML, CSS, JavaScript, serta framework dan bahasa pemrograman server-side seperti PHP, Python, Ruby, atau Node.js untuk membuat aplikasi web yang interaktif dan responsif. Web Application Developer bekerja pada front-end dan/atau back-end untuk memastikan aplikasi web berfungsi dengan baik dan memberikan pengalaman pengguna yang optimal.</p>\r\n<h4><strong>IT Support Personnel</strong></h4>\r\n<p>IT Support Personnel adalah profesional yang menyediakan dukungan teknis dan bantuan kepada pengguna komputer dan jaringan dalam organisasi. Mereka menangani masalah perangkat keras dan perangkat lunak, memberikan pelatihan kepada pengguna, serta memastikan bahwa sistem dan jaringan berjalan dengan lancar. IT Support Personnel juga bertugas melakukan pemeliharaan rutin dan pemecahan masalah untuk mencegah gangguan operasional.</p>\r\n<h4><strong>Mobile Application Developer</strong></h4>\r\n<p>Mobile Application Developer adalah profesional yang merancang dan mengembangkan aplikasi untuk perangkat mobile seperti smartphone dan tablet. Mereka bekerja dengan platform mobile seperti Android dan iOS, menggunakan bahasa pemrograman dan tool development khusus untuk masing-masing platform. Mobile Application Developer bertanggung jawab untuk memastikan bahwa aplikasi mobile intuitif, responsif, dan memenuhi kebutuhan pengguna.</p>', '<p><strong>Program studi Diploma III Teknologi Informasi</strong> menggunakan irisan Body Of Knowledge (BOK) dari bidang studi Computer Science (CS) dan Software Engineering (SE) dengan area pengetahuan yang didetilkan pada dokumen Software Engineering Body Of Knowledge (SWEBOK). Cakupan ilmu yang diajarkan pada <strong>program studi Diploma III Teknologi Informasi</strong> dirancang untuk mempersiapkan mahasiswa menghasilkan perangkat lunak yang berbasis web dan mobile, baik untuk skala kecil maupun kompleks. Struktur mata kuliah ditampilkan pada tabel di bawah ini.</p>\r\n<p><strong>Program studi</strong> ini bertujuan untuk membekali mahasiswa dengan keterampilan praktis dan teoretis yang diperlukan untuk berkarir di bidang teknologi informasi. Mahasiswa akan dilatih untuk menguasai berbagai teknologi dan metodologi terkini dalam pengembangan perangkat lunak, baik untuk aplikasi web maupun mobile. Selain itu, program ini juga mencakup aspek-aspek manajemen proyek dan kewirausahaan untuk mempersiapkan lulusan yang siap bersaing di industri teknologi informasi.</p>\r\n<p><em><strong>Daftar Mata Kuliah Program Studi Diploma III Teknologi Informasi</strong></em></p>', '<p>Dosen pengajar di <strong>program studi Diploma Tiga Teknologi Informasi </strong>adalah lulusan dari universitas-universitas terbaik, baik di dalam maupun luar negeri. Mereka memiliki keahlian di berbagai bidang, termasuk pengembangan perangkat lunak, jaminan kualitas perangkat lunak <em>(software quality assurance)</em>, desain antarmuka pengguna dan pengalaman pengguna <em>(UI/UX)</em>, basis data, serta pembelajaran mesin (machine learning).</p>\r\n<p><strong>Berikut adalah Dosen Program Studi Diploma Tiga (D-3) Teknologi Informasi:</strong>.</p>', '2024-05-14 13:14:10', '2024-05-23 18:40:21'),
(3, 'Diploma Tiga (D-3) Teknologi Komputer', 'diploma-tiga-d-3-teknologi-komputer', 'Diploma Tiga (D-3) Teknologi Komputer', NULL, 'Dxz4oaY3nTNlxDuIX2hB8a7z2utCKyQTYGLaWM8T.jpg', '<p><strong>Program Studi Teknik Komputer Diploma Tiga (D-3)</strong> di Institut Teknologi Del didirikan dengan tujuan untuk menyediakan pendidikan berkualitas tinggi di bidang teknologi komputer, khususnya bagi siswa di daerah pedesaan Tobasa dan sekitarnya. Program ini dirancang untuk menjawab kebutuhan akan tenaga ahli yang terampil di bidang<em> jaringan komputer dan teknologi informasi</em>, yang semakin meningkat seiring dengan pesatnya perkembangan teknologi.</p>\r\n<p>Sejak didirikan, <strong>Program</strong> <strong>Studi Teknik Komputer Diploma Tiga (D-3) </strong>ini telah berkomitmen untuk memberikan pendidikan yang setara dengan yang tersedia di kota-kota besar, dengan fokus pada aplikasi praktis dan pengembangan keterampilan teknis yang relevan dengan industri. Kurikulum yang digunakan mengintegrasikan teori dan praktik, memastikan bahwa lulusan memiliki pengetahuan mendalam dan kemampuan praktis yang diperlukan untuk sukses dalam karir mereka.</p>\r\n<p><strong>Institut Teknologi Del</strong> juga bekerja sama dengan berbagai industri dan institusi pendidikan lainnya untuk terus memperbarui dan meningkatkan kurikulum serta fasilitas pendidikannya. Hal ini memastikan bahwa mahasiswa selalu mendapatkan pendidikan yang up-to-date dengan teknologi terkini dan kebutuhan industri.</p>\r\n<p>Dengan pengajar yang merupakan lulusan universitas terkemuka baik dari dalam maupun luar negeri, serta fasilitas modern yang mendukung proses belajar mengajar, <strong>Program Studi Teknik Komputer D-3 Institut Teknologi Del</strong> telah menghasilkan lulusan-lulusan yang kompeten dan siap bersaing di pasar kerja global. Lulusan dari program ini diharapkan memiliki kemampuan untuk merancang, membangun, dan memelihara jaringan komputer, serta memiliki inisiatif, kreativitas, etika kerja, dan semangat kewirausahaan yang tinggi.</p>\r\n<p>Website program studi Teknik Komputer :&nbsp;<em><strong><a href=\"http://d3tk.del.ac.id/\">http://d3tk.del.ac.id/</a></strong></em></p>', '<h5><em><span style=\"font-size: 14pt;\">Menjadi <strong>Program Studi Teknik Komputer Diploma Tiga (D-3)</strong> unggulan pada program pendidikan dan penelitian terapan di bidang pengembangan teknologi informasi yang bertaraf nasional dan internasional pada tahun 2024.</span></em></h5>', '<p>◾Menyelenggarakan <strong>pendidikan vokasi</strong> yang unggul untuk menghasilkan sumber daya manusia yang profesional di bidang teknologi informasi dan komunikasi;</p>\r\n<p>◾Meningkatkan program penelitian terapan yang inovatif dan bertaraf nasional maupun internasional di bidang teknologi informasi dan komunikasi;</p>\r\n<p>◾Meningkatkan program pengabdian masyarakat melalui kerjasama dengan berbagai institusi pemerintahan dan industri di tingkat regional maupun nasional.</p>', '<p><strong data-sider-select-id=\"169c6bc5-f353-4848-ae34-677eec081d8c\">Tujuan Pendidikan Program Studi Teknik Komputer Diploma Tiga :</strong></p>\r\n<ol>\r\n<li>Memiliki sikap religius dan menghormati kemanusiaan, serta berkontribusi secara positif dalam meningkatkan mutu kehidupan masyarakat, berbangsa, dan bernegara berdasarkan nilai-nilai Pancasila.</li>\r\n<li>Menginternalisasi nilai-nilai institusi, seperti sikap Mar-Tuhan, Marroha, dan Marbisuk, dalam menjalankan tugas dan tanggung jawab profesional.</li>\r\n<li>Memiliki kemampuan untuk memecahkan masalah pekerjaan dengan menggunakan pemikiran logis, inovatif, dan bertanggung jawab atas hasilnya secara mandiri.</li>\r\n<li>Menerapkan konsep-konsep sains alam, aplikasi matematika rekayasa, prinsip-prinsip rekayasa, serta sains dan perancangan rekayasa yang diperlukan untuk menganalisis dan merancang sistem komputer, proses, produk, atau komponen.</li>\r\n<li>Mampu mengaplikasikan konsep secara umum yang terkait dengan sistem komputer, jaringan komputer, Internet of Things, dan infrastruktur komputasi awan.</li>\r\n<li>Merancang, membangun, mengelola, dan memelihara jaringan komputer dengan mematuhi fase pembangunan yang benar dan menerapkan metodologi pembangunan sistem yang tepat.</li>\r\n<li>Merancang, mengimplementasikan, dan mengelola sistem keamanan jaringan komputer sesuai dengan kebutuhan pengguna.</li>\r\n<li>Merancang, mengimplementasikan, dan mengelola infrastruktur komputasi awan menggunakan platform terkini.</li>\r\n<li>Merancang dan mengimplementasikan sistem kontrol elektronik berbasis komputer atau mikrokontroler.</li>\r\n<li>Merancang dan mengimplementasikan solusi Internet of Things untuk mendukung berbagai aplikasi dan kebutuhan teknologi informasi.</li>\r\n</ol>\r\n<p><strong>Dengan pencapaian tujuan tersebut, diharapkan lulusan Program Studi Diploma Tiga (D-3) Teknologi Komputer akan memiliki kualifikasi sebagai Ahli Madya Teknik Komputer yang dapat berkontribusi secara signifikan dalam industri teknologi informasi.</strong></p>', '<h5><strong data-sider-select-id=\"6c9e0962-1bb7-4ea5-af15-b5a91550274e\">Pengelola Sistem Komputer</strong></h5>\r\n<p>Lulusan ini bertanggung jawab untuk mengembangkan, mengontrol, memelihara, dan mendukung kinerja serta keamanan optimal dari sistem teknologi informasi. Mereka memiliki keahlian dalam merancang dan mengelola infrastruktur sistem komputer, serta mengimplementasikan kebijakan keamanan yang sesuai untuk melindungi data dan sumber daya informasi perusahaan.</p>\r\n<h5><strong data-sider-select-id=\"6c9e0962-1bb7-4ea5-af15-b5a91550274e\">Tenaga Profesional Jaringan Komputer</strong></h5>\r\n<p>Lulusan ini menjadi tenaga profesional di bidang jaringan komputer, yang bertugas mengembangkan, mengelola, memelihara, dan mengkonfigurasi perangkat keras dan perangkat lunak jaringan. Mereka juga terlibat dalam memonitor, memecahkan masalah, dan mengoptimalkan kinerja jaringan komputer untuk memastikan konektivitas yang stabil dan efisien.<strong data-sider-select-id=\"6c9e0962-1bb7-4ea5-af15-b5a91550274e\"><br /></strong></p>\r\n<h5><strong>Computer Technical Support Specialist</strong></h5>\r\n<p>Lulusan ini adalah ahli dalam memberikan bantuan dan petunjuk teknis kepada pengguna komputer untuk menyelesaikan masalah terkait perangkat keras, perangkat lunak, dan sistem. Mereka mampu mengidentifikasi dan memperbaiki gangguan dalam sistem komputer serta memberikan solusi yang efektif kepada pengguna.<strong><br /></strong></p>\r\n<h5><strong data-sider-select-id=\"6c9e0962-1bb7-4ea5-af15-b5a91550274e\">Pengelola Sistem Komputasi Awan</strong></h5>\r\n<p>Lulusan ini memiliki keahlian dalam membangun dan mengelola virtualisasi pada level infrastruktur untuk menyediakan layanan pada komputasi awan. Mereka bertanggung jawab untuk merancang, mengimplementasikan, dan memelihara lingkungan komputasi awan yang aman, andal, dan efisien.</p>\r\n<p><strong data-sider-select-id=\"6c9e0962-1bb7-4ea5-af15-b5a91550274e\">Dengan latar belakang pendidikan dan pelatihan yang diperoleh dari Program Studi Diploma Tiga (D-3) Teknologi Komputer, lulusan memiliki keterampilan dan pengetahuan yang diperlukan untuk sukses dalam berbagai peran yang berkaitan dengan pengelolaan sistem komputer, jaringan, komputasi awan, dan dukungan teknis komputer.</strong></p>', '<p><strong>Program Studi Diploma Tiga (D-3) Teknologi Komputer</strong> menggunakan konsep irisan <em>Body of Knowledge (BOK) dari bidang Computer Science (CS) dan Software Engineering (SE)</em>, dengan fokus pada area pengetahuan yang terperinci dalam dokumen<em> Software Engineering Body of Knowledge (SWEBOK)</em>. Kurikulum program studi ini dirancang untuk mempersiapkan mahasiswa dalam menghasilkan perangkat lunak khususnya yang berbasis web dan mobile dengan tingkat kompleksitas baik, mulai dari skala kecil hingga kompleks.</p>\r\n<p><strong>Berikut adalah struktur mata kuliah Program Studi Diploma Tiga (D-3) Teknologi Komputer:</strong></p>', '<p>Dosen pengajar di <strong>Program Studi Diploma Tiga (D-3) Teknologi Komputer </strong>merupakan lulusan dari universitas terkemuka, baik lokal maupun internasional. Mereka memiliki keahlian yang luas dalam bidang-bidang seperti pengembangan perangkat lunak, jaminan kualitas perangkat lunak, desain antarmuka pengguna <em>(UI/UX)</em>, basis data, dan machine learning. Keahlian ini memastikan bahwa mahasiswa menerima pengajaran yang berkualitas tinggi dan relevan dengan perkembangan industri teknologi informasi saat ini, serta siap untuk menghadapi tantangan di dunia kerja setelah lulus</p>\r\n<p><strong>Berikut adalah Dosen Program Studi Diploma Tiga (D-3) Teknologi Komputer:</strong>.</p>', '2024-05-14 13:15:44', '2024-05-23 18:40:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profils`
--

CREATE TABLE `profils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_pos` int(11) DEFAULT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `karir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kenapa_vokasi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profils`
--

INSERT INTO `profils` (`id`, `nama`, `alamat`, `kode_pos`, `telepon`, `email`, `karir`, `logo`, `video`, `peta`, `kenapa_vokasi`, `facebook`, `twitter`, `youtube`, `instagram`, `created_at`, `updated_at`) VALUES
(1, '<h1><span style=\"color: #ecf0f1; font-size: 36pt;\"><strong><span style=\"font-family: arial, helvetica, sans-serif;\">Institut Teknologi Del</span></strong></span></h1>\r\n<p>&nbsp;</p>\r\n<h1><span style=\"color: #ecf0f1;\"><strong>Fakultas Vokasi</strong></span', '<p style=\"text-align: justify;\">Institut Teknologi Del Jl. Sisingamangaraja, Sitoluama Laguboti, Toba Samosir Sumatera Utara, Indonesia</p>', 22381, '082632331234', 'info@del.ac.id', 'karir@del.ac.id', 'public/logos/r32uDu3ubsIsYILywFWTQL9yWjKqTWfxuqA2Ly8r.png', 'public/videos/DuSqBkt9K9bNaCtHDrN51uwmUvtlaBHOrw0vp9s4.mp4', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.367330226955!2d99.14605787586032!3d2.383220557381434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e00fdad2d7341%3A0xf59ef99c591fe451!2sInstitut%20Teknologi%20Del!5e0!3m2!1sid!2sid!4v1715324361059!5m2!1sid!2sid\\', '<p style=\"text-align: justify;\">Temukan Keunggulan dalam Program Studi yang Berfokus, Menyesuaikan Belajar dengan Passion dan Profesi, dan Siap Bersaing di Dunia Kerja dengan Kemampuan Praktis yang Teruji. Bergabunglah di <strong>FAKULTAS VOKASI</strong> dalam Perjalanan Membangun Masa Depan yang gemilang dan <strong>Menuju Indonesia Emas</strong>, dengan Pendidikan <strong>Vokasi</strong> yang Mengutamakan Kualitas, Didukung oleh Jajaran Pengajar Berpengalaman di Bidang Informatika dan Komputer, dan Membuka Peluang melalui Keterlibatan Langsung dari Dunia Usaha dan Industri dalam Menyempurnakan Potensi Anda</p>', 'https://web.facebook.com/Institut.Teknologi.Del/', 'https://twitter.com/intent/follow?original_referer=https%3A%2F%2Fwww.del.ac.id%2F&ref_src=twsrc%5Etfw%7Ctwcamp%5Ebuttonembed%7Ctwterm%5Efollow%7Ctwgr%5Einstitut_del&region=follow_link&screen_name=institut_del', 'https://www.youtube.com/@institutteknologidel1337', 'https://www.instagram.com/vokasi.itdel/', '2024-05-14 11:19:36', '2024-06-03 23:59:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prodi_id` bigint(20) UNSIGNED NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` int(11) NOT NULL,
  `teori` int(11) NOT NULL,
  `praktikum` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `semesters`
--

INSERT INTO `semesters` (`id`, `prodi_id`, `note`, `kode`, `matkul`, `sks`, `teori`, `praktikum`, `created_at`, `updated_at`) VALUES
(1, 1, 'Semester 1', 'KU41101', 'Pembentukan Karakter Del', 2, 1, 1, '2024-05-14 22:01:36', '2024-06-02 13:12:01'),
(2, 1, 'Semester 1', 'KU41102', 'Bahasa Inggris I', 2, 2, 0, '2024-05-14 22:02:11', '2024-05-14 22:02:11'),
(3, 1, 'Semester 1', 'TI41101', 'Inovasi Digital', 2, 1, 1, '2024-05-14 22:02:59', '2024-05-14 22:02:59'),
(4, 1, 'Semester 1', '1041101', 'Dasar Pemrograman', 2, 1, 1, '2024-05-14 22:03:22', '2024-05-14 22:03:22'),
(5, 1, 'Semester 1', '1041102', 'Matematika Diskrit', 3, 1, 2, '2024-05-14 22:03:50', '2024-05-14 22:03:50'),
(6, 1, 'Semester 1', '1041103', 'Arsitektur dan Organisasi Komputer', 3, 1, 2, '2024-05-14 22:04:08', '2024-05-14 22:04:08'),
(7, 1, 'Semester 1', '1141104', 'Pengembangan Situs Web I', 3, 2, 1, '2024-05-14 22:04:23', '2024-05-14 22:04:23'),
(8, 1, 'Semester 1', '1141105', 'Pengenalan Rekayasa Perangkat Lunak', 3, 1, 2, '2024-05-14 22:04:46', '2024-05-14 22:04:46'),
(9, 1, 'Semester 2', 'KU41201', 'Bahasa Inggris II', 2, 1, 1, '2024-05-14 22:05:19', '2024-05-14 22:08:02'),
(10, 1, 'Semester 2', 'KU41202', 'Tata Tulis Karya Ilmiah', 2, 1, 1, '2024-05-14 22:05:40', '2024-05-14 22:08:22'),
(11, 1, 'Semester 2', '1041202', 'Sistem Operasi', 3, 1, 2, '2024-05-14 22:05:53', '2024-05-14 22:08:37'),
(12, 1, 'Semester 2', '1141203', 'Analisis Kebutuhan Perangkat Lunak', 3, 1, 2, '2024-05-14 22:06:13', '2024-05-14 22:08:45'),
(13, 1, 'Semester 2', '1141204', 'Pengembangan Sistus Web II', 3, 1, 2, '2024-05-14 22:06:42', '2024-05-14 22:08:54'),
(14, 1, 'Semester 2', '1141205', 'Pengenalan Basis Data', 3, 1, 2, '2024-05-14 22:07:04', '2024-05-14 22:09:11'),
(15, 1, 'Semester 2', '1141290', 'Proyek Akhir Tahun I', 3, 1, 2, '2024-05-14 22:07:20', '2024-05-14 22:09:17'),
(16, 1, 'Semester 3', 'KU42101', 'Bahasa Inggris III', 2, 1, 1, '2024-05-14 22:37:22', '2024-05-14 22:37:22'),
(17, 1, 'Semester 3', '1042101', 'Jaringan Komputer', 3, 2, 1, '2024-05-14 22:37:41', '2024-05-14 22:38:11'),
(18, 1, 'Semester 3', '1042102', 'Algoritma dan Struktur Data', 3, 2, 1, '2024-05-14 22:38:02', '2024-05-14 22:38:18'),
(19, 1, 'Semester 3', '1142103', 'Pengembangan Perangkat Lunak Berorientasi Objek', 3, 1, 2, '2024-05-14 22:38:35', '2024-05-14 22:39:32'),
(20, 1, 'Semester 3', '1142104', 'Perancangan Antarmuka Pengguna', 3, 1, 2, '2024-05-14 22:38:46', '2024-05-14 22:39:39'),
(21, 1, 'Semester 3', '1142105', 'Sistem Basis Data', 3, 1, 2, '2024-05-14 22:39:01', '2024-05-14 22:39:47'),
(22, 1, 'Semester 3', '1142106', 'Logika Informatika', 2, 1, 1, '2024-05-14 22:39:16', '2024-05-14 22:39:53'),
(23, 1, 'Semester 4', 'KU42201', 'Bahasa Inggris IV', 2, 1, 1, '2024-05-14 22:40:18', '2024-05-14 22:41:01'),
(24, 1, 'Semester 4', 'MA42201', 'Probabilitas dan Statistik', 3, 2, 1, '2024-05-14 22:40:30', '2024-05-14 22:41:08'),
(25, 1, 'Semester 4', '1142201', 'Pemrograman Berorientasi Objek', 3, 1, 2, '2024-05-14 22:40:48', '2024-05-14 22:41:14'),
(26, 1, 'Semester 4', '1142202', 'Pengembangan Aplikasi Terdistribusi', 3, 1, 2, '2024-05-14 22:41:28', '2024-05-14 22:41:28'),
(27, 1, 'Semester 4', '1142203', 'Pengembangan Aplikasi Mobile', 3, 1, 2, '2024-05-14 22:41:39', '2024-05-14 22:42:20'),
(29, 1, 'Semester 4', '1142290', 'Proyek Akhir Tahun II', 4, 1, 3, '2024-05-14 22:42:42', '2024-05-14 22:42:42'),
(30, 1, 'Semester 5', 'KU43101', 'Bahasa Inggris V', 2, 1, 1, '2024-05-14 22:43:02', '2024-05-14 22:43:25'),
(31, 1, 'Semester 5', '1143101', 'Pengujian Perangkat Lunak', 3, 3, 0, '2024-05-14 22:43:16', '2024-05-14 22:43:16'),
(32, 1, 'Semester 5', '1143102', 'Algoritma Lanjut', 3, 1, 2, '2024-05-14 22:43:46', '2024-05-14 22:43:55'),
(33, 1, 'Semester 5', '1143103', 'Kreativitas dan Inovasi', 3, 1, 2, '2024-05-14 22:44:13', '2024-05-14 22:44:13'),
(34, 1, 'Semester 5', '1143104', 'Keamanan Perangkat Lunak', 3, 1, 2, '2024-05-14 22:44:31', '2024-05-14 22:44:31'),
(35, 1, 'Semester 5', '1143105', 'Automata', 3, 2, 1, '2024-05-14 22:44:52', '2024-05-14 22:45:14'),
(36, 1, 'Semester 5', '1143106', 'Metodologi Penelitian', 2, 1, 1, '2024-05-14 22:45:06', '2024-05-14 22:45:06'),
(37, 1, 'Semester 6', 'KU43201', 'Bahasa Inggris VI', 2, 1, 1, '2024-05-14 22:45:53', '2024-05-14 22:46:19'),
(38, 1, 'Semester 6', 'KU43201', 'Agama dan Etika', 2, 2, 0, '2024-05-14 22:46:11', '2024-05-14 22:46:11'),
(39, 1, 'Semester 6', 'KU43203', 'Pancasila dan Kewarganegaraan', 2, 2, 0, '2024-05-14 22:46:33', '2024-05-14 23:05:05'),
(40, 1, 'Semester 6', '1143201', 'Etika Profesi', 2, 2, 0, '2024-05-14 23:05:54', '2024-05-14 23:06:04'),
(41, 1, 'Semester 6', '1143202', 'Design Thinking', 2, 1, 1, '2024-05-14 23:06:19', '2024-05-14 23:06:19'),
(42, 1, 'Semester 6', '1143203', 'Mata Kuliah Pilihan 1', 3, 2, 1, '2024-05-14 23:06:33', '2024-05-14 23:07:17'),
(43, 1, 'Semester 6', '1143204', 'Komputer dan Masyarakat', 2, 1, 1, '2024-05-14 23:06:48', '2024-05-14 23:06:48'),
(44, 1, 'Semester 6', '1143290', 'Proyek Akhir Tahun III', 4, 1, 3, '2024-05-14 23:07:02', '2024-05-14 23:07:02'),
(45, 1, 'Semester 7', 'TI44101', 'Keteknowiraan', 3, 1, 2, '2024-05-14 23:07:35', '2024-05-14 23:07:35'),
(46, 1, 'Semester 7', '1144101', 'Arsitektur dan Perancangan Perangkat Lunak', 3, 2, 1, '2024-05-14 23:07:54', '2024-05-14 23:07:54'),
(47, 1, 'Semester 7', '1144102', 'Manajemen Proyek', 3, 1, 2, '2024-05-14 23:08:04', '2024-05-14 23:08:34'),
(48, 1, 'Semester 7', '1144103', 'Kualitas Perangkat Lunak', 2, 1, 1, '2024-05-14 23:08:17', '2024-05-14 23:08:17'),
(49, 1, 'Semester 7', '1144104', 'Reenginering Perangkat Lunak', 2, 1, 1, '2024-05-14 23:08:49', '2024-05-14 23:09:23'),
(50, 1, 'Semester 7', '1144105', 'Mata Kuliah Pilihan 2', 3, 2, 1, '2024-05-14 23:09:01', '2024-05-14 23:09:32'),
(51, 1, 'Semester 7', '1144190', 'Tugas Akhir I', 3, 1, 2, '2024-05-14 23:09:16', '2024-05-14 23:09:16'),
(52, 1, 'Semester 8', '1144201', 'Studi Mandiri / Sertifikasi Profesional', 3, 0, 3, '2024-05-14 23:09:47', '2024-05-14 23:09:47'),
(53, 1, 'Semester 8', '1144290', 'Tugas Akhir II', 4, 0, 4, '2024-05-14 23:10:01', '2024-05-14 23:10:25'),
(54, 1, 'Semester 8', '1144291', 'Kerja Praktek Industri', 6, 0, 6, '2024-05-14 23:10:16', '2024-05-14 23:10:16'),
(55, 2, 'Semester 1', 'KU31101', 'Bahasa Inggris I', 2, 1, 1, '2024-05-14 23:36:07', '2024-05-14 23:36:07'),
(56, 2, 'Semester 1', 'KU31102', 'Pembentukan Karakter Del', 2, 2, 0, '2024-05-14 23:57:09', '2024-05-14 23:57:09'),
(57, 2, 'Semester 1', 'TI31101', 'Inovasi Digital', 2, 1, 1, '2024-05-14 23:57:28', '2024-05-14 23:57:28'),
(58, 2, 'Semester 1', '1031101', 'Dasar Pemrograman', 3, 2, 1, '2024-05-14 23:57:49', '2024-05-14 23:57:49'),
(59, 2, 'Semester 1', '1031102', 'Matematika Diskrit', 3, 2, 1, '2024-05-14 23:58:04', '2024-05-14 23:58:04'),
(60, 2, 'Semester 1', '1031103', 'Arsitektur dan Organisasi Komputer', 2, 1, 1, '2024-05-14 23:58:22', '2024-05-14 23:58:22'),
(61, 2, 'Semester 1', '1131104', 'Pengembangan Situs Web I', 3, 1, 2, '2024-05-14 23:58:34', '2024-05-14 23:58:34'),
(62, 2, 'Semester 1', '1131105', 'Rekayasa Perangkat Lunak', 3, 1, 2, '2024-05-14 23:58:47', '2024-05-14 23:58:47'),
(63, 2, 'Semester 2', 'KU31201', 'Bahasa Inggris II', 2, 1, 1, '2024-05-15 00:01:58', '2024-05-15 00:01:58'),
(64, 2, 'Semester 2', '1031201', 'Algoritma dan Struktur Data', 3, 1, 2, '2024-05-15 00:02:36', '2024-05-15 00:02:36'),
(65, 2, 'Semester 2', '1031202', 'Sistem Operasi', 3, 2, 1, '2024-05-15 00:02:53', '2024-05-18 14:42:36'),
(66, 2, 'Semester 2', '1131203', 'Perancangan Perangkat Lunak', 3, 1, 2, '2024-05-15 00:03:09', '2024-05-15 00:03:09'),
(67, 2, 'Semester 2', '1131204', 'Pengembangan Situs Web II', 3, 1, 2, '2024-05-15 00:03:24', '2024-05-15 00:03:24'),
(68, 2, 'Semester 2', '1131205', 'Pengenalan Basis Data', 3, 1, 2, '2024-05-15 00:03:37', '2024-05-15 00:03:37'),
(69, 2, 'Semester 2', '1131290', 'Proyek Akhir Tahun I', 3, 1, 2, '2024-05-15 00:03:51', '2024-05-15 00:05:12'),
(71, 2, 'Semester 3', 'KU32101', 'Bahasa Inggris III', 2, 1, 1, '2024-05-15 00:07:10', '2024-05-15 00:07:10'),
(72, 2, 'Semester 3', 'MA32101', 'Probabilistik dan Statistik', 3, 2, 1, '2024-05-15 00:07:31', '2024-05-15 00:07:31'),
(73, 2, 'Semester 3', '1032101', 'Jaringan Komputer', 3, 2, 1, '2024-05-15 00:07:46', '2024-05-15 00:07:46'),
(74, 2, 'Semester 3', '1132102', 'Pemrograman Berorientasi Objek', 3, 1, 2, '2024-05-15 00:08:03', '2024-05-15 00:08:03'),
(75, 2, 'Semester 3', '1132103', 'Pengembangan Aplikasi Mobile', 3, 1, 2, '2024-05-15 00:08:19', '2024-05-15 00:08:19'),
(76, 2, 'Semester 3', '1132104', 'Perancangan Antarmuka Pengguna', 3, 1, 2, '2024-05-15 00:08:45', '2024-05-15 00:08:45'),
(77, 2, 'Semester 3', '1132205', 'Sistem Basis Data', 3, 1, 2, '2024-05-15 00:09:04', '2024-05-15 00:09:48'),
(78, 2, 'Semester 4', 'KU32201', 'Bahasa Inggris IV', 2, 1, 1, '2024-05-15 00:10:26', '2024-05-15 00:10:26'),
(79, 2, 'Semester 4', 'KU32202', 'Penulisan Karya Ilmiah', 2, 1, 1, '2024-05-18 14:44:12', '2024-05-18 14:44:12'),
(80, 2, 'Semester 4', '1032201', 'Aljabar Linear', 3, 2, 1, '2024-05-18 14:44:41', '2024-05-18 14:45:28'),
(81, 2, 'Semester 4', '1132202', 'Pemrograman Teknologi NET', 3, 1, 2, '2024-05-18 14:46:39', '2024-05-18 14:46:39'),
(82, 2, 'Semester 4', '1132203', 'Pengembangan Aplikasi Terdistribusi', 3, 1, 2, '2024-05-18 14:47:09', '2024-05-18 14:47:09'),
(83, 2, 'Semester 4', '1132204', 'Pengujian dan Kualitas Perangkat Lunak', 3, 1, 2, '2024-05-18 14:47:38', '2024-05-18 14:47:38'),
(84, 2, 'Semester 4', '1132290', 'Proyek Akhir Tahun II', 3, 1, 2, '2024-05-18 14:48:01', '2024-05-18 14:48:01'),
(85, 2, 'Semester 5', 'KU33101', 'Bahasa Inggris V', 2, 1, 1, '2024-05-18 14:48:39', '2024-05-18 14:48:39'),
(86, 2, 'Semester 5', 'TI33101', 'Keteknowiraan (technopreneurship)', 2, 1, 1, '2024-05-18 14:49:04', '2024-05-18 14:49:04'),
(87, 2, 'Semester 5', '1033101', 'Teknologi Kecerdasan Buatan', 3, 1, 2, '2024-05-18 14:49:20', '2024-05-18 14:49:20'),
(88, 2, 'Semester 5', '1133102', 'Algoritma Lanjut', 3, 1, 2, '2024-05-18 14:49:58', '2024-05-18 14:49:58'),
(89, 2, 'Semester 5', '1133103', 'Java untuk Pemrograman Aplikasi Enterprise', 3, 1, 2, '2024-05-18 14:50:40', '2024-05-18 14:50:40'),
(90, 2, 'Semester 5', '1133104', 'Keamanan Perangkat Lunak', 3, 2, 1, '2024-05-18 14:51:41', '2024-05-18 14:51:41'),
(91, 2, 'Semester 5', '1133190', 'Tugas Akhir I', 3, 1, 2, '2024-05-18 14:52:06', '2024-05-18 14:52:06'),
(92, 2, 'Semester 6', 'KU33201', 'Bahasa Inggris VI', 2, 1, 1, '2024-05-18 14:52:32', '2024-05-18 14:52:32'),
(93, 2, 'Semester 6', 'KU33202', 'Agama dan Etika', 2, 2, 0, '2024-05-18 14:53:00', '2024-05-18 14:53:00'),
(94, 2, 'Semester 6', 'KU33203', 'Pancasila dan Kewarganegaraan', 2, 2, 0, '2024-05-18 14:54:08', '2024-05-18 14:54:08'),
(95, 2, 'Semester 6', '1133201', 'Administrasi Basis Data', 2, 1, 1, '2024-05-18 14:54:25', '2024-05-18 14:54:25'),
(96, 2, 'Semester 6', '1133202', 'Socio-Informatics and Professionalism', 2, 2, 0, '2024-05-18 14:54:41', '2024-05-18 14:54:41'),
(97, 2, 'Semester 6', '1133290', 'Tugas Akhir II', 4, 0, 4, '2024-05-18 14:55:10', '2024-05-18 14:55:10'),
(98, 2, 'Semester 6', '1133291', 'Kerja Praktik', 4, 0, 4, '2024-05-18 14:55:35', '2024-05-18 14:55:35'),
(99, 3, 'Semester 1', 'KU31101', 'Bahasa Inggris I', 2, 1, 1, '2024-05-18 19:33:26', '2024-05-18 19:33:26'),
(100, 3, 'Semester 1', 'TI31101', 'Inovasi Digital', 2, 2, 0, '2024-05-18 19:35:29', '2024-05-18 19:35:29'),
(101, 3, 'Semester 1', 'KU31102', 'Pembentukan Karakter Del', 2, 1, 1, '2024-05-18 19:35:51', '2024-05-18 19:36:03'),
(102, 3, 'Semester 1', '1031101', 'Dasar Pemrograman', 3, 1, 2, '2024-05-18 19:36:43', '2024-05-18 19:36:43'),
(103, 3, 'Semester 1', '1031102', 'Matematika Diskrit', 3, 1, 2, '2024-05-18 19:37:04', '2024-05-18 19:37:04'),
(104, 3, 'Semester 1', '1031103', 'Arsitektur dan Organisasi Komputer', 2, 1, 1, '2024-05-18 19:37:23', '2024-05-18 19:37:23'),
(105, 3, 'Semester 1', '1331104', 'Pengembangan Situs Web I', 3, 1, 2, '2024-05-18 19:37:40', '2024-05-18 19:37:40'),
(106, 3, 'Semester 1', '1331105', 'Pengenalan Rekayasa Perangkat Lunak', 3, 1, 2, '2024-05-18 19:37:58', '2024-05-18 19:37:58'),
(107, 3, 'Semester 2', 'KU31201', 'Bahasa Inggris II', 2, 1, 1, '2024-05-18 19:38:43', '2024-05-18 19:38:43'),
(108, 3, 'Semester 2', '1031201', 'Algoritma & Struktur Data', 3, 1, 2, '2024-05-18 19:39:03', '2024-05-18 19:39:03'),
(109, 3, 'Semester 2', '1031202', 'Sistem Operasi', 3, 1, 2, '2024-05-18 19:39:28', '2024-05-18 19:39:28'),
(110, 3, 'Semester 2', '1031203', 'Aljabar Linier', 3, 1, 2, '2024-05-18 19:40:20', '2024-05-18 19:40:20'),
(111, 3, 'Semester 2', '1331204', 'Pengembangan Aplikasi Berbasis Internet', 3, 1, 2, '2024-05-18 19:41:34', '2024-05-18 19:41:34'),
(112, 3, 'Semester 2', '1331205', 'Proyek Akhir Tahun I', 3, 0, 3, '2024-05-18 19:42:01', '2024-05-18 19:42:01'),
(113, 3, 'Semester 2', '1331206', 'Pengenalan Basisdata', 2, 1, 1, '2024-05-18 19:42:20', '2024-05-18 19:42:20'),
(114, 3, 'Semester 3', 'KU32101', 'Bahasa Inggris III', 2, 1, 1, '2024-05-18 19:43:04', '2024-05-18 19:43:04'),
(115, 3, 'Semester 3', 'MA32101', 'Probabilitas dan Statistika', 3, 1, 2, '2024-05-18 19:43:29', '2024-05-18 19:43:29'),
(116, 3, 'Semester 3', '1032101', 'Jaringan Komputer', 3, 1, 2, '2024-05-18 19:43:57', '2024-05-18 19:43:57'),
(117, 3, 'Semester 3', '1332102', 'Pemrograman Sistem', 3, 1, 2, '2024-05-18 19:44:26', '2024-05-18 19:44:26'),
(118, 3, 'Semester 3', '1332103', 'Perancangan Antarmuka Pengguna', 3, 1, 2, '2024-05-18 19:45:13', '2024-05-18 19:45:13'),
(119, 3, 'Semester 3', '1332104', 'Virtualisasi Komputer', 3, 1, 2, '2024-05-18 19:45:37', '2024-05-18 19:45:37'),
(120, 3, 'Semester 3', '1332105', 'Dasar Elektronika', 2, 1, 1, '2024-05-18 19:46:21', '2024-05-18 19:46:21'),
(121, 3, 'Semester 4', 'KU32201', 'Bahasa Inggris IV', 2, 1, 1, '2024-05-18 19:46:58', '2024-05-18 19:46:58'),
(122, 3, 'Semester 4', 'KU32202', 'Penulisan Karya Ilmiah', 2, 1, 1, '2024-05-18 19:47:21', '2024-05-18 19:47:21'),
(123, 3, 'Semester 4', '1332201', 'Antar Jaringan', 3, 1, 2, '2024-05-18 19:47:48', '2024-05-18 19:47:48'),
(124, 3, 'Semester 4', '1332202', 'Perangkat Lunak Sistem Jaringan', 3, 1, 2, '2024-05-18 19:48:49', '2024-05-18 19:48:49'),
(125, 3, 'Semester 4', '1332203', 'Proyek Akhir Tahun II', 3, 1, 2, '2024-05-18 19:49:14', '2024-05-18 19:49:14'),
(126, 3, 'Semester 4', '1332204', 'Sistem Terdistribusi', 3, 1, 2, '2024-05-18 19:49:35', '2024-05-18 19:49:35'),
(127, 3, 'Semester 4', '1332205', 'Sistem Tertanam', 3, 1, 2, '2024-05-18 19:49:50', '2024-05-18 19:49:50'),
(128, 3, 'Semester 5', 'KU33101', 'Bahasa Inggris V', 2, 1, 1, '2024-05-18 19:51:14', '2024-05-18 19:51:14'),
(129, 3, 'Semester 5', 'TI33101', 'Keteknowiraan', 2, 2, 0, '2024-05-18 19:51:39', '2024-05-18 19:51:39'),
(130, 3, 'Semester 5', '1333101', 'Administrasi Jaringan', 3, 1, 2, '2024-05-18 19:51:55', '2024-05-18 19:51:55'),
(131, 3, 'Semester 5', '1333102', 'Keamanan Jaringan', 3, 1, 2, '2024-05-18 19:52:24', '2024-05-18 19:52:24'),
(132, 3, 'Semester 5', '1333103', 'Penerapan Infrastruktur Cloud', 3, 1, 2, '2024-05-18 19:52:42', '2024-05-18 19:52:42'),
(133, 3, 'Semester 5', '1333104', 'Teknologi IoT', 3, 1, 2, '2024-05-18 19:52:59', '2024-05-18 19:52:59'),
(134, 3, 'Semester 5', '1333105', 'Tugas Akhir I', 3, 0, 3, '2024-05-18 19:53:16', '2024-05-18 19:53:16'),
(135, 3, 'Semester 6', 'KU33201', 'Bahasa Inggris VI', 2, 1, 1, '2024-05-18 19:53:50', '2024-05-18 19:53:50'),
(136, 3, 'Semester 6', 'KU33202', 'Agama & Etika', 2, 2, 0, '2024-05-18 19:54:09', '2024-05-18 19:54:09'),
(137, 3, 'Semester 6', 'KU33203', 'Pancasila dan Kewarganegaraan', 2, 2, 0, '2024-05-18 19:54:48', '2024-05-18 19:54:48'),
(138, 3, 'Semester 6', '1333290', 'Kerja Praktik', 4, 0, 4, '2024-05-18 19:55:07', '2024-05-18 19:55:07'),
(139, 3, 'Semester 6', '1333201', 'Tugas Akhir II', 4, 0, 4, '2024-05-18 19:55:24', '2024-05-18 19:55:24'),
(140, 3, 'Semester 6', '1333202', 'Etika Profesi', 2, 1, 1, '2024-05-18 19:55:39', '2024-05-18 19:55:39'),
(141, 3, 'Semester 6', '1333203', 'Komunikasi Data', 2, 1, 1, '2024-05-18 19:55:54', '2024-05-18 19:55:54'),
(142, 3, 'Semester 6', '1333204', 'Pengembangan Profesi', 2, 1, 1, '2024-05-18 19:56:11', '2024-05-18 19:56:11'),
(143, 3, 'Semester 6', 'KUS3054', 'Studi/Proyek Independen 4', 4, 0, 4, '2024-05-18 19:57:02', '2024-05-18 19:57:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sliders`
--

INSERT INTO `sliders` (`id`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'public/slider/B7M22YD06gxUWnTXkmTI1pVZkmFBdJuuhzDTWhXz.jpg', '2024-05-14 11:20:14', '2024-05-14 11:20:14'),
(3, 'public/slider/0nhJvzrpgmrHJCypbNDEAYMGnSmt3URedPCbmv9V.jpg', '2024-05-26 23:51:29', '2024-05-26 23:51:29'),
(4, 'public/slider/AgmMpDFDQXiH9M7bJzS4pdaobcyusw9ZSmYbAT32.jpg', '2024-05-26 23:51:45', '2024-05-26 23:51:45'),
(5, 'public/slider/qmtJknmylZR0GwYHw7jTj9N3DbGt3elrT3dj5FWn.jpg', '2024-05-26 23:51:52', '2024-05-26 23:51:52'),
(6, 'public/slider/Riuq6DoTNxFN5GqVmW55ZFWsPoxjB17NpjGNukZt.jpg', '2024-05-26 23:51:59', '2024-05-26 23:51:59'),
(7, 'public/slider/6T76QSTkkOgvkdxB3g7r3CePdxa2k5C87wheCBg1.jpg', '2024-05-26 23:52:41', '2024-05-26 23:52:41'),
(8, 'public/slider/Gg8wfYBMy6uHieh0uGZ2JZg7rvfnVqV0Urvr9Ukb.jpg', '2024-05-27 03:16:09', '2024-05-27 03:16:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentangs`
--

CREATE TABLE `tentangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sejarah` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah_foto` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_foto` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landasan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sasaran` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `makna` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tentangs`
--

INSERT INTO `tentangs` (`id`, `sejarah`, `sejarah_foto`, `visi`, `misi`, `tujuan_foto`, `landasan`, `sasaran`, `makna`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"text-align: justify;\"><strong>Pendidikan Vokasi</strong> merupakan jenjang pendidikan pertama di Institut Teknologi Del sejak didirikan pada tahun 2001 (sebelumnya bernama Politeknik Informatika Del). <strong>Pendidikan Vokasi </strong>merupakan pendidikan tinggi yang berfokus pada praktik kerja, guna menunjang keahlian di bidang studi tertentu. <strong>Program Vokasi</strong> bertujuan mempersiapkan lulusannya menjadi tenaga yang siap bekerja dan mampu bersaing secara global di Dunia Usaha dan Dunia Industri (DUDI).</p>\r\n<p style=\"text-align: justify;\"><strong>Fakultas Vokasi</strong> Institut Teknologi Del saat ini menyelenggarakan 3 program studi pada jenjang Diploma 3 (D3) dan Diploma 4 (D4), yaitu:</p>\r\n<pre style=\"text-align: justify; padding-left: 40px;\"><strong>D4 (Sarjana Terapan) Teknologi Rekayasa Perangkat Lunak</strong><br /><br /><strong>D3 Teknologi Informasi</strong><br /><br /><strong>D3 Teknologi Komputer</strong></pre>\r\n<p style=\"text-align: justify;\">Ketiga<strong> program studi Vokasi</strong> di Institut Teknologi Del telah terakreditasi B oleh Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT). Dengan fokus pada penguasaan praktis dan dukungan akademis yang kuat, lulusan dari Institut Teknologi Del siap menjadi pemimpin di bidang teknologi dengan daya saing global yang tangguh.</p>\r\n<p>&nbsp;</p>', 'public/tentang/wQhDQopRmlKCW6wk2EwHKLIxYGm2SZ7C3d9HTNcv.png', '<p style=\"text-align: justify;\">Menjadi lembaga <strong>Pendidikan VOKASI</strong>&nbsp;yang unggul dan berperan dalam pengembangan dan pemanfaatan teknologi yang mengintegrasikan dunia pendidikan dengan kebutuhan dunia usaha dan dunia industri akan tenaga profesional informatika dan komputer yang mampu bersaing secara global.</p>', '<p style=\"text-align: justify;\">Menyelenggarakan proses <strong>Pendidikan Vokasi</strong> yang unggul, berkesinambungan, dan bermanfaat bagi masyarakat dalam lingkungan pendidikan yang kondusif, didukung dengan tenaga pendidik yang memiliki kompetensi pada bidang informatika dan komputer, serta melibatkan dunia usaha dan dunia industri dalam pengembangan kemampuan peserta didik. Melaksanakan kegiatan penelitian untuk mengembangkan, menciptakan, dan menyebarkan ilmu pengetahuan dan teknologi terapan pada bidang informatika dan komputer. Melaksanakan kegiatan pengabdian kepada masyarakat melalui diseminasi teknologi informatika dan komputer kepada masyarakat di berbagai bidang.</p>', 'public/tentang/6CMtLoHH8KDjDsI710vDtqZWomvQnUmUNrNIkTp0.webp', '<p style=\"text-align: justify;\">Terwujudnya lulusan yang mampu bersaing secara global dan berperilaku <em><strong>MarTuhan, Marroha, Marbisuk</strong></em> dalam disiplin ilmu informatika dan komputer.</p>', '<p style=\"text-align: justify;\">Menghasilkan profesional unggul di bidang informatika dan komputer yang berperilaku <em><strong>MarTuhan, Marroha, Marbisuk</strong></em> yang mempunyai ciri-ciri utama beriman dan bertakwa kepada Tuhan Yang Maha Esa, bijak, ahli, terampil dalam bidangnya, berwawasan luas, memiliki sifat kepeloporan serta memiliki kesadaran dan tanggungjawab sosial. Menghasilkan karya ilmu pengetahuan dan teknologi terapan yang berorientasi pada perkembangan keilmuan, pembelajaran dan pemanfaatan di masyarakat. Menghasilkan karya pengabdian dan inovasi yang membawa kesejahteraan bagi masyarakat.</p>', 'DEL bermakna sebagai \"Selangkah Lebih Maju\" dalam karsa dan karya.', '2024-05-14 13:23:15', '2024-05-29 09:44:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'baak@email.com', NULL, '$2y$12$t6ShPMXMgLXpGhqSHwgFqumRk5shklZ2Oz4LpL/GiHaQauwZ.QcQS', NULL, '2024-06-03 10:38:44', '2024-06-03 10:38:44');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dosens_prodi_id_foreign` (`prodi_id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kalender_akademik`
--
ALTER TABLE `kalender_akademik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kata_sambutan`
--
ALTER TABLE `kata_sambutan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `organisational_structures`
--
ALTER TABLE `organisational_structures`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pengumumans`
--
ALTER TABLE `pengumumans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `prestasis`
--
ALTER TABLE `prestasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prodis`
--
ALTER TABLE `prodis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `semesters_prodi_id_foreign` (`prodi_id`);

--
-- Indeks untuk tabel `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tentangs`
--
ALTER TABLE `tentangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kalender_akademik`
--
ALTER TABLE `kalender_akademik`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kata_sambutan`
--
ALTER TABLE `kata_sambutan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=404;

--
-- AUTO_INCREMENT untuk tabel `organisational_structures`
--
ALTER TABLE `organisational_structures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengumumans`
--
ALTER TABLE `pengumumans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prestasis`
--
ALTER TABLE `prestasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `prodis`
--
ALTER TABLE `prodis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT untuk tabel `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tentangs`
--
ALTER TABLE `tentangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dosens`
--
ALTER TABLE `dosens`
  ADD CONSTRAINT `dosens_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodis` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `semesters`
--
ALTER TABLE `semesters`
  ADD CONSTRAINT `semesters_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodis` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
