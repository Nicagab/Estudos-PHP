<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Conversor de Moedas v1.0</h1>
    <?php
        const COTACAO = 5.76; 
        $valor = $_GET["valor"];
        $valorFormatado = number_format($valor, 2, ",", ' ');
        $valorC = number_format($valor/COTACAO, 2 , ",", ' ');
        echo "
        <p>Seus R\$$valorFormatado equivalem a US\$$valorC</p>
        <p>*Cotação fixa de R\$" . number_format(COTACAO, 2, ",", ' ') . " informada diretamente no código</p>
        ";
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
</body>
</html>