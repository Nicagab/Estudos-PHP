<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio decompondo um número real</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Analisador de Número Real</h1>
    <?php 
        $num = $_GET["num"];
        $numI = number_format(floor($num), 0, ",",".");
        $numF = number_format($num-floor($num), 3, ",", " ");

        echo "
        <p>O número analisado foi " .  number_format($num, 3, ",",".") . "</p>
        <ul>
        <li>A parte inteira é $numI</li>
        <li>A parte fracionária é $numF</li>
        </ul>
        ";
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
</body>
</html>