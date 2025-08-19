<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe o tipo do texto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php
    if( isset($_GET['tipo']) && isset($_GET['cor']) ) {

	echo "Tipo recebido e cor recebido!<br>";
	if($_GET['tipo'] != '' && $_GET['cor'] != '') {
	    session_start();
	    $_SESSION['tipo'] = $_GET['tipo'];
        $_SESSION['cor'] = $_GET['cor'];
        echo "Tipo e cor salvos na sessão!<br>";
	    echo '<a href="cor.php">Ir para a página modificada</a><br>';
	} else {
	    echo "Tipo e/ou cor vazio!<br>";
	}
    } else {
	echo '<a href="3.php">Selecione um tipo e/ou cor!</a>';
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>