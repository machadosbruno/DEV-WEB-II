<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área da Pizza</title>
</head>
<body>
    <?php
        $raio = 12;
        $area = pi() * pow($raio, 2);
        echo "Raio da Pizza: $raio cm <br>";
        echo "A área de uma Pizza com raio de 12 cm é $area cm²!";
    ?>    
</body>
</html>