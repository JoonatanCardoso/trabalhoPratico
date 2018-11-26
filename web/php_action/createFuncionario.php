<?php

require_once 'db_connect.php';

if($_POST) {// php de inserção de dados do funcionario
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cargo = $_POST['cargo'];
    $dataAdmissao = $_POST['dataAdmissao'];
    $senha = $confsenha;

    $sql = "INSERT INTO funcionario (cpf, rg, nome, endereco, cargo , dataAdmissao) VALUES ('$cpf','$rg',  '$nome','$endereco','$cargo','$dataAdmissao')";
    if($connect->query($sql) === TRUE) {
        echo "<a href='../index.php'></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    $connect->close();
    header("Location:../FuncionarioSupervisor.php");// retorana para A Tela funcionario Supervisor
   /* if($senha == $confsenha ){

    }else {
        echo  "senha incorreta ";
        $connect->close();
        header("Location:../index.php");
    }*/


}

?>