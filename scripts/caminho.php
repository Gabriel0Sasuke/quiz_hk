<?php
$currentPath = $_SERVER['SCRIPT_NAME'];

if (strpos($currentPath, '/pages/paginasEdina/') !== false) {
    $baseUrl = dirname(dirname(dirname($currentPath))) . '/';
} elseif (strpos($currentPath, '/scripts/scriptsEdina/') !== false) {
    $baseUrl = dirname(dirname(dirname($currentPath))) . '/';
} elseif (strpos($currentPath, '/pages/') !== false || strpos($currentPath, '/scripts/') !== false) {
    $baseUrl = dirname(dirname($currentPath)) . '/';
} else {
    $baseUrl = dirname($currentPath) . '/';
}

if ($baseUrl !== '/' && substr($baseUrl, -1) !== '/') {
    $baseUrl .= '/';
}

if ($baseUrl === '//') {
    $baseUrl = '/';
}
?>
