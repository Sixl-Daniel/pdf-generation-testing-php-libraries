<?php

define('ROOT_DIR', realpath(__DIR__) . '/../');
define('ROOT_URL', 'http://pdf-ua.test/');

require ROOT_DIR . '/vendor/autoload.php';
require ROOT_DIR . '/includes/header.php';

// common el

$backBtn = '<a href="/index.php"><button type="button">Back home</button></a>';

// set source for pdf

$html = file_get_contents(ROOT_DIR . 'pdf_source/test1.php');
$html_content = file_get_contents(ROOT_DIR . 'pdf_source/test1_content_only.php');
