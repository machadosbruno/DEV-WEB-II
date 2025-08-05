<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juros Simples e Montante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <h1>Juros Simples e Montante</h1>
    <p>Calcule o montante de um investimento com juros simples.</p>
    <form action="exer5.php" method="post">
        <label for="capital">Capital:</label>
        <input type="number" id="capital" name="capital">
        <br>
        <label for="taxa">Taxa de Juros (em porcentagem):</label>
        <input type="number" id="taxa" name="taxa">
        <br>
        <label for="tempo">Tempo (em meses):</label>
        <input type="number" id="tempo" name="tempo">
        <br>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>