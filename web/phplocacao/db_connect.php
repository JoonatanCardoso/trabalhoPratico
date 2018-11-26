<?php
//arquivo de conexão do Banco de Dados
$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "bdlocadora";

// cria conexão
$connect = new mysqli($localhost, $username, $password, $dbname);//estabelece conexão

// checa conexão
if($connect->connect_error) {
    die("connection failed : " . $connect->connect_error);
} else {
    // echo "Successfully Connected";
}

?>