<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<style>
    body {
        background-color:
        <?php
            if (isset($_GET['tema'])) {
                if($_GET['tema'] == 'claro') {
                    echo "lightgrey";
                } elseif($_GET['tema'] == 'escuro') {
                    echo "darkgrey";
                }
            }
        ?>;
    }
</style>
<body>
    <?php
    if (!isset($_GET['tema'])){
        echo "<p>Escolha um tema <a href='radio_form.php'>aqui</a>.</p>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>