<?php

use App\Http\Controllers\CertificateController;
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
