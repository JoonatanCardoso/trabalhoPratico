<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <style>
  th{
    text-align: center;
  }
  td{
    text-align: center;
  }

  </style>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
  <!--  <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>-->
      <ul class="right hide-on-med-and-down">
        <li><a href="#"></a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="center">
    <h3>Funcionarios</h3>

  </div>

  <div class="container">
    <div class="section center">

              <form class="col s12">
                <div class="row">
                  <div class="input-field col s7 offset-s2 ">
                    <i class="material-icons prefix blue-text">search</i>
                    <input id="icon_prefix" type="text" class="validate ">
                    <label class="" for="icon_prefix"></label>
                  </div>
                  <div class="input-field col s3 ">

                   <a href="#modalCadastro" class="btn-floating btn-small waves-effect waves-light blue tooltipped modal-trigger" data-position="bottom" data-tooltip="Cadastrar Funcionario"><i class="material-icons">add</i></a><label class="right">Cadastrar</label>

                  </div>
                </div>
              </form>


      <!--   Icon Section   -->
      CPF, RG, seu
      nome, seu endereço e seu cargo.
      <table class="highlight center">
        <thead>
        <tr>
          <th>Name</th>
          <th>Cargo</th>
          <th></th>
        </tr>
        </thead>

        <tbody>
        <tr>
          <td>Alvin</td>
          <td>Eclair</td>
          <td><a  href="#modalVisualizar"  class="btn-floating btn-small waves-effect waves-light blue tooltipped modal-trigger" data-position="bottom" data-tooltip="Visualizar"><i class="material-icons">contacts</i></a>
            <a  href="#modalVisualizar"  class="btn-floating btn-small waves-effect waves-light orange tooltipped modal-trigger" data-position="bottom" data-tooltip="Editar"><i class="material-icons">edit</i></a>
            <a href="#modalVisualizar"class="btn-floating btn-small waves-effect waves-light red tooltipped modal-trigger" data-position="bottom" data-tooltip="Demitir"><i class="material-icons">delete</i></a></td>
        </tr>
        <tr>
          <td>Alan</td>
          <td>Jellybean</td>
          <td> <a  href="#modalVisualizar"  class="btn-floating btn-small waves-effect waves-light blue tooltipped modal-trigger" data-position="bottom" data-tooltip="Visualizar"><i class="material-icons">contacts</i></a>
            <a  href="#modalVisualizar"  class="btn-floating btn-small waves-effect waves-light orange tooltipped modal-trigger" data-position="bottom" data-tooltip="Editar"><i class="material-icons">edit</i></a>
            <a href="#modalVisualizar"class="btn-floating btn-small waves-effect waves-light red tooltipped modal-trigger" data-position="bottom" data-tooltip="Demitir"><i class="material-icons">delete</i></a></td>
          </tr>
        <tr>
          <td>Jonathan</td>
          <td>Lollipop</td>
          <td> <a  href="#modalVisualizar"  class="btn-floating btn-small waves-effect waves-light blue tooltipped modal-trigger" data-position="bottom" data-tooltip="Visualizar"><i class="material-icons">contacts</i></a>
            <a  href="#modalEditar"  class="btn-floating btn-small waves-effect waves-light orange tooltipped modal-trigger" data-position="bottom" data-tooltip="Editar"><i class="material-icons">edit</i></a>
            <a href="#modalDemitir"class="btn-floating btn-small waves-effect waves-light red tooltipped modal-trigger" data-position="bottom" data-tooltip="Demitir"><i class="material-icons">delete</i></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <br><br>
  </div>

  <!-- Modal Structure -->
   <div id="modalCadastro" class="modal">
     <div class="modal-content center">
         <h4>Cadastrar Funcionario</h4>
         <p>Formulario de Admissao</p>
         <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="CPF " id="cpf" type="text" class="validate">
            <label for="cpf"></label>
          </div>
          <div class="input-field col s6">
            <input id="rg"placeholder="RG "  type="text" class="validate">
            <label for="rg"></label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input placeholder="Nome Completo"  id="nome" type="text" class="validate">
            <label for="nome"></label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="endereco"placeholder="Endereco" type="text" class="validate">
            <label for="endereco"></label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input id="cargo" placeholder="Cargo" type="text" class="validate">
            <label for="cargo"></label>
          </div>
          <div class="input-field col s6">
            <input id="dataAdimissao" placeholder="Data de Admissao" type="text" class="validate">
            <label for="dataAdimissao"></label>
          </div>
        </div>
        <div class="row center">
          <div class=" col s12">
            <a class="waves-effect waves-light btn green">Salvar</a>
            <a class="waves-effect waves-light btn red">Fechar</a>
          </div>


        </div>
      </form>
    </div>
    </div>
   </div>


   <div id="modalDemitir" class="modal">
     <div class="modal-content center">
         <h4>Funcionario</h4>
         <p>Formulario de Demissao</p>
         <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input placeholder=" Data de Admissao" id="dataAdimissao" type="text" class="validate">
            <label for="dataAdimissao">Data de Admissao</label>
          </div>
          <div class="input-field col s6">
            <input id="dataDemissao"placeholder="Data de Demissao "  type="text" class="validate">
            <label for="dataDemissao">Data de Demissao</label>
          </div>
        </div>

        <div class="row center">
          <div class=" col s12">
            <a class="waves-effect waves-light btn green">Salvar</a>
            <a class="waves-effect waves-light btn red">Fechar</a>
          </div>


        </div>
      </form>
    </div>
    </div>
   </div>



   <div id="modalEditar" class="modal">
     <div class="modal-content center">
         <h4> Funcionario</h4>
         <p>Formulario de Edicao de dados do Funcionario</p>
         <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="CPF " id="cpf" type="text" class="validate">
            <label for="cpf"></label>
          </div>
          <div class="input-field col s6">
            <input id="rg"placeholder="RG "  type="text" class="validate">
            <label for="rg"></label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input placeholder="Nome Completo"  id="nome" type="text" class="validate">
            <label for="nome"></label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="endereco"placeholder="Endereco" type="text" class="validate">
            <label for="endereco"></label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input id="cargo" placeholder="Cargo" type="text" class="validate">
            <label for="cargo"></label>
          </div>
          <div class="input-field col s6">
            <input id="dataAdimissao" placeholder="Data de Admissao" type="text" class="validate">
            <label for="dataAdimissao"></label>
          </div>
        </div>
        <div class="row center">
          <div class=" col s12">
            <a class="waves-effect waves-light btn green">Salvar</a>
            <a class="waves-effect waves-light btn red">Fechar</a>
          </div>


        </div>
      </form>
    </div>
    </div>
   </div>


   <div id="modalVisualizar" class="modal">
     <div class="modal-content center">
       <h4>Funcionario</h4>
       <p>Perfil do Funcionario</p>
       <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input disabled value="" placeholder="CPF " id="cpf" type="text" class="validate">
          <label for="cpf"></label>
        </div>
        <div class="input-field col s6">
          <input disabled id="rg"placeholder="RG "  type="text" class="validate">
          <label for="rg"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled placeholder="Nome Completo"  id="nome" type="text" class="validate">
          <label for="nome"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled id="endereco"placeholder="Endereco" type="text" class="validate">
          <label for="endereco"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input disabled id="cargo" placeholder="Cargo" type="text" class="validate">
          <label for="cargo"></label>
        </div>
        <div class="input-field col s6">
          <input disabled id="dataAdimissao" placeholder="Data de Admissao" type="text" class="validate">
          <label for="dataAdimissao"></label>
        </div>
      </div>
      <div class="row center">
        <div class=" col s12">

          <a class="waves-effect waves-light btn red">Fechar</a>
        </div>


      </div>
    </form>
  </div>
     </div>

   </div>





  <footer class="page-footer blue">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text"> Grupo 1</h5>
          <p class="grey-text text-lighten-4"> Flavio Augusto , Victor Maitan , Jonatan Cardoso , Aline Batista e Eduardo Moreira.</p>


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
  <script>
  $(document).ready(function(){
  $('.tooltipped').tooltip();
  $('.modal').modal();
});
  </script>

  </body>
</html>
