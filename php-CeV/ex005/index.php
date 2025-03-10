<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de strings</title>
</head>
<body>
    <h1>Tipos de string</h1>
    <?php 
    //single quoted (não interpreta)
    $string1 = 'String single quoted';
    echo "<p>" . $string1 . "</p>";
    //double quoted (interpreta)
    $string2 = "<p>String double quoted \u{1F9E1}</p>";
    echo $string2;
    ?>
</body>
</html>