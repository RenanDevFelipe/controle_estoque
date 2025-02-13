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

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['nome'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['theme'] = '';

            echo json_encode(['success' => 'Login bem-sucedido']);
            exit;
            
        }else {
            //Senha ou email incorretos
            echo json_encode(['success' => false, 'error' => 'E-mail e/ou Senha incorretos']);
            exit;
        }
    } else {
        //Usuario não encontrado
        echo json_encode(['sucess' => false, 'error' => 'Usuário não encontrado']);
    }
} else{
    echo json_encode(['success' => false, 'error' => 'Riquisição inválida']);
}
?>