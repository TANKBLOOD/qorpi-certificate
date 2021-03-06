<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\CertificateInfoImport;
use App\Models\Certificate;
use Excel;
use PDF;
class CertificateController extends Controller
{
    public function importCertificatesExcelModeForm() {
        return view("certificate.importExcelForm");
    }
    public function storeCertificateExcelMode(Request $request) {
        Excel::import(new CertificateInfoImport, $request->excel);
        return "gg";
    }

    public function index() {
        $certificates= Certificate::all();
        return view('certificate.index', ['certs'=> $certificates]);
    }

    public function exportCertificate($id) {
        $certInfo= Certificate::findOrFail($id);

        return view('certificates-templates.template1', ['certInfo'=> $certInfo]);
    }
    public function downloadCert($id) {
        $certInfo= Certificate::findOrFail($id);
        $pdf= PDF::loadView('certificates-templates.template1', ['certInfo'=> $certInfo]);
        return $pdf->download('certificated.pdf');
    }
}
