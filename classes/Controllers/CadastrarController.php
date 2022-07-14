<?php

namespace Controllers;

class CadastrarController{

    private $View;

    public function index(){
        $this->View = new \Views\MainView('cadastre-se.php');
        $this->View->render();
    }

    public function cadastrar(){
        if(\Models\Models::cadastrar_aluno($_POST)){
            header('Location:' . INITIAL_PATH);
            die();
        } 
        
    }

}



?>