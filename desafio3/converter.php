<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão Monetária</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
    <h1>Conversão Monetária</h1>
    <?php 
        $Real = $_REQUEST['valor'];
        $valorConvertido = $Real / 5.15;

        echo "<h2>O valor R$ " . $Real . " equivale a US$ " . number_format($valorConvertido, 2, ',', '.') . "</h2>";
    ?>
    <p><strong>Cotação fixa de R$5,15</strong> informada diretamente no código</p>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>