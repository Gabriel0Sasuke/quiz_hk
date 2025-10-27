<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'connection.php';

    $id = $_POST['id'];
    $id_aluno = $_POST['id_aluno'];
    $nota = $_POST['nota'];

    $stmt = $conn->prepare("UPDATE provas SET aluno_id = ?, pontuacao = ? WHERE id = ?");
    $stmt->bind_param("iii", $id_aluno, $nota, $id);

    if ($stmt->execute()) {
        header("Location: ../pages/resultado.php");
        exit();
    } else {
        echo "Erro ao atualizar o resultado: " . $conn->error;
    }
}
?>