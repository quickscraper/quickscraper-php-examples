<?php
require_once './vendor/autoload.php';

$quickScraperClient = new QuickScraper\Main\QuickScraperClass();
$quickScraperClient->setAccessToken('YOUR_ACCESS_TOKEN');
$response = $quickScraperClient->getHtml('http://httpbin.org/headers', array(
    "keep_headers" => true,
    'headers' => array('Cookie'=>'key1=value1;key2=value2;key3=value3;')
  )
);
print_r(json_decode($response));