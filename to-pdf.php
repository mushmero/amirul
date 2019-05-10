<?php
require_once 'pdf-load.php';
use Dompdf\Dompdf;

$file = file_get_contents('print.php');

$pdf = new Dompdf();
$pdf->loadHtml($file);
$pdf->setPaper('A4', 'portrait');
$pdf->render();
$pdf->stream('amirul-resume.pdf', array("Attachment" => false));
?>