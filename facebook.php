<?php
require_once './vendor/autoload.php';
$quickScraperClient = new QuickScraper\Main\QuickScraperClass();
$quickScraperClient->setAccessToken('YOUR_ACCESS_TOKEN');
// $response = $quickScraperClient->getHtml('https://www.facebook.com/TSA-55782529079'); // wrong url
$response = $quickScraperClient->getHtml('https://www.facebook.com/people/TSA/100063654012735'); // correct url
print_r(json_decode($response));

?>