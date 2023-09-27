<h2>operadores de atribuição</h2>
<?php
/*

$a &= $b	$a = $a & $b	Bitwise E
$a |= $b	$a = $a | $b	Bitwise Ou
$a ^= $b	$a = $a ^ $b	Bitwise Xor
$a <<= $b	$a = $a << $b	Desloca para esquerda
$a >>= $b	$a = $a >> $b	Desloca para direita

*/
echo "<h3>Exemplo</h3>";
$a = 5;


echo "Atribuição com soma :" . $a+=3 . "\n" //8

echo "Atribuição com subtração :"  . $a+=3 . "\n" //8

echo "Atribuição com multiplicação :"  . $a+=3 . "\n" //8

echo "Atribuição com divisão :"  . $a+=3 . "\n" //8

echo "Atribuição com módulo :"  . $a+=3 . "\n" //8

echo "Atribuição com exponenciação :"  . $a+=3 . "\n" //8
?>