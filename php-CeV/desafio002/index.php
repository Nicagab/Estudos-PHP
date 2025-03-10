<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Números aleatórios</title>
</head>
<body>
    <h1>Trabalhando com números aleatórios</h1>
    <p>Gerando um número entre 0 e 100...</p>
    <?php 
        $num = rand(0,100);
        echo "<p>O valor gerado foi $num</p>";
    ?>
    <button><a href="index.php">Gerar outro</a></button>
</body>
</html>