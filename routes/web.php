<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\KelasController;
use App\Http\Controllers\Admin\SantriController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Guru\dashGuruController;
use App\Http\Controllers\Admin\dataGuruController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\TestimoniController;
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\Admin\dataSantriController;
use App\Http\Controllers\CsrfTokenController;
use App\Http\Controllers\FrontGuruController;
use App\Http\Controllers\FrontSantriController;
use App\Http\Controllers\Santri\dashSantriController;
use App\Http\Controllers\Santri\testimoniSantriController;

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

// Route::get('/', function () {
//     return Inertia::render('App');
// });

Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/guru', 'guru');
    Route::get('/santri', 'santri');
    Route::get('/artikel', 'artikel');
    Route::get('/detail/artikel/{id}', 'detailArtikel');
    Route::get('/detail/program/{id}', 'detailProgram');
    Route::get('/daftar/program/{id}', 'daftarProgram');
    Route::post('/transaksi/program', 'transaksiProgram');
    Route::get('/testimoni', 'testimoni');
    Route::get('/dashguru', 'dashguru');
    Route::get('/dropdown', 'dropdown');
    Route::get('/artikel/search', 'searchArtikel')->name('search.artikel');

    // dashboard santri
    Route::get('/home/santri', 'homeSantri');
    Route::get('/guru/santri', 'guruSantri');
    Route::get('/santri/santri', 'santriSantri');
    Route::get('/artikel/santri', 'artikelSantri');
    Route::get('/testimoni/santri', 'testimoniSantri');
    Route::get('/desc/artikel/santri{id}', 'descArtikel');
    Route::get('/detail/program/santri/{id}', 'programSantri');
    Route::get('/daftar/program/santri/{id}', 'daftarSantri');
});

// Route::controller(CsrfTokenController::class)->group(function() {
//     Route::get('/csrf-token', 'CsrfTokenController@getToken');
// });


// route admin
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(BaseController::class)->group(function () {
        Route::get('/home', 'index')->name('index.home');
    });
    Route::controller(KategoriController::class)->group(function () {
        Route::get('/kategori', 'index')->name('index.kategori');
        Route::get('/form/kategori', 'formKategori')->name('form.kategori');
        Route::post('/tambah/kategori', 'tambahKategori')->name('tambah.kategori');
        Route::get('/edit/kategori{id}', 'editKategori')->name('edit.kategori');
        Route::put('/update/kategori{id}', 'updateKategori')->name('update.kategori');
        Route::delete('/delete/kategori{id}', 'deleteKategori')->name('delete.kategori');
        Route::get('/desc/kategori{id}', 'descKategori')->name('desc.kategori');
        Route::get('/search/kategori', 'searchKategori')->name('search.kategori');
    });
    Route::controller(ArtikelController::class)->group(function () {
        Route::get('/artikel', 'index')->name('index.artikel');
        Route::get('/form/artikel', 'formArtikel')->name('form.artikel');
        Route::post('/tambah/artikel', 'tambahArtikel')->name('tambah.artikel');
        Route::get('/edit/artikel{id}', 'editArtikel')->name('edit.artikel');
        Route::put('/update/artikel{id}', 'updateArtikel')->name('update.artikel');
        Route::delete('/delete/artikel{id}', 'deleteArtikel')->name('delete.artikel');
        Route::get('/desc/artikel{id}', 'descArtikel')->name('desc.artikel');
        Route::get('/search/artikel', 'searchArtikel')->name('search.artikel');
    });
    Route::controller(TestimoniController::class)->group(function () {
        Route::get('/testimoni', 'index')->name('index.testimoni');
        Route::get('/form/testimoni', 'formTestimoni')->name('form.testimoni');
        Route::post('/tambah/testimoni', 'tambahTestimoni')->name('tambah.testimoni');
        Route::get('/edit/testimoni{id}', 'editTestimoni')->name('edit.testimoni');
        Route::put('/update/testimoni{id}', 'updateTestimoni')->name('update.testimoni');
        Route::delete('/delete/testimoni{id}', 'deleteTestimoni')->name('delete.testimoni');
        Route::get('/desc/testimoni{id}', 'descTestimoni')->name('desc.testimoni');
    });

    // user guru
    Route::controller(GuruController::class)->group(function () {
        Route::get('/user/guru', 'index')->name('index.user.guru');
        Route::get('/user/form/guru', 'formGuru')->name('form.user.guru');
        Route::post('/user/tambah/guru', 'tambahGuru')->name('tambah.user.guru');
        Route::delete('/user/delete/guru/{id}', 'deleteGuru')->name('delete.user.guru');
    });

    Route::controller(SantriController::class)->group(function () {
        Route::get('/user/santri', 'index')->name('index.user.santri');
        Route::get('/user/form/santri', 'formSantri')->name('form.user.santri');
        Route::post('/user/tambah/santri', 'tambahSantri')->name('tambah.user.santri');
        Route::delete('/user/delete/santri/{id}', 'deleteSantri')->name('delete.user.santri');
    });

    Route::controller(dataSantriController::class)->group(function () {
        Route::get('/kelas', 'index')->name('index.kelas');
        Route::get('/form/santri', 'formSantri')->name('form.santri');
        Route::post('/tambah/santri', 'tambahSantri')->name('tambah.santri');
        Route::get('/edit/santri{id}', 'editSantri')->name('edit.santri');
        Route::put('/update/santri{id}', 'updateSantri')->name('update.santri');
        Route::delete('/delete/santri/{id}', 'deleteSantri')->name('delete.santri');
        Route::get('/search/santri', 'searchSantri')->name('search.santri');
    });

    Route::controller(dataGuruController::class)->group(function () {
        Route::get('/guru', 'index')->name('index.guru');
        Route::get('/form/guru', 'formGuru')->name('form.guru');
        Route::post('/tambah/guru', 'tambahGuru')->name('tambah.guru');
        Route::get('/edit/guru{id}', 'editGuru')->name('edit.guru');
        Route::put('/update/guru{id}', 'updateGuru')->name('update.guru');
        Route::delete('/delete/guru/{id}', 'deleteGuru')->name('delete.guru');
    });

    Route::controller(TransaksiController::class)->group(function () {
        Route::get('/transaksi', 'index')->name('index.transaksi');
    });

    Route::controller(ChartController::class)->group(function () {
        Route::get('/chart', 'chart')->name('index.chart');
    });
});

// ini route guru
Route::prefix('guru')->middleware(['auth', 'isGuru'])->group(function () {
    Route::controller(FrontGuruController::class)->group(function () {
        Route::get('/dashguru', 'dashguru');
    });

    Route::controller(dashGuruController::class)->group(function () {
        Route::get('/home', 'index')->name('guru.index.home');
        Route::get('/guru/kategori', 'kategori')->name('guru.kategori');
        Route::get('/list/santri', 'listSantri')->name('guru.list.santri');
        Route::get('/profile/guru', 'profileGuru')->name('guru.profile.guru');
        Route::get('/profile/edit/guru/{id}', 'editGuru')->name('guru.profile.edit');
        Route::put('/profile/update/guru/{id}', 'updateGuru')->name('guru.profile.update');
    });
    Route::controller(KategoriController::class)->group(function () {
        Route::get('/desc/kategori{id}', 'descKategori')->name('mentor.desc.kategori');
        Route::get('/search/kategori', 'searchKategori')->name('search.kategori');
    });

    // Route::controller(BaseController::class)->group(function () {
    //     Route::get('/list/santri', 'listSantri')->name('list.santri');
    // });
});

// ini route santri
Route::prefix('santri')->middleware(['auth', 'isSantri'])->group(function () {
    Route::controller(FrontSantriController::class)->group(function () {
        Route::get('/dashsantri', 'dashsantri');
    });

    Route::controller(dashSantriController::class)->group(function () {
        Route::get('/home', 'index')->name('santri.index.home');
        Route::get('/artikel', 'artikel')->name('santri.index.artikel');
        Route::get('/search/artikel', 'searchArtikel')->name('search.artikel.santri');
        Route::get('/desc/artikel{id}', 'descArtikel')->name('santri.desc.artikel');
        Route::get('/transaksi', 'transaksi')->name('santri.index.transaksi');
        Route::get('/list/guru', 'listGuru')->name('santri.list.guru');
        Route::get('/profile/santri', 'profileSantri')->name('santri.profile.santri');
        Route::put('/update/profile/santri/{id}', 'updateSantri')->name('santri.update.santri');
    });

    Route::controller(testimoniSantriController::class)->group(function () {
        Route::get('/testimoni', 'index')->name('santri.index.testimoni');
        Route::get('/edit/testimoni{id}', 'editTestimoni')->name('santri.edit.testimoni');
        Route::put('/update/testimoni{id}', 'updateTestimoni')->name('santri.update.testimoni');
        Route::get('/desc/testimoni{id}', 'descTestimoni')->name('santri.desc.testimoni');
    });
});

Auth::routes();
