<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= base_url('Componentes/salveComponente')?>" method="post">
        <label class="form-label" for="nomeMateria">Nome da Matéria</label>
        <input class="form-control" type="text" name="nomeMateria" id="nomeMateria" value="<?= isset($componente) ? $componente->nomeMateria: "" ?>">
        <label class="form-label" for="periodo">Período</label>
        <input class="form-control" type="text" name="periodo" id="periodo" value="<?= isset($componente) ? $componente->periodo: "" ?>">
        <label class="form-label" for="horasSemanais">Horas Semanais</label>
        <input class="form-control" type="number" name="horasSemanais" id="horasSemanais" value="<?= isset($componente) ? $componente->horasSemanais: "" ?>">
        <label class="form-label" for="nomeCurso">Nome do Curso</label>
        <input class="form-control" type="text" name="nomeCurso" id="nomeCurso" value="<?= isset($componente) ? $componente->nomeCurso: "" ?>">
        <label class="form-label" for="diaSemana">Dia da Semana</label>
        <input class="form-control" type="text" name="diaSemana" id="diaSemana" value="<?= isset($componente) ? $componente->diaSemana: "" ?>">
        <label class="form-label" for="horaInicio">Horário de Início</label>
        <input class="form-control" type="time" name="horaInicio" id="horaInicio" value="<?= isset($componente) ? $componente->horaInicio: "" ?>">
        <label class="form-label" for="horaFim">Horário de Fim</label>
        <input class="form-control" type="time" name="horaFim" id="horaFim" value="<?= isset($componente) ? $componente->horaFim: "" ?>">
        <button class="btn btn-primary">Salvar</button>
    </form>
</body>
</html>