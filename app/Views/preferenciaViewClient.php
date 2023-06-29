<?php $this->extend('Navbar/index.php');
$this->section('corpo');
$session = session();
?>
<style>
    #button {

        background-color: green;
        position: absolute;
        top: 45%;
        left: 1%;

    }

    table {
        border-radius: 5px;
    }

    input[type=text] {
        width: 18%;
        -webkit-transition: width 0.15s ease-in-out;
        transition: width 0.15s ease-in-out;
    }

    input[type=text]:focus {
        width: 30%;
    }

    #list {
        font-size: 1.5em;
        margin-left: 90px;
    }

    #prioridade {
        margin: 1rem;
    }
</style>

<br /> <br />
<div class="container">
<center>
    <h1 class="h1">Lista de Preferencia</h1>
</center>    
    <table class="table table-hover table-sm" style="background-color: white">
        <thead>
            <tr>
                <th scope="col">Nome do professor</th>
                <th scope="col">Sigla</th>
                <th scope="col">Nome da Matéria</th>
                <th scope="col">Prioridade</th>
                <th scope="col">Deletar Preferencia</th>
            </tr>
        </thead>
        <tbody>
            <?php
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
                echo "<td><a class='btn btn-danger' href='" . base_url('Preferencia/deletePreferencia/' . $preferencia->idComponentes) . "'>Deletar</a></td>";
                echo "</tr>";
            }
            echo "<br />";
            ?>
        </tbody>
    </table>
</div>

<?php $this->endSection(); ?>