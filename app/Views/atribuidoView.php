<!doctype html>
<html lang='pt-br'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='description' content=''>
    <meta name='author' content=''>
     <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>

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

      <p class='mt-5 mb-3 text-muted'>&copy; 2023</p>
  </body>
</html>
