<?php

use App\Http\Controllers\Answer\AnswerController;
use App\Http\Controllers\Register\GuestRegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

// user value cannot be found in session
// Route::get('/', function (Request $request) {
    
//     return view('index');
// });

//============= GET METHOD =====================
//Get View Registrasi
// route::get('/', 'GuestRegisterController@flush_guest');
Route::get('/', [GuestRegisterController::class, 'flush_guest']);
//Get View Registrasi
Route::get('register', [GuestRegisterController::class, 'index']);
//Get View Konfirmasi Jawab Ulang
Route::get('konfirmasi', [GuestRegisterController::class, 'konfirmasi']);
//Get Soal Kategori Akademik
Route::get('akademik_decision', [AnswerController::class, 'akademik_decision']);
Route::get('akademik_yes_view', [AnswerController::class, 'akademik_yes_view']);
Route::get('akademik_no_view', [AnswerController::class, 'akademik_no_view']);
//Get Soal Kategori Aktivitas
Route::get('soal_aktivitas', [AnswerController::class, 'soal_aktivitas']);
//Get Soal Kategori Akademik
Route::get('soal_prestasi', [AnswerController::class, 'soal_prestasi']);
//Get Soal Kategori Aktivitas
Route::get('soal_personal_brand', [AnswerController::class, 'soal_personal_brand']);
//Get Soal Kategori Komunikasi
Route::get('soal_komunikasi', [AnswerController::class, 'soal_komunikasi']);
//Get View Result
Route::get('result_view', [AnswerController::class, 'result_view']);


//============= POST METHOD ====================
//Simpan Guest Students
Route::post('guest', [GuestRegisterController::class, 'store']);

//Simpan Jawaban Kategori Academic
Route::post('akademik', [AnswerController::class, 'akademik']);
Route::post('akademiksession', [AnswerController::class, 'akademiksession']);
Route::post('akademik_yes', [AnswerController::class, 'akademik_yes']);
Route::post('akademik_yes_session', [AnswerController::class, 'akademik_yes_session']);
Route::post('akademik_no_session', [AnswerController::class, 'akademik_no_session']);
Route::post('akademik_no', [AnswerController::class, 'akademik_no']);
//Simpan Jawaban Kategori Aktivitas
Route::post('aktivitas', [AnswerController::class, 'aktivitas']);
Route::post('aktivitas_session', [AnswerController::class, 'aktivitas_session']);
//Simpan Jawaban Kategori Prestasi
Route::post('prestasi', [AnswerController::class, 'prestasi']);
Route::post('prestasi_session', [AnswerController::class, 'prestasi_session']);
//Simpan Jawaban Kategori Personal Brand
Route::post('personal_brand', [AnswerController::class, 'personal_brand']);
Route::post('personal_brand_session', [AnswerController::class, 'personal_brand_session']);
//Simpan Jawaban Kategori Komunikasi
Route::post('komunikasi', [AnswerController::class, 'komunikasi']);
Route::post('komunikasi_session', [AnswerController::class, 'komunikasi_session']);
//Simpan Result
Route::post('result', [AnswerController::class, 'result']);
//Simpan Konfirmasi
Route::get('konfirmasi_yes/{id}', [AnswerController::class, 'konfirmasi_yes']);

Route::get('send_mail', [AnswerController::class, 'generatePDF']);