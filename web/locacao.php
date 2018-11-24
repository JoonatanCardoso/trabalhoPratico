
<?php  require_once 'phplocacao/db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>LOCAÇÃO</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <style>
        .scrollss{
            overflow-y: auto;
            height: 440px;
        }
    </style>
</head>
<body>
  <nav class="blue" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo center">GERENCIAMENTO DE LOCAÇÃO</a>
    </div>
  </nav>
  <div class="container row">
    <div class="input-field col s8 offset-s2" style="margin-top: 50px" >
          <i class="material-icons prefix">search</i>
          <textarea id="icon_prefix2" class="materialize-textarea" ></textarea>
          <label for="icon_prefix2">Nome do Cliente</label> 
        </div>

  <table class="highlight centered">
        <thead>
          <tr>
              <th>NOME</th>
              <th>PLACA</th>
              <th>VALOR</th>
              <th>DATA LOC</th>
          </tr>
        </thead>

        <tbody class="scrollss tableAuto">
        <?php
        $sql = "SELECT * FROM locacao WHERE DATADEVOLUCAO is null";
        $result = $connect->query($sql);

        if($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                echo "
        <tr>
          <td>".$row['NCLIENTE']."</td>
          <td>".$row['PLACACARRO']."</td>
          <td>".$row['PRECOLOCACAO']."</td>
           <td>".$row['DATALOCACAO']."</td>
                     <td>
            <a    class='btn-floating btn-small waves-effect waves-light orange tooltipped modal-trigger botaoedit' data-id='{$row['id']}' data-position='bottom' data-tooltip='Editar'><i class='material-icons'>edit</i></a>
            <a  class='btn-floating btn-small waves-effect waves-light green tooltipped modal-trigger botaodemitir'  data-id='{$row['id']}' data-position='bottom' data-tooltip='Encerrar'><i class='material-icons'>check</i></a></tr>
";

            }
        } ?>


        </tbody>
      </table>
  </div>
  <div class="input-field col s8 offset-s2 center" style="margin-top: 50px">
    <a href="#modal1" class="waves-effect waves-light btn-small blue modal-trigger"><i class="material-icons right">add</i>Cadastrar</a>


  </div>
  <!-- Modal Structure -->
  <div id="modal1" class="modal" style="width: 50%; height: 50%">
    <div class="modal-content" style="padding-bottom: 0px" >
      <h4 class="center">CADASTRO DE LOCAÇÃO</h4>
      <hr/> <br>
      <div class="row">
        <form class="col s12" method="post" action="phplocacao/insertlocacao.php">
          <div class="row">
              <div class="input-field col s6">
                  <input placeholder="Numero Cliente" name="ncliente"  id="ncliente" type="text" class="validate">
                  <label for="first_name"></label>
              </div>
              <div class="input-field col s6">
                  <input placeholder="Placa do Carro" id="placacarro" type="text" name="placacarro" class="validate">
                  <label for="last_name"></label>
              </div>
          </div>
          <div class="row">
              <div class="input-field col s12">
                  <input id="datalocacao" placeholder="Data da Locacao" type="text" name="datalocacao" class="validate">
                  <label for="last_name"></label>
              </div>
          </div>
            <div class="row col s12 center">
                <button class="waves-effect waves-light btn" type="submit green">Salvar</button>
                <a href="locacao.php" class="waves-effect waves-light btn red">Fechar</a>

            </div>
        </form>
       </div>
     </div>
    </div>
  </div>
     <div id="modal2" class="modal" style="width: 50%; height: 50%">
    <div class="modal-content" style="padding-bottom: 0px" >
      <h4 class="center">EDIÇÃO DE LOCAÇÃO</h4>
      <hr/> <br>
      <div class="row">
      <div class="input-field col s6">
        <select>
          <option value="" disabled selected>SELECIONE O CLIENTE</option>
          <option value="1">MAITAN</option>
          <option value="2">ALINE</option>
          <option value="3">FLÁVIO</option>
          <option value="3">EDUARDO</option>
          <option value="3">JONATAN</option>
        </select>
        </div>
        <div class="input-field col s6">
        <select>
          <option value="" disabled selected>SELECIONE O VEÍCULO</option>
          <option value="1">GOL</option>
          <option value="2">HB20</option>
          <option value="3">OPALA</option>
          <option value="3">HILLUX</option>
          <option value="3">DODGE RAM</option>
        </select>
        </div>
        <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea"></textarea>
              <label for="textarea1">QUILOMETRAGEM</label>
            </div>
          </div>
        </form>
  </div>
  </div>
    </div>
    <div class="row" style="margin-left: 25%">
    <div class="modal-footer col s6" >
      <a class="modal-close waves-effect waves-light btn-small blue"><i class="material-icons right">check</i>SALVAR</a>
      <a class="modal-close waves-effect waves-light btn-small blue"><i class="material-icons right">block</i>CANCELAR</a>
    </div>
    </div>
  </div>
      <div id="modal3" class="modal" style="width: 50%; height: 50%">
        <div class="modal-content" style="padding-bottom: 0px" >
          <h4 class="center">DEVOLUÇÃO DE LOCAÇÃO</h4>
          <div class="row">
            <div class="input-field col s6">
              <input placeholder="SELECIONE A DATA" type="text" class="datepicker">
            </div>
            <div class="input-field col s6">
              <textarea id="textarea1" class="materialize-textarea"></textarea>
              <label for="textarea1">QUILOMENTRAGEM</label>
            </div>
        </div>
      </div>
    <br><br>
  </div>

  <footer class="page-footer blue">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
    $('.modal').modal();
  });
    $(document).ready(function(){
    $('select').formSelect();
  });
    $(document).ready(function(){
    $('.datepicker').datepicker();
    });
    $(document).ready(function(){
        $('.tooltipped').tooltip();
    });
  </script>

  </body>
</html>
