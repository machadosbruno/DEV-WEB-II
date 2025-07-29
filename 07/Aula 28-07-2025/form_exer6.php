<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juros simples</title>
</head>
<body>
    <h1>Juros simples</h1>
    <p>Informe os dados abaixo para saber o total após o rendimento de juros simples</p>
    <form action="exer6.php" method="post">
        <label for="txtCapital">Capital investido: </label>
        <input type="text" id="txtCapital" name="txtCapital">
        <br>
        <label for="txtTaxa">Taxa de juros: </label>
        <input type="text" id="txtTaxa" name="txtTaxa">
        <br>
        <label for="txtTempo">Tempo investido: </label>
        <input type="text" id="txtTempo" name="txtTempo">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>