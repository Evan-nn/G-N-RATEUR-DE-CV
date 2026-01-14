<?php
require 'vendor / autoload . php';
use Dompdf\Dompdf;

ob_start();
include 'cv_template.php';
$html = ob_get_clean();

$pdf = new Dompdf();
$pdf->loadHtml($html);
$pdf->setPaper('A4', 'portrait');
$pdf->render();
$pdf->stream('cv.pdf', ['Attachment' => true]);