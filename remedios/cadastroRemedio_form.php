<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remédios - Cadastrar remédio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1>Cadastro de remédio</h1>
    <?php
        session_start();
        if(isset($_SESSION["id"])){
            echo '<form action="cadastrarRemedio.php" method="post">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" id="nome" name="nome" class="form-control">
                        <label for="data" class="form-label">Data a ser utilizado:</label>
                        <input type="date" id="data" name="data" class="form-control">
                        <label for="observacao" class="form-label">Obsercação:</label>
                        <input type="text" id="observacao" name="observacao" class="form-control" placeholder="Maximo 255 letras...">
                        <input type="submit" value="Cadastrar">
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