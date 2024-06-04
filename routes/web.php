<?php

use App\Models\Alumni;
use App\Models\KataSambutan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\Dosen_Controller;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\Beasiswa_Controller;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\Admin\DosenController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ProdiController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TentangController;
use App\Http\Controllers\Admin\Alumni_Controller;
use App\Http\Controllers\Admin\BeasiswaController;
use App\Http\Controllers\Admin\PrestasiController;
use App\Http\Controllers\Admin\SemesterController;
use App\Http\Controllers\KalenderAkademikController;
use App\Http\Controllers\Admin\SambutanDekanController;
use App\Http\Controllers\Admin\Struktur_Controller;
use App\Http\Controllers\Admin\Kalender_AkademikController;
use App\Http\Controllers\ProdiController as ControllersProdiController;
use App\Http\Controllers\EventController as ControllersEventController;
use App\Http\Controllers\Admin\BeritaController as AdminBeritaController;
use App\Http\Controllers\TentangController as ControllersTentangController;
use App\Http\Controllers\Admin\PengumumanController as AdminPengumumanController;
use App\Http\Controllers\Struktur_organisasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Routes Tampilan User
Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/tentang', [ControllersTentangController::class, 'index'])->name('tentang');
Route::get('/prodi', [ControllersProdiController::class, 'index'])->name('prodi');
Route::get('/prestasi', [\App\Http\Controllers\PrestasiController::class, 'index'])->name('prestasi');
Route::get('/event', [ControllersEventController::class, 'index'])->name('event');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{slug}', [BeritaController::class, 'read'])->name('berita.read');
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
Route::get('/kurikulum', [KurikulumController::class, 'index'])->name('kurikulum');
Route::get('/kalender_akademik', [KalenderAkademikController::class, 'index'])->name('kalender_akademik');
Route::get('/dosen', [Dosen_Controller::class, 'index'])->name('dosen');
Route::get('/detaildosen/{id}', [Dosen_Controller::class, 'detail'])->name('detaildosen');
Route::get('/kata_sambutan_dekan', [SambutanController::class, 'index'])->name('kata_sambutan_dekan');
Route::get('/visimisi', [ControllersTentangController::class, 'visimisi'])->name('visimisi');
Route::get('/tujuanvokasi', [ControllersTentangController::class, 'tujuanvokasi'])->name('tujuanvokasi');
Route::get('/beasiswa', [Beasiswa_Controller::class, 'index'])->name('beasiswa');
Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni');
Route::get('/struktur_organisasi', [Struktur_organisasiController::class, 'index'])->name('struktur_organisasi');

// -- ----------------------------------------------------------------------------------------------------

// Routes Auth
Route::get('login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate'])->name('auth')->middleware('guest');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Routes Dashboard Admin
Route::get('/admin/home', [HomeController::class, 'index'])->name('admin.home');

// Routes profil atau halaman beranda pada admin
Route::get('/admin/profil', [ProfilController::class, 'index'])->name('admin.profil');
Route::put('/admin/profil/update', [ProfilController::class, 'update'])->name('admin.profil.update');

// Routes tentang
Route::get('/admin/tentang', [TentangController::class, 'index'])->name('admin.tentang');
Route::put('/admin/tentang/update', [TentangController::class, 'update'])->name('admin.tentang.update');

// Routes visi misi
Route::get('/admin/visimisi', [TentangController::class, 'visimisi'])->name('admin.visimisi');
Route::put('/admin/visimisi/update', [TentangController::class, 'updatevisimisi'])->name('admin.visimisi.update');

// Routes tujuan
Route::get('/admin/tujuan', [TentangController::class, 'tujuan'])->name('admin.tujuan');
Route::put('/admin/tujuan/update', [TentangController::class, 'updatetujuan'])->name('admin.tujuan.update');

// Routes Prestasi
Route::get('/admin/prestasi', [PrestasiController::class, 'index'])->name('admin.prestasi');
Route::get('/admin/prestasi/create', [PrestasiController::class, 'create'])->name('admin.prestasi.create');
Route::post('/admin/prestasi', [PrestasiController::class, 'store'])->name('admin.prestasi.store');
Route::get('/admin/prestasi/{prestasi}/edit', [PrestasiController::class, 'edit'])->name('admin.prestasi.edit');
Route::put('/admin/prestasi/{prestasi}', [PrestasiController::class, 'update'])->name('admin.prestasi.update');
Route::delete('/admin/prestasi/{prestasi}', [PrestasiController::class, 'destroy'])->name('admin.prestasi.destroy');

// Routes Berita
Route::get('/admin/berita', [AdminBeritaController::class, 'index'])->name('admin.berita');
Route::get('/admin/berita/create', [AdminBeritaController::class, 'create'])->name('admin.berita.create');
Route::post('/admin/berita', [AdminBeritaController::class, 'store'])->name('admin.berita.store');
Route::get('/admin/berita/{berita}/edit', [AdminBeritaController::class, 'edit'])->name('admin.berita.edit');
Route::put('/admin/berita/{berita}', [AdminBeritaController::class, 'update'])->name('admin.berita.update');
Route::delete('/admin/berita/{berita}', [AdminBeritaController::class, 'destroy'])->name('admin.berita.destroy');

// Routes Pengumuman
Route::get('/admin/pengumuman', [AdminPengumumanController::class, 'index'])->name('admin.pengumuman');
Route::get('/admin/pengumuman/create', [AdminPengumumanController::class, 'create'])->name('admin.pengumuman.create');
Route::post('/admin/pengumuman', [AdminPengumumanController::class, 'store'])->name('admin.pengumuman.store');
Route::get('/admin/pengumuman/{pengumuman}/edit', [AdminPengumumanController::class, 'edit'])->name('admin.pengumuman.edit');
Route::put('/admin/pengumuman/{pengumuman}', [AdminPengumumanController::class, 'update'])->name('admin.pengumuman.update');
Route::delete('/admin/pengumuman/{pengumuman}', [AdminPengumumanController::class, 'destroy'])->name('admin.pengumuman.destroy');

// Routes Galeri
Route::get('/admin/galeri', [GaleriController::class, 'index'])->name('admin.galeri');
Route::get('/admin/galeri/create', [GaleriController::class, 'create'])->name('admin.galeri.create');
Route::post('/admin/galeri', [GaleriController::class, 'store'])->name('admin.galeri.store');
Route::delete('/admin/galeri/{galeri}', [GaleriController::class, 'destroy'])->name('admin.galeri.destroy');

// Routes Slider
Route::get('/admin/slider', [SliderController::class, 'index'])->name('admin.slider');
Route::get('/admin/slider/create', [SliderController::class, 'create'])->name('admin.slider.create');
Route::post('/admin/slider', [SliderController::class, 'store'])->name('admin.slider.store');
Route::delete('/admin/slider/{slider}', [SliderController::class, 'destroy'])->name('admin.slider.destroy');

// Routes Prodi
Route::get('/admin/prodi', [ProdiController::class, 'index'])->name('admin.prodi');
Route::get('/admin/prodi/create', [ProdiController::class, 'create'])->name('admin.prodi.create');
Route::post('/admin/prodi', [ProdiController::class, 'store'])->name('admin.prodi.store');
Route::get('/admin/prodi/{prodi}/edit', [ProdiController::class, 'edit'])->name('admin.prodi.edit');
Route::put('/admin/prodi/{prodi}', [ProdiController::class, 'update'])->name('admin.prodi.update');
Route::delete('/admin/prodi/{prodi}', [ProdiController::class, 'destroy'])->name('admin.prodi.destroy');

// Routes Kurikulum semester
Route::get('/admin/semester', [SemesterController::class, 'index'])->name('admin.semester');
Route::get('/admin/semester/create', [SemesterController::class, 'create'])->name('admin.semester.create');
Route::post('/admin/semester', [SemesterController::class, 'store'])->name('admin.semester.store');
Route::get('/admin/semester/{semester}/edit', [SemesterController::class, 'edit'])->name('admin.semester.edit');
Route::put('/admin/semester/{semester}', [SemesterController::class, 'update'])->name('admin.semester.update');
Route::delete('/admin/semester/{semester}', [SemesterController::class, 'destroy'])->name('admin.semester.destroy');

// Routes Dosen
Route::get('/admin/dosen', [DosenController::class, 'index'])->name('admin.dosen');
Route::get('/admin/dosen/create', [DosenController::class, 'create'])->name('admin.dosen.create');
Route::post('/admin/dosen', [DosenController::class, 'store'])->name('admin.dosen.store');
Route::get('/admin/dosen/{dosen}/edit', [DosenController::class, 'edit'])->name('admin.dosen.edit');
Route::put('/admin/dosen/{dosen}', [DosenController::class, 'update'])->name('admin.dosen.update');
Route::delete('/admin/dosen/{dosen}', [DosenController::class, 'destroy'])->name('admin.dosen.destroy');
Route::get('/admin/dosen', 'App\Http\Controllers\Admin\DosenController@index')->name('admin.dosen');

// Routes Event
Route::get('/admin/event', [EventController::class, 'index'])->name('admin.event');
Route::get('/admin/event/create', [EventController::class, 'create'])->name('admin.event.create');
Route::post('/admin/event', [EventController::class, 'store'])->name('admin.event.store');
Route::get('/admin/event/{event}/edit', [EventController::class, 'edit'])->name('admin.event.edit');
Route::put('/admin/event/{event}', [EventController::class, 'update'])->name('admin.event.update');
Route::delete('/admin/event/{event}', [EventController::class, 'destroy'])->name('admin.event.destroy');

// Routes Kalender Akademik
Route::get('/admin/kalender_akademik', [Kalender_AkademikController::class, 'index'])->name('admin.kalender_akademik');
Route::put('/admin/kalender_akademik/update', [Kalender_AkademikController::class, 'update'])->name('admin.kalender_akademik.update');

// Routes Kata Sambutan
Route::get('/admin/sambutan_dekan', [SambutanDekanController::class, 'index'])->name('admin.sambutan_dekan');
Route::put('/admin/sambutan_dekan/update', [SambutanDekanController::class, 'update'])->name('admin.sambutan_dekan.update');

// Routes Beasiswa
Route::get('/admin/beasiswa', [BeasiswaController::class, 'index'])->name('admin.beasiswa');
Route::get('/admin/beasiswa/create', [BeasiswaController::class, 'create'])->name('admin.beasiswa.create');
Route::post('/admin/beasiswa', [BeasiswaController::class, 'store'])->name('admin.beasiswa.store');
Route::get('/admin/beasiswa/{beasiswa}/edit', [BeasiswaController::class, 'edit'])->name('admin.beasiswa.edit');
Route::put('/admin/beasiswa/{beasiswa}/update', [BeasiswaController::class, 'update'])->name('admin.beasiswa.update');
Route::delete('/admin/beasiswa/{beasiswa}', [BeasiswaController::class, 'destroy'])->name('admin.beasiswa.destroy');

// Routes Alumni'
Route::get('/admin/alumni', [Alumni_Controller::class, 'index'])->name('admin.alumni');
Route::get('/admin/alumni/create', [Alumni_Controller::class, 'create'])->name('admin.alumni.create');
Route::post('/admin/alumni', [Alumni_Controller::class, 'store'])->name('admin.alumni.store');
Route::get('/admin/alumni/{alumni}/edit', [Alumni_Controller::class, 'edit'])->name('admin.alumni.edit');
Route::put('/admin/alumni/{alumni}', [Alumni_Controller::class, 'update'])->name('admin.alumni.update');
Route::delete('/admin/alumni/{alumni}', [Alumni_Controller::class, 'destroy'])->name('admin.alumni.destroy');

// Routes Struktur Organisasi
Route::get('/admin/struktur_organisasi', [Struktur_Controller::class, 'index'])->name('admin.struktur_organisasi');
Route::put('/admin/struktur_organisasi/update', [Struktur_Controller::class, 'update'])->name('admin.struktur_organisasi.update');
