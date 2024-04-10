<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2);
echo "<br>";

var_dump($numero1 < $numero2);
echo "<br>";

var_dump($numero1 >= $numero2);
echo "<br>";

var_dump($numero2 == $numero3);
echo "<br>";

var_dump($numero2 == $numero4);
echo "<br>";

var_dump($numero2 === $numero4);
echo "<br>";

var_dump($numero1 <=> $numero2); // el de la derecha es mayor, imprimirá -1
echo "<br>";

var_dump($numero2 <=> $numero3); // ambos son iguales, imprimirá 0
echo "<br>";

var_dump($numero2 <=> $numero1); // el de la izquieda es mayor, imprimirá 1
echo "<br>";


include 'includes/footer.php';