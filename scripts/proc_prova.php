<?php
session_start();
require_once 'caminho.php';
require_once 'connection.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $user_id = $_SESSION['user_id'];
    $score = 0;

    $resposta1 = $_POST['pergunta1'];
    $resposta2 = $_POST['pergunta2'];
    $resposta3 = $_POST['pergunta3'];
    $resposta4 = $_POST['pergunta4'];
    $resposta5 = $_POST['pergunta5'];
    $resposta6 = $_POST['pergunta6'];
    $resposta7 = $_POST['pergunta7'];
    $resposta8 = $_POST['pergunta8'];
    $resposta9 = $_POST['pergunta9'];
    $resposta10 = $_POST['pergunta10'];

    if($resposta1 === 'B'){$score++; $_SESSION['resposta1'] = true;} else {$_SESSION['resposta1'] = false;}
    if($resposta2 === 'C'){$score++; $_SESSION['resposta2'] = true;} else {$_SESSION['resposta2'] = false;}
    if($resposta3 === 'B'){$score++; $_SESSION['resposta3'] = true;} else {$_SESSION['resposta3'] = false;}
    if($resposta4 === 'A'){$score++; $_SESSION['resposta4'] = true;} else {$_SESSION['resposta4'] = false;}
    if($resposta5 === 'C'){$score++; $_SESSION['resposta5'] = true;} else {$_SESSION['resposta5'] = false;}
    if($resposta6 === 'D'){$score++; $_SESSION['resposta6'] = true;} else {$_SESSION['resposta6'] = false;}
    if($resposta7 === 'B'){$score++; $_SESSION['resposta7'] = true;} else {$_SESSION['resposta7'] = false;}
    if($resposta8 === 'A'){$score++; $_SESSION['resposta8'] = true;} else {$_SESSION['resposta8'] = false;}
    if($resposta9 === 'B'){$score++; $_SESSION['resposta9'] = true;} else {$_SESSION['resposta9'] = false;}
    if($resposta10 === 'D'){$score++; $_SESSION['resposta10'] = true;} else {$_SESSION['resposta10'] = false;}

    $stmt = $conn->prepare("INSERT INTO provas (aluno_id, pontuacao) VALUES (?, ?)");
    $stmt->bind_param("ii", $user_id, $score);
    $stmt->execute();
    if($stmt->affected_rows > 0){
        $_SESSION['score'] = $score;
        header("Location: " . $baseUrl . "pages/resultado_prova.php");
        exit();
    } else {
        $_SERVER['msg-id'] = 1;
        $_SERVER['msg-text'] = "Erro ao salvar a prova. Tente novamente.";
        header("Location: " . $baseUrl . "pages/resultado_prova.php");
        exit();
    }
}
?>