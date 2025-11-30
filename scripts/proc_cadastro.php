<?php
session_start();
require_once 'caminho.php';
require_once 'connection.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = trim($_POST['name']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['password']);
    $sobrenome = trim($_POST['sobrenome']);

    if($conn->query("SELECT id FROM alunos WHERE email = '$email'")->num_rows > 0){
        $_SESSION['message'] = "Email já cadastrado!";
        $_SESSION['msg_id'] = 0;
        header("Location: " . $baseUrl . "pages/cadastro.php");
        exit();

    } else if (empty($senha) || strlen($senha) < 8){
        $_SESSION['message'] = "Senha inválida! Deve conter ao menos 8 caracteres.";
        $_SESSION['msg_id'] = 1;
        header("Location: " . $baseUrl . "pages/cadastro.php");
        exit();
    } else if ($senha !== trim($_POST['confirm-password'])){
        $_SESSION['message'] = "As senhas não coincidem!";
        $_SESSION['msg_id'] = 2;
        header("Location: " . $baseUrl . "pages/cadastro.php");
        exit();
    } else {
        $senha = password_hash($senha, PASSWORD_BCRYPT);
        $stmt = $conn->prepare("INSERT INTO alunos (nome, sobrenome, email, senha) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nome, $sobrenome, $email, $senha);
        $stmt->execute();
        if($stmt->affected_rows > 0){
            $_SESSION['message'] = "Cadastro realizado com sucesso!";
            $_SESSION['msg_id'] = 3;
            header("Location: " . $baseUrl);
            exit();
        } else {
            $_SESSION['message'] = "Erro ao cadastrar. Tente novamente.";
            $_SESSION['msg_id'] = 4;
            header("Location: " . $baseUrl . "pages/cadastro.php");
            exit();
        }
    }

}
?>