<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= base_url('Componentes/viewComponente')?>" method="post">
        <input type="hidden" name="id" value="<?= $idComponente  ?>">
        <label class="form-label" for="diaSemana">Dia da Semana</label>
                <select name='diaSemana' id='diaSemana'>
                    <option value='Segunda-feira'>Segunda-feira</option>
                    <option value='Terça-feira'>Terça-feira</option>
                    <option value='Quarta-feira'>Quarta-feira</option>
                    <option value='Quinta-feira'>Quinta-feira</option>
                    <option value='Sexta-feira'>Sexta-feira</option>
                    <option value='Sábado'>Sábado</option>
                </select>
        <label class="form-label" for="horaInicio">Horário de Início</label>
            <input class="form-control" type="time" name="horaInicio" id="horaInicio" value="<?= isset($componente) ? $componente->idComponente: "" ?>">
        <label class="form-label" for="nomeMateria">Horário de Fim</label>
            <input class="form-control" type="time" name="nomeMateria" id="nomeMateria" value="<?= isset($componente) ? $componente->nomeMateria: "" ?>">
        <!-- <label class="form-label" for="nomeCurso">Nome do Curso</label>
        <input class="form-control" type="text" name="nomeCurso" id="nomeCurso" value=""> -->
        <button class="btn btn-primary">Salvar</button>
    </form>
</body>
</html>