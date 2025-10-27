<?php
$baseUrl = '/quiz/';
?>

<link rel="stylesheet" href="<?= $baseUrl ?>assets/css/header.css">

<header>
	<img src="<?= $baseUrl ?>assets/img/ui/logo.svg" alt="Logo" draggable="false" oncontextmenu="return false;" id="logo">
	<h1 id="site-title">Quiz de Hollow Knight</h1>

	<div class="header-item" onclick="link(1)">Home</div>
	<div class="header-item" onclick="link(2)">Cadastro</div>
	<div class="header-item" onclick="link(3)">Login</div>
	<div class="header-item" onclick="link(4)">Prova</div>
	<div class="header-item" onclick="link(5)">Resultado</div>
</header>

<script src="<?= $baseUrl ?>assets/js/header.js"></script>
