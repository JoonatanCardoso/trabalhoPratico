<?php
/**
 * Created by PhpStorm.
 * User: DI
 * Date: 30/08/2018
 * Time: 08:39
 */
require_once "db_connect.php";

if($_POST['id']) {
    $sql = "SELECT * FROM funcionario WHERE id = {$_POST['id']}";
    $result = $connect->query($sql);
    if($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            echo
                "    
                     <div class='modal-content center'>
                       <h4>Funcionario</h4>
                       <p>Perfil do Funcionario</p>
                       <div class='row'>
                    <form class='col s12'>
                      <div class='row'>
                        <div class='input-field col s6'>
                          <input readonly  value='{$row['CPF']}' placeholder='CPF ' id='cpf' type='text' class='validate'>
                          <label for='cpf'></label>
                        </div>
                        <div class='input-field col s6'>
                          <input readonly value='{$row['RG']}' id='rg' placeholder='RG '  type='text' class='validate'>
                          <label for='rg'></label>
                        </div>
                      </div>
                      <div class='row'>
                        <div class='input-field col s12'>
                          <input readonly placeholder='Nome Completo'  value='{$row['NOME']}' id='nome' type='text' class='validate'>
                          <label for='nome'></label>
                        </div>
                      </div>
                      <div class='row'>
                        <div class='input-field col s12'>
                          <input readonly id='endereco'placeholder='Endereco' value='".$row['ENDERECO']."' type='text' class='validate'>
                          <label for='endereco'></label>
                        </div>
                      </div>
                      <div class='row'>
                        <div class='input-field col s6'>
                          <input readonly id='cargo' placeholder='Cargo' value='".$row['CARGO']."' type='text' class='validate'>
                          <label for='cargo'></label>
                        </div>
                        <div class='input-field col s6'>
                          <input readonly id='dataAdimissao' value='".$row['DATAADMISSAO']."' placeholder='Data de Admissao'type='text' class='validate'>
                          <label for='dataAdimissao'></label>
                        </div>
                      </div>
                      <div class='row center'>
                        <div class='col s12'>
                
                          <a href='FuncionarioSupervisor.php' class='waves-effect waves-light btn red'>Fechar</a>
                        </div>
                
                
                      </div>
                    </form>
                  </div>
    
                      </div>";

        }
    }
    $connect->close();

}


?>