<style>
footer {
    position: absolute;
    bottom: 0;
}
</style>
<div class="logar">

    <?php
        \Models\Models::alert('erro', 'Email ou senha incorretos');
    ?>

    <h2> Login </h2>


    <form method='post'>

        <input type='text' name='email' placeholder='Email' required>

        <input type='password' name='senha' placeholder='Senha' required>

        <input type='submit' name='acao' value='Entrar!'>


    </form>

    <div class="mensagem">
        <p> Ainda não tem uma conta? <a href='<?php echo INITIAL_PATH ?>cadastrar'> cadastre-se </a></p>

    </div><!--texto-->


</div><!--logar-->