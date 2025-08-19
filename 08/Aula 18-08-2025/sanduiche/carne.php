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
    ?>
    <div class="container mt-5">
        <h1>Selecione o tipo de carne</h1>
        <form action="recebe_carne.php" method="post">
            <div class="mb-3">
                <label for="carne" class="form-label">Escolha o tipo de carne:</label><br>
                <input type="radio" name="carne" id="frango" value="frango">
                <label for="frango">Frango</label><br>
                <input type="radio" name="carne" id="bovino" value="bovino">
                <label for="bovino">Bovino</label><br>
            </div>
            <button type="submit" class="btn btn-primary">Próximo</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>