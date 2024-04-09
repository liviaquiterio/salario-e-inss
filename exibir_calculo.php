<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibe e calcula o Salário a receber</title>
</head>
<body>
    <?php
    echo "<h3>EXIBE E CALCULA O SALÁRIO A RECEBER<h3>";
    echo "<hr>";

    $salario = $_POST["salario"];
    $inss = $_POST["%inss"];
    
    $desconto = ($salario * $inss) / 100;
    echo "O salário bruto é: " . $salario . "<hr>";
    echo "O percentual do INSS é: " . $inss . "<hr>";
    echo "O desconto do INSS: " . $desconto . "<hr>";
    $salario_liq = $salario - $desconto;
    echo "O salário líquido é: " . $salario_liq  . "<hr>";
        ?>
</body>
</html>