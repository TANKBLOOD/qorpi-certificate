<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\CertificateInfoImport;
use Excel;

class CertificateController extends Controller
{
    public function importCertificatesExcelModeForm() {
        return view("certificate.importExcelForm");
    }
    public function storeCertificateExcelMode(Request $request) {
        Excel::import(new CertificateInfoImport, $request->excel);
        return "gg";
    }
}
