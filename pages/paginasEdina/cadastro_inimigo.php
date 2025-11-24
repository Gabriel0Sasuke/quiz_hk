<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Inimigo</title>
    <link rel="shortcut icon" href="../../assets/img/ui/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/cadastro.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?php require_once '../../include/header.php'; ?>
    <main>

        <form action="../../scripts/scriptsEdina/cadastrar_inimigo.php" method="POST">
            <h2 id="titulo">Cadastro de Inimigo</h2>
        <div class="campo">
            <label for="ini_nome">Nome do inimigo</label>
            <input type="text" id="ini_nome" name="ini_nome" required minlength="5" maxlength="100">
        </div>
        <div class="campo">   
            <label for="ini_tipo">Tipo do inimigo</label>
            <select name="ini_tipo" id="ini_tipo">
                <option value="Comum" selected>Comum</option>
                <option value="Mini-Boss">Mini-Boss</option>
                <option value="Boss">Boss</option>
            </select>
        </div>
        <div class="campo">
            <label for="ini_vida" id="labelvida">Vida do Inimigo</label>
            <input type="number" id="ini_vida" name="ini_vida" required min="1">
        </div>
        <div class="campo">
            <label for="ini_dano" id="labeldano">Dano do inimigo</label>
            <input type="number" id="ini_dano" name="ini_dano" required min="1">
        </div>
            <button type="submit" id="finalizar">Cadastrar</button>
        </form>
    </main>
    <?php if (isset($_SESSION['msg_id'])){ ?>
        <?php $msg_id = (int)$_SESSION['msg_id']; unset($_SESSION['msg_id']); ?>
        <script>
        document.addEventListener('DOMContentLoaded', function(){
            switch (<?= $msg_id ?>) {
                case 3:
                    Swal.fire({
                        title: 'Inimigo cadastrado com sucesso!',
                        icon: 'success',
                        confirmButtonText: 'Ok'
                    });
                    break;
                case 4:
                    Swal.fire({
                        title: 'Erro!',
                        text: 'Erro ao cadastrar inimigo. Tente novamente.',
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    });
                    break;
                default:
                    Swal.fire({
                        title: 'Erro desconhecido!',
                        text: 'Ocorreu um erro desconhecido. Tente novamente.',
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    });
                    break;
            }
        });
        </script>
    <?php } ?>
    <?php require_once '../../include/footer.php'; ?>
</body>
</html>