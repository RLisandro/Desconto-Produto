<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 9</title>
</head>
<body>
    <!-- Escreva um algoritmo que receba um valor,
     calcule e mostre um desconto de 9%.   -->
     <h1>Desconto de 9%</h1>
     <label>
        <form method="Post">
            Valor: <input type="text" name="desconto" placeholder="   R$">
            <input type="submit" value="Calcular">
        </form>
         </label>
</body>
<?php
$Valor1 = $_POST['desconto'];
$Valor2=($Valor1* 9) / 100;
$Desconto= $Valor1 -$Valor2;
echo"<br><br>O valor do produto é:  ".$Valor1." reais
 ". "<br><br> Com desconto de 9% "."<br><br> 
 O valor do produto com o desconto é  ".$Desconto. " reais";



?>
</html>