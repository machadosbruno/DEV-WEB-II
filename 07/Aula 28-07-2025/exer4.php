<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de dois números</title>
</head>
<body>
    <h1>Soma de dois números</h1>
    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $soma = $num1 + $num2;
        
        echo "<p> O primeiro número informado é: $num1 </p>";
        echo "<p> O segundo número informado é: $num2 </p>";
        echo "<p> A soma dos números informados é: $soma </p>";
    ?>
</body>
</html>