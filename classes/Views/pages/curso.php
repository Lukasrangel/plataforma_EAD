
<div class="chamada">
        <div class="center">
            <p style='text-align: left'> Olá <?php echo $_SESSION['aluno'] ?>! </p>

            <p style='text-align: right; font-size:18px'> <a  style='color:white'href='<?php echo INITIAL_PATH ?>area_aluno/perfil'>  <img src='<?php echo INITIAL_PATH ?>/icons/user.svg'> Perfil </a> </p>
            <p style='text-align: right; font-size:18px'> <a  style='color:white'href='<?php echo INITIAL_PATH ?>area_aluno'>  <img src='<?php echo INITIAL_PATH ?>/icons/notebook.png'> Meus Cursos </a></p>
        </div><!--center-->
</div><!--chamada-->


<section class="curso">


    <?php 
        $curso = $this->param['curso'];
        $modulos = $this->param['modulos'];
        
    ?>

    <div class="titulo">

        <h2> <?php echo $curso['curso'] ?> </h2>

    </div><!--titulo-->

    <div class="modulos">

        <?php
            foreach($modulos as $modulo){
        ?>
            <div class="modulo-box">
                <h3> <?php echo $modulo['modulo']; ?> <img class='arrow' src='<?php echo INITIAL_PATH ?>icons/down-arrow.png'></h3>

                <div class="aulas">
                    <?php
                       //pega aulas
                       $sql = \Mysql::conectar()->prepare("SELECT * FROM `EAD.aulas` WHERE `modulo_id` = ? ORDER BY `order_aula`");
                       $sql->execute(array($modulo['id']));
                       $aulas = $sql->fetchAll();
               
                        foreach($aulas as $aula){

                            if(\Models\AulaModel::aulaAssistida($_SESSION['id'],$aula['id'])){
                                $check = "<img src='" . INITIAL_PATH . "icons/check-mark.png' style='width: 22px; height:22px'>";
                            } else {
                                $check = "";
                            }
                    ?>
                        <p> <img src='<?php echo INITIAL_PATH ?>icons/play.png'> <a style='color: black;' href='<?php echo INITIAL_PATH ?>cursos/<?php echo $curso['slug'] . '/' .$aula['slug'] ?>'> <?php echo $aula['nome']; ?> <div style='position:relative; top: -25px;'class="right"> <?php echo $check; ?></div> </a></p>

                    <?php
                        }
                    ?>

                </div><!--aulas-->

            </div><!--modulo-box-->
        <?php
            }//endforeach
        ?>



    </div><!--curso-->




</section>