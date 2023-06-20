<?php $session = \Config\Services::session(); ?>
<!doctype html>
<html lang='pt-br'>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
  <meta name='description' content=''>
  <meta name='author' content=''>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>

  <title></title>
</head>
<style>
  #if {
    position: absolute;
    left: 15px;
    top: 32%;
  }


  #pes {
    position: absolute;
    left: 62%;
    top: 36%;
    width: 240px;
    height: 40px;
  }

  #pesq {
    position: absolute;
    left: 75%;
    top: 36%;
    background-color: #bee6a3;

  }

  #engrenagem {
    position: absolute;
    left: 90%;
    top: 29%;
  }

  #imgs {
    position: absolute;
    left: 85%;
    top: 29%;

  }

  body {
    background-color: #c2ddc1;

  }

  #inform {
    position: absolute;
    right: 65%;
    top: 33%;

  }

  #sair {
    position: absolute;
    left: 95%;
    top: 33%;
    background-color: #bee6a3;
  }
  #horario {
    position: relative;
    left: 58%;
    color: black;
  }
#nav{
  background-color: #033506;
}

#bar {
    
    background-color: #005914;
  }

  #inserir {
    position: relative;
    left: 50%;
    color: black;
  }

  #button {

    background-color: green;
  }

  #Alterar {
    position: relative;
    left: 45%;
    color: black;
  }

  @media (max-width:768px){
  #bar{
    display:block;
  }
  #bar.active .nav-link:active:nth-child(2){
    opacity: 0;
  }
  #bar.active .nav-link:active:nth-child(1){
    transform: translateY(-8px) rotate(-45deg); 
  }
  #bar.active .nav-link:active:nth-child(3){
     transform: translateY(-8px) rotate(-45deg);
  }
  #conteudoNavbarSuportado {
    position:fixed;
    left:-100%;
    top: 70px;
    gap: 0;
    border-radius: 0 0 20px 20px;
    background-color:  #033506;
    text-align: center;
    flex-direction: column;
    width: 100%;
    transition: 0.3s;
    
  }
.btn btn-outline-success my-2 my-sm-0{
   margin: 10px 0;
}
#conteudoNavbarSuportado.active{
  left: 0;
}
  }
</style>

<body class='bg-green'>

  <nav id='nav' class='navbar navbar-expand-lg navbar-light bg-green >
  <a  id='if' class='navbar-brand' href='#'><img class='mb-4' src='<?= base_url('logo.png') ?>' alt='' width='500' height='90'></a>
    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#conteudoNavbarSuportado' aria-controls='conteudoNavbarSuportado' aria-expanded='false' aria-label='Alterna navegação'>
      <span class='navbar-toggler-icon'></span>
    </button>

    <div class='collapse navbar-collapse' id='conteudoNavbarSuportado'>

       <!-- <div style='text-align:left'>
        <form class='form-inline my-2 my-lg-0'>
          <input id='pes' class='form-control mr-sm-2' type='search' placeholder='Pesquisar' aria-label='Pesquisar'>
      </div>
      <button id='pesq' class='btn btn-outline-success my-2 my-sm-0' type='submit'>Pesquisar</button> -->
      <a href='<?= base_url('Usuario/logoutUsuario') ?>' <button id='sair' class='btn btn-outline-success my-2 my-sm-0' type='submit'>sair</button></a>
      </select>
      </form>
    </div>
    <a href='<?= base_url('Usuario/viewupdatecadastro') ?>' ><img class='mb-4' src='<?= base_url('user.jpeg') ?>' class='btn btn-outline-success my-2 my-sm-0' width='60' height='50' left='50px' id='imgs'></a>
    <a href='<?= base_url('Usuario/alterarSenha') ?>' ><img class='mb-4' src='<?= base_url('engrenagem.png') ?>' class='btn btn-outline-success my-2 my-sm-0' width='50' height='50' left='50px' id='engrenagem'></a>
  </nav>
  <div id='bar' class='sobre'>
    <nav class='nav'>
      <?php
      if ($session->get('usuario')['cargoUsuario'] == 'c') :
      ?>
        <a id='Alterar' class='nav-link active' href='<?= base_url('Componentes/viewFormComponente') ?>'>Inserir Componentes</a>
        <a id='inserir' class='nav-link active' href='<?= base_url('Usuario/viewProfessor') ?>'>Inserir Novo Professor</a>
      <?php endif ?>
      <a id='horario' class='nav-link active' href='<?= base_url('Componentes/viewComponente') ?>'>Informar Disponibilidade de Horario</a>
    </nav>
  </div>
  <script src="<?= base_url('/script.js') ?>"></script>
  <?php $this->renderSection('corpo'); ?>
</body>

</html>