function link(item) {
    const isRoot = window.location.pathname.endsWith('index.php') || window.location.pathname.endsWith('/');

    switch (item) {
        case 1:
            if (isRoot) {
                window.location.reload();
            } else {
                window.location.href = '../index.php';
            }
            break;
        case 2:
            window.location.href = isRoot ? 'pages/cadastro.php' : 'cadastro.php';
            break;
        case 3:
            window.location.href = isRoot ? 'pages/login.php' : 'login.php';
            break;
        case 4:
            window.location.href = isRoot ? 'pages/prova.php' : 'prova.php';
            break;
        case 5:
            window.location.href = isRoot ? 'pages/resultado.php' : 'resultado.php';
            break;
        default:
            break;
    }
}
function sideBar() {
    const sideBar = document.getElementById('sidebar');
    const protecao = document.getElementById('protecao');

    sideBar.classList.toggle('ativo');
    protecao.classList.toggle('protecaoAtiva');
}