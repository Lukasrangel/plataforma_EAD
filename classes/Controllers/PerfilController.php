<?php

namespace Controllers;

class PerfilController {

    private $Model;
    private $View;


    public function index(){
        $this->View = new \Views\MainView('perfil.php');
        $this->Model = new \Models\PerfilModel();

        if(isset($_POST['acao'])){
            $this->Model->update($_POST);
        }

        if(\Models\Models::isLogin()){
            $dados = $this->Model->pegaDados();
            
            if($dados['cpf'] == ''){
                $dados['cpf'] = 'cpf';
            } 
            
            
            $this->View->setParam($dados);
            $this->View->render();

        } else {
            header("Location:" . INITIAL_PATH);
            die();
        }
        

    }



}


?>