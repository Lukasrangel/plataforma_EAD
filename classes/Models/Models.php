<?php

namespace Models;


class Models {

    public static function isLogin(){
        if(isset($_SESSION['logado'])){
            return true;
        } else {
            return false;
        }
    }

    public static function temCurso($curso_id,$aluno_id){
        $sql = \Mysql::conectar()->prepare("SELECT * FROM `EAD.cursos_controle` WHERE `curso_id` = ? AND `aluno_id` = ?");
        $sql->execute(array($curso_id,$aluno_id));
        if($sql->rowCount() == 0){
            return false;
        } else {
            return true;
        }
    }


    public static function logar($post){
        $email = $post['email'];
        $senha = $post['senha'];


        $sql = \Mysql::conectar()->prepare("SELECT * FROM `EAD.alunos` WHERE `email` = ? AND `senha` = ?");
        $sql->execute(array($email,$senha));
        $dados = $sql->fetch();

        if($sql->rowCount() > 0){
            $_SESSION['logado'] = true;
            $_SESSION['aluno'] = $dados['nome'];
            $_SESSION['id'] = $dados['id'];
        } else {
            $_SESSION['logado'] = false;
        }
    }

    public static function alert($operacao, $mensagem){
        if(isset($_POST['acao'])){
            echo "<div class='mensagem " . $operacao . "'> <p>" . $mensagem . " </p></div>";
        } else {
            echo "";
        }
        
   }

   
   public static function cadastrar_aluno($post){
    $nome = $post['nome'];
    $email = $post['email'];
    $senha = $post['senha'];

    $sql = \Mysql::conectar()->prepare("SELECT * FROM `EAD.alunos` WHERE `email` = ?");
    $sql->execute(array($email));
    if($sql->rowCount() > 0){
        return false;
    } else {
        $sql = \Mysql::conectar()->prepare("INSERT INTO `EAD.alunos` VALUES (null,?,?,?)");
        $sql->execute(array($nome,$email,$senha));

        return true;
    }

   }

   public static function cursos(){
    $sql = \Mysql::conectar()->prepare("SELECT * FROM `EAD.cursos`");
    $sql->execute();
    $data = $sql->fetchAll();
    return $data;
   }

   public static function pegaIdCurso($slug){
    $sql = \Mysql::conectar()->prepare("SELECT `id` FROM `EAD.cursos` WHERE `slug` = ?");
    $sql->execute(array($slug));
    return $sql->fetch()['id'];
   }

}

?>