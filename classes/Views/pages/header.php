<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name=description content="Descrição do meu site">
    <meta name="keywords" content='palavra, chave, do, site'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;1,300&display=swap" rel="stylesheet"> 
    <link rel='stylesheet' href='<?php echo INITIAL_PATH ?>estilo/estilo.css'>

    <title> Plataforma EAD</title>
</head>

<header class='w100'>
    <div class="center">

        <div class="logo left">
            <p>  <a href='<?php echo INITIAL_PATH ?>'> Plataforma EAD </a></p>
        </div><!--logo-->
        <div class="clear"></div>

        <nav class='nav-desktop right'>
            <ul>
                <li> <a href='<?php echo INITIAL_PATH ?>'> Início </a> </li>
                <li> <a href='<?php echo INITIAL_PATH ?>#cursos'> Cursos </a> </li>
                <li> <a href='<?php echo INITIAL_PATH ?>area_aluno'> Area do Aluno(a)</a> </li>
                <?php
                    if(\Models\Models::isLogin()){
                ?>
                <li> <a href='<?php echo INITIAL_PATH ?>sair'> Sair </a></li>
                <?php
                    }
                ?>
            </ul>
        </nav><!--nav-desktop-->
        <div class="clear"></div>


        <div class="menu-mobile-icon right">
            <img src="<?php echo INITIAL_PATH ?>icons/menu.png">

        </div><!--menu-mobile-->

        <div class="menu-mobile">

            <ul>
                    <li> <a href="<?php echo INITIAL_PATH ?>"> Início </a></li>
                    <li> <a href="<?php echo INITIAL_PATH?>#cursos"> Cursos</a></li>
                    <li> <a href="<?php echo INITIAL_PATH?>area_aluno"> Área do Aluno(a)</a></li>
        
            </ul>

        </div><!--menu-mobile-->
    </div><!--center-->
</header>