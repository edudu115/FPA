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
    top: 10%;
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

#sair {
    left: 90%;
    top: 33%;
    width: 50px;
    background-color: #bee6a3;
  }
#engrenagem {
    left: 80%;
    top: 33%;
    width: 40px;
  }

#imgs {
    left: 77%;
    top: 33%;
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
    left: 25%;
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

#bar {
  width: 100%;
  top: 60px;
  line-height: 25px;
  background-color: #005914;
  position: relative;
}

#inserir {
  position: relative;
  color: black;   
  left: 14%;
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
    left: 8%;
    color: black;
  }
#Alterar:hover{
  cursor: pointer;
  color:white;
}

.btn btn-outline-success my-2 my-sm-0{
   margin: 10px 0;
}

  
</style>

<body class='bg-green'>

  <nav id='nav' class='navbar navbar-expand-lg navbar-light bg-green' >
  <a  id='if' class='navbar-brand' href='#'><img class='mb-4' src='<?= base_url('logo.png') ?>' top='70px' width='80%' ></a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div id='bar'>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a id='horario' class='nav-link active' class="dropdown-item" href='<?= base_url('Componentes/viewComponente') ?>'>Informar Disponibilidade de Horario</a>
          <?php
            if ($session->get('usuario')['cargoUsuario'] == 'c') :
          ?>
        <a id='Alterar' class='nav-link active' class="dropdown-item" href='<?= base_url('Componentes/viewFormComponente') ?>'>Inserir Componentes</a> 
        <a id='inserir' class='nav-link active' class="dropdown-item" href='<?= base_url('Usuario/viewProfessor') ?>'>Inserir Novo Professor</a>
        <a id='materia' class='nav-link active' class="dropdown-item" href='<?= base_url('preferencia/viewPreferencia') ?>'>Lista de Prioridades</a>
        <a id='atribuir' class='nav-link active' class="dropdown-item" href='<?= base_url('preferencia/viewAtribuido') ?>'>Aulas Atribuidas</a>
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