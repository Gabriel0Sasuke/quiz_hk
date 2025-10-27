<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
    <link rel="shortcut icon" href="../assets/img/ui/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/prova.css">
</head>
<body>
    <?php require_once '../include/header.php'; ?>
    <main>
        <?php if(isset($_SESSION['user_id'])) { ?>
        <form action="../scripts/proc_prova.php" method="POST">
            <h1>Prova</h1>
            <div class="pergunta">
                <h3>1. Qual é o gênero principal do jogo Hollow Knight, conhecido por seu vasto mapa interconectado e aquisição de habilidades?</h3>
                <input type="radio" name="pergunta1" id="pergunta1_opcao1" value="A" required>
                <label for="pergunta1_opcao1">RPG de Turnos</label>
                <br>
                <input type="radio" name="pergunta1" id="pergunta1_opcao2" value="B">
                <label for="pergunta1_opcao2">Metroidvania</label>
                <br>
                <input type="radio" name="pergunta1" id="pergunta1_opcao3" value="C">
                <label for="pergunta1_opcao3">Jogo de Luta</label>
                <br>
                <input type="radio" name="pergunta1" id="pergunta1_opcao4" value="D">
                <label for="pergunta1_opcao4">Simulador de Fazenda</label>
            </div>

            <div class="pergunta">
                <h3>2. Como se chama o reino em ruínas onde se passa a história de Hollow Knight?</h3>
                <input type="radio" name="pergunta2" id="pergunta2_opcao1" value="A" required>
                <label for="pergunta2_opcao1">Lordran</label>
                <br>
                <input type="radio" name="pergunta2" id="pergunta2_opcao2" value="B">
                <label for="pergunta2_opcao2">O Ninho</label>
                <br>
                <input type="radio" name="pergunta2" id="pergunta2_opcao3" value="C">
                <label for="pergunta2_opcao3">Hallownest</label>
                <br>
                <input type="radio" name="pergunta2" id="pergunta2_opcao4" value="D">
                <label for="pergunta2_opcao4">Dirthmouth</label>
            </div>

            <div class="pergunta">
            <h3>3. O protagonista, conhecido como "O Cavaleiro", é descrito na aula como sendo que tipo de ser?</h3>
            <input type="radio" name="pergunta3" id="pergunta3_opcao1" value="A" required>
            <label for="pergunta3_opcao1">Um membro da realeza do Rei Pálido.</label>
            <br>
            <input type="radio" name="pergunta3" id="pergunta3_opcao2" value="B">
            <label for="pergunta3_opcao2">Um "Vessel" (Receptáculo) criado para conter a infecção.</label>
            <br>
            <input type="radio" name="pergunta3" id="pergunta3_opcao3" value="C">
            <label for="pergunta3_opcao3">Um inseto comum que decidiu salvar o reino.</label>
            <br>
            <input type="radio" name="pergunta3" id="pergunta3_opcao4" value="D">
            <label for="pergunta3_opcao4">Um fantasma em busca de vingança.</label>
        </div>

        <div class="pergunta">
            <h3>4. Qual é o nome da entidade que é a fonte original da "Infecção" em Hallownest?</h3>
            <input type="radio" name="pergunta4" id="pergunta4_opcao1" value="A" required>
            <label for="pergunta4_opcao1">A Radiância (The Radiance)</label>
            <br>
            <input type="radio" name="pergunta4" id="pergunta4_opcao2" value="B">
            <label for="pergunta4_opcao2">O Rei Pálido</label>
            <br>
            <input type="radio" name="pergunta4" id="pergunta4_opcao3" value="C">
            <label for="pergunta4_opcao3">O Hollow Knight</label>
            <br>
            <input type="radio" name="pergunta4" id="pergunta4_opcao4" value="D">
            <label for="pergunta4_opcao4">A Sombra (Shade)</label>
        </div>

        <div class="pergunta">
            <h3>5. No jogo, o recurso "Alma" (Soul), coletado ao atingir inimigos, é usado primariamente para:</h3>
            <input type="radio" name="pergunta5" id="pergunta5_opcao1" value="A" required>
            <label for="pergunta5_opcao1">Comprar Amuletos (Charms).</label>
            <br>
            <input type="radio" name="pergunta5" id="pergunta5_opcao2" value="B">
            <label for="pergunta5_opcao2">Abrir portas trancadas.</label>
            <br>
            <input type="radio" name="pergunta5" id="pergunta5_opcao3" value="C">
            <label for="pergunta5_opcao3">Curar (Foco) e usar Magias.</label>
            <br>
            <input type="radio" name="pergunta5" id="pergunta5_opcao4" value="D">
            <label for="pergunta5_opcao4">Conversar com NPCs.</label>
        </div>

        <div class="pergunta">
            <h3>6. Qual é o nome da "moeda" (dinheiro) utilizada no jogo, que é perdida após a morte?</h3>
            <input type="radio" name="pergunta6" id="pergunta6_opcao1" value="A" required>
            <label for="pergunta6_opcao1">Almas</label>
            <br>
            <input type="radio" name="pergunta6" id="pergunta6_opcao2" value="B">
            <label for="pergunta6_opcao2">Ouro</label>
            <br>
            <input type="radio" name="pergunta6" id="pergunta6_opcao3" value="C">
            <label for="pergunta6_opcao3">Essência</label>
            <br>
            <input type="radio" name="pergunta6" id="pergunta6_opcao4" value="D">
            <label for="pergunta6_opcao4">Geo</label>
        </div>

        <div class="pergunta">
            <h3>7. A "personalização" das habilidades do Cavaleiro é feita principalmente através de qual sistema?</h3>
            <input type="radio" name="pergunta7" id="pergunta7_opcao1" value="A" required>
            <label for="pergunta7_opcao1">Subindo de nível (Level Up).</label>
            <br>
            <input type="radio" name="pergunta7" id="pergunta7_opcao2" value="B">
            <label for="pergunta7_opcao2">Equipando Amuletos (Charms) em "Entalhes".</label>
            <br>
            <input type="radio" name="pergunta7" id="pergunta7_opcao3" value="C">
            <label for="pergunta7_opcao3">Trocando o Ferrão por outras armas.</label>
            <br>
            <input type="radio" name="pergunta7" id="pergunta7_opcao4" value="D">
            <label for="pergunta7_opcao4">Escolhendo uma classe no início do jogo.</label>
        </div>

        <div class="pergunta">
            <h3>8. Qual personagem é descrita como uma "protetora de Hallownest" que atua como rival, usando uma agulha e linha?</h3>
            <input type="radio" name="pergunta8" id="pergunta8_opcao1" value="A" required>
            <label for="pergunta8_opcao1">Hornet</label>
            <br>
            <input type="radio" name="pergunta8" id="pergunta8_opcao2" value="B">
            <label for="pergunta8_opcao2">Cornifer</label>
            <br>
            <input type="radio" name="pergunta8" id="pergunta8_opcao3" value="C">
            <label for="pergunta8_opcao3">A Radiância</label>
            <br>
            <input type="radio" name="pergunta8" id="pergunta8_opcao4" value="D">
            <label for="pergunta8_opcao4">Zote</label>
        </div>

        <div class="pergunta">
            <h3>9. De acordo com a aula, o que acontece quando o jogador morre em Hollow Knight?</h3>
            <input type="radio" name="pergunta9" id="pergunta9_opcao1" value="A" required>
            <label for="pergunta9_opcao1">O jogo reinicia do último "save" sem penalidades.</label>
            <br>
            <input type="radio" name="pergunta9" id="pergunta9_opcao2" value="B">
            <label for="pergunta9_opcao2">O jogador deixa uma "Sombra" (Shade) e precisa derrotá-la para recuperar seu Geo.</label>
            <br>
            <input type="radio" name="pergunta9" id="pergunta9_opcao3" value="C">
            <label for="pergunta9_opcao3">O jogador perde permanentemente todos os seus Amuletos.</label>
            <br>
            <input type="radio" name="pergunta9" id="pergunta9_opcao4" value="D">
            <label for="pergunta9_opcao4">O jogador precisa pagar o Rei Pálido para reviver.</label>
        </div>

        <div class="pergunta">
            <h3>10. Onde o "Hollow Knight" original foi selado na tentativa de conter a Infecção?</h3>
            <input type="radio" name="pergunta10" id="pergunta10_opcao1" value="A" required>
            <label for="pergunta10_opcao1">No Palácio Branco.</label>
            <br>
            <input type="radio" name="pergunta10" id="pergunta10_opcao2" value="B">
            <label for="pergunta10_opcao2">No Abismo (The Abyss).</label>
            <br>
            <input type="radio" name="pergunta10" id="pergunta10_opcao3" value="C">
            <label for="pergunta10_opcao3">Na cidade de Dirtmouth.</label>
            <br>
            <input type="radio" name="pergunta10" id="pergunta10_opcao4" value="D">
            <label for="pergunta10_opcao4">No Ovo Negro (The Black Egg).</label>
        </div>
        <button type="submit">Finalizar Prova</button>
        </form>
        <?php }else { ?>
            <div id="warning">
                Você precisa estar logado para acessar esta página.
                <button id="btn-warning" onclick="window.location.href = 'login.php'">Fazer Login</button>
            </div>
        <?php } ?>
    </main>
    <?php require_once '../include/footer.php'; ?>
</body>
</html>