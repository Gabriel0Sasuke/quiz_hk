<?php
session_start();
if(!isset($_GET['id'])){
    $_SESSION['msg_id'] = 1;
    header("Location: ../../pages/paginasEdina/table_inimigo.php");
    exit();
}else{
    require_once '../connection.php';
    try{
        $id = (int)$_GET['id'];
        $sql = "DELETE FROM inimigos WHERE ini_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        if($stmt->affected_rows > 0){
            $_SESSION['msg_id'] = 0;
        }else{
            throw new Exception("Nenhum registro encontrado para deletar.");
        }
    }catch(Exception $e){
        $_SESSION['msg_id'] = 2;
    }finally{
        $stmt->close();
        $conn->close();
        header("Location: ../../pages/paginasEdina/table_inimigo.php");
        exit();
    }
}
?>