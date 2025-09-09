<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remédios - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <?php
        $login = $_POST["login"];
        $senha = $_POST["senha"];

        if($login != null & $login != ""){
            if($senha != null && $senha != "" && strlen($senha) >= 8){
                $senha = hash('sha256', $senha);

                $mysqli = mysqli_connect("localhost:3306", "root", "", "bdremedios");
                $query = "SELECT * FROM `tbusuarios` WHERE `login` LIKE '".$login."'";
                $result = mysqli_query($mysqli, $query);
                if($result){
                    $row = mysqli_fetch_assoc($result);
                    if($row["senha"] == $senha){
                        session_start();

                        $_SESSION["id"] = $row["id"];
                        $_SESSION["nome"] = $row["nome"];
                        $_SESSION["login"] = $row["login"];

                        echo 'Login efetuado com sucesso! <br><a href="cadastroRemedio_form.php">Clique aqui para cadastrar um remérdio</a>';
                    }
                }
                else{
                    echo 'Credenciais incorretas! :/ <br>
                            <a href="login_form.php">Clique aqui para tentar novamente!</a>';
                }
            }
            else{
                echo 'Credenciais incorretas! :/ <a href="login_form.php">Clique aqui para tentar novamente!</a>';
            }
        }
        else{
            echo 'Credenciais incorretas! :/ <a href="login_form.php">Clique aqui para tentar novamente!</a>';
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>