<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remédios - Ver remédio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION["idRemedio"])){
            $_SESSION['idRemedio'] = $_POST["id"];
        }
        if(isset($_SESSION["id"])){
            if(isset($_SESSION["idRemedio"])){
                $mysqli = mysqli_connect("localhost:3306", "root", "", "bdremedios");
                $query = "SELECT * FROM `tbremedios` WHERE `id` = '" . $_SESSION["idRemedio"] . "'";
                $result = mysqli_query($mysqli, $query);
                if($result){
                    $row = mysqli_fetch_assoc($result);
                    echo '  <table>
                                <thead>
                                    <th>Nome</th>
                                    <th>Data</th>
                                    <th>Obsercação</th>
                                </thead>
                                <tbody>';
                    echo "<tr>
                            <td>" . $row['nome'] . "</td>
                            <td>" . $row['data'] . "</td>
                            <td>" . $row['observacao'] . "</td>
                            
                        </tr>";
                    echo "</tbody>
                        </table>";
                    
                }
                else{
                    echo 'Erro ao buscar remédios! :/ <br>
                            <a href="remedios_form.php">Clique aqui para tentar novamente!</a>';
                }
            }
            else {
                echo 'Remédio inválido.
                    <br><a href="remedios_form.php">Clique aqui para selecionar um remédio!</a>';    
            }
        }
        else{
            echo 'Você não fez login. Dessa forma não conseguimos associar seus remédios a você.
                  <br><a href="login_form.php">Clique aqui para entrar no sistema!</a>';
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>