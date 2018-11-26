<?php

require_once 'db_connect.php';
if($_POST['id']) {
    $datadevolucao = $_POST['datadevolucao'];
    $quilometragem = $_POST['quilometragem'];
    $precolocacao = $_POST['precolocacao'];

    $id = $_POST['id'];
    echo $id;
    $sql  = "UPDATE locacao SET DATADEVOLUCAO = '$datadevolucao', QUILOMETRAGEM= '$quilometragem', PRECOLOCACAO = '$precolocacao' WHERE id = $id";//faz update da locação e encerra
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }

    $connect->close();
    header("Location:../locacao.php");

}

?>