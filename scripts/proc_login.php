<?php
session_start();
require_once 'caminho.php';
require_once 'connection.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = trim($_POST['email']);
    $senha = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT id, senha FROM alunos WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        if(password_verify($senha, $row['senha'])){
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['message'] = "Login realizado com sucesso!";
            $_SESSION['msg_id'] = 3;
            header("Location: " . $baseUrl);
            exit();
        } else {
            $_SESSION['message'] = "Senha incorreta!";
            $_SESSION['msg_id'] = 1;
            header("Location: " . $baseUrl . "pages/login.php");
            exit();
        }
    } else {
        $_SESSION['message'] = "Email não cadastrado!";
        $_SESSION['msg_id'] = 0;
        header("Location: " . $baseUrl . "pages/login.php");
        exit();
    }
}
?>