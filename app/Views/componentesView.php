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
  <style>
        body{
            background-color: #c2ddc1;
        }
    </style>

  <body class="bg-green">

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> <img class='mb-4' src='<?= base_url('ifsp.png') ?>' alt='' width='90' height='90'></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index2.php">Atualizar Cadastro  <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="informar_hr.php">Informar Disponibilidade de Horario </a>
      </li>
    </ul>
  <div style='text-align:left'>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar"> 
</div>
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar  </button>
    </form>
  </div>
</nav> 
<br><br>
<center> <h4>Disponibilidade de horário para atribuição de componentes curriculares</h4> </center>
<br><br>
<table style="background-color: white" class="table table-bordered">
  
</div>
  <thead>
    <tr>
      <th  scope="col">Matéria</th>
      <th scope="col">dia-Horario</th>
      <th scope="col">curso</th> 
      <th scope="col">Horas_Semanais</th>
    </tr>
  </thead>
  <tbody>
     <?php
     foreach($componentes as $componente){
      echo "<tr>";
        echo "<td>".$componente->nomeMateria."</td>";
        echo "<td>".$componente->diaHorario."</td>";
        echo "<td>".$componente->curso."</td>";
        echo "<td>".$componente->horasSemanais."</td>";

        echo "<td> <select  style= 'width : 150px;' class='form-select' aria-label='Default select example'>
      <option selected>Não Selecionado</option>
  <option value='1'>Primário</option>
  <option value='2'>Segundário</option>
</select> </td>
    </tr>";
      }
      ?>
   
    
  </tbody>
</table>
</label>
<br><br><br>
<button class="btn btn-primary btn-lg btn-block" type="submit">Salvar</button>
</body>
</html>