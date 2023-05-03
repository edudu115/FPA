<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title></title>
  </head>

  <body class="bg-green">

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> <img class="d-block mx-auto mb-4" src="imgs/ifsp.png" alt="" width="90" height="90"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Atualizar Cadastro  <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="informar_hr.php">Informar Disponibilidade de Horario </a>
      </li>
    </ul>
  <div style='text-align:left'>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar"> 
</div>
<button class="btn btn-outline-success my-2 my-sm-0" type= "submit">Pesquisar  </button>
    </form>
  </div>
</nav> 

    <div class="container">
      <div class="py-5 text-center">

        <h1>Formulário de Cadastro</h1>
        <p class="lead"></p>
      </div>
    
          <form class="needs-validation" novalidate action="" method="POST">
            <input type="hidden" name="id" value="<?= $user->idUsuario ?>">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="Cargo">Cargo</label>
                <input type="text" class="form-control" id="cargo" name="cargo" placeholder="" value="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um Cargo válido.                    
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="tempoCampus">Tempo de Campus</label>
                <input type="text" class="form-control" id="tempoCampus" name="tempoCampus" placeholder="" value="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um tempo de Campus.
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="tempoExp">Tempo de Experiencia</label>
                <input type="text" class="form-control" id="tempoExp" name="tempoExp" placeholder=""  value="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir tempo de Experiencia.
                </div>
            <div class="col-md-6 mb-3">
                <label for="TempoProfissional">Tempo Profissional</label>
                <input type="text" class="form-control" id="tempoProfissional" name="tempoProfissional" placeholder="" value="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir tempo  Profissional
                </div>
              </div>
            <div class="col-md-6 mb-3">
                <label for="tempoInstituicao">Tempo de Instituição</label>
                <input type="text" class="form-control" id="tempoInstituicao" name="tempoInstituicao" placeholder="" value="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir tempo de Instituição
                </div>
              </div>
            <div class="col-md-6 mb-3">
                <label for="nivelCarreira">Nivel de Carreira</label>
                <input type="text" class="form-control" id="nivelCarreira" name="nivelCarreira" placeholder="" value="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir Nivel de Carreira
                </div>
              </div>
            <div class="col-md-6 mb-3">
                <label for="idade">Idade</label>
                <input type="text" class="form-control" id="idade" name="idade" placeholder="" required>
                <div class="invalid-feedback">
                 Idade é obrigatório.
                </div>
              </div>
              <button class="btn btn-primary btn-lg btn-block" type="submit">Salvar</button>
          </form>
      </div>
            </form>
            
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2023  FPA- Sistema de Aula </p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacidade</a></li>
          <li class="list-inline-item"><a href="#">Termos</a></li>
          <li class="list-inline-item"><a href="#">Suporte</a></li>
        </ul>
      </footer>
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
  </body>
</html>