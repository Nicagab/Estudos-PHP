<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e constantes</title>
</head>
<body>
    <h1>Variaveis e constantes</h1>
    <h2>Regras</h2>
    <?php 

        $exemploVariavel = 'Hello world';
        const EXEMPLO_VARIAVEL = 'Hello world';
        $regra1 = "Começar com simbolo $";
        $regra2 = "Após o $ usar letra ou _";
        $regra3 = "Após primera letra ou _ usar letras, maiúsculas ou minúsculas, letras e _";
        $regra4 = "Aceita caracteres da tabela ASCII a partir do 128";
        $regra5 = "Aceita acentuação, apesar de não ser convencional";
        $regra6 = "As variáveis são case sensitive";
        $regra7 = 'Não pode usar nomes reservados, como $this';

        echo "<ol>
        <li>$regra1</li>
        <li>$regra2</li>
        <li>$regra3</li>
        <li>$regra4</li>
        <li>$regra5</li>
        <li>$regra6</li>
        <li>$regra7</li>
        </ol>";
    ?>
    <h2>Recomendações</h2>
    <?php
        $recomendacao1 = "Usar nomes claros e fácil identificação";
        $recomendacao2 = "Evite nomes muito curtos, ou muito longos"; 
        $recomendacao3 = "Defina um padrão, e siga por todo o projeto";
        $recomendacao4 = "Prefira usar minúsculas para variáveis"; 
        $recomendacao5 = "Prefira usar maiúsculas para constantes"; 
        $recomendacao6 = "Use camelCase para métodos e atributos"; 
        $recomendacao7 = "Use SNAKE_CASE para nomear constantes"; 

        echo "<ul>
        <li>$recomendacao1</li>
        <li>$recomendacao2</li>
        <li>$recomendacao3</li>
        <li>$recomendacao4</li>
        <li>$recomendacao5</li>
        <li>$recomendacao6</li>
        <li>$recomendacao7</li>
        </ul>";
    ?>
</body>
</html>