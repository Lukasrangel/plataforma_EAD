<?php

namespace Views;

class MainView {

    private $header;
    private $file;
    private $footer;

    private $param;

    public function __construct($file, $header = 'pages/header.php', $footer = 'pages/footer.php'){
        $this->header = $header;
        $this->file = $file;
        $this->footer = $footer;
    }

    public function setParam($arr){
        $this->param = $arr;
    }

    public function render(){
        include($this->header);
        include('pages/' . $this->file);
        include($this->footer);
    }



}

?>