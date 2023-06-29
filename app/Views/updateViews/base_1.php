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
    top: 2%;
  }
#sair {
  position: relative;
  top: 29%;
  width: 50px;
  left: 90%;
  background-color: #bee6a3;
  }
#engrenagem {
  position: relative;
  left: 80%;
  top: 29%;
  width: 40px;
}

#imgs {
  position: relative;
  left: 70%;
  top: 29%;
  width: 40px;
  }

body {
    background-color: #c2ddc1;

  }

#inform {
    color: black;
  }
#atribuir{
  position: relative;
    color: black;
    left: 8%;
   }
#atribuir:hover{
  cursor: pointer;
  color:white;
}

#materia{
  position: relative;
    color: black;
    left: 20%;
   }
#materia:hover{
  cursor: pointer;
  color:white;
} 

#horario {
    position: relative;
    left: 2%;
    color: black;
  }
#horario:hover{
  cursor: pointer;
  color:white;
}
#nav{
  background-color: #033506;
  line-height: 100px;
}
#preferencia{
  position: relative;
  color: black;   
  left: 5%;
}
#preferencia:hover{
  cursor: pointer;
  color:white;
}

#bar {
  width: 70%;
  left: 26%;
  top: 80%;
  line-height: 23px;
  background-color: #005914;
  position:absolute;
}

#inserir {
  position: relative;
  color: black;   
  left: 17%;
  }
#inserir:hover{
  cursor: pointer;
  color:white;
}

#button {
    background-color: green;
    
  }

#Alterar {
    position: relative;
    left: 12%;
    color: black;
  }
#Alterar:hover{
  cursor: pointer;
  color:white;
}

.btn btn-outline-success my-2 my-sm-0{
   margin: 10px 0;
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

  #novo{
    left: 90%;
  }
</style>

<body class='bg-green'>

  <nav id='nav' class='navbar navbar-expand-lg navbar-light bg-green' >
  <a  id='if' class='navbar-brand' href='#'><img class='mb-4' src='<?= base_url('logo.png') ?>' ></a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div id='bar'>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a id='horario' class='nav-link active' class="dropdown-item" href='<?= base_url('Componentes/viewComponente') ?>'>Informar Disponibilidade de Horario</a>
        <a id='preferencia' class='nav-link active' class="dropdown-item" href='<?= base_url('preferencia/viewPreferenciaClient') ?>'>Preferencias</a>
        <a id='atribuir' class='nav-link active' class="dropdown-item" href='<?= base_url('Usuario/viewAtribuido') ?>'>Aulas Atribuidas</a>

          <?php
            if ($session->get('usuario')['cargoUsuario'] == 'c') :
          ?>
        <a id='Alterar' class='nav-link active' class="dropdown-item" href='<?= base_url('Componentes/viewFormComponente') ?>'>Inserir Componentes</a> 
        <a id='inserir' class='nav-link active' class="dropdown-item" href='<?= base_url('Usuario/viewProfessor') ?>'>Inserir Novo Professor</a>
        <a id='materia' class='nav-link active' class="dropdown-item" href='<?= base_url('preferencia/viewPreferencia') ?>'>Lista de Prioridades</a>
          <?php endif ?>
      </div>
  </div>
        <a type="button" class="btn btn-outline-green"> <a href='<?= base_url('Usuario/viewupdatecadastro') ?>' ><img ' src='<?= base_url('user.jpeg') ?>'  id='imgs'> </a> </a>
        <a type="button" class="btn btn-outline-green"> <a href='<?= base_url('Usuario/alterarSenha') ?>' ><img  src='<?= base_url('engrenagem.png') ?>' id='engrenagem'></a> </a>
        <a href='<?= base_url('Usuario/logoutUsuario') ?>' ><button id='sair' class='btn btn-outline-success my-2 my-sm-0' type='submit'>sair</button></a> 
    
    </nav>
  <script src="<?= base_url('/script.js') ?>"></script>
  <?php $this->renderSection('corpo'); ?>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>