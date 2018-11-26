<?php
require_once "db_connect.php";
//arquivo para editar informação selecionada na tabela
if($_POST['id']) {
    $sql = "SELECT * FROM locacao WHERE id = {$_POST['id']}";//seleciona o id pesquisado
    $result = $connect->query($sql);
    if($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {//executa um modal com as informações para editar
            echo
                '
                <div class="modal-content" style="padding-bottom: 0px" >
                  <h4 class="center">EDIÇÂO DE LOCAÇÂO</h4>
                  <hr/> <br>
                  <div class="row">
                    <form class="col s12" method="post" action="phplocacao/update.php">
                      <div class="row">
                          <div class="input-field col s6">
                              <input placeholder="Numero Cliente" value="'.$row['NCLIENTE'].'" name="ncliente"  id="ncliente" type="text" class="validate">
                              <label for="first_name"></label>
                          </div>
                          <div class="input-field col s6">
                              <input placeholder="Placa do Carro" value="'.$row['PLACACARRO'].'" id="placacarro" type="text" name="placacarro" class="validate">
                              <label for="last_name"></label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="input-field col s12">
                              <input id="datalocacao" value="'.$row['DATALOCACAO'].'" placeholder="Data da Locacao" type="text" name="datalocacao" class="validate">
                              <label for="last_name"></label>
                          </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input readonly  id="id" placeholder="ID" name="id" value="'.$row["id"].'" type="text" class="validate " >
                          <label for="ID"></label>
                        </div>
                      </div>
                        <div class="row col s12 center">
                            <button class="waves-effect waves-light btn green" type="submit ">Salvar</button>
                            <a href="locacao.php" class="waves-effect waves-light btn red">Fechar</a>
                        </div>
                    </form>
                   </div>
                 </div>';
        }
    }
    $connect->close();// fecha a conexão
}
?>