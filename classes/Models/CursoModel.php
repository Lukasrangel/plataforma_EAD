<?php

namespace Models;

class CursoModel {


    public static function pegaCurso($slug){
        $sql = \Mysql::conectar()->prepare("SELECT * FROM `EAD.cursos` WHERE `slug` = ?");
        $sql->execute(array($slug));
        return $sql->fetch();
    }

    public static function pegaModulos($id_curso){
        $sql = \Mysql::conectar()->prepare("SELECT * FROM `EAD.modulos` WHERE `id_curso` = ?");
        $sql->execute(array($id_curso));
        $modulos = $sql->fetchAll();

        return $modulos;
    }

    


}

?>