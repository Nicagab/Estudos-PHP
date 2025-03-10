<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $num = $_GET['num'] ?? 1;
    $raizQ = sqrt($num);
    $raizC = $num**(1/3)
    ?>
    <section>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número:</label>
            <input type="number" name="num" id="num" step="1" value="<?= $num?>">
            <button type="submit">Calcular Raízes</button>
        </form>
    </section>
    <section>
        <h2>Resultado final</h2>
        <ul>
            <li>A sua raiz quadrada é <strong><?= number_format($raizQ, 3, ',', '.')?></strong></li>
            <li>A sua raiz cúbica é <strong><?= number_format($raizC, 3, ',', '.')?></strong></li>
        </ul>
    </section>
</body>
</html>