<?php
require_once "db_connect.php";
header('Content-Type: application/json');

$arrayEmpresa = array();

if(isset($_POST['name'])) {//se o nome da busca for encontrado
   // datademissao is null and
    $sql = "SELECT * FROM locacao WHERE   NCLIENTE LIKE \"%{$_POST['name']}%\"";//faz o filtro por busca
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {//lista as locações existentes
        while ($row = $result->fetch_assoc()) {
            echo
                "
        <tr>
          <td>".$row['NCLIENTE']."</td>
          <td>".$row['PLACACARRO']."</td>
          <td> ".$row['PRECOLOCACAO'];
            if($row['PRECOLOCACAO']!= null )
                echo "<i class=' material-icons tiny green-text'>check</i>";
            else echo"<i class=' material-icons tiny red-text'>clear</i>"; echo " </td>
           <td>".$row['DATALOCACAO']."</td>
                     <td>
            <a  class='btn-floating btn-small waves-effect waves-light orange tooltipped modal-trigger botaoeditar' data-id='{$row['id']}' data-position='bottom' data-tooltip='Editar'><i class='material-icons'>edit</i></a>
            <a  class='btn-floating btn-small waves-effect waves-light green tooltipped modal-trigger botaoencerrar'  data-id='{$row['id']}' data-position='bottom' data-tooltip='Encerrar'><i class='material-icons'>check</i></a></tr>";
        }
        $connect->close();//fecha a conexão
    }


}else{// se nada for buscado, lista todos
    $sql = "SELECT * FROM locacao WHERE ";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {//lista as locações existentes
        while ($row = $result->fetch_assoc()) {
            echo
                "
        <tr>
          <td>".$row['NCLIENTE']."</td>
          <td>".$row['PLACACARRO']."</td>
          <td> ".$row['PRECOLOCACAO'];
            if($row['PRECOLOCACAO']!= null )
                echo "<i class=' material-icons tiny green-text'>check</i>";
            else echo"<i class=' material-icons tiny red-text'>clear</i>"; echo " </td>
           <td>".$row['DATALOCACAO']."</td>
                     <td>
            <a  class='btn-floating btn-small waves-effect waves-light orange tooltipped modal-trigger botaoeditar' data-id='{$row['id']}' data-position='bottom' data-tooltip='Editar'><i class='material-icons'>edit</i></a>
            <a  class='btn-floating btn-small waves-effect waves-light green tooltipped modal-trigger botaoencerrar'  data-id='{$row['id']}' data-position='bottom' data-tooltip='Encerrar'><i class='material-icons'>check</i></a></tr>
";
        }
        $connect->close();//fecha a conexão
    }
}

?>