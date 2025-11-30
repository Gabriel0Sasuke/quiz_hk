<?php
session_start();
require_once '../../scripts/caminho.php';
require_once '../../scripts/connection.php';

$sql = "SELECT 
    npcs.npc_nome, 
    npcs.npc_funcao, 
    npcs.npc_resumo, 
    areas.area_nome,
    areas.area_descricao
FROM npcs
INNER JOIN localizacao_npc ON npcs.npc_id = localizacao_npc.npc_id
INNER JOIN areas ON localizacao_npc.area_id = areas.area_id;";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resultados = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localização de NPCs</title>
    <link rel="shortcut icon" href="<?= $baseUrl ?>assets/img/ui/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="<?= $baseUrl ?>assets/css/tabela.css">
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
            <th>NPC</th>
            <th>Função</th>
            <th>Resumo</th>
            <th>Encontrado em</th>
            <th>Descrição da Área</th>
        </tr>
        <?php while($row = $resultados->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['npc_nome']; ?></td>
            <td><?php echo $row['npc_funcao']; ?></td>
            <td><?php echo $row['npc_resumo']; ?></td>
            <td><?php echo $row['area_nome']; ?></td>
            <td><?php echo $row['area_descricao']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <?php } ?>
    </main>
    <?php require_once '../../include/footer.php'; ?>
</body>
</html>
