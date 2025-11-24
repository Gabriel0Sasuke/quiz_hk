<?php
session_start();
require_once '../../scripts/connection.php';

$sql = "SELECT 
    inimigos.ini_nome, 
    inimigos.ini_tipo, 
    inimigos.ini_vida, 
    inimigos.ini_dano, 
    areas.area_nome,
    areas.area_descricao
FROM inimigos
INNER JOIN localizacao_inimigo ON inimigos.ini_id = localizacao_inimigo.ini_id
INNER JOIN areas ON localizacao_inimigo.area_id = areas.area_id;";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resultados = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localização de Inimigos</title>
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
            <th>Inimigo</th>
            <th>Tipo</th>
            <th>Vida</th>
            <th>Dano</th>
            <th>Área</th>
            <th>Descrição da Área</th>
        </tr>
        <?php while($row = $resultados->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['ini_nome']; ?></td>
            <td><?php echo $row['ini_tipo']; ?></td>
            <td><?php echo $row['ini_vida']; ?></td>
            <td><?php echo $row['ini_dano']; ?></td>
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
