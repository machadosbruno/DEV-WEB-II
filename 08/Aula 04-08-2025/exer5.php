<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juros Simples e Montante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <h1>Juros Simples e Montante</h1>
    <p>Resultados:</p>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Tempo</th>
                <th scope="col">Montante</th>
                <th scope="col">Juro</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $tempo = $_POST['tempo'];
                $juros = $_POST['taxa'] / 100;
                $capital = $_POST['capital'];
                $contador = 0;
                while ($contador <= $tempo):?>
                    <tr>
                        <td scope="row"><?=$contador?></td>
                        <td><?=$capital + ($capital * $contador * $juros)?></td>
                        <td><?=$contador * $juros * $capital?></td>
                    </tr>
            <?php
                $contador++; 
                endwhile;
            ?>       
        </tbody>
        </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>