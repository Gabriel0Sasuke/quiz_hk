function link(item) {
    if (item === 1) {
        if (window.location.pathname.endsWith('index.php') || window.location.pathname.endsWith('/')) {
            window.location.reload();
        } else {
            window.location.href = '../index.php';
        }
    } else if (item === 2) {
        if (window.location.pathname.endsWith('index.php') || window.location.pathname.endsWith('/')) {
            window.location.href = 'pages/cadastro.php';
        } else {
            window.location.href = 'cadastro.php';
        }
    } else if (item === 3) {
        if (window.location.pathname.endsWith('index.php') || window.location.pathname.endsWith('/')) {
            window.location.href = 'pages/login.php';
        } else {
            window.location.href = 'login.php';
        }
    } else if (item === 4) {
        if (window.location.pathname.endsWith('index.php') || window.location.pathname.endsWith('/')) {
            window.location.href = 'pages/prova.php';
        } else {
            window.location.href = 'prova.php';
        }
    } else if (item === 5) {
        if (window.location.pathname.endsWith('index.php') || window.location.pathname.endsWith('/')) {
            window.location.href = 'pages/resultado.php';
        } else {
            window.location.href = 'resultado.php';
        }
    }
}