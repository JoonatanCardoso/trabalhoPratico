<?php

require_once 'db_connect.php';

if($_POST) {

    $dataDemissao = $_POST['dataDemissao'];

    $id = $_POST['id'];

    $sql  = "UPDATE funcionario SET DATADEMISSAO = '$dataDemissao' WHERE id = $id";
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }

    $connect->close();
   header("Location:../FuncionarioSupervisor.php");

}

?>