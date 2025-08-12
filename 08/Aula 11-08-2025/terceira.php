<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php
        $atual = 'terceira.php';
        include('navbar.php');
    ?>
    <h1>Veja o nome salvo em SESSION</h1>

    <?php
        if(!isset($_SESSION['nome']) || empty($_SESSION['nome'])) {
            echo "<p>Nenhum nome foi salvo na sessão.</p>";
            exit;
        }
        else{
            echo "<p>O nome salvo é: " . $_SESSION['nome'] . "</p>";
        }
    ?>
    <br>
    <a href="quarta.php" class="btn btn-primary">Clique para ir para a página que encerra a sessão</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>