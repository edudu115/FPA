<?php $this->extend('cadastroView');
$this->section('corpo');
$session = session();
?>

    <div class="container">
      <div class="py-1 text-center">

        <h1>Formulário de Cadastro</h1>
        <p class="lead"></p>
      </div>
          <form class="needs-validation" action="<?= base_url('Usuario/updateUsuario') ?>" method="POST">
            <input type="hidden" name="id" value="<?= $user->idUsuario ?>">
            <div class="row">
              <div class="col-3"></div>
              <div class="col-6">
              <div class="">
                <label for="Cargo">Cargo</label>
                <input type="text" class="form-control" id="cargo" name="cargo" disabled value="<?= $session->get('usuario')['cargoUsuario']=="c"? "Coordenador" : "Professor" ?>" >
              </div>

            <div class="mt-2">
                <label for="tempoExp">Tempo de Experiencia</label>
                <input type="number" class="form-control" id="tempoExp" name="tempoExp" placeholder=""  value="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir tempo de Experiencia.
                </div>
            </div>
                <div class="mt-2">
                <label for="tempoCampus">Tempo de Campus</label>
                <input type="number" class="form-control" id="tempoCampus" name="tempoCampus" placeholder="" value="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um tempo de Campus.
                </div>
              </div>
            <div class="mt-2">
                <label for="TempoProfissional">Tempo Profissional</label>
                <input type="number" class="form-control" id="tempoProfissional" name="tempoProfissional" placeholder="" value="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir tempo Profissional
                </div>
              </div>
            <div class="mt-2">
                <label for="tempoInstituicao">Tempo de Instituição</label>
                <input type="number" class="form-control" id="tempoInstituicao" name="tempoInstituicao" placeholder="" value="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir tempo de Instituição
                </div>
              </div>
            <div class="mt-3 input-group">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="nivelCarreira">Nivel de Carreira</label>
                </div>
                  <select class="custom-select bg-light" name="nivelCarreira">
                    <option value="1">DI-1</option>
                    <option value="2">DI-2</option>
                    <option value="3">DII-1</option>
                    <option value="4">DII-2</option>
                    <option value="5">DIII-1</option>
                    <option value="6">DIII-2</option>
                    <option value="7">DIII-3</option>
                    <option value="8">DIII-4</option>
                    <option value="9">DIV-1</option>
                    <option value="10">DIV-2</option>
                    <option value="11">DIV-3</option>
                    <option value="12">DIV-4</option>
                    <option value="13">TITULAR</option>
                  </select>
              </div>
            <div class="mt-2">
                <label for="idade">Idade</label>
                <input type="number" class="form-control" id="idade" name="idade" placeholder="" required>
                <div class="invalid-feedback">
                 Idade é obrigatório.
                </div>
              </div>
              <button class="btn btn-primary btn-lg btn-block mt-1" type="submit">Salvar</button>
          </form>
        </div>
        <div class="col-3"></div>
      </div>

            </form>
            
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
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
  <?php $this->endSection(); ?>