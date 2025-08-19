<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monte seu sanduíche</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php
    $pagina_atual = 'carne';
    include 'menu.php';

    if( isset($_POST['carne']) ){
        session_start();
        if($_POST['carne'] == 'frango'){
            $_SESSION['carne'] = 'Frango';
            echo '<p class="m-3">Frango selecionado!</p>';
            echo '<a href="queijo.php" class="btn btn-primary m-3">Selecione o queijo</a>';
            echo '<a href="carne.php" class="btn btn-warning m-3">Altere o tipo de carne</a>';
        } elseif($_POST['carne'] == 'bovino'){
            $_SESSION['carne'] = 'Bovino';
            echo '<p class="m-3">Bovino selecionado!</p>';
            echo '<a href="queijo.php" class="btn btn-primary m-3">Selecione o queijo</a>';
            echo '<a href="carne.php" class="btn btn-warning m-3">Altere o tipo de carne</a>';
        }
    } else {
            echo '<a href="carne.php" class="btn btn-primary m-3">Selecione um tipo de carne</a>';
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>