<?php
if (!isset($baseUrl)) {
    $includeDir = dirname(__FILE__);
    require_once $includeDir . '/../scripts/caminho.php';
}
?>

<link rel="stylesheet" href="<?= $baseUrl ?>assets/css/footer.css">
<footer>
    <p>&copy; 2025 Quiz sobre Hollow Knight. Todos os direitos reservados.</p>
    <p>Feito por Gabriel Portes, 2DSA</p>
    <p>Visite o Site Oficial: <a href="https://hollowknight.com" target="_blank">hollowknight.com</a></p>
</footer>