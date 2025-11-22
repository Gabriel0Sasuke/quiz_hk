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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <td><button class="btn" onclick="window.location.href = 'editar.php?id=<?php echo $row['id_prova']; ?>'">Editar</button></td>
            <td><button class="btn" onclick="confirmarDelete(<?php echo $row['id_prova']; ?>)">Deletar</button></td>
        </tr>
        <?php } ?>
    </table>
    </main>
    <?php require_once '../include/footer.php'; ?>

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
    window.location.href = "../scripts/deletar.php?id=" + id;
  }
});
        }
    </script>
    <script>
        <?php if(isset($_SESSION['msg_id'])) { 
            $msg_id = $_SESSION['msg_id'];
            unset($_SESSION['msg_id']);
            switch($msg_id){
                case -1:
                    echo 
                    'Swal.fire({
                        title: "Sucesso!",
                        text: "Edição realizada com sucesso.",
                        icon: "success"
                    });';
                    break;
                case 0:
                    echo   
                    'Swal.fire({
                        title: "Sucesso!",
                        text: "Resultado Deletado com sucesso.",
                        icon: "success"
                    });';
                    break;
                case 1:
                    echo 'Swal.fire({
                        title: "Erro!",
                        text: "ID do resultado não fornecido.",
                        icon: "error"
                    });';
                    break;
                case 2:
                    echo 'Swal.fire({
                        title: "Erro!",
                        text: "Erro ao deletar o resultado.",
                        icon: "error"
                    });';
                    break;
                case 3:
                    echo 'Swal.fire({
                        title: "Erro!",
                        text: "Erro ao atualizar o resultado.",
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