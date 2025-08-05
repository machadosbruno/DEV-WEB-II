<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparação em PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
    ?>
    <h1>Resultados</h1>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">1º número</th>
        <th>Operação</th>
        <th>2º número</th>
        <th>Resultado</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td scope="row"><?php echo $num1?></td>
        <td>></td>
        <td><?php echo $num2;?></td>
        <td>
            <?php
                if($num1 > $num2){
                    echo "Verdadeiro";
                }
                else{
                    echo "False";
                }
            ?>
        </td>
        </tr>
        <tr>
        <td scope="row"><?php echo $num1?></td>
        <td><</td>
        <td><?php echo $num2;?></td>
        <td>
            <?php
                if($num1 < $num2){
                    echo "Verdadeiro";
                }
                else{
                    echo "False";
                }
            ?>
        </td>
        </tr>
        <tr>
        <td scope="row"><?php echo $num1?></td>
        <td>>=</td>
        <td><?php echo $num2;?></td>
        <td>
            <?php
                if($num1 >= $num2){
                    echo "Verdadeiro";
                }
                else{
                    echo "False";
                }
            ?></td>
        </tr>
        <tr>
        <td scope="row"><?php echo $num1?></td>
        <td><=</td>
        <td><?php echo $num2;?></td>
        <td>
            <?php
                if($num1 <= $num2){
                    echo "Verdadeiro";
                }
                else{
                    echo "False";
                }
            ?>
        </td>
        </tr>
        <tr>
        <td scope="row"><?php echo $num1?></td>
        <td>==</td>
        <td><?php echo $num2;?></td>
        <td>
            <?php
                if($num1 == $num2){
                    echo "Verdadeiro";
                }
                else{
                    echo "False";
                }
            ?>
        </td>
        </tr>
        <tr>
        <td scope="row"><?php echo $num1?></td>
        <td>!=</td>
        <td><?php echo $num2;?></td>
        <td>
            <?php
                if($num1 != $num2){
                    echo "Verdadeiro";
                }
                else{
                    echo "False";
                }
            ?>
        </td>
        </tr>
        <tr>
            <td><?php echo $num1?></td>
            <td><></td>
            <td><?php echo $num2;?></td>
            <td>
                <?php
                    if($num1 <> $num2){
                        echo "Verdadeiro";
                    }
                    else{
                        echo "False";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $num1?></td>
            <td>===</td>
            <td><?php echo $num2;?></td>
            <td>
                <?php
                    if($num1 === $num2){
                        echo "Verdadeiro";
                    }
                    else{
                        echo "False";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $num1?></td>
            <td>!==</td>
            <td><?php echo $num2;?></td>
            <td>
                <?php
                    if($num1 !== $num2){
                        echo "Verdadeiro";
                    }
                    else{
                        echo "False";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $num1?></td>
            <td><=></td>
            <td><?php echo $num2;?></td>
            <td>
                <?php
                    $res = $num1 <=> $num2;
                    if($res == 1){
                        echo "Maior";
                    }
                    else if($res == 0){
                        echo "Igual";
                    }else{
                        echo "Menor";
                    }
                ?>
            </td>
        </tr>
    </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>