<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CourseController;
use App\Models\Course;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('temp1', function() {
    return view('certificates-templates.template1');
});

Route::get('importExcelForm', [CertificateController::class, 'importCertificatesExcelModeForm'])->name('certificate.import.excel');
Route::post('storeExcelForm', [CertificateController::class, 'storeCertificateExcelMode'])->name('certificate.store.excel');

Route::get('certificateList', [CertificateController::class, 'index'])->name('certificate.index');
Route::get('certificate/export/{id}', [CertificateController::class, 'exportCertificate'])->name('certificate.export');


Route::get('course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');
Route::get('course/index', [CourseController::class, 'index'])->name('course.index');
