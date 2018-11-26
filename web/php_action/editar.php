
<?php
/**
 * Created by PhpStorm.
 * User: DI
 * Date: 30/08/2018
 * Time: 08:39
 */
require_once "db_connect.php";

if($_POST['id']) {//Altera as informacoes do funcionario e controi o html do modal com o conteudo aqui existente
    $sql = "SELECT * FROM funcionario WHERE id = {$_POST['id']}";
    $result = $connect->query($sql);
    if($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            echo
                "    
                     <div class='modal-content center'>
                       <h4> Funcionario </h4>
                       <p>Formulario de Edicao de dados do Funcionario</p>
                       <div class='row'>
                    <form class='col s12 'action='php_action/update.php' method='post'>
                      <div class='row'>
                        <div class='input-field col s6'>
                          <input  value='{$row['CPF']}' name='cpf' placeholder='CPF ' id='cpf' type='text' class='validate'>
                          <label for='cpf'></label>
                        </div>
                        <div class='input-field col s6'>
                          <input  value='{$row['RG']}' name='rg' id='rg' placeholder='RG '  type='text' class='validate'>
                          <label for='rg'></label>
                        </div>
                      </div>
                      <div class='row'>
                        <div class='input-field col s12'>
                          <input placeholder='Nome Completo'  name='nome' value='{$row['NOME']}' id='nome' type='text' class='validate'>
                          <label for='nome'></label>
                        </div>
                      </div>
                      <div class='row'>
                        <div class='input-field col s12'>
                          <input id='endereco'placeholder='Endereco' name='endereco' value='".$row['ENDERECO']."' type='text' class='validate'>
                          <label for='endereco'></label>
                        </div>
                      </div>
                      <div class='row'>
                        <div class='input-field col s6'>
                          <input  id='cargo' placeholder='Cargo' name='cargo' value='".$row['CARGO']."' type='text' class='validate'>
                          <label for='cargo'></label>
                        </div>
                        <div class='input-field col s6'>
                          <input  id='dataAdimissao' name='dataAdmissao' value='".$row['DATAADMISSAO']."' placeholder='Data de Admissao'type='text' class='validate'>
                          <label for='dataAdimissao'></label>
                        </div>
                      </div>
                      <div class='row'>
                        <div class='input-field col s12'>
                          <input readonly  id='id' placeholder='ID' name='id' value='".$row['id']."' type='text' class='validate ' >
                          <label for='ID'></label>
                        </div>
                      </div>
                      <div class='row center'>
                        <div class='col s12'>
                             <button class='waves-effect waves-light btn green' type='submit'>Salvar</button>
                            <a href='FuncionarioSupervisor.php' class=\"waves-effect waves-light btn red\">Fechar</a>
                         
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