<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title></title>
  </head>
  <style>
   
   #if{
    position: absolute ;
    left: 15px;
     top: 32%;
   }
   
   
    #pes{
      position: absolute;
      left: 62%;
      top: 36%;  
      width: 240px;
      height: 40px;
    }
    #pesq{
      position: absolute;
      left: 75%;
      top: 36%;  
      background-color: #bee6a3;

    }

    #engrenagem{
            position: absolute;
            left: 90%;
            top: 29%;
        }
         
          #imgs{
            position: absolute;
            left: 85%;
            top: 29%;
            
          }

        body{
            background-color: #c2ddc1;
            
        }

        #inform{
          position: absolute;
          right: 65%;
            top: 33%; 

        }
      
        #sair{
          position: absolute;
          left: 95%;
          top: 33%;
          background-color: #bee6a3;
        }
       
    

        #nav{
          width: 1920px;
            line-height: 20px;
            background-color: #033506;
        }
        
        #bar{
          width: 1920px;
            line-height: 15px;
            background-color: #005914;
        }
        
        #atualiza{
          position: relative;
          left: 80%;
          color: black;
        
        }
        
        #horario{
          position: relative;
           left: 55%;
          color: black;
        }
        

    </style>

  <body class="bg-green" >

  <nav id="nav" class="navbar navbar-expand-lg navbar-light bg-green >
  <a  id="if" class="navbar-brand" href="#"> <img class="d-block mx-auto mb-4" src="imgs/logo.png" alt="" width="500" height="90"  ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
   
  <div style='text-align:left'>
    <form class="form-inline my-2 my-lg-0">
      <input  id="pes" class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar"> 
</div>
<button  id="pesq"  class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
 <a href="login.php" <button  id="sair"  class="btn btn-outline-success my-2 my-sm-0" type="submit">sair</button></a>
</select>   
    </form>
  </div>
  <a href="UsuarioViews.php"><img src="imgs/user.jpeg" class="rounded-circle" width="50" height="50"  left="50px" id="imgs"></a>
  <a href="Alterar_Senha.php"><img src="imgs/engrenagem.png" class="rounded-circle" width="50" height="50"  left="50px" id="engrenagem"></a>
</nav> 
<div  id="bar" class="sobre">
<nav class="nav">
  <a id="atualiza"class="nav-link active"href="index2.php">Atualizar Cadastro</a>
  <a id="horario"class="nav-link active"  href="informar_hr.php">Informar Disponibilidade de Horario</a>
</nav>
      </div>
      <br><br>
    <title>Toggle Password Visibility</title>
    <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity=
"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
  
    <style>

        form i {
            margin-left: -1px;
            cursor: pointer;
        } 
        body{
            background-color: #c2ddc1;
            
        }

        #submit{
        
        background-color: green;
      
      }
          
        
    </style>
</head>
  
<body>
    <div class='text-center'>
    <img src="imgs/senha.jpeg" class="rounded-circle" width="90" height="95"  left="50px" id="user">
    <br><br>
       <h1>Alteração de senha</h1>
       <br><br>
        <form>
        
            <p>
                <label>Digite a senha atual</label>
                <input type="password" 
                    name="password" id="password" />
                <i class="bi bi-eye-slash" 
                    id="togglePassword"></i>
            </p>
            <p>
                <label>Nova senha</label>
                <input type="password" 
                    name="password" id="password" />
                <i class="bi bi-eye-slash" 
                    id="togglePassword"></i>
            </p>
            <p>
                <label>Confirme a senha</label>
                <input type="password" 
                    name="password" id="password" />
                <i class="bi bi-eye-slash" 
                    id="togglePassword"></i>
            </p>
  
            <button type="submit" id="submit" 
                class="btn btn-primary">
                Confirmar 
            </button>
        </form>
    </div>
  
    <script>
        const togglePassword = document
            .querySelector('#togglePassword');
  
        const password = document.querySelector('#password');
  
        togglePassword.addEventListener('click', () => {
  
            
            const type = password
                .getAttribute('type') === 'password' ?
                'text' : 'password';
                  
            password.setAttribute('type', type);
  
            
            this.classList.toggle('bi-eye');
        });
    </script>
    
</body>
  
</html>