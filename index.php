<?php

require realpath(__DIR__) . '/includes/_include.php';

$linkDompdf = 'https://github.com/dompdf/dompdf';
$linkTcpdf = 'https://github.com/tecnickcom/tcpdf';

?>

<body>

    <h1>PDF-UA Testing</h1>
    <p>Below HTML sample from folder <code>pdf_source</code> will be converted to a pdf file.</p>
    <p>ROOT_DIR = <mark><?= ROOT_DIR ?></mark></p>
    <p>ROOT_URL = <mark><?= ROOT_URL ?></mark></p>

    <hr>

    <h2>Dompdf</h2>
    <p><a target="_blank" href="<?= $linkDompdf ?>"><?= $linkDompdf ?></a></p>
    <p><a href="/render-dompdf.php"><button type="button">Generate a PDF with <b>Dompdf</b></button></a></p>

    <hr>

    <h2>TCPDF </h2>
    <p><a target="_blank" href="<?= $linkTcpdf ?>"><?= $linkTcpdf ?></a></p>
    <p><a href="/render-tcpdf.php"><button type="button">Generate a PDF with <b>TCPDF</b></button></a></p>

    <hr>

    <h2>Sample HTML used as source for Dompdf</h2>
    <div class="box">
        <?= $html ?>
    </div>

</body>