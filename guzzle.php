<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
//döviz kuru alma api uygulaması
$url = 'https://api.exchangerate-api.com/v4/latest/USD';

//guzzle http kutuphanesindeki Client sınıfından yeni bir istemci örneği oluşturur.
$client = new Client();
//istemci üstünden api'ye get isteği gönderilir.Cevap response atar
$response = $client->get($url);

//gelen cevabı php dizisine döndürür. true ise ilişkisel dizi olarak yaptırır.
$data = json_decode($response->getBody(), true);
//diziden rate içinden try değerini alır aktarır.
$exchangeRate = $data['rates']['TRY'];


echo '1 USD = ' . $exchangeRate . ' TRY';
?>
