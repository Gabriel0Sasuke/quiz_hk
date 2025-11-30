<?php
session_start();
require_once 'scripts/caminho.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="shortcut icon" href="<?= $baseUrl ?>assets/img/ui/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="<?= $baseUrl ?>assets/css/index.css">
</head>
<body>
    <?php require_once 'include/header.php'; ?>
    <main>
<h2>Aula: A Jornada por Hallownest</h2>

<p>Bem-vindo à nossa aula sobre o universo de Hollow Knight. Este jogo, desenvolvido pelo estúdio independente Team Cherry, é um dos exemplos </p><img class="content" src="assets/img/content/hollow_knight.jpg" alt="hollow knight" draggable="false" oncontextmenu="return false;"> <p>mais aclamados do gênero "Metroidvania". Mas o que o torna tão especial? Vamos explorar os pilares deste mundo sombrio e fascinante.</p>

<p><h3>1. O Gênero: O que é um "Metroidvania"?</h3>
Hollow Knight segue um estilo de design de jogo que combina elementos das séries Metroid e Castlevania. As características principais são
<br>
<h4>Mundo Aberto Interconectado</h4> Um mapa vasto e contínuo, onde diferentes áreas se conectam de maneiras complexas.
<br>
<h4>Exploração Não-Linear</h4> Embora exista um caminho principal, os jogadores são incentivados a explorar livremente.
<br>
<h4>Habilidades e Barreiras (Gating):</h4> O progresso é frequentemente bloqueado por obstáculos que só podem ser superados após o jogador adquirir uma nova habilidade (como um pulo duplo, uma corrida no ar ou a capacidade de nadar em ácido).
</p>

<p><h3>2. A História: O Reino Caído de Hallownest</h3></p> <img class="content" src="assets/img/content/map.jpg" alt="Mapa de Hallownest" draggable="false" oncontextmenu="return false;"><p>
A história de Hollow Knight não é contada de forma direta. Ela é descoberta através do ambiente, de diálogos curtos com NPCs (personagens não-jogáveis) e da descrição de itens.
<br>
O jogo se passa em Hallownest, um reino de insetos outrora próspero que caiu em desgraça. A causa da ruína é uma "Infecção" misteriosa que rouba a mente e a vontade dos seus habitantes, tornando-os agressivos e zumbificados.
<br>
O protagonista é simplesmente conhecido como "O Cavaleiro" (The Knight). Ele é um "Vessel" (Receptáculo), um ser criado com o propósito de conter a fonte dessa infecção.</p>

<p><h3>3. O Antagonista: A Radiância</h3>
A fonte da infecção é uma entidade antiga e poderosa conhecida como A Radiância (The Radiance). Ela é um ser de luz que foi esquecido depois que o Rei Pálido (o monarca de Hallownest) chegou e deu senciência (consciência) aos insetos do reino, que passaram a adorá-lo.

Presa e esquecida, a Radiância começou a assombrar os sonhos dos insetos, espalhando a infecção como uma forma de vingança e para retomar o controle.

O Rei Pálido, na tentativa de salvar seu reino, selou a Radiância dentro de um "Vessel" — o Hollow Knight original. Esse receptáculo foi trancado dentro do Ovo Negro (The Black Egg). No entanto, o selo enfraqueceu, e a infecção vazou, levando o reino à ruína. A missão do seu personagem (o Cavaleiro) é substituir esse receptáculo falho ou destruir a infecção de vez.</p>

<p><h3>4. Mecânicas Principais do Jogo</h3>
Para sobreviver em Hallownest, o jogador precisa dominar algumas mecânicas centrais.
<br>
</p><img class="content" src="assets/img/content/knight_vs_hornet.jpeg" alt="Cavaleiro Vs Hornet" draggable="false" oncontextmenu="return false;"><p>
<h4>O Ferrão e a Alma</h4>
O combate é baseado em ataques corpo a corpo com o "Ferrão" (Nail), a arma principal do Cavaleiro e ao atingir inimigos, o Cavaleiro coleta Alma (Soul), um recurso vital. A Alma é armazenada em um medidor e tem dois usos principais:
<br>
Foco (Focus): Gastar Alma para curar os pontos de vida (Máscaras).
<br>
Magias (Spells): Gastar Alma para usar ataques especiais poderosos.
<br>
<h4>A Morte e a Sombra (Shade)</h4>
Hollow Knight é um jogo desafiador. Quando o jogador morre, ele deixa para trás todo o seu dinheiro (Geo) e uma "Sombra" (Shade) no local da morte. O jogador deve retornar a esse local e derrotar sua própria Sombra para recuperar seu Geo e seu poder total de Alma.</p>
<img class="content" src="assets/img/content/charms.png" alt="Amuletos de Hollow Knight" draggable="false" oncontextmenu="return false;">
<p><h4>Amuletos (Charms)</h4>
A personalização do personagem é feita através de Amuletos (Charms). Estes são itens especiais que, quando equipados, oferecem bônus e habilidades passivas (como mais vida, um ferrão mais longo, ataques mais rápidos, etc.). O jogador tem um número limitado de "Entalhes" (Notches) para equipar amuletos, exigindo estratégia na escolha.</p>
<br><br>
<p><h3>5. Personagens Notáveis</h3>
Hallownest é preenchida com personagens memoráveis, mas dois são centrais para a jornada:
<br>
<h4>Hornet</h4>Uma protetora habilidosa de Hallownest, que inicialmente atua como uma rival, testando a força do Cavaleiro. Ela é ágil, usa uma agulha e linha, e possui uma conexão profunda com o reino.
<br>
<h4>O Hollow Knight</h4> O receptáculo original que está selado dentro do Ovo Negro, contendo (ou tentando conter) a Radiância.</p>
    </main>
    <?php require_once 'include/message.php'; ?>
    <?php require_once 'include/footer.php'; ?>
</body>
</html>