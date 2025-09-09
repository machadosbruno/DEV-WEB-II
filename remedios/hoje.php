<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remédios - Tomar Hoje</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <?php
        session_start();
        
        if(isset($_SESSION["id"])){
            date_default_timezone_set('America/Sao_Paulo');
            $hoje = date("Y-m-d");
            
            $mysqli = mysqli_connect("localhost:3306", "root", "", "bdremedios");
            $query = "SELECT * FROM `tbremedios` WHERE `data` = '" . $hoje . "'";
            $result = mysqli_query($mysqli, $query);
            if($result){
                echo '  <table>
                            <thead>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Data</th>
                            </thead>
                            <tbody>';
                $options = [];
                while($row = mysqli_fetch_assoc($result)){
                    array_push($options, "<option value=" . $row['id'] . ">" . $row['id'] . "</option>");
                    echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['nome'] . "</td>
                            <td>" . $row['data'] . "</td>
                          </tr>";
                }
                echo "      </tbody>
                        </table>
                                            
                        <form action='detalhes.php' method='post'>
                            Selecione o ID de um dos remédios para ver mais informações sobre ele!
                            <label for='id' class='form-label'>ID:</label><br>
                            <select name='id' id='id'>";
                for($i = 0; $i < count($options); $i++){
                    echo $options[$i];
                } 

                echo "      </select>
                            <input type='submit' value='Verificar'>
                        </form>";
            }
            else{
                echo 'Erro ao buscar remédios! :/ <br>
                        <a href="cadastroRemedio_form.php">Clique aqui para tentar novamente!</a>';
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