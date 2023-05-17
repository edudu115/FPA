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
  <script>
        function confirmar(){
            if(confirm('Deseja excluir esta pessoa?'))
                return true;

            return false;
        }
    </script>
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
    <form class="form-inline my-2 my-lg-0" action="<?= base_url('Preferencia/savePreferencia') ?>" method="POST">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar"> 
</div>
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar  </button>

  </div>
</nav> 
<br><br>
<center> <h4>Disponibilidade de horário para atribuição de componentes curriculares</h4> </center>
<br><br>
<table style="background-color: white" class="table table-bordered">
  
</div>
  <thead>
    <tr>
      <th scope="col">Matéria</th>
      <th scope="col">Período</th>
      <th scope="col">Horas Semanais</th> 
      <th scope="col">Nome do curso</th>
      <th scope="col">Dia da Semana</th>
      <th scope="col">Horário de Início</th>
      <th scope="col">Horário de Fim</th>
      <th scope="col">Preferência</th>
    </tr>
  </thead>
  <tbody>
  <a class='btn btn-success' href="<?=base_url('Componentes/viewFormComponente')?>">Adicionar um componente</a>
     <?php
     $i = 0;
     foreach($retorna as $componente){
      echo "<tr>";
        echo "<td>".$componente->nomeMateria."</td>";
        echo "<td>".$componente->periodo."</td>";
        echo "<td>".$componente->horasSemanais."</td>";
        echo "<td>".$componente->cursos_idCurso."</td>";
        echo "<td>".$componente->diaSemana."</td>";
        echo "<td>".$componente->horaInicio."</td>";
        echo "<td>".$componente->horaFim."</td>";
        echo "<td> <select  style= 'width : 150px;' class='form-select' aria-label='Default select example' name='preferencia".$i."'>
      <option selected value='1'>Não Selecionado</option>
      <option value='2'>Primário</option>
      <option value='3'>Segundário</option>
</select> </td>";
        echo "<td><a onclick='return confirmar()' class='btn btn-danger' href='#".$componente->idComponentes."'>Remover</a></td>";
        echo "</tr>";
        $i++;
    }
      ?>
  </tbody>
</table>
</label>
<br><br><br>
<input class="btn btn-primary btn-lg btn-block" type="submit" value="Salvar">
</form>
</body>
</html>