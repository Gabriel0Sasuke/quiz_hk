<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../connection.php';

    $ini_nome = $_POST['ini_nome'];
    $ini_tipo = $_POST['ini_tipo'];
    $ini_vida = (int)$_POST['ini_vida'];
    $ini_dano = (int)$_POST['ini_dano'];

    try {
        $sql = "INSERT INTO inimigos (ini_nome, ini_tipo, ini_vida, ini_dano) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssii", $ini_nome, $ini_tipo, $ini_vida, $ini_dano);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $_SESSION['msg_id'] = 3; 
        } else {
            throw new Exception("Falha ao cadastrar inimigo.");
        }
    } catch (Exception $e) {
        $_SESSION['msg_id'] = 4;
    } finally {
        $stmt->close();
        $conn->close();
        header("Location: ../../pages/paginasEdina/cadastro_inimigo.php");
        exit();
    }
} else {
    header("Location: ../../pages/paginasEdina/cadastro_inimigo.php");
    exit();
}