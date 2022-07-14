<?php

namespace Models;

class AulaModel {

    public static function pegaAula($slug){
        $sql = \Mysql::conectar()->prepare("SELECT * FROM `EAD.aulas` WHERE `slug` = ?");
        $sql->execute(array($slug));
        return $sql->fetch();
    }

    public static function pegaModulo($id){
        $sql = \Mysql::conectar()->prepare("SELECT * FROM `EAD.modulos` WHERE `id` = ?");
        $sql->execute(array($id));
        return $sql->fetch();
    }

    public static function proximaAula($order_aula, $curso_id){
        $order_aula++;
        $sql = \Mysql::conectar()->prepare("SELECT `slug` FROM `EAD.aulas` WHERE `order_aula` > ? AND `curso_id` = ?");
        $sql->execute(array($order_aula,$curso_id));
        if($sql->rowCount() > 0){
            return $sql->fetch();
        } else {
            return false;
        }

    }

    public static function aulaAnterior($order_aula, $curso_id){
        $order_aula = $order_aula - 1;
        $sql = \Mysql::conectar()->prepare("SELECT `slug` FROM `EAD.aulas` WHERE `order_aula` = ? AND `curso_id` = ?");
        $sql->execute(array($order_aula,$curso_id));
        if($sql->rowCount() > 0){
            return $sql->fetch();
        } else {
            return false;
        }
    }

    public static function aulaAssistida($aluno_id,$aula_id){

        $sql = \Mysql::conectar()->prepare("SELECT `status` FROM `EAD.aulas_assistidas` WHERE `aluno_id` = ? AND `aula_id` = ?");
        $sql->execute(array($aluno_id,$aula_id));

        $status = $sql->fetch();

       
        if($sql->rowCount() > 0 && $status['status'] == 1){
            return true;
        } elseif ($sql->rowCount() > 0 && $status['status'] == 0){
            return false;
        } elseif($sql->rowCount() == 0) {
            return false;
        }

    }

    public static function update_status_aula($aluno_id,$aula_id,$status){
        $sql = \Mysql::conectar()->prepare("UPDATE `EAD.aulas_assistidas` SET `status` = ? WHERE `aluno_id` = ? AND `aula_id` = ?");
        $sql->execute(array($status, $aluno_id,$aula_id));

    }

    public static function insert_aula_assistida($aula_id,$aluno_id,$id_curso){
        $sql = \Mysql::conectar()->prepare("INSERT INTO `EAD.aulas_assistidas` VALUES (null,?,?,?,?)");
        $sql->execute(array($aula_id,$aluno_id,$id_curso,1));
    }
}

?>