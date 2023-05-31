<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        var_dump($componente);

        function checaSelecionado($componente, $value) {
            if($value == $componente->periodo) {
                echo "selected";
            }
        }
    ?>
    <form action="<?= base_url('Componentes/saveComponente')?>" method="post">
        <label class="form-label" for="idComponente">Sigla da Matéria</label>
            <input class="form-control" type="text" name="idComponente" id="idComponente" maxlength="5" value="<?= isset($componente) ? $componente->idComponentes: "" ?>">
        <label class="form-label" for="nomeMateria">Nome da Matéria</label>
            <input class="form-control" type="text" name="nomeMateria" id="nomeMateria" value="<?= isset($componente) ? $componente->nomeMateria: "" ?>">
        <label class="form-label" for="periodo">Período</label>
            <select name='periodo' id='periodo'>
                <option value='Manhã' <?= isset($componente) ? checaSelecionado($componente, 'Manhã') : "" ?>>Manhã</option>
                <option value='Tarde'<?= isset($componente) ? checaSelecionado($componente, 'Tarde') : "" ?>>Tarde</option>
                <option value='Noite'<?= isset($componente) ? checaSelecionado($componente, 'Noite') : "" ?>>Noite</option>
            </select>
        <label class="form-label" for="horasSemanais">Horas Semanais</label>
            <input class="form-control" type="number" name="horasSemanais" id="horasSemanais" value="<?= isset($componente) ? $componente->horasSemanais: "" ?>">
        <?php
        echo "<label class='form-label' for='cursos'>Nome Cursos: </label>";
            echo "<select name='curso_idCurso' id='cursos'>";
                foreach($cursos as $curso){
                    echo "<option value='$curso->idCurso'>".$curso->nomeCurso."</option>";
            }
            echo "</select>";
        ?>
        <!-- <label class="form-label" for="nomeCurso">Nome do Curso</label>
        <input class="form-control" type="text" name="nomeCurso" id="nomeCurso" value=""> -->
        <button class="btn btn-primary">Salvar</button>
    </form>
</body>
</html>