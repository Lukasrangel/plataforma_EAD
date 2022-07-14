<?php

$cpf = $this->param['cpf'];
$nome = $this->param['nome'];

?>

<div class="chamada">
        <div class="center">
            <p style='text-align: left'> Olá <?php echo $_SESSION['aluno'] ?>! </p>

            <p style='text-align: right; font-size:18px'> <a  style='color:white'href='<?php echo INITIAL_PATH ?>area_aluno/perfil'>  <img src='<?php echo INITIAL_PATH ?>/icons/user.svg'> Perfil </a> </p>
            <p style='text-align: right; font-size:18px'> <a  style='color:white'href='<?php echo INITIAL_PATH ?>area_aluno'>  <img src='<?php echo INITIAL_PATH ?>/icons/notebook.png'> Meus Cursos </a></p>
        </div><!--center-->
</div><!--chamada-->

<section class="perfil">
<div class="center">

    <div class="perfil-papper">
    <div class="center">

        <div class="dados-aluno">

        

            <div class="avatar left">
                <img style='width: 50px; height: 50px;'src='<?php echo INITIAL_PATH ?>/icons/user.svg'>
            </div><!--avatar-->
            

            <div class="dados left">

                <form method='post'>
                    <input type='text' name='nome' value='<?php echo $nome; ?>'> 

                    <br><br>

                    <input type='text' name='cpf' value='<?php echo $cpf;?>' id='cpf' oninput='mascara_cpf()' maxlength="11"> 
            
                    <br><br>

                    <input type='password' name='senha_nova' placeholder='Nova Senha'>

                    <br><br>

                    <input type='submit' name='acao' value='Atualizar!'>
                </form>
            </div><!--dados-->
            <div class="clear"></div>

        </div><!--dados-aluno-->
    
    
    </div><!--center-->
    </div><!--perfil-papper-->

</div><!--center-->
</section><!--perfil-->