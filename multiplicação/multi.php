<?php 

echo "-inserta 2 numero e seu produto será exibido.\n";

$num_1 = readline("1°: ");
$num_2 = readline("2°: ");

$resultado = 0;

for ($i = 0; $i < $num_2; $i++) {
    
    $resultado += $num_1;

}

echo "produtto: ". $resultado . "\n";
