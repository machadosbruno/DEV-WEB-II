<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de uma Pizza</title>
</head>
<body>
    <h1>Área da pizza pelo raio</h1>
    <?php
        $raio = $_POST["txtRaio"];
        $area = pi() * pow($raio, 2);
        
        echo "<p> O raio da pizza informado é $raio cm!</p>";
        echo "<p> A área da pizza é $area cm²! </p>";
    ?>
</body>
</html>