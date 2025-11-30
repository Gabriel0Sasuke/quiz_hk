<?php
    session_start();
    require_once '../scripts/caminho.php';
    require_once '../scripts/connection.php';
    $aluno = $conn->query("SELECT nome, sobrenome FROM alunos WHERE id = " . (int)$_SESSION['user_id']);
    $row = $aluno ? $aluno->fetch_assoc() : null;
    $nome = $row ? ($row['nome'] . ' ' . $row['sobrenome']) : '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
    <link rel="shortcut icon" href="<?= $baseUrl ?>assets/img/ui/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="<?= $baseUrl ?>assets/css/resultado_prova.css">
</head>
<body>
    <?php require_once '../include/header.php'; ?>
    <main>
        <?php if(!isset($_SESSION['msg-id'])) { ?>
        <div id="resultado">
            <h1>Parabéns por concluir a prova <?php echo $nome; ?>!</h1>
            <div id="caixa">
                <p class="caixaTxt">Sua nota foi de</p>
                <p class="caixaTxt"><?php echo $_SESSION['score']; ?>/10</p>
            </div>
        </div>
        <div class="Resposta">
            <h2>Resultado</h2>
            <p class="respostas"><?php if($_SESSION['resposta1']) { echo 'Parabéns, você acertou a pergunta 1!'; }else{ echo 'você errou a pergunta 1, a Resposta Correta era a Opção B'; } ?>
            </p>
            <p class="respostas"><?php if($_SESSION['resposta2']) { echo 'Parabéns, você acertou a pergunta 2!'; }else{ echo 'você errou a pergunta 2, a Resposta Correta era a Opção B'; } ?>
            </p>
            <p class="respostas"><?php if($_SESSION['resposta3']) { echo 'Parabéns, você acertou a pergunta 3!'; }else{ echo 'você errou a pergunta 3, a Resposta Correta era a Opção B'; } ?>
            </p>
            <p class="respostas"><?php if($_SESSION['resposta4']) { echo 'Parabéns, você acertou a pergunta 4!'; }else{ echo 'você errou a pergunta 4, a Resposta Correta era a Opção A'; } ?>
            </p>
            <p class="respostas"><?php if($_SESSION['resposta5']) { echo 'Parabéns, você acertou a pergunta 5!'; }else{ echo 'você errou a pergunta 5, a Resposta Correta era a Opção C'; } ?>
            </p>
            <p class="respostas"><?php if($_SESSION['resposta6']) { echo 'Parabéns, você acertou a pergunta 6!'; }else{ echo 'você errou a pergunta 6, a Resposta Correta era a Opção D'; } ?>
            </p>
            <p class="respostas"><?php if($_SESSION['resposta7']) { echo 'Parabéns, você acertou a pergunta 7!'; }else{ echo 'você errou a pergunta 7, a Resposta Correta era a Opção B'; } ?>
            </p>
            <p class="respostas"><?php if($_SESSION['resposta8']) { echo 'Parabéns, você acertou a pergunta 8!'; }else{ echo 'você errou a pergunta 8, a Resposta Correta era a Opção A'; } ?>
            </p>
            <p class="respostas"><?php if($_SESSION['resposta9']) { echo 'Parabéns, você acertou a pergunta 9!'; }else{ echo 'você errou a pergunta 9, a Resposta Correta era a Opção B'; } ?>
            </p>
            <p class="respostas"><?php if($_SESSION['resposta10']) { echo 'Parabéns, você acertou a pergunta 10!'; }else{ echo 'você errou a pergunta 10, a Resposta Correta era a Opção D'; } ?>
            </p>
        </div>
            <button onclick="window.location.href = '<?= $baseUrl ?>'">Retornar ao início</button>
        <?php }else { ?>
            <div id="warning">
                Ops, erro ao salvar sua prova
                <button id="btn-warning" onclick="window.location.href = 'prova.php'">Tente Novamente</button>
            </div>
        <?php } ?>
    </main>
    <?php require_once '../include/footer.php'; ?>
</body>
</html>