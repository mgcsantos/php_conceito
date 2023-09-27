<?php   
//funções de manipulação de array

/*
array_push — Adiciona um ou mais elementos no final de um array
array_pop — Apagar o ultimo item do array
array_shift — Apagar o primeiro elemento de um array
array_unshift — Adiciona um ou mais elementos no início de um array
array_splice — Remove uma parte array e a substitui por outra coisa
count — Conta o número de elementos de uma variável, ou propriedades de um objeto

*/

$array = [];
$vazio = "";
array_push($array, "Senac", "TAU");

array_push($array,["Igor","Samuel","Evelyn","Matheus"]);

echo "<pre>"; 
print_r($array);
echo "</pre>";

echo "<br> A viariavel array possui " .count($array)."posição.";

array_shift($array);

echo "<pre>"; 
print_r($array);
echo "</pre>";


array_splice($array,1,)

?>