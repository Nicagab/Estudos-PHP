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
        $inicio = date('m-d-Y', strtotime("-7 days"));
        $fim = date('m-d-Y');
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio . '\'&@dataFinalCotacao=\''. $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
        $dados = json_decode(file_get_contents($url), true);
    
        $cotacao = $dados["value"][0]["cotacaoCompra"];
     
        $valor = $_GET["valor"];
        $valorFormatado = number_format($valor, 2, ",", ' ');
        $valorC = number_format($valor/$cotacao, 2 , ",", ' ');
        echo "
        <p>Seus R\$$valorFormatado equivalem a US\$$valorC</p>
        <p>*Cotação atual de R\$" . number_format($cotacao, 2, ",", ' ') . " obtida diretamente do Banco Central do Brasil</p>
        ";
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
</body>
</html>