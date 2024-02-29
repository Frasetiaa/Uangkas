<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;

class PdfController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Contoh Laporan PDF',
            'content' => 'Ini adalah isi dari laporan PDF yang dihasilkan.',
        ];

        $pdf = new Dompdf();
        $pdf->loadHtml(view('pdf.template', $data));

        // Render PDF (optional)
        $pdf->render();

        // Output PDF ke browser
        return $pdf->stream("laporan.pdf");
    }
}
