<?php 
session_start();

if(!isset($_SESSION['user_name'])){
    header('Location: /controle_estoque/login/');
    exit();
}

?>