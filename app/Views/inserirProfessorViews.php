<?php $this->extend('base');
$this->section('corpo');
?>
<br><br>
 <center><h1>Inserir Novo Professor</h1></center> 
<br><br>
<form>
  <div id ='form' class='form-row'>

  <div  class='form-group col-md-4'>
      <label for='nome'>Nome</label>
      <input type='text' class='form-control' id='nome' placeholder='Nome'>
    </div>

    <div class='form-group col-md-4'>
      <label for='prontuario'>Prontuario</label>
      <input type='password' class='form-control' id='prontuario' placeholder='Prontuario'>
    </div>
 
    <div class='form-group col-md-4'>
      <label for='Senha'>Senha</label>
      <input type='password' class='form-control' id='senha' placeholder='Senha'>
    </div>

    <div class='form-group col-md-4'>
                <label>CPF</label>
                <input type='text' class='form-control'>
            </div>
  </div>
  <br>
  <button id='button' type='submit' class='btn btn-primary'>Entrar</button>
</form>
<?php $this->endSection(); ?>

