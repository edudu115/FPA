<?php $this->extend('base');
$this->section('corpo');
$session = \Config\Services::session();
?>

<style>
 #nome{
  left: 95%;
 }
  </style>
<br><br><br><br>
<br/>
 <center><h1>Inserir Novo Professor</h1></center> 
<br><br>
<center>
  <form method="POST" action="<?=base_url('Usuario/addUsuario')?>">
  <div id ='form' class='form-row'>
    <?php if($session->usuarioAdicionado): ?>
      <h3 class='p-3 mb-2 bg-success text-white'>Usuário adicionado com sucesso!</h3>
    <?php endif ?>
    <div  class='form-group col-md-4'>
      <label  for='nome'>Nome</label>
      <input type='text' class='form-control' id='nome' name='nome' placeholder='Nome'>
  </div>

    <div class='form-group col-md-4'>
      <label for='prontuario'>Prontuario</label>
      <input type='text' class='form-control' id='prontuario' name='prontuario' placeholder='Prontuario'>
    </div>
 
    <div class='form-group col-md-4'>
      <label for='Senha'>Senha</label>
      <input type='password' class='form-control' id='senha' name='senha' placeholder='Senha'>
    </div>

    <div class='form-group col-md-4'>
                <label>CPF</label>
                <input type='text' class='form-control' name='cpf' placeholder='CPF'>
            </div>
  </div>
  <br>
  <button id='button' type='submit' class='btn btn-primary'>Adicionar</button></center>
</form>
<?php $this->endSection(); ?>

