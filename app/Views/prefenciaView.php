<?php $this->extend('Navbar/index.php');
$this->section('corpo');
$session = session();
?>
<script>
    function search_materia() {
        let input = document.getElementById('searchbar').value
        input = input.toLowerCase();
        let x = document.getElementsByClassName('componentes');

        for (i = 0; i < x.length; i++) {
            if (!x[i].textContent.toLowerCase().includes(input)) {
                x[i].style.display = "none";
            } else {
                x[i].style.display = "";
            }
        }
    }
</script>
<style>
    #searchbar {
        margin-left: 5%;
        padding: 15px;
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

    table {
        border-radius: 5px;
    }

    #list {
        font-size: 1.5em;
        margin-left: 90px;
    }

    #prioridade {
        margin: 1rem;
        width: 850px;
    }

    #container {
        max-width: 1500px;
        display: flex;
        justify-content: space-between;
    }

    #th {
        width: 35px;
    }
</style>
<br /><br />
<div class="container-fluid">
<center>
    <h1> Lista de Prioridades </h1>
</center>
    <br />

    <input class="form-control mr-sm-2" id="searchbar" onkeyup="search_materia()" type="text" placeholder="Pesquisar por Professor ...">
    <br />
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalExemplo">Gerar horário</button>   
</div>

<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Atenção !!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Deseja gerar horário ?
      </div>
      <div class="modal-footer">
      <button id="button" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button id="button" type="submit" value="Salvar" class="btn btn-warning"><a style="text-decoration: none; color: black;" href='<?= base_url('Atribuicoes/atribuicao') ?>'>Gerar horário</a></button>

      </div>
    </div>
  </div>
</div>

<br>
<div id="container" class="container">
    <table class="table table-hover table-md" style="background-color: white">
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
    <table id="prioridade" style="background-color: white" class="table table-hover">
        <thead>
            <tr>
                <th id="th" scope=" col">Sigla</th>
                <th id="th" scope="row">Quantidade Selecionada </th>
                <th id="th" scope="row">Prioridade</th>
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