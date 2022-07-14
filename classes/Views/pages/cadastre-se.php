<style>
footer {
    position: absolute;
    bottom: 0;
}

</style>

<div class="logar">

    <?php
        \Models\Models::alert('erro', 'Email já cadastrado');
    ?>

    <h2> Cadastrar </h2>


    <form method='post'>

        <input type='text' name='email' placeholder='Email' required>

        <input type='text' name='nome' placeholder='Nome' required>

        <input type='password' name='senha' placeholder='Senha' required>

        <input type='password' name='senha_ok' placeholder='Vonfirme sua senha' required>

        <span style='display:block; color: red'> </span>
        <input type='submit' name='acao' value='Entrar!'>


    </form>

   
</div><!--logar-->