<?php
/**
 * Created by PhpStorm.
 * User: DI
 * Date: 30/08/2018
 * Time: 08:39
 */
require_once "db_connect.php";

if($_POST['id']) {// Codigo que Constroi o modal passando o html existente nesse arquivo junto com os dados do Funcionario
    $sql = "SELECT * FROM funcionario WHERE id = {$_POST['id']}";
    $result = $connect->query($sql);
    if($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            echo
                ' <div class="modal-content center">
                     <h4>Funcionario</h4>
                     <p>Formulario de Demissao</p>
                     <div class="row">
                  <form class="col s12" method="post" action="php_action/updatedemissao.php">
                    <div class="row">
                      <div class="input-field col s6">
                        <input placeholder=" Data de Admissao" value="'.$row['DATAADMISSAO'].'" id="dataAdimissao" type="text" class="validate">
                        <label for="dataAdimissao"></label>
                      </div>
                      <div class="input-field col s6">
                        <input id="dataDemissao"placeholder="Data de Demissao " name="dataDemissao"  value="'.$row['DATADEMISSAO'].'" type="text" class="validate">
                        <label for="dataDemissao"></label>
                      </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                          <input readonly id="ID" placeholder="ID" name="id" value="'.$row['id'].'" type="text" class="validate">
                          <label for="ID"></label>
                        </div>
                      </div>
            
                    <div class="row center">
                      <div class=" col s12">
                        <button class="waves-effect waves-light btn green" type="submit">Salvar</button>
                            <a href="FuncionarioSupervisor.php" class="waves-effect waves-light btn red">Fechar</a>
                      </div>
            
            
                    </div>
                  </form>
                </div>
             </div>';

        }
    }
    $connect->close();

}


?>