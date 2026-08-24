<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Final</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
        <?php 
            $n = $_REQUEST["num"];
            $antecessor = $n - 1;
            $sucessor = $n + 1;

            echo "O número informado foi: <strong>$n</strong>";
            echo "<br>O antecessor desse número é: <strong>$antecessor</strong>";
            echo "<br>O sucessor desse número é: <strong>$sucessor</strong>";
        ?>
        </p>
        <button><a href="index.html">Voltar</a></button>
    </main>
</body>
</html>