<?php

include('../config.php');

if(\Models\Models::isLogin()){

    $aula_id = (int)$_GET['id'];
    $aluno_id = $_SESSION['id'];
    
    $curso = $_GET['curso'];


    if(isset($_GET['concluida'])){
        
        if(Models\AulaModel::aulaAssistida($aluno_id,$aula_id)){
            Models\AulaModel::update_status_aula(1,$aluno_id,$aula_id);
        } else {
            $curso_id = \Models\Models::pegaIdCurso($curso);
            Models\AulaModel::insert_aula_assistida($aula_id,$aluno_id,$curso_id);
        }
      
        header("Location:" . INITIAL_PATH . 'cursos/' . $curso);

    }

    if(isset($_GET['desmarca'])){
        Models\AulaModel::update_status_aula($aluno_id,$aula_id,0);
        header("Location:" . INITIAL_PATH . 'cursos/' . $curso);
    }


} else {
   header('Location: ' . INITIAL_PATH);
}



?>