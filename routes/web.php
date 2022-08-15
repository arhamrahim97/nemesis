<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\dokumen\MasterPlanController;
use App\Http\Controllers\dokumen\RoadMapController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\intervensi\perencanaan\keong\PerencanaanKeongController;
use App\Http\Controllers\intervensi\realisasi\keong\RealisasiKeongController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\masterData\HewanController;
use App\Http\Controllers\masterData\lokasi\LokasiDesaController;
use App\Http\Controllers\masterData\lokasi\LokasiHewanController;
use App\Http\Controllers\masterData\lokasi\LokasiKeongController;
use App\Http\Controllers\masterData\OPDController;
use App\Http\Controllers\masterData\TahunController;
use App\Models\Perencanaan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/', DashboardController::class);

Route::resource('rencana-intervensi-keong', PerencanaanKeongController::class);
Route::post('rencana-intervensi-keong/konfirmasi/{rencana_intervensi_keong}', PerencanaanKeongController::class . '@konfirmasi');
Route::get('rencana-intervensi-keong/map/{rencana_intervensi_keong}', PerencanaanKeongController::class . '@map');

Route::resource('realisasi-intervensi-keong', RealisasiKeongController::class);

// Master Data
// Lokasi
Route::get('master-data/lokasi/desa/tabel', [LokasiDesaController::class, 'tabel']);
Route::resource('master-data/lokasi/desa', LokasiDesaController::class);
Route::resource('master-data/lokasi/keong', LokasiKeongController::class)->parameters(
    [
        'keong' => 'lokasi_keong'
    ]
);
Route::resource('master-data/lokasi/hewan', LokasiHewanController::class)->parameters(
    [
        'hewan' => 'lokasi_hewan'
    ]
);

Route::resource('master-data/opd', OPDController::class);
Route::resource('master-data/hewan', HewanController::class);
Route::resource('master-data/tahun', TahunController::class);
Route::get('map/desa', [LokasiDesaController::class, 'getMapData']);
Route::get('map/keong', [LokasiKeongController::class, 'getMapData']);
Route::get('map/hewan', [LokasiHewanController::class, 'getMapData']);

// List
Route::get('list/desa', [ListController::class, 'desa']);
Route::get('list/hewan', [ListController::class, 'hewan']);

// Dokumen
Route::resource('dokumen/road-map', RoadMapController::class)->parameters(['road-map' => 'road_map']);
Route::resource('dokumen/master-plan', MasterPlanController::class)->parameters(['master-plan' => 'master-plan']);
