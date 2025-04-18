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

$cursos = [
    "PHP" => 1990.90,
    "JAVA" => 2350.60,
    "PYTHON" => 2980.90
];

// echo "Preço do Iphone R$ {$produtos['Iphone']}<br/>";

foreach($produtos as $produto => $preco){
    echo "$produto: R$ $preco <br>";
}
echo "<h3>Cursos disponiveis</h3>";
foreach($cursos as $item => $preco):
    echo "<input type='checkbox' value='$preco'>$item";
endforeach;

echo "<h3>Operador ternário</h3>";
$idade = 16;
$mensagem = $idade >= 18?"Maior de idade":"Menor de idade";
echo $mensagem;


$atraso = -5; // dias
$preco = 100.00;
$juros = 0.001;
$multa = $atraso > 0?$multa = $preco * $juros * $atraso: 0;

$total = $preco + $multa;
echo "<br/>Total a pagar: $total";
?>
