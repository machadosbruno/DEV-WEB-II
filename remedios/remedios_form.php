<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remédios - Visualizar remédios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1>Visualizar remédios</h1>
    <?php
        session_start();
        if(isset($_SESSION["id"])){
            echo '  <form action="remedios.php" method="post">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" id="nome" name="nome" class="form-control">
                        <label for="data" class="form-label">Data a ser utilizado:</label>
                        <input type="date" id="data" name="data" class="form-control">
                        
                        Selecione o tipo de busca:<br>
                        
                        <input class="form-check-input" type="radio" name="busca" id="busca" value ="tdata">
                        <label class="form-check-label" for="tdata"> Data </label>
                        <input class="form-check-input" type="radio" name="busca" id="busca" value="tnome">
                        <label class="form-check-label" for="tnome"> Nome </label>
                        <br>
                        <input type="submit" value="Buscar">
                    </form>';
        }
        else{
            echo 'Você não fez login. Dessa forma não conseguimos associar seus remédios a você.
                  <br><a href="login_form.php">Clique aqui para entrar no sistema!</a>';
        }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>