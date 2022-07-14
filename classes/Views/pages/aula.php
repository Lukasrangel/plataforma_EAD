<?php
$aula = $this->param['aula'];
$curso = $this->param['curso'];
$modulo = \Models\AulaModel::pegaModulo($aula['modulo_id']);


?>
<div class="chamada">
        <div class="center">
            <p style='text-align: left'> Olá <?php echo $_SESSION['aluno'] ?>! </p>

            <p style='text-align: right; font-size:18px'> <a  style='color:white'href='<?php echo INITIAL_PATH ?>area_aluno'>  <img src='<?php echo INITIAL_PATH ?>/icons/notebook.png'> Meus Cursos </a></p>
        </div><!--center-->

</div><!--chamada-->
<div class="titulo">

        <h2> <a style='text-decoration:none; color:white;' href='<?php echo INITIAL_PATH  .'cursos/' . $curso['slug'] ?>'> <?php echo $curso['curso'] ?> </a> </h2>

    </div><!--titulo-->


<section class="aula">
    <div class="center">

        <div class="header-aula">

            <h4>Modulo: <?php echo $modulo['modulo']; ?></h4>        
            
            <h3> <?php echo $aula['nome']; ?> </h3>
            
        </div><!--header-aula-->
        

        <div class="video">

        </div><!--video-->

        <br><br>

        <?php
            if($aula['anotacoes'] != ''){

        ?>

        <div class="anotacoes-aulas">

            
            <?php echo $aula['anotacoes']; ?>

        </div><!--anotacoes-aulas-->

        <?php
            }
        ?>

        <?php
            $proxima = \Models\AulaModel::proximaAula($aula['order_aula'], $curso['id']);
            if($proxima == false){
                echo "";
            } else {
            
        ?>
            <a href="<?php echo INITIAL_PATH . 'cursos/' . $curso['slug'] . '/' . $proxima['slug'] ?>"> Próxima Aula </a>
        <?php
            }

            $anterior = \Models\AulaModel::aulaAnterior($aula['order_aula'], $curso['id']);
            if($anterior == false){
                echo "";
            } else {
        ?>

        <a href="<?php echo INITIAL_PATH . 'cursos/' . $curso['slug'] . '/' . $anterior['slug']; ?>"> Aula Anterior </a>

        <?php
            }

            if(!\Models\AulaModel::aulaAssistida($_SESSION['id'],$aula['id'])){
        ?>

        <a href="<?php echo INITIAL_PATH . 'ajax/concluida.php?id=' . $aula['id'] . '&concluida&curso=' . $curso['slug']; ?>"> Marcar como concluída </a>
    
        <?php
            } else {
        ?>

        <a href="<?php echo INITIAL_PATH . 'ajax/concluida.php?id=' . $aula['id'] . '&desmarca&curso=' . $curso['slug']; ?>"> Desmarcar como concluída </a>
        
        <?php
            }
        ?>
    </div><!--center-->
</section><!--aula-->
