<?php

require realpath(__DIR__) . '/includes/_include.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// configure Dompdf
$optionsPdf = new Options();
$optionsPdf->set('isRemoteEnabled', true);
$optionsPdf->set('defaultFont', 'sans-serif');
$optionsPdf->setIsHtml5ParserEnabled(true);


// init and load HTML
$dompdf = new Dompdf($optionsPdf);
$dompdf->loadHtml($html);


// Render the HTML as PDF
$dompdf->render();
$pdf = $dompdf->output();

$outputFile = 'Test_Dompdf.pdf';
ob_end_clean();

// Output the generated PDF to Browser
$dompdf->stream($outputFile);

?>


<body>
    <p>...generating PDF</p>
    <?= $backBtn ?>
</body>