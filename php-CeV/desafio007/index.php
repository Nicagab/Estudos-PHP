<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salários mínimos  </title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
    $salario = $_GET['salario'] ?? 1518;
    $salariosM = intdiv($salario,1518);
    $resto = $salario%1518;
    ?>
    <section>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <label for="salario">Salário (R$)</label>
        <input type="number" name="salario" id="salario" step="0.01" value="<?= $salario?>">
        <p>Considerando o salário mínimo de R$1518,00</p>
        <button type="submit">Calcular</button>
        </form>
    </section>
    <section>
        <h2>Resultado final</h2>
        <p>Quem recebe um salário de R$ <?= number_format($salario, 2, ',', ".")?> ganha <?= $salariosM?> salários mínimos + R$ <?= number_format($resto, 2, ',', ".")?></p>
    </section>
</body>
</html>