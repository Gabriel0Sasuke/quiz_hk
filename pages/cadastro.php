<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="shortcut icon" href="../assets/img/ui/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/cadastro.css">
</head>
<body>
    <?php require_once '../include/header.php'; ?>
    <main>

        <form action="../scripts/proc_cadastro.php" method="POST">
            <h2 id="titulo">Cadastro</h2>
        <div class="campo">
            <label for="username">Nome</label>
            <input type="text" id="username" name="name" required minlength="3">
        </div>
        <div class="campo">   
            <label for="sobrenome">Sobrenome</label>
            <input type="text" id="sobrenome" name="sobrenome" required minlength="3">
        </div>
        <div class="campo">
            <label for="email" id="labelemail">Email</label>
            <input type="email" id="email" name="email" required minlength="11">
        </div>
        <div class="campo">
            <label for="password" id="labelpassword">Senha</label>
            <input type="password" id="password" name="password" required minlength="8" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[^A-Za-z0-9]).{8,}$" title="A senha deve ter no mínimo 8 caracteres, incluindo pelo menos 1 letra maiúscula, 1 letra minúscula e 1 caractere especial.">
        </div>
        <div class="campo">
            <label for="confirm-password" id="labelconfirm-password">Confirmar Senha</label>
            <input type="password" id="confirm-password" name="confirm-password" required minlength="8">
        </div>

            <button type="submit">Cadastrar</button>
        </form>
    </main>
    <?php require_once '../include/message.php'; ?>
    <?php require_once '../include/footer.php'; ?>
</body>
</html>