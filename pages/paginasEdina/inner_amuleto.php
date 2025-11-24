<?php
session_start();
require_once '../../scripts/connection.php';

$sql = "SELECT 
    amuletos.amu_nome, 
    amuletos.amu_slot, 
    amuletos.amu_descricao,
    npcs.npc_nome, 
    npcs.npc_resumo
FROM amuletos
INNER JOIN npcs ON amuletos.npc_id = npcs.npc_id;";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resultados = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amuletos e Vendedores</title>
    <link rel="shortcut icon" href="../../assets/img/ui/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/tabela.css">
</head>
<body>
    <?php require_once '../../include/header.php'; ?>
    <main>
        <?php 
        if($resultados->num_rows == 0){
            echo "<h2 style='margin-top: 5vh;'>Nenhum registro encontrado.</h2>";
        } else {
        ?>
    <table>
        <tr>
            <th>Amuleto</th>
            <th>Slots</th>
            <th>Descrição</th>
            <th>Vendido por</th>
            <th>Resumo do NPC</th>
        </tr>
        <?php while($row = $resultados->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['amu_nome']; ?></td>
            <td><?php echo $row['amu_slot']; ?></td>
            <td><?php echo $row['amu_descricao']; ?></td>
            <td><?php echo $row['npc_nome']; ?></td>
            <td><?php echo $row['npc_resumo']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <?php } ?>
    </main>
    <?php require_once '../../include/footer.php'; ?>
</body>
</html>
