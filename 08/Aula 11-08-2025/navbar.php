<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="primeira.php">Sessão</a>
            <div>
                <?php
                    session_start();
                    if(!isset($_SESSION['nome'])){
                        echo "<button class='btn btn-success' id='btnEntrar' type='button' onclick=\"window.location.href='primeira.php'\">
                        <span>Entrar</span>
                        </button>";
                    }
                ?>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <?php
                        if($atual == 'primeira.php') {
                            echo '<a class="nav-link active" aria-current="page" href="primeira.php">Inserir nome</a>';
                        } else {
                            echo '<a class="nav-link" href="primeira.php">Inserir nome</a>';
                        }
                    ?>
                </li>
                <li class="nav-item">
                    <?php
                        if($atual == 'segunda.php') {
                            echo '<a class="nav-link active" aria-current="page" href="segunda.php">Salvar nome</a>';
                        } else {
                            echo '<a class="nav-link" href="segunda.php">Salvar nome</a>';
                        }
                    ?>
                </li>
                <li class="nav-item">
                    <?php
                        if($atual == 'terceira.php') {
                            echo '<a class="nav-link active" aria-current="page" href="terceira.php">Ver nome</a>';
                        } else {
                            echo '<a class="nav-link" href="terceira.php">Ver nome</a>';
                        }
                    ?> 
                </li>
                <li class="nav-item">
                    <?php
                        if($atual == 'quarta.php') {
                            echo '<a class="nav-link active" aria-current="page" href="quarta.php">Encerrar nome</a>';
                        } else {
                            echo '<a class="nav-link" href="quarta.php">Encerrar nome</a>';
                        }
                    ?>
                </li>
            </ul>
            
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>