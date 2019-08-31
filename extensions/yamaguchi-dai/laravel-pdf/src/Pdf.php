<?php


namespace Laravel\Pdf;

use TCPDF;

class Pdf {
    private $pdf;

    public function __construct() {
        $this->pdf = new TCPDF();
        $this->pdf->AddPage();
    }

    function create() {
        $this->pdf->writeHTML('<h1>TEST</h1>');
        $path = public_path('ooo.pdf');
        $this->pdf->Output($path, 'F');
        return $path;
    }
}