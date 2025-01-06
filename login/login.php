<?php 

require_once '../core/core.php';
session_start();

if(isset($_POST['email'], $_POST['senha'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $sql->execute([$email]);
    $user = $sql->fetch(PDO::FETCH_ASSOC);

    if($user){
        if(password_verify($senha, $user['senha'])){

            /// LOGIN BEM SUCEDIDO

            $_SESSION['user_id'] = $user
            
        }
    }
}
?>