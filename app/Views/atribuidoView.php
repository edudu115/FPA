<?php $this->extend('base');
$this->section('corpo');
$session = session();
?>
<style>
    body {
        background-color: #c2ddc1;
    }
</style>
<link rel='icon' href='../../../../favicon.ico'>

<title></title>

<link href='../../dist/css/bootstrap.min.css' rel='stylesheet'>


<link href='signin.css' rel='stylesheet'>
</head>

<body class='text-center'>
    <br /> <br />
    <center>
        <h1 class="display-4">Tabela de Atribuição de Aulas</h1>
    </center>
    <br />
    <div class="container">
        <table class="table table-hover table-sm">
            <thead>
                <tr>
                    <th scope="col">Nome do Prefessor</th>
                    <th scope="col">Sigla</th>
                    <th scope="col">Nome da Matéria</th>
                    <th scope="col">Nome do Curso</th>
                </tr>
            </thead>
            <?php foreach ($retorna as $atribuido) : ?>
                <tr>
                    <td><?php echo $atribuido->nome; ?></td>
                    <td><?php echo $atribuido->sigla; ?></td>
                    <td><?php echo $atribuido->nomeMateria; ?></td>
                    <td><?php echo $atribuido->nomeCurso; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <?php $this->endSection(); ?>