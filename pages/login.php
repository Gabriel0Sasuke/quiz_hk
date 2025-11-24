<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="../assets/img/ui/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
    <?php require_once '../include/header.php'; ?>
    <main>
        <?php if (!isset($_SESSION['user_id'])) { ?>
        <form action="../scripts/proc_login.php" method="POST">
            <h2 id="titulo">Login</h2>
        <div class="campo">
            <label for="email" id="labelemail">Email</label>
            <input type="email" id="email" name="email" required minlength="11">
        </div>
        <div class="campo">
            <label for="password" id="labelpassword">Senha</label>
            <input type="password" id="password" name="password" required>
        </div>
            <button type="submit" id="finalizar">Fazer Login</button>
        </form>
        <?php } else { ?>
           <div id="erro">
            <h2 id="titulo">Você já está logado!</h2>
            <button id="finalizar" onclick="location.href='../index.php'">Ir para o Início</button>
            <button id="finalizar" onclick="location.href='../scripts/logout.php'">Deslogar</button>
           </div>
        <?php } ?>
    </main>
    <?php require_once '../include/message.php'; ?>
    <?php require_once '../include/footer.php'; ?>
</body>
</html>