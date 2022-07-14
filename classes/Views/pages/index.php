<section class="banner">

    <img src='<?php echo INITIAL_PATH ?>imgs/maxresdefault-3379387995.jpeg'>


</section><!--banner-->


<section class="diferenciais-section">
    <div class="center">

        <div class="titulo-diferenciais">
            <h2 style='color:white;'>Diferencias da Plataforma</h2>

        </div><!--titulo-diferencias-->
            
        <br><br>

        <div class="diferencias">

            <div animate='top'  class="box-wrapper-diferencial left w33">

                <div class="diferencial-single">
                    <img src='<?php echo INITIAL_PATH ?>icons/edu.png'>

                    <p style='color:white;'> Educação a distância de qualidade</p>

                </div><!--box-single-->

            </div><!--box-wrapper-->

            <div animate='top'  class="box-wrapper-diferencial left w33">

                <div class="diferencial-single">
                    <img src='<?php echo INITIAL_PATH ?>icons/digital.png'>

                    <p style='color:white;'>Plataforma High Tech</p>

                </div><!--box-single-->

            </div><!--box-wrapper-->


            <div  animate='top' class="box-wrapper-diferencial left w33">
                <div class="diferencial-single">
                    <img src='<?php echo INITIAL_PATH ?>icons/suporte.png'>

                    <p style='color:white;'> Suporte personalizado</p>

                </div><!--box-single-->

            </div><!--box-wrapper-->
            <div class="clear"></div>

        </div><!--diferenciais-->

    </div><!--center-->
</section><!--diferenciais-->


<section id='cursos' class="conheca-cursos">
    <div class="center">

        <div class="titulo-diferenciais">
            <h2>Conheça os cursos</h2>

        </div><!--titulo-diferencias-->


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


                            <a href='<?php echo INITIAL_PATH ?>addCurso?id=<?php echo $curso['id']; ?>'> Matricular-se! </a>
                            </div><!--box-single-->


                        </div><!--box-curso-wraper-->
                        <div class="clear"></div>

                    <?php
                        }//endforeach
                    ?>


                </div><!--cursos-->

    </div><!--center-->
</section><!--cursos-->