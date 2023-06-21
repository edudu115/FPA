<?php $this->extend('base');
$this->section('corpo');
$session = session();
?>
<br><br>
    <title>Toggle Password Visibility</title>
    <link rel='stylesheet' href=
'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css' />
    <link rel='stylesheet' href=
'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
        integrity=
'sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T'
        crossorigin='anonymous'>
  
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
<br><br>
<br/> <br/>
    <div class='text-center'>
    <img class='mb-4' src='<?= base_url('senha.jpeg') ?>' class='rounded-circle' width='90' height='95'  left='50px' id='user'>
    <br><br>
       <h4>Alteração de senha</h4>
       <br><br>
        <form>
        
            <p>
                <label>Digite a senha atual</label>
                <input type='password' 
                    name='password' id='password' />
                <i class='bi bi-eye-slash' 
                    id='togglePassword'></i>
            </p>
            <p>
                <label>Nova senha</label>
                <input type='password' 
                    name='password' id='password' />
                <i class='bi bi-eye-slash' 
                    id='togglePassword'></i>
            </p>
            <p>
                <label>Confirme a senha</label>
                <input type='password' 
                    name='password' id='password' />
                <i class='bi bi-eye-slash' 
                    id='togglePassword'></i>
            </p>
  
            <button type='submit' id='submit' 
                class='btn btn-primary'>
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
   <?php $this->endSection(); ?>