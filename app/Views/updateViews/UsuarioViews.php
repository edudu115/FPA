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

#engrenagem{
            position: absolute;
            left: 90%;
            top: 29%;
        }
   
   #if{
    position: absolute ;
    left: 15px;
     top: 32%;
   }
   
   
    #pes{
      position: absolute;
      left: 62%;
      top: 36%;  
      width: 240px;
      height: 40px;
    }
    #pesq{
      position: absolute;
      left: 75%;
      top: 36%;  
      background-color: #bee6a3;

    }

    #button{
      background-color: green;
    }
         
    #imgs{
            position: absolute;
            left: 85%;
            top: 29%;
            
          }

        #container{
            background-color:#6dc87b;
            width: 1320px;
            height: 820px;
           
        }
        body{
            background-color: #c2ddc1;
            
        }


        #user{
          position:relative;
          right: 35%;
            top: 15%; 


        }

        #inform{
          position: absolute;
          right: 65%;
            top: 33%; 

        }
      
        #sair{
          position: absolute;
          left: 95%;
          top: 33%;
          background-color: #bee6a3;
        }
       
    

        #nav{
          width: 1920px;
            line-height: 20px;
            background-color: #033506;
        }
        
        #bar{
          width: 1920px;
            line-height: 20px;
            background-color: #005914;
        }
        
       

        #atualiza{
          position: relative;
          left: 80%;
          color: black;
        
        }
        
        #horario{
          position: relative;
           left: 55%;
          color: black;
        }
        

    </style>

  <body id='body' class='bg-green' >

  <nav id='nav' class='navbar navbar-expand-lg navbar-light bg-green>
  <a  id='if' class='navbar-brand' href='#'><img class='mb-4' src='<?= base_url('logo.png') ?>' alt='' width='500' height='90'  ></a>
  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#conteudoNavbarSuportado' aria-controls='conteudoNavbarSuportado' aria-expanded='false' aria-label='Alterna navegação'>
    <span class='navbar-toggler-icon'></span>
  </button>

  <div class='collapse navbar-collapse' id='conteudoNavbarSuportado'>
   
  <div style='text-align:left'>
    <form class='form-inline my-2 my-lg-0'>
      <input  id='pes' class='form-control mr-sm-2' type='search' placeholder='Pesquisar' aria-label='Pesquisar'> 
</div>
<button  id='pesq'  class='btn btn-outline-success my-2 my-sm-0' type='submit'>Pesquisar</button>
 <a href='updateloginViews.php' <button  id='sair'  class='btn btn-outline-success my-2 my-sm-0' type='submit'>sair</button></a>
</select>   
    </form>
  </div>
  <a href='UsuarioViews.php'><img class='mb-4' src='<?= base_url('user.jpeg') ?>' class='rounded-circle' width='50' height='50'  left='50px' id='imgs'></a>
  <a href='Alterar_SenhaViews.php'><img class='mb-4' src='<?= base_url('engrenagem.png') ?>' class='rounded-circle' width='50' height='50'  left='50px' id='engrenagem'></a>
</nav> 
<div  id='bar' class='sobre'>
<nav class='nav'>
  <a id='atualiza'class='nav-link active'href='updatecadastroViews.php'>Atualizar Cadastro</a>
  <a id='horario'class='nav-link active'  href='updatecomponentesView.php'>Informar Disponibilidade de Horario</a>
</nav>
      </div>
      <br>
      <div id='container' class='container'>
       
      <div class='py-5 text-center'>
      <h1>Perfil Usuario</h1>  <img src='imgs/user.jpeg' class='rounded-circle' width='95' height='95'  left='9px' id='user'>
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
  </body>
</html>
    </body>
</html>
<br><br>