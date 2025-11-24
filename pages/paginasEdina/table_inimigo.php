<?php
session_start();
require_once '../../scripts/connection.php';

$sql = "SELECT * FROM inimigos;";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resultados = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inimigos</title>
    <link rel="shortcut icon" href="../../assets/img/ui/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/tabela.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?php require_once '../../include/header.php'; ?>
    <main>
        <?php 
        if($resultados->num_rows == 0){
            echo "<h2 style='margin-top: 5vh;'>Nenhum inimigo cadastrado.</h2>";
        } else {
            
        ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome do Inimigo</th>
            <th>Tipo do Inimigo</th>
            <th>Pontos de Vida</th>
            <th>Pontos de dano</th>
            <th>Ação</th>
        </tr>
        <?php while($row = $resultados->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['ini_id']; ?></td>
            <td><?php echo $row['ini_nome']; ?></td>
            <td><?php echo $row['ini_tipo']; ?></td>
            <td><?php echo $row['ini_vida']; ?></td>
            <td><?php echo $row['ini_dano']; ?></td>
            <td><button class="btn" onclick="confirmarDelete(<?php echo $row['ini_id']; ?>)">Deletar</button></td>
        </tr>
        <?php } ?>
    </table>
    <?php } ?>
    </main>
    <?php require_once '../../include/footer.php'; ?>

    <script>
        function confirmarDelete(id){
            Swal.fire({
  title: "Tem certeza?",
  text: "Você não poderá reverter isso!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Sim, deletar!",
  cancelButtonText: "Cancelar"
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href = "../../scripts/scriptsEdina/deletar_inimigo.php?id=" + id;
  }
});
        }
    </script>
    <script>
        <?php if(isset($_SESSION['msg_id'])) { 
            $msg_id = $_SESSION['msg_id'];
            unset($_SESSION['msg_id']);
            switch($msg_id){
                case 0:
                    echo   
                    'Swal.fire({
                        title: "Sucesso!",
                        text: "Inimigo deletado com sucesso.",
                        icon: "success"
                    });';
                    break;
                case 1:
                    echo 'Swal.fire({
                        title: "Erro!",
                        text: "ID do inimigo não fornecido.",
                        icon: "error"
                    });';
                    break;
                case 2:
                    echo 'Swal.fire({
                        title: "Erro!",
                        text: "Erro ao deletar o inimigo.",
                        icon: "error"
                    });';
                    break;
                default:
                    echo 'Swal.fire({
                        title: "Erro!",
                        text: "Ocorreu um erro desconhecido.",
                        icon: "error"
                    });';
            }
        } ?>
    </script>
</body>
</html>