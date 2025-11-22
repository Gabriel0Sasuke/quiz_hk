<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'connection.php';

    $id = $_POST['id'];
    $id_aluno = $_POST['id_aluno'];
    $nota = $_POST['nota'];
    try{
    $stmt = $conn->prepare("UPDATE provas SET aluno_id = ?, pontuacao = ? WHERE id = ?");
    $stmt->bind_param("iii", $id_aluno, $nota, $id);

    if ($stmt->execute()) {
        $_SESSION['msg_id'] = -1;
    } else {
        throw new Exception("Erro ao atualizar o resultado: " . $conn->error);
    }
}catch(Exception $e){
    $_SESSION['msg_id'] = 3;
} finally {
    $stmt->close();
    $conn->close();
    header("Location: ../pages/resultado.php");
    exit();
}
}
?>