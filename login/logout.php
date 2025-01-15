<?php 

session_start();
session_unset();
session_destroy();

header('Location: /controle_estoque/login/');
?>