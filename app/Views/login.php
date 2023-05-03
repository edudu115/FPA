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

    <title>Login FPA </title>

    <!-- Principal CSS do Bootstrap -->
    <link href='../../dist/css/bootstrap.min.css' rel='stylesheet'>

    <!-- Estilos customizados para esse template -->
    <link href='signin.css' rel='stylesheet'>
  </head>

  <body class='text-center'>
    <form class='form-signin'>
        <br><br><br>
      <img class='mb-4' src='imgs/ifsp.png' alt='' width='110' height='110'>
      <h1 class='h3 mb-3 font-weight-normal'>Faça login</h1>
      <label for='inputEmail' class='sr-only'>Prontuário</label>
     <center> <input style= 'width : 350px;' type='email' id='inputEmail' class='form-control' placeholder='Seu email' required autofocus></center>
      <label for='inputPassword' class='sr-only'>Senha</label>
      <center><input style= 'width : 350px;'type='password' id='inputPassword' class='form-control' placeholder='Senha' required></center>
      <div class='checkbox mb-3'>
        <label>
          <input type='checkbox' value='remember-me'> Lembrar de mim
        </label>
      </div>
      <button class='btn btn-lg btn-primary btn-block' type='submit'>Login</button>
      <p class='mt-5 mb-3 text-muted'>&copy; 2023</p>
    </form>
  </body>
</html>
