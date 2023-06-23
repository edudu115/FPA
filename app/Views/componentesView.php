<?php $this->extend('Navbar/index.php');
$this->section('corpo');
$session = session();
?>
  <title></title>
</head>
  <script>
    function search_materia() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('componentes');

    for (i = 0; i < x.length; i++) { 
        if (!x[i].textContent.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
          x[i].style.display="";
        }
    } 
}

  </script>
<script>
  function confirmar() {
    if (confirm('Deseja excluir esta matéria?'))
      return true;

    return false;
  }
</script>
<style>
  #button{
    background-color: green;
  }
  #searchbar{
     margin-left: 5%;
     padding:15px;
     border-radius: 10px;
   }
 
   input[type=text] {
      width: 18%;
      -webkit-transition: width 0.15s ease-in-out;
      transition: width 0.15s ease-in-out;
   }
 
   input[type=text]:focus {
     width: 30%;
   }
 
  #list{
    font-size:  1.5em;
    margin-left: 90px;
   }

   @media (min-width: 768px) and (max-width: 1199.98px) { }
</style>
  <br><br> 
  <center>
    <h1>Disponibilidade de horário para atribuição de componentes curriculares</h1>
  </center>
  
  <br>
    <div style='text-align:left'>
      <form class="form-inline my-2 my-lg-0" action="<?= base_url('Preferencia/savePreferencia') ?>" method="POST"> 
      <input class="form-control mr-sm-2" id="searchbar" onkeyup="search_materia()" type="text" placeholder="Pesquisar por Matéria ...">
      <button id="button" type="button" value="Salvar" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Salvar</button>
      <?php if ($session->get('usuario')['cargoUsuario'] == "c") : ?>
      <?php endif; ?>
    </div>
    
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Atenção !!!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          Deseja salvar suas preferencias  ?
      </div>
      <div class="modal-footer">
        <button id="button" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button id="button" type="submit" value="Salvar" class="btn btn-primary">Salvar</button>

      </div>
    </div>
  </div>
</div>

  <br>
  
  <div class="container-fluid">

  <table style="background-color: white" class="table table-sm table-hover table-bordered " class="list">

      <thead>
        <tr>
          <th scope="col">Sigla</th>
          <th scope="col">Matéria</th>
          <th scope="col">Período</th>
          <th scope="col">Horas Semanais</th>
          <th scope="col">Nome do curso</th>
          <th scope="col">Dia da Semana</th>
          <th scope="col">Horário de Início</th>
          <th scope="col">Horário de Fim</th>
          <th scope="col">Preferência</th>
          <?php
            if ($session->get('usuario')['cargoUsuario'] == "c") {
              echo '<th scope="col" colspan="2">Ações</th>';
            }
          ?>
        </tr>
      </thead>
      <tbody class="materia">
          <?php if ($session->get('usuario')['cargoUsuario'] == "c") : ?>
            <?php endif;
            $i = 0;
            foreach ($retorna as $componente) {
              echo "<tr class='componentes'>";
              echo "<th scope='row'>" . $componente->idComponentes . "</th>";
              echo "<td>" . $componente->nomeMateria . "</td>";
              echo "<td>" . $componente->periodo . "</td>";
              echo "<td>" . $componente->horasSemanais . "</td>";
              echo "<td>" . $componente->cursos_idCurso . "</td>";
              echo "<td>" . $componente->diaSemana . "</td>";
              echo "<td>" . $componente->horaInicio . "</td>";
              echo "<td>" . $componente->horaFim . "</td>";
              echo "<td> <select  style= 'width : 150px;' class='form-select' aria-label='Default select example' name='preferencia" . $i . "'>
                <option selected value='1'>Não Selecionado</option>
                <option value='2'>Primário</option>
                <option value='3'>Secundário</option>
                </select> </td>";
            if ($session->get('usuario')['cargoUsuario'] == "c") {
                echo "<td><a onclick='return confirmar()' class='btn btn-danger' href='" . base_url('Componentes/deleteComponente/' . $componente->idComponentes) . "''>Remover</a></td>";
                echo "<td><a class='btn btn-warning' href='" . base_url('Componentes/updateComponente/' . $componente->idComponentes . "/" . $componente->idHorario) . "''>Atualizar</a></td>";
            }
              echo "<input type='hidden' name='id_componente$i' value='$componente->idComponentes'";
              echo "<input type='hidden' name='idHorario' value='$componente->idHorario'";
              echo "</tr>";
              $i++;
            }
          ?>
      </tbody>
  </table> 
  </div> 
  </form>
  
  <?php $this->endSection(); ?>
  </body>