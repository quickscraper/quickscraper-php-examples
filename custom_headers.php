<?php
require_once './vendor/autoload.php';

$quickScraperClient = new QuickScraper\Main\QuickScraperClass();
$quickScraperClient->setAccessToken('YOUR_ACCESS_TOKEN');
$response = $quickScraperClient->getHtml('http://httpbin.org/headers', array(
    "keep_headers" => true,
    'headers' => array('X-My-Custom-Header'=> 'QS-APP')
  )
);
print_r(json_decode($response));