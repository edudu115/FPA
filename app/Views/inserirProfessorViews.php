<?php $this->extend('Navbar/index.php');
$this->section('corpo');
$session = \Config\Services::session();
?>

<br><br>
<center>
  <div class="card w-50 border-dark mb-3">

    <div class="card-header">
      <h1 class="h1">Inserir Novo Professor</h1>
    </div>

    <br>

    <div class="card-body">
      <form method="POST" class="px-4 py-3" action="<?= base_url('Usuario/addUsuario') ?>">
        <div class='form-group'>
          <?php if ($session->usuarioAdicionado) : ?>
            <h3 class='p-3 mb-2 bg-success text-white'>Usuário adicionado com sucesso!</h3>
          <?php endif ?>
          <div class='form-group col-md-8'>
            <label for='nome'>Nome</label>
            <input type='text' class='form-control' name='nome' placeholder='Nome'>
          </div>

          <div class='form-group col-md-8'>
            <label for='prontuario'>Prontuario</label>
            <input type='text' class='form-control' name='prontuario' placeholder='Prontuario'>
          </div>

          <div class='form-group col-md-8'>
            <label for='Senha'>Senha</label>
            <input type='password' class='form-control' id='senha' name='senha' placeholder='Senha'>
          </div>

          <div class='form-group col-md-8'>
            <label>CPF</label>
            <input type='text' class='form-control' name='cpf' placeholder='CPF'>
          </div>
        </div>
        <br>
        <button id='button' type='submit' class='btn btn-primary'>Adicionar</button>
      </form>

    </div>
  </div>
  <center>
    <?php $this->endSection(); ?>