<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remédios - Cadastrar remédio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <?php
        session_start();
        $nome = $_POST["nome"];
        $data = $_POST["data"];
        $observacao = $_POST["observacao"];
        $respostaInformacoesInvalidas = 'Informações vazias ou inválidas. <a href="cadastroRemedio_form.php">Clique aqui para inserir novamente!</a>';

        if($nome != null && $nome != "" && strlen($nome) <= 255){
            if($data != null && $data != "" && $data != "0000-00-00"){
                if($observacao != null && $observacao != "" && strlen($observacao) <= 255){
                    $mysqli = mysqli_connect("localhost:3306", "root", "", "bdremedios");
                    $query = "INSERT INTO `tbremedios` (`id`, `nome`, `data`, `observacao`, `codUsuario`) VALUES (NULL, '".$nome."', '".$data."', '".$observacao."', '" . $_SESSION["id"] . "')";
                    $result = mysqli_query($mysqli, $query);
                    if($result){
                        echo 'Remedio cadastrado com sucesso! <br>
                              <a href="hoje.php">Clique aqui para ver os remédios que precisam ser usados hoje!</a>';
                    }
                    else{
                        echo 'Erro ao cadastrar o usuário! :/ <br>
                              <a href="cadastroRemedio_form.php">Clique aqui para tentar novamente!</a>';
                    }
                }
                else{
                    echo $respostaInformacoesInvalidas;
                }
            }
            else{
                echo $respostaInformacoesInvalidas;
            }
        }
        else{
            echo $respostaInformacoesInvalidas;
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>