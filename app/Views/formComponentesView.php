<?php $this->extend('Navbar/index.php');
$this->section('corpo');
$session = session();
?>

<body>
    <?php
    function checaSelecionado($componente, $value)
    {
        if ($value == $componente->periodo) {
            echo "selected";
        }
    }
    ?>
    <br><br>
    <center>
        <h1>Inserir Componente</h1>
        <br>
        <div class='container'>
            <form action="<?= base_url('Componentes/saveComponente') ?>" method="post">
                <div class="form-row">
                    <div id="sigla" class="form-group col-md-4">
                        <label for="idComponente">Sigla da Matéria</label>
                        <input class="form-control" type="text" name="idComponente" id="idComponente" maxlength="5" value="<?= isset($componente) ? $componente->idComponentes : "" ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nomeMateria">Nome da Matéria</label>
                        <input class="form-control" type="text" name="nomeMateria" id="nomeMateria" value="<?= isset($componente) ? $componente->nomeMateria : "" ?>">
                    </div>
                </div>
                <div id='periodo' class='form-group col-md-4'>
                    <label class="form-label" for="periodo">Período</label>
                    <select name='periodo' id='periodo' class='form-control'>
                        <option value='Manhã' <?= isset($componente) ? checaSelecionado($componente, 'Manhã') : "" ?>>Manhã</option>
                        <option value='Tarde' <?= isset($componente) ? checaSelecionado($componente, 'Tarde') : "" ?>>Tarde</option>
                        <option value='Noite' <?= isset($componente) ? checaSelecionado($componente, 'Noite') : "" ?>>Noite</option>
                    </select>
                </div>
                <div id='diaSemana' class='form-group col-md-4'>
                    <label class="form-label" for="diaSemana">Dia da Semana</label>
                    <select name='diaSemana' class='form-control'>
                        <option value='Segunda-feira'>Segunda-feira</option>
                        <option value='Terça-feira'>Terça-feira</option>
                        <option value='Quarta-feira'>Quarta-feira</option>
                        <option value='Quinta-feira'>Quinta-feira</option>
                        <option value='Sexta-feira'>Sexta-feira</option>
                        <option value='Sábado'>Sábado</option>
                    </select>
                </div>
                <div id="horasSemanais" class='form-group col-md-4'>
                    <label class="form-label" for="horasSemanais">Horas Semanais</label>
                    <input class="form-control" type="number" name="horasSemanais" value="<?= isset($componente) ? $componente->horasSemanais : "" ?>">
                </div>
                <div id='cursos' class='form-group col-md-4'>
                    <?php
                    echo "<label class='form-label' for='cursos'>Nome Cursos: </label>";
                    echo "<select name='curso_idCurso' class='form-control'>";
                    foreach ($cursos as $curso) {
                        echo "<option value='$curso->idCurso'>" . $curso->nomeCurso . "</option>";
                    }
                    echo "</select>";
                    ?>
                </div>
                <div class='form-group col-md-4'>
                    <label class="form-label" for="horaInicio">Horário de Início</label>
                    <input class="form-control" type="time" name="horaInicio" id="horaInicio" value="<?= isset($horario) ? $horario->horaInicio : "" ?>">
                </div>
                <div class='form-group col-md-4'>
                    <label class="form-label" for="horaFim">Horário de Fim</label>
                    <input class="form-control" type="time" name="horaFim" id="horaFim" value="<?= isset($horario) ? $horario->horaFim : "" ?>">
                </div>
                <input type="hidden" name="idHorario" value="<?= isset($horario) ? $horario->idHorario : "" ?>">
                <br />
                <button type="button" class="btn btn-success">Salvar</button>

            </form>
        </div>
    </center>
</body>

</html>
<?php $this->endSection(); ?>