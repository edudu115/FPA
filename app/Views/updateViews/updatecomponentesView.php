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

    #engrenagem{
            position: absolute;
            left: 90%;
            top: 29%;
        }
         
          #imgs{
            position: absolute;
            left: 85%;
            top: 29%;
            
          }

        body{
            background-color: #c2ddc1;
            
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
       
        #button{
        
        background-color: green;
      
      }

        #nav{
          width: 1920px;
            line-height: 20px;
            background-color: #033506;
        }
        
        #bar{
          width: 1920px;
            line-height: 15px;
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

  <body class='bg-green' >

  <nav id='nav' class='navbar navbar-expand-lg navbar-light bg-green >
  <a  id='if' class='navbar-brand' href='#'> <img class='mb-4' src='<?= base_url('logo.png') ?>' alt='' width='500' height='90'  ></a>
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
<br><br>
<center> <h4>Disponibilidade de horário para atribuição de componentes curriculares</h4> </center>
<br><br>
<table style='background-color: white' class='table table-bordered'>
  
</div>
  <thead>
    <tr>
   
      <th  scope='col'>Matéria</th>
      <th scope='col'>dia-Horario</th>
      <th scope='col'>curso</th> 
      <th scope='col'>Horas_Semanais</th>
     
     
  

    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>ISO-Introdução a Sistemas Operacionais </td>
      <td>2023-02-13 19:00:00 </td>
      <td>Tec-info noturno</td>
      <td>4</td>
      <td> <select  style= 'width : 150px;' class='form-select' aria-label='Default select example'>
      <option selected>Não Selecionado</option>
  <option value='1'>Primário</option>
  <option value='2'>Segundário</option>
</select> </td>
    </tr>
    <tbody>
    <tr>
    
      <td>IPW-Introdução a Programação web</td>
      <td></td>
      <td></td>
      <td></td>
      <th>
      <select style= 'width : 150px;' class='form-select' aria-label='Default select example' width ='40'>
  <option selected>Não Selecionado</option>
  <option value='1'>Primário</option>
  <option value='2'>Segundário</option>
</select>   
    </th>
    </tr>
   
    
  </tbody>
</table>
</label>
<br><br><br>
<button id='button' class='btn btn-primary btn-lg btn-block' type='submit'>Salvar</button>
</body>
</html>