<?php
session_start();
$_SESSION["idRemedio"] = $_POST["id"];
$acao = $_POST["acao"];

if($acao == "verificar"){
    header("Location: detalhes.php");
}
else if($acao == "atualizar"){
    header("Location: atualizar.php");
}
else{
    echo '<a href="cadastroRemedio_form.php">Clique aqui para tentar novamente!</a>';
}
?>
