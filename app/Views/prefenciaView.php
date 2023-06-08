<?php $this->extend('base');
$this->section('corpo');
$session = session();
?>


<style>

#la{
    width: 50px;
    
   
}
#le{
    width: 50px;
   
   
}
#lu{
    width: 50px;
   
}

#button{

    background-color: green;
}
</style>



<br><br>
   <table style="background-color: white" class="table table-bordered">
        <thead>
            <tr>
                <th id='la' scope="col">Nome do professor</th>
                <th id='le'  scope="col">Nome da Matéria</th>
                <th id='lu' scope="col">Prioridade</th>
                 </tr> 
        </thead>
        <tbody>
                <?php
                $i = 0;
                foreach($retorna as $preferencia){
                echo "<tr>";
                //echo "<input type='hidden' name='id_prefe$preferencia' value='$preferencia->idprefe$preferencias'";
                    echo "<td>".$preferencia->nome."</td>";
                    echo "<td>".$preferencia->nomeMateria."</td>";
                    if($preferencia->prioridade == "1"){
                        echo "<td>Primária</td>";
                    }else{
                        echo "<td>Secundário</td>";
                    }
                }
                ?>
        </tbody>
    </table>
    <a id="button" class='btn btn-success btn-lg btn-block' href='<?= base_url('Componentes/viewFormComponente') ?>'>Gerar horário</a>
    <?php $this->endSection(); ?>