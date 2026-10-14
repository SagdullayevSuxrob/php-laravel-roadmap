<?php

$price = 0.1 + 0.2;
var_dump($price);
//float type - pul birligi uchun ishlatmagan yaxshi
//float(0.30000000000000004)- javobi

$a = "199.99";
$b = "20.01";

$result = bcadd($a, $b, 2);

echo $result . "\n";

$price = "100.50";
$quantity = "3";

$total = bcmul($price, $quantity, 2);

echo $total;