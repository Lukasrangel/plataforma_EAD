<?php

namespace Models;


class PerfilModel {


    public function pegaDados(){
        $sql = \Mysql::conectar()->prepare("SELECT `cpf`,`nome` FROM `EAD.alunos` WHERE `id` = ?");
        $sql->execute(array($_SESSION['id']));
        return $sql->fetch();
    }

    public function update($post){
        $query = "UPDATE `EAD.alunos` SET `nome` = ?, `cpf` = ? ";
        $arr = [$post['nome'], $post['cpf']];
        if($post['senha_nova'] != ""){
            $query .= ", `senha` = ?";
            array_push($arr, $post['senha_nova']);
        }

        array_push($arr, $_SESSION['id']);
        $query .= "WHERE `id` = ?";

        $sql = \Mysql::conectar()->prepare($query);
        $sql->execute($arr);
    }
}

?>