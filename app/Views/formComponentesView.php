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
        <label class="form-label" for="diaHorario">Dia de Início e Horario</label>
        <input class="form-control" type="datetime-local" name="diaHorario" id="diaHorario" value="<?= isset($componente) ? $componente->diaHorario: "" ?>">
        <label class="form-label" for="curso">Curso</label>
        <input class="form-control" type="text" name="curso" id="curso" value="<?= isset($componente) ? $componente->curso: "" ?>">
        <label class="form-label" for="horasSemanais">Quantas Horas Semanais</label>
        <input class="form-control" type="number" name="horasSemanais" id="horasSemanais" value="<?= isset($componente) ? $componente->horasSemanais: "" ?>">
        <button class="btn btn-primary">Salvar</button>
    </form>
</body>
</html>