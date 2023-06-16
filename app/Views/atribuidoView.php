<?php $this->extend('base');
$this->section('corpo');
$session = session();
?>
    <style>
        body{
            background-color: #c2ddc1;
        }
    </style>
    <link rel='icon' href='../../../../favicon.ico'>

    <title></title>

    <link href='../../dist/css/bootstrap.min.css' rel='stylesheet'>


    <link href='signin.css' rel='stylesheet'>
  </head>

  <body class='text-center'>
    <?php 
    
    ?>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Materia</th>
                    <th scope="col">Professor</th>
                </tr>
            </thead>
            <?php foreach($atribuidos as $atribuido): ?>
                <tr>
                    <td><?php echo $atribuido->componentes_idComponentes;?></td>
                    <td><?php echo $atribuido->user_idUsuario;?></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
    <?php $this->endSection(); ?>
  

