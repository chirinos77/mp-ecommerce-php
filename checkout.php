<?php
 // SDK de Mercado Pago
require __DIR__ . '/vendor/autoload.php';
 
MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
MercadoPago\SDK::setPublicKey('APP_USR-7eb0138a-189f-4bec-87d1-c0504ead5626');
MercadoPago\SDK::setIntegratorId('dev_24c65fb163bf11ea96500242ac130004');
$img=$_POST["img"];
$title=$_POST["title"];
$price=$_POST["price"];
$unit=$_POST["unit"];
$preference = new MercadoPago\Preference();
$item = new MercadoPago\Item();
$item->id=1234;
$item->title = $title;
$item->quantity = $unit;
$item->unit_price = $price; 
$item->currency_id = "ARS";
$item->description = "Dispositivo móvil de Tienda e-commerce";
$item->picture_url = "https://mp-chirinos77-php.herokuapp.com/".$img;
$items=array($item);
$preference->items = array($item);
$payer = new MercadoPago\Payer();
$payer->name = "Lalo";
$payer->surname = "Landa";
$payer->email = 'test_user_63274575@testuser.com';
$payer->phone = array(
 "area_code" => "11",
 "number" => "2222-3333"
);
$payer->address = array(
 "street_name" => "False",
 "street_number" => "123",
 "zip_code" => "1111"
);
$preference->payer = $payer ;
$preference->back_urls = [ 
 'success' => "https://mp-chirinos77-php.herokuapp.com/back.php", 
 'pending' => "https://mp-chirinos77-php.herokuapp.com/back.php", 
 'failure' => "https://mp-chirinos77-php.herokuapp.com/back.php", 
 ];
$preference->auto_return = "approved";
$preference->notification_url = "https://mp-chirinos77-php.herokuapp.com/ipn.php";
$preference->external_reference = "ggonzalez77@gmail.com";
$preference->save();
header("Location: $preference->init_point");
?>

