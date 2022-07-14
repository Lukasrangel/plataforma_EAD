<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

include('config.php');

//index apresent
$index = new \Controllers\IndexController();

//area aluno
$HomeController = new \Controllers\HomeController();

$cadastrarController = new \Controllers\CadastrarController();

$cursoController = new \Controllers\CursoController();

$aulaController = new \Controllers\AulaController();

//perfil
$perfilController = new \Controllers\PerfilController();

Router::get('/', function() use ($index){
    $index->index();
});
//login_areaAluno
Router::get('/area_aluno', function() use ($HomeController){
    $HomeController->index();
});


Router::post('/area_aluno', function() use ($HomeController){
    $HomeController->logar();
    $HomeController->index();
});

//cadastrar-se
Router::get('/cadastrar', function() use ($cadastrarController){
    $cadastrarController->index();
});

Router::post('/cadastrar', function() use ($cadastrarController){
    $cadastrarController->cadastrar();
    $cadastrarController->index();
});


//logout
Router::get('/sair', function(){
    session_destroy();
    header('Location:' . INITIAL_PATH);
});

//adicionar curso
Router::get('/addCurso', function() use ($HomeController){
    $id = $_GET['id'];
    $HomeController->adicionar_curso($id);
    $HomeController->index();
});

//ir para o curso
Router::get('/cursos/?', function($arr) use ($cursoController){
    $cursoController->index($arr[2]);
});

//aula single
Router::get('/cursos/?/?', function($arr) use ($aulaController){
    $aulaController->index($arr[3],$arr[2]);
});

//perfil aluno 
Router::get('/area_aluno/perfil', function() use ($perfilController){
    $perfilController->index();
});

Router::post('/area_aluno/perfil', function() use ($perfilController){
    $perfilController->index();
});
?>