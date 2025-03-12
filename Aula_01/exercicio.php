<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Média - ETC Noturno</title>
</head>
<body>
    <h2>Digite as notas do aluno ETC</h2>
    <form method="post">
        Nota 1: <input type="number" name="nota1" step="0.1" required><br>
        Nota 2: <input type="number" name="nota2" step="0.1" required><br>
        Nota 3: <input type="number" name="nota3" step="0.1" required><br>
        Nota 4: <input type="number" name="nota4" step="0.1" required><br>
        <input type="submit" value="Calcular Média">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota1 = floatval($_POST["nota1"]);
        $nota2 = floatval($_POST["nota2"]);
        $nota3 = floatval($_POST["nota3"]);
        $nota4 = floatval($_POST["nota4"]);
        
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        //var_dump($media);
        echo "<h3>Média: " . number_format($media, 2) . "</h3>";
        
        if ($media >= 5) {
            echo "<h3 style='color: green;'>Aprovado</h3>";
        } else {
            echo "<h3 style='color: red;'>Reprovado</h3>";
        }
    }
    ?>
</body>
</html>