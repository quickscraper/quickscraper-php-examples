<?php
require_once './vendor/autoload.php';

$quickScraperClient = new QuickScraper\Main\QuickScraperClass();
$quickScraperClient->setAccessToken('YOUR_ACCESS_TOKEN');
$response = $quickScraperClient->account();
print_r(json_decode($response));