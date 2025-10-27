<?php
session_start();
require_once '../scripts/connection.php';

$sql = "SELECT p.id AS id_prova, CONCAT(a.nome, ' ', a.sobrenome) AS nome_completo, p.pontuacao AS nota, p.data_prova AS data FROM provas p INNER JOIN alunos a ON p.aluno_id = a.id;";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resultados = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="shortcut icon" href="../assets/img/ui/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/resultado.css">
</head>
<body>
    <?php require_once '../include/header.php'; ?>
    <main>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Nota</th>
            <th>Data</th>
            <th  colspan="2">Ações</th>
        </tr>
        <?php while($row = $resultados->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id_prova']; ?></td>
            <td><?php echo $row['nome_completo']; ?></td>
            <td><?php echo $row['nota']; ?></td>
            <td><?php echo $row['data']; ?></td>
            <td><a href="editar.php?id=<?php echo $row['id_prova']; ?>"><button class="btn">Editar</button></a></td>
            <td><a href="../scripts/deletar.php?id=<?php echo $row['id_prova']; ?>"><button class="btn">Deletar</button></a></td>
        </tr>
        <?php } ?>
    </table>
    </main>
    <?php require_once '../include/footer.php'; ?>
</body>
</html>