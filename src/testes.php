<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
// Array associativo
$produtos = array(
    "Iphone" => 6500.00,
    "Galaxy S24" => 4600.00,
    "Galaxy A54"=> 2399.00
);

// echo "Preço do Iphone R$ {$produtos['Iphone']}<br/>";

foreach($produtos as $produto => $preco){
    echo "$produto: R$ $preco <br>";
}
?>