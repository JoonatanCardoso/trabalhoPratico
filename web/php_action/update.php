<?php

require_once 'db_connect.php';
var_dump($_POST);
if($_POST['id']) {
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cargo = $_POST['cargo'];
    $dataAdmissao = $_POST['dataAdmissao'];

    $id = $_POST['id'];
    echo $id;
    $sql  = "UPDATE funcionario SET CPF = '$cpf', RG= '$rg', NOME = '$nome', ENDERECO = '$endereco' , CARGO= '$cargo',DATAADMISSAO = '$dataAdmissao' WHERE id = $id";
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }

    $connect->close();
    header("Location:../FuncionarioSupervisor.php");

}

?>