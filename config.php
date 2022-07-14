<?php

session_start();

$autoload = function($class){
    include_once(str_replace('\\','/','classes/' .$class. '.php'));
};

spl_autoload_register($autoload);

define('INITIAL_PATH', 'http://127.0.0.1/plataforma_EAD/');

define('DB', 'portal_noticias');
define('HOST', '127.0.0.1');
define('USER','root');
define('PASS', '');


?>