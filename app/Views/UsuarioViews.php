<?php $this->extend('base');
$this->section('corpo');
$session = session();
?>
      <br>
      <div id='container' class='container'>
      <br><br>
<br/> <br/>
      <div class='py-5 text-center'>
      <h4>Perfil Usuario</h4>  <img src='imgs/user.jpeg' class='rounded-circle' width='95' height='95'  left='9px' id='user'>
  <p class='lead'></p>
      </div>
          <form class='needs-validation' novalidate> 
            <div class='row'>
              <div class='col-md-6 mb-3'>
                <label for='Cargo'>Cargo</label>
                <input type='text' class='form-control' id='cargo' placeholder='' value='' required>
                <div class='invalid-feedback'>
                  É obrigatório inserir um Cargo válido.                    
                </div>
              </div>
              <div class='col-md-6 mb-3'>
                <label for='tempoCampus'>Tempo de Campus</label>
                <input type='text' class='form-control' id='tempoCampus' placeholder='' value='' required>
                <div class='invalid-feedback'>
                  É obrigatório inserir um tempo de Campus.
                </div>
              </div>
            </div>
            <div class='col-md-6 mb-3'>
                <label for='tempoExp'>Tempo de Experiencia</label>
                <input type='text' class='form-control' id='tempoExp placeholder='  value='' required>
                <div class='invalid-feedback'>
                  É obrigatório inserir tempo de Experiencia.
                </div>
            <div class='col-md-6 mb-3'>
                <label for='TempoProfissional'>Tempo Profissional</label>
                <input type='text' class='form-control' id='TempoProfissional' placeholder='' value='' required>
                <div class='invalid-feedback'>
                  É obrigatório inserir tempo  Profissional
                </div>
              </div>
            <div class='col-md-6 mb-3'>
                <label for='tempoInstituicao'>Tempo de Instituição</label>
                <input type='text' class='form-control' id='tempoInstituicao' placeholder='' value='' required>
                <div class='invalid-feedback'>
                  É obrigatório inserir tempo de Instituição
                </div>
              </div>
            <div class='col-md-6 mb-3'>
                <label for='nivelCarreira'>Nivel de Carreira</label>
                <input type='text' class='form-control' id='nivelCarreira' placeholder='' value='' required>
                <div class='invalid-feedback'>
                  É obrigatório inserir Nivel de Carreira
                </div>
              </div>
            <div class='col-md-6 mb-3'>
                <label for='idade'>Idade</label>
                <input type='text' class='form-control' id='idade' placeholder='' required>
                <div class='invalid-feedback'>
                 Idade é obrigatório.
                </div>
              </div>
              <br>
              <button  id= 'button'class='btn btn-primary btn-lg btn-block' type='submit'>Alterar informações</button>
              
          </form>
      </div>
            </form>
        
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src='../../assets/js/vendor/popper.min.js'></script>
    <script src='../../dist/js/bootstrap.min.js'></script>
    <script src='../../assets/js/vendor/holder.min.js'></script>
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