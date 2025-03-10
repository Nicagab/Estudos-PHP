<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
    $dividendo = $_GET['dividendo'] ?? 0;
    $divisor = $_GET['divisor'] ?? 1;
    $resto = $dividendo%$divisor;
    $resultado = intdiv($dividendo, $divisor);
    
    ?>
<section>
    <h1>Anatomia de uma Divisão</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
    <label for="dividendo">Dividendo</label>
    <input type="number" name="dividendo" id="dividendo">
    <label for="divisor">Divisor</label>
    <input type="number" name="divisor" id="divisor">
    <button type="submit">Analisar</button>
    </form>
</section>
<section>
    <h2>Estrutura da divisão</h2>
    <table class="divisao">
    <tr>
        <td><?= $dividendo ?></td>
        <td><?= $divisor ?></td>
    </tr>
    <tr>
        <td><?= $resto ?></td>
        <td><?= $resultado ?></td>
    </tr>
</table>
</section>
</body>
</html>