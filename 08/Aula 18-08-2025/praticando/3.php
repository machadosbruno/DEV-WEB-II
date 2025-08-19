<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe tipo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
    <h2>Selecione o tipo:</h2>
        <form action="recebe_tipo.php">
            <input type="radio" id="n" name="tipo" value="negrito">
            <label for="n">Negrito</label><br>
            <input type="radio" id="normal" name="tipo" value="normal">
            <label for="normal">Normal</label><br>
            <label for="cor">Cor:</label>
            <input type="color" id="cor" name="cor"><br>
            <input type="submit" class="btn btn-secondary mt-3">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>