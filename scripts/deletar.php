<?php
session_start();

$id = $_GET['id'];

require_once 'connection.php';

$sql = "DELETE FROM provas WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: ../pages/resultado.php");
exit();