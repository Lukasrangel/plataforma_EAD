<section class="aluno">
    
    <?php
        $cursos = $this->param;
    ?>

    <div class="chamada">
        <div class="center">
            <p> Olá <?php echo $_SESSION['aluno'] ?>! Você está matriculado em <?php echo count($cursos); ?> cursos.</p>

            <p style='text-align: right; font-size:18px'> <a  style='color:white'href='<?php echo INITIAL_PATH ?>area_aluno/perfil'> <img src='<?php echo INITIAL_PATH ?>/icons/user.svg'> Perfil </a> </p>
        </div><!--center-->
    </div><!--chamada-->

    <div class="meus-cursos">
        <div class="center">
            <?php
                if(count($cursos) == 0){
            ?>
                <p> Conheça os cursos! </p>

                <br><br>

                <div style='text-align: center; border:1px solid; width: 92%; height: 340px; margin: 0 auto;' class="video-apresent">
                    <br><br><br>
                    < -- video de apresentação -- > 

                </div><!--video-apresent-->

                <div class="cursos">

                    <?php
                        $todosCursos = \Models\Models::cursos();

                        foreach($todosCursos as $curso){
                    ?>
                        <div class="box-curso-wraper w33 left">
                            <div class="box-single">
                                
                                <img src='<?php echo INITIAL_PATH ?>imgs/<?php echo $curso['img']; ?>'>
                               
                                <h3> <?php echo $curso['curso']; ?></h3>
                                <p> <?php echo $curso['descricao']; ?></p>


                            <a href='<?php echo INITIAL_PATH ?>addCurso?id=<?php echo $curso['id']; ?>'>  Matricule-se </a>
                            </div><!--box-single-->


                        </div><!--box-curso-wraper-->
                        <div class="clear"></div>

                    <?php
                        }//endforeach
                    ?>


                </div><!--cursos-->

            <?php
                } else {
            ?>
                     <p> Seus cursos! </p>

                    <br><br>

                    <div class="cursos">

                        <?php
                            foreach($cursos as $curso){
                                $sql = \Mysql::conectar()->prepare("SELECT * FROM `EAD.cursos` WHERE `id` = ?");
                                $sql->execute(array($curso['curso_id']));
                                $data = $sql->fetch();

                        ?>
                        <div class='box-curso-wraper w33 left'>
                            
                            <div class="box-single">

                            <img src='<?php echo INITIAL_PATH ?>imgs/<?php echo $data['img']; ?>'>

                            <h3> <?php echo $data['curso']; ?></h3>

                            <p> <?php echo $data['descricao'] ?></p>

                            <a href='<?php echo INITIAL_PATH ?>cursos/<?php echo $data['slug']; ?>'> Estudar! </a>
                            </div><!--box-single-->
                        
                        </div><!--box-curso-wraper-->

                        <?php
                            }
                        ?>

                    </div><!--cursos-->
            <?php
                }
            ?>

            </div><!--center-->
    </div><!--meus-cursos-->
    

    
</section>