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
    $pagina_atual = 'pao';
    include 'menu.php';

    if( isset($_POST['pao']) ){
        session_start();
        if($_POST['pao'] == 'frances'){
            $_SESSION['pao'] = 'Pão Francês';
            echo '<p class="m-3">Pão Francês selecionado!</p>';
            echo '<a href="carne.php" class="btn btn-primary m-3">Selecione a carne</a>';
            echo '<a href="pao.php" class="btn btn-warning m-3">Altere o tipo de pão</a>';
        } elseif($_POST['pao'] == 'ciabatta'){
            $_SESSION['pao'] = 'Ciabatta';
            echo '<p class="m-3">Pão Ciabatta selecionado!</p>';
            echo '<a href="carne.php" class="btn btn-primary m-3">Selecione a carne</a>';
            echo '<a href="pao.php" class="btn btn-warning m-3">Altere o tipo de pão</a>';
        }
    } else {
            echo '<a href="pao.php" class="btn btn-primary m-3">Selecione um tipo de pão</a>';
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>