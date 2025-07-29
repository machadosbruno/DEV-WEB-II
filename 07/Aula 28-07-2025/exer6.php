<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juros simples</title>
</head>
<body>
    <h1>Juros simples</h1>
    <?php
        $capital = $_POST["txtCapital"];
        $juros = $_POST["txtTaxa"];
        $tempo = $_POST["txtTempo"];
        $resultado = $capital * $juros * $tempo;
        
        echo "<p> O capital informado é: $capital </p>";
        echo "<p> A taxa informada é: $juros </p>";
        echo "<p> O tempo informado é: $tempo </p>";
        echo "<p> O resultado será: $resultado </p>";
    ?>
</body>
</html>