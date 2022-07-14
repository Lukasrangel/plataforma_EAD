<?php

namespace Controllers;

class IndexController {


    private $Model;
    private $View;


    public function index(){
        $this->View = new \Views\MainView('index.php');
        $this->View->render();
    }


}

?>