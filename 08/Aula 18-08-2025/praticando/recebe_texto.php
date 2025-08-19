<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe texto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php
    if( isset($_GET['texto']) ) {
	echo "Texto recebido!<br>";
	if( $_GET['texto'] != '' ) {
	    session_start();
	    $_SESSION['txt'] = $_GET['texto'];
	    echo "Texto salvo na sessão!<br>";
        echo '<a href="3.php">Editar formatação</a>';
	} else {
	    echo '<a href="envia_texto.php">Texto vazio, preencha o formulário!</a><br>';
	}
    } else {
	echo "Envie o texto!";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>