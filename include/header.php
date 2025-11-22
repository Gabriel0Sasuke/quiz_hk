<?php
$baseUrl = '/quiz_hk/';
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
	<div class="header-item" onclick="sideBar()">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
  			<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
		</svg>
	</div>
</header>
<aside id="sidebar">
	<nav>
		<h1>Itens de BDII</h1>
	<ul>
		<li onclick="link(6)" class="sidebar-item">Cadastrar Inimigos</li>
		<div class="barra"></div>
		<li onclick="link(7)" class="sidebar-item">Tabela Inimigos</li>
		<li onclick="link(8)" class="sidebar-item">Tabela Areas</li>
		<li onclick="link(9)" class="sidebar-item">Tabela NPC</li>
		<li onclick="link(10)" class="sidebar-item">Tabela Amuletos</li>
		<div class="barra"></div>
		<li onclick="link(11)" class="sidebar-item">Consulta Onde Encontrar NPC</li>
		<li onclick="link(12)" class="sidebar-item">Consulta Quem vende o Amuleto</li>
		<li onclick="link(13)" class="sidebar-item">Consulta Onde Encontrar Inimigos</li>
	</ul>
	</nav>
</aside>
<div id="protecao" onclick="sideBar()"></div>

<script src="<?= $baseUrl ?>assets/js/header.js"></script>
