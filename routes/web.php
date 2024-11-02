<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/download-word-surat-paksa', [HomeController::class, 'downloadWordSuratPaksa']);
Route::get('/download-word-spmp', [HomeController::class, 'downloadWordSPMP']);
Route::get('/download-word-baps', [HomeController::class, 'downloadWordBAPS']);

Route::get('/generate_no_sp/{nomor}', [HomeController::class, 'generate_no_surat_paksa']);
Route::get('/generate_no_basp/{nomor}', [HomeController::class, 'generate_no_basp']);

Route::get('/generate_no_spmp/{nomor}', [HomeController::class, 'generate_no_spmp']);
Route::get('/generate_no_baps/{nomor}', [HomeController::class, 'generate_no_baps']);

Route::get('/', [HomeController::class, 'index']);
Route::get('saldo-piutang-bruto', [HomeController::class, 'saldo_piutang_bruto']);
Route::get('penyisihan-piutang', [HomeController::class, 'penyisihan_piutang']);
Route::get('net-realizable-value', [HomeController::class, 'net_realizable_value']);
Route::get('tunggakan-paksa', [HomeController::class, 'tunggakan_paksa']);
Route::get('tunggakan-sita', [HomeController::class, 'tunggakan_sita']);
Route::get('tunggakan-blokir', [HomeController::class, 'tunggakan_blokir']);
Route::get('tunggakan-baps', [HomeController::class, 'tunggakan_baps']);
Route::get('tunggakan-lelang', [HomeController::class, 'tunggakan_lelang']);
Route::get('tunggakan-non-lelang', [HomeController::class, 'tunggakan_non_lelang']);
Route::get('tunggakan-cegah', [HomeController::class, 'tunggakan_cegah']);
Route::get('tunggakan-sandera', [HomeController::class, 'tunggakan_sandera']);
Route::get('indikasi-pss', [HomeController::class, 'indikasi_pss']);
Route::get('utang-pajak-kurang-2-tahun', [HomeController::class, 'utang_pajak_kurang_2_tahun']);
Route::get('jumlah-penunggak-utang', [HomeController::class, 'jumlah_penunggak_utang']);
Route::get('bank-eksternal/{nik?}', [HomeController::class, 'bank_eksternal']);
Route::get('pengadilan-niaga-eksternal/{nik?}', [HomeController::class, 'pengadilan_niaga_eksternal']);
Route::get('imigrasi/{nik?}', [HomeController::class, 'imigrasi']);
Route::get('ahu-eksternal', [HomeController::class, 'ahu_eksternal']);
Route::get('bc', [HomeController::class, 'bc']);
Route::get('polri-eksternal/{nik?}', [HomeController::class, 'polri_eksternal']);
Route::get('bpn-eksternal/{nik?}', [HomeController::class, 'bpn_eksternal']);
Route::get('bei-eksternal/{nik?}', [HomeController::class, 'bei_eksternal']);
Route::get('penerimaan-evaluasi', [HomeController::class, 'penerimaan_evaluasi']);
Route::get('tindakan-penagihan', [HomeController::class, 'tindakan_penagihan']);
Route::get('manajemen-waktu', [HomeController::class, 'manajemen_waktu']);
Route::get('manajemen-barang-sitaan', [HomeController::class, 'manajemen_barang_sitaan']);
