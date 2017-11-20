<?php

namespace App\Http\Controllers;

use mPDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function getPDF()
    {
        $mpdf = new mPDF();

        $data = [
            'nombre' => 'Gustavo Santos González',
            'RFC' => 'SAGG820731AM0',
            'ProdNum' => 100
        ];

        $body = view('pdf-testing.body', $data)->render();
        $footer = view('pdf-testing.footer')->render();

        $mpdf->WriteHTML($body);
        $mpdf->setFooter($footer);

        $mpdf->Output();
    }
}
