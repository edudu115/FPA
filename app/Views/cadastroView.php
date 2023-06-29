<?php $this->extend('Navbar/index.php');
$this->section('corpo');
$session = session();
?>

<center>

  <br /><br />

  <div class='card w-50 border-dark mb-3'>
    <div class="text-center">
      <br><br>
      <h1>Formulário de Cadastro</h1>
      <p class="lead"></p>
    </div>
    <form class="needs-validation" action="<?= base_url('Usuario/saveUsuario') ?>" method="POST">
      <input type="hidden" name="id" value="<?= $session->get('usuario')['idUsuario'] ?>">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
          <div class="mt-2">
            <label for="Cargo">Cargo</label>
            <input type="text" class="form-control" id="cargo" name="cargo" disabled value="<?= $session->get('usuario')['cargoUsuario'] == "c" ? "Coordenador" : "Professor" ?>">
          </div>

          <div class="mt-2">
            <label for="tempoCampus">Tempo de Campus</label>
            <input type="number" class="form-control" id="tempoCampus" name="tempoCampus" placeholder="" value="<?= isset($atributos)? $atributos[0]['tempoCampus'] : "" ?>" required>
            <div class="invalid-feedback">
              É obrigatório inserir um tempo de Campus.
            </div>
            <div class="mt-2">
              <label for="tempoExp">Tempo de Experiencia</label>
              <input type="number" class="form-control" id="tempoExp" name="tempoExp" placeholder="" value="<?= isset($atributos)? $atributos[0]['tempoExp'] : "" ?>" required>
              <div class="invalid-feedback">
                É obrigatório inserir tempo de Experiencia.
              </div>
            </div>
          </div>

          <div class="mt-2">
            <label for="TempoProfissional">Tempo Profissional</label>
            <input type="number" class="form-control" id="tempoProfissional" name="tempoProfissional" placeholder="" value="<?= isset($atributos)? $atributos[0]['tempoProfissional'] : "" ?>" required>
            <div class="invalid-feedback">
              É obrigatório inserir tempo Profissional
            </div>
          </div>

          <div class="mt-2">
            <label for="tempoInstituicao">Tempo de Instituição</label>
            <input type="number" class="form-control" id="tempoInstituicao" name="tempoInstituicao" placeholder="" value="<?= isset($atributos)? $atributos[0]['tempoInstituicao'] : "" ?>" required>
            <div class="invalid-feedback">
              É obrigatório inserir tempo de Instituição
            </div>
          </div>
          <br />
          <div class="mt-3 input-group">
            <div class="input-group-prepend">
              <label class="input-group-text" for="nivelCarreira">Nivel de Carreira</label>
            </div>
            <select class="custom-select bg-light" name="nivelCarreira">
              <option value="1" <?= isset($atributos) && $atributos[0]['nivelCarreira'] == 1? 'selected' : "" ?>>DI-1</option>
              <option value="2" <?= isset($atributos) && $atributos[0]['nivelCarreira'] == 2? 'selected' : "" ?>>DI-2</option>
              <option value="3" <?= isset($atributos) && $atributos[0]['nivelCarreira'] == 3? 'selected' : "" ?>>DII-1</option>
              <option value="4" <?= isset($atributos) && $atributos[0]['nivelCarreira'] == 4? 'selected' : "" ?>>DII-2</option>
              <option value="5" <?= isset($atributos) && $atributos[0]['nivelCarreira'] == 5? 'selected' : "" ?>>DIII-1</option>
              <option value="6" <?= isset($atributos) && $atributos[0]['nivelCarreira'] == 6? 'selected' : "" ?>>DIII-2</option>
              <option value="7" <?= isset($atributos) && $atributos[0]['nivelCarreira'] == 7? 'selected' : "" ?>>DIII-3</option>
              <option value="8" <?= isset($atributos) && $atributos[0]['nivelCarreira'] == 8? 'selected' : "" ?>>DIII-4</option>
              <option value="9" <?= isset($atributos) && $atributos[0]['nivelCarreira'] == 9? 'selected' : "" ?>>DIV-1</option>
              <option value="10" <?= isset($atributos) && $atributos[0]['nivelCarreira'] == 10? 'selected' : "" ?>>DIV-2</option>
              <option value="11" <?= isset($atributos) && $atributos[0]['nivelCarreira'] == 11? 'selected' : "" ?>>DIV-3</option>
              <option value="12" <?= isset($atributos) && $atributos[0]['nivelCarreira'] == 12? 'selected' : "" ?>>DIV-4</option>
              <option value="13" <?= isset($atributos) && $atributos[0]['nivelCarreira'] == 13? 'selected' : "" ?>>TITULAR</option>
            </select>
          </div>

          <div class="mt-2">
            <label for="idade">Idade</label>
            <input type="number" class="form-control" id="idade" name="idade" placeholder="<?= isset($atributos)? $atributos[0]['idade'] : "" ?>" required>
            <div class="invalid-feedback">
              Idade é obrigatório.
            </div>
          </div>

          <br />
          <button id='button' class="btn btn-primary btn-lg btn-block mt-1" type="submit">Salvar</button>
          <br />
        </div>
    </form>
  </div>
  </form>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>
  <script src="../../assets/js/vendor/holder.min.js"></script>
  <script>
    (function() {
      'use strict';

      window.addEventListener('load', function() {

        var forms = document.getElementsByClassName('needs-validation');


        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
</center>
<?php $this->endSection(); ?>