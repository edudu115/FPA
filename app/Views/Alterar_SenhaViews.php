<?php $this->extend('Navbar/index.php');
$this->section('corpo');
$session = session();
?>
<center>
    <br /><br />
    <div class='card w-50 border-dark mb-3'>
        <form class="px-4 py-3" action="<?= base_url("Usuario/formSenha") ?>" method="POST">
            <div class="form-group">
                <img class="rounded-circle border border-dark" src=' <?= base_url('senha.jpeg') ?>' class='rounded-circle' width='100' height='105' left='50px'>
                <br><br>
                <h4>Alteração de senha</h4>


                <h5><?= $session->senhaAlterada ?></h5>
                <br>
                <div class="form-group">
                    <label>Digite a senha atual</label>
                    <input class="form-control" type='password' name='senhaAtual' />
                </div>
                <div class="form-group">
                    <label>Nova senha</label>
                    <input class="form-control" type='password' name='senha1' />
                </div>
                <div class="form-group">
                    <label>Confirme a senha</label>
                    <input class="form-control" type='password' name='senha2' />
                </div>
                <button type='submit' id='submit' class='btn btn-success'>
                    Confirmar
                </button>
            </div>
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
</center>
<?php $this->endSection(); ?>