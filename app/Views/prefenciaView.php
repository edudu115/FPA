<?php $this->extend('base');
$this->section('corpo');
$session = session();
?>
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
<style>
    #button {

        background-color: green;
        position: relative;
        top: 45%;
        left: 1%;

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

   table{
    border-radius: 5px;
   }
 
  #list{
    font-size:  1.5em;
    margin-left: 90px;
   }

   #prioridade{
    margin:1rem;
     width: 850px;
   }
  
   #container{
    max-width: 1500px;
    display:flex;
    justify-content: space-between;
   }
   #th{
    width: 35px;
   }
</style>
<br/><br/>  
<input class="form-control mr-sm-2" id="searchbar" onkeyup="search_materia()" type="text" placeholder="Pesquisar por Professor ...">
<br>    
<a id="button" class='btn btn-success btn-lg btn-block' href='<?= base_url('Atribuicoes/atribuicao') ?>'>Gerar horário</a>
<br><br>
<div id= "container" class="container">
    <table class="table table-hover table-md" style="background-color: white"  >
        <thead>
            <tr>
                <th scope="col">Nome do professor</th>
                <th scope="col">Sigla</th>
                <th scope="col">Nome da Matéria</th>
                <th scope="col">Prioridade</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            foreach ($retorna as $preferencia) {
                echo "<tr class='componentes'>";
                //echo "<input type='hidden' name='id_prefe$preferencia' value='$preferencia->idprefe$preferencias'";
                echo "<td>" . $preferencia->nome . "</td>";
                echo "<td>" . $preferencia->idComponentes . "</td>";
                echo "<td>" . $preferencia->nomeMateria . "</td>";
                if ($preferencia->prioridade == "1") {
                    echo "<td>Primária</td>";
                } else {
                    echo "<td>Secundário</td>";
                }
                echo "</tr>";
            }
            echo "<br />";
            ?>
        </tbody>
    </table>
    <table id="prioridade" style="background-color: white"  class="table table-hover">
        <thead>
            <tr>
                <th id= "th" scope=" col">Sigla</th>
             <th  id= "th" scope="row">Quantidade Selecionada  </th>
                <th id= "th" scope="row">Prioridade</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($retornaContagem as $preferencia) {
                echo "<tr>";
                echo "<td>" . $preferencia->componentes_idComponentes . "</td>";
                echo "<td>" . $preferencia->quantidade_preferem . "</td>";
                if ($preferencia->prioridade == "1") {
                    echo "<td>Primária</td>";
                } else {
                    echo "<td>Secundário</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div> 


<?php $this->endSection(); ?>