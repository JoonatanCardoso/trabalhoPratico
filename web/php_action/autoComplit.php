<?php
require_once "db_connect.php";

header('Content-Type: application/json');

$arrayEmpresa = array();

if(isset($_POST['name'])) {
    $sql = "SELECT * FROM funcionario WHERE  datademissao is null and nome LIKE \"%{$_POST['name']}%\"";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo
                "
        <tr>
          <td>".$row['NOME']."</td>
          <td>".$row['CARGO']."</td>
          <td><a   class='btn-floating btn-small waves-effect waves-light blue tooltipped modal-trigger botaover' data-id='{$row['id']}' data-position='bottom' data-tooltip='Visualizar'><i class='material-icons'>contacts</i></a>
            <a  href='#modalVisualizar'  class='btn-floating btn-small waves-effect waves-light orange tooltipped modal-trigger botaoedit' data-id='{$row['id']}' data-position='bottom' data-tooltip='Editar'><i class='material-icons'>edit</i></a>
            <a href='#modalVisualizar'class='btn-floating btn-small waves-effect waves-light red tooltipped modal-trigger' data-position='bottom' data-tooltip='Demitir'><i class='material-icons'>delete</i></a></tr>";

        }
        $connect->close();
    }


}else{
    $sql = "SELECT * FROM funcionario WHERE datademissao is null";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo
                "
        <tr>
          <td>".$row['NOME']."</td>
          <td>".$row['CARGO']."</td>
          <td><a   class='btn-floating btn-small waves-effect waves-light blue tooltipped modal-trigger botaover' data-id='{$row['id']}' data-position='bottom' data-tooltip='Visualizar'><i class='material-icons'>contacts</i></a>
            <a  href='#modalVisualizar'  class='btn-floating btn-small waves-effect waves-light orange tooltipped modal-trigger botaoedit' data-id='{$row['id']}' data-position='bottom' data-tooltip='Editar'><i class='material-icons'>edit</i></a>
            <a href='#modalVisualizar'class='btn-floating btn-small waves-effect waves-light red tooltipped modal-trigger' data-position='bottom' data-tooltip='Demitir'><i class='material-icons'>delete</i></a></tr>";

        }
        $connect->close();
    }
}

?>