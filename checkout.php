<?php
 // SDK de Mercado Pago
require __DIR__ . '/vendor/autoload.php';
 
MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
MercadoPago\SDK::setPublicKey('APP_USR-7eb0138a-189f-4bec-87d1-c0504ead5626');
MercadoPago\SDK::setIntegratorId('dev_24c65fb163bf11ea96500242ac130004');
echo "Hola mundo";
?>

