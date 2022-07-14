<?php

namespace Controllers;

class AulaController {

    private $Model;
    private $View;

    public  function index($slug,$curso){
        
        $this->Model = new \Models\AulaModel();
        $this->View = new \Views\MainView('aula.php');

        $data['aula'] = $this->Model->pegaAula($slug);
        $data['curso'] = \Models\CursoModel::pegaCurso($curso);

        if(\Models\Models::isLogin() && \Models\Models::temCurso($data['curso']['id'], $_SESSION['id'])){
            $this->View->setParam($data);
            $this->View->render();
        } else {
            echo "<script> alert('Você não tem este curso')</script>";
            header('Location:' . INITIAL_PATH);
        }
       
    }


}

?>