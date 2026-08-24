<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Números</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<main>
    <h1>Sorteador de Números</h1>

    <?php
        $min = 0;
        $max = 100;
        $num = mt_rand($min, $max);

        echo "<p>Gerando numero aleatorio entre $min e $max... <br> O número sorteado foi: <strong> $num</p>";
    ?>
    <button onclick="javascript:document.location.reload()">Gerar número</button>
</main>
</body>
</html>