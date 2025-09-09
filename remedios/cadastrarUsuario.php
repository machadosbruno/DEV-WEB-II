<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remédios - Cadastrar usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <?php
        $nome = $_POST["nome"];
        $login = $_POST["login"];
        $senha = $_POST["senha"];

        if($nome != null && $nome != "" && strlen($nome) <= 255){
            if($login != null && $login != "" && strlen($login) <= 255){
                if($senha != null && $senha != "" && strlen($senha) >= 8){
                    $senha = hash('sha256', $senha);

                    $mysqli = mysqli_connect("localhost:3306", "root", "", "bdremedios");
                    $query = "INSERT INTO `tbusuarios` (`id`, `nome`, `login`, `senha`) VALUES (NULL, '".$nome."', '".$login."', '".$senha."')";
                    $result = mysqli_query($mysqli, $query);
                    if($result){
                        echo 'Usuário cadastrado com sucesso! <br>
                              <a href="login_form.php">Clique aqui para entrar no sistema!</a>';
                    }
                    else{
                        echo 'Erro ao cadastrar o usuário! :/ <br>
                              <a href="cadastroUsuario_form.php">Clique aqui para tentar novamente!</a>';
                    }
                }
                else{
                    echo 'Senha menor que oito caracteres, vazia, ou inválida. <a href="cadastroUsuario_form.php">Clique aqui para tentar novamente!</a>';
                }
            }
            else{
                echo 'Nome ou login vazios ou inválidos. <a href="cadastroUsuario_form.php">Clique aqui para inserir novamente!</a>';
            }
        }
        else{
            echo 'Nome ou login vazios ou inválidos. <a href="cadastroUsuario_form.php">Clique aqui para inserir novamente!</a>';
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>