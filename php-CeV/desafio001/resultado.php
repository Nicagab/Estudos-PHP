<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio antecessor e sucessor</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Resultado final</h1>
    <?php 
    $num = $_GET["num"];
    $ant = $num-1;
    $suc = $num+1;
    echo "
    <p>O número escolhido foi $num</p>
    <p>O seu antecessor é $ant</p>
    <p>O seu sucessor é $suc</p>
    ";
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
</body>
</html>