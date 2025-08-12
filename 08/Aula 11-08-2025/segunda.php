<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php
        $atual = 'segunda.php';
        include('navbar.php');
        
        if(!isset($_GET['nome']) || empty($_GET['nome'])) {
            echo "<p>Por favor, insira um nome válido.</p>";
            exit;
        }
        else{
            $_SESSION['nome'] = $_GET['nome'];
            echo "<script>
                    document.getElementById('btnEntrar').style.display = 'none';
                </script>";
            echo "O nome " . $_SESSION['nome'] . " foi salvo com sucesso!";
            echo "<br>";
            echo "<a href=\"terceira.php\" class=\"btn btn-primary\">Veja o nome salvo em SESSION</a>";
        }
    ?>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>