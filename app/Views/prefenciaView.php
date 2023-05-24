<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="background-color: white" class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nome do professor</th>
                <th scope="col">Nome da Matéria</th>
                <th scope="col">Prioridade</th>
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
                        echo "<td>Primária<td>";
                    }else{
                        echo "<td>Secundário<td>";
                    }
                }
                ?>
        </tbody>
    </table>
</body>
</html>