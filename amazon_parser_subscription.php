<?php
require_once './vendor/autoload.php';
$quickScraperClient = new QuickScraper\Main\QuickScraperClass();
$quickScraperClient->setAccessToken('YOUR_ACCESS_TOKEN');
$response = $quickScraperClient->getHtml('https://www.amazon.com/SAMSUNG-Factory-Unlocked-Smartphone-Adaptive/dp/B0BLP2PY6N/', array(
    'parserSubscriptionId'=> 'ff7f8541-8a8d-5f28-a6dd-1f122f5e4b63'
));
print_r(json_decode($response));