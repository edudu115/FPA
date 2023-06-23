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
    body {
        background-color: #c2ddc1;
    }

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

    #list {
        font-size: 1.5em;
        margin-left: 90px;
    }
</style>
<link rel='icon' href='../../../../favicon.ico'>

<title></title>

<link href='../../dist/css/bootstrap.min.css' rel='stylesheet'>


<link href='signin.css' rel='stylesheet'>
</head>

<body class='text-center'>
    <br /> <br />
    <br><br>
    <br /> <br />
    <center>
        <h1 class="display-4">Tabela de Atribuição de Aulas</h1>
    </center>
    <input class="form-control mr-sm-2" id="searchbar" onkeyup="search_materia()" type="text" placeholder="Pesquisar por Professor ...">

    <br />
    <div class="container">
        <table class="table table-hover table-sm" class="list">
            <thead>
                <tr>
                    <th scope="col">Nome do Prefessor</th>
                    <th scope="col">Sigla</th>
                    <th scope="col">Nome da Matéria</th>
                    <th scope="col">Nome do Curso</th>
                </tr>
            </thead>
            <?php foreach ($retorna as $atribuido) : ?>
                <tr class='componentes'>
                    <td><?php echo $atribuido->nome; ?></td>
                    <td><?php echo $atribuido->sigla; ?></td>
                    <td><?php echo $atribuido->nomeMateria; ?></td>
                    <td><?php echo $atribuido->nomeCurso; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <?php $this->endSection(); ?>