<?php
session_start();
require_once 'caminho.php';
session_destroy();
header("Location: " . $baseUrl);
exit();
?>