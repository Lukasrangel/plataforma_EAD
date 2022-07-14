<?php

namespace Controllers;

class HomeController {

    private $View;
    private $Model;

    public function index(){
        if(\Models\Models::isLogin()){
            $this->Model = new \Models\HomeModel();
            $this->View = new \Views\MainView('area_aluno.php');
            $this->View->setParam($this->Model->meus_cursos($_SESSION['id']));
        } else {
            $this->View = new \Views\MainView('home.php');
        }
        $this->View->render();
    }

    public static function logar(){
        \Models\Models::logar($_POST);
    }

    public function adicionar_curso($id){
        if(\Models\Models::isLogin()){
            $this->Model = new \Models\HomeModel();
            $this->Model->adicionar_curso($id);
        } else {
            header('Location:' . INITIAL_PATH . 'cadastrar');
            die();
        }
        
    }
}

?>