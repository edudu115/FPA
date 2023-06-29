<?php $session = \Config\Services::session(); ?>
<!doctype html>
<html lang='pt-br'>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
  <meta name='description' content=''>
  <meta name='author' content=''>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url("/css/styleNavbar.css") ?>">

</head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="nav-link" href="#"><img src='<?= base_url('img/ifsp.png') ?>' class="img-fluid" alt="Imagem responsiva" width='230' height='230'></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Páginas de Acessos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href='<?= base_url('Componentes/viewComponente') ?>'>Informar Disponibilidade de Horario</a>
          <a class="dropdown-item" href='<?= base_url('preferencia/viewPreferenciaClient') ?>'>Preferencias</a>

          <?php
          if ($session->get('usuario')['cargoUsuario'] == 'c') :
          ?>
            <a class="dropdown-item" href='<?= base_url('Componentes/viewFormComponente') ?>'>Inserir Componentes</a>
            <a class="dropdown-item" href='<?= base_url('Usuario/viewProfessor') ?>'>Inserir Novo Professor</a>
            <a class="dropdown-item" href='<?= base_url('preferencia/viewPreferencia') ?>'>Lista de Prioridades</a>
          <?php endif ?>
          <a class="dropdown-item" href='<?= base_url('Usuario/viewAtribuido') ?>'>Aulas Atribuidas</a>
        </div>
      </li>
    </ul>
    <a class="nav-link" href='<?= base_url('Usuario/viewupdatecadastro') ?>'><img class="rounded-circle border border-success" src='<?= base_url('user.jpeg') ?>' width='50' height='50'></a>
    <a class="nav-link" href='<?= base_url('Usuario/alterarSenha') ?>'><img class="rounded-circle border border-success" src='<?= base_url('engrenagem.png') ?>' width='50' height='50'></a>
    <a href='<?= base_url('Usuario/logoutUsuario') ?>'><button class='btn btn-outline-success my-2 my-sm-0' type='submit'>sair</button></a>

  </div>
</nav>
<script src="<?= base_url('/script.js') ?>"></script>
<?php $this->renderSection('corpo'); ?>