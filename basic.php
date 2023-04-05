<?php
require_once './vendor/autoload.php';
$sdk =  new QuickScraper\Main\QuickScraperClass();
$sdk->setAccessToken('YOUR_ACCESS_TOKEN');
$html = $sdk->getHtml('https://mylocation.org');
print_r(json_decode($html));
?>