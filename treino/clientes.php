<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShop - Clientes</title>
</head>
<body>
    <h1>
        Clientes
    </h1>
    <?php
        $mysqli = mysqli_connect("localhost:3306", "root", "", "bdpetshop");

        $result = mysqli_query($mysqli, "SELECT 'Um mundo cheio de ' AS _msg FROM DUAL");
        $row = mysqli_fetch_assoc($result);
        echo $row['_msg'];

        $mysqli = new mysqli("example.com", "user", "password", "database");

        $result = $mysqli->query("SELECT 'escolhas para agradar a todos.' AS _msg FROM DUAL");
        $row = $result->fetch_assoc();
        echo $row['_msg'];
    ?>
</body>
</html>