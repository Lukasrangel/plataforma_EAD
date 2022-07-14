<?php

namespace Controllers;

class CursoController {

    private $Model;
    private $View;



    public function index($slug){
        
        $this->View = new \Views\MainView('curso.php');
        $this->Model = new \Models\CursoModel();
    
        $data['curso'] = $this->Model->pegaCurso($slug);
        $data['modulos'] = $this->Model->pegaModulos($data['curso']['id']);

        if(\Models\Models::isLogin() && \Models\Models::temCurso($data['curso']['id'], $_SESSION['id'])){
            $this->View->setParam($data);
            $this->View->render();
        } else {
            header('Location:' . INITIAL_PATH);
            die();
        }
       
    }


}

?>