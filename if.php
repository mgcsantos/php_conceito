<h2>Desvio condicional(IF ELSE)</h2>
<?php
/* 
Sintaxe 

if (expr)
 statemento

 caso tenha somente uma linha de comando abaixo do if
 não ha necessidade de usar{ }
 
 para a estrutura abaixo é obrigatorio o uso de { }
 if (expr){
    código1
    código2
 }

 */
echo "<h3>Exemplos</h3>";
echo "<h4>Desvio condicional Simples </h4>";
$idade = 20;

if ($idade >=18)
    echo "Você tem" . $idade. "anos , então é maior de idade";
    

echo '<p>';
if ($idade >= 18){
    echo "Você tem" . $idade. "anos , então é maior de idade";
    echo "<br> Se for preso, vai dormir na cadeia";
}

echo "<h4>Desvio condicional composto </h4>";
$idade = 20;

if ($idade >=18)
    echo "Você tem" . $idade. "anos , então é maior de idade";
else
    echo "Você tem" . $idade. "anos , então é menor de idade";
    
echo '<p>';
if ($idade >=18){
    echo "Você tem" . $idade. "anos , então é maior de idade";
    echo "<br> Se for presos ,vai dormir na idade";
    
}else{
    echo "Você tem" . $idade. "anos , então é menor de idade";
    echo "<br> Se for presos ,não pode dormir na idade";

}



echo "<h4>Desvio condicional Encadeado</h4>";
$idade = 5;

if ($idade >=18)
echo "Você tem" . $idade. "anos , então é maior de idade";
else if ($idade >=6)
    echo "Você tem" . $idade. "anos , então é menor de idade";
else 
    echo "Voce é bebe!!";

    echo '<p>';
if ($idade >=18){
    echo "Você tem" . $idade. "anos , então é maior de idade";
    echo "<br> Se for presos ,vai dormir na idade";
    
}else if ($idade >=6){
    echo "Você tem" . $idade. "anos , então é menor de idade";
    echo "<br> Se for presos ,não pode dormir na idade";

}else{
    echo "você é bebê!!!";
}

echo "<h4>Operador Ternário</h4>";
echo "<p>O operador ternário é uma forma resumida de utilizar o IF</p>";
$idade = 6;

echo $idade<=5 ? "Você é bebe": "voce é Jove..."
//       =condição ? verdaderio  :  falso 

?>


    
    