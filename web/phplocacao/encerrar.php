<?php
/**
 * Created by PhpStorm.
 * User: DI
 * Date: 30/08/2018
 * Time: 08:39
 */
require_once "db_connect.php";

if($_POST['id']) {
    $sql = "SELECT * FROM locacao WHERE id = {$_POST['id']}";
    $result = $connect->query($sql);
    if($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            echo
                '
                <div class="modal-content" style="padding-bottom: 0px" >
                  <h4 class="center">ENCERRAR LOCACAO</h4>
                  <hr/> <br>
                  <div class="row">
                    <form class="col s12" method="post" action="phplocacao/updateEncerrar.php">
                      <div class="row">
                          <div class="input-field col s6">
                              <input placeholder="Data Locacao" value="'.$row["DATALOCACAO"].'" name="datalocacao"  id="datalocacao" type="text" class="validate">
                              <label for="first_name"></label>
                          </div>
                          <div class="input-field col s6">
                              <input placeholder="Quilometragem" value="'.$row["QUILOMETRAGEM"].'" id="quilometragem" type="text" name="quilometragem" class="validate">
                              <label for="last_name"></label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="input-field col s12">
                              <input id="Preco Locacao" value="R$'.$row["PRECOLOCACAO"].'" placeholder="precolocacao" type="text" name="precolocacao" class="validate">
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
    $connect->close();

}


?>