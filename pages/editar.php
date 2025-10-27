<?php
session_start();

require_once '../scripts/connection.php';
$stmt = $conn->prepare("SELECT aluno_id, pontuacao FROM provas WHERE id = ?");
$stmt->bind_param("i", $_GET['id']);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Resultado</title>
    <link rel="shortcut icon" href="../assets/img/ui/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/editar.css">
</head>
<body>
    <?php require_once '../include/header.php'; ?>
    <main>

        <form action="../scripts/proc_editar.php" method="POST">
            <h2 id="titulo">Editar Resultado</h2>
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <div class="campo">
            <label for="id_aluno">ID do Aluno</label>
            <input type="number" id="id_aluno" name="id_aluno" value="<?php echo $data['aluno_id']; ?>">
        </div>
        <div class="campo">
            <label for="nota">Nota</label>
            <input type="number" id="nota" name="nota" value="<?php echo $data['pontuacao']; ?>">
        </div>
            <button type="submit">Salvar</button>
        </form>
    </main>
    <?php require_once '../include/message.php'; ?>
    <?php require_once '../include/footer.php'; ?>
</body>
</html>