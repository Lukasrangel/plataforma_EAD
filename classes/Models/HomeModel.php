<?php

namespace Models;

class HomeModel {

    public static function meus_cursos($session){
        $sql = \Mysql::conectar()->prepare("SELECT * FROM `EAD.cursos_controle` WHERE `aluno_id` = ?");
        $sql->execute(array($session));
        $cursos = $sql->fetchAll();
        return $cursos;
    }

    public static function adicionar_curso($id){

        $sql = \Mysql::conectar()->prepare("SELECT * FROM `EAD.cursos_controle` WHERE `curso_id` = ? AND `aluno_id` = ?");
        $sql->execute(array($id,$_SESSION['id']));
        
        if($sql->rowCount() > 0){
            echo "<script> alert('Você já possui este curso!')</script>";
        } else {
            $sql = \Mysql::conectar()->prepare("INSERT INTO `EAD.cursos_controle` VALUES (null,?,?)");
            $sql->execute(array($id, $_SESSION['id']));
        }

        
    }

}

?>