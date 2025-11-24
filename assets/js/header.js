let baseURL = window.location.origin + '/quiz_hk/';

function link(item) {
    const rootPath = baseURL.replace(window.location.origin, '');
    const path = window.location.pathname;
    const atRoot = path === rootPath || path === rootPath + 'index.php';

    switch (item) {
        case 1:
            if (atRoot) {
                window.location.reload();
            } else {
                window.location.href = baseURL;
            }
            break;
        case 2:
            window.location.href = baseURL + 'pages/cadastro.php';
            break;
        case 3:
            window.location.href = baseURL + 'pages/login.php';
            break;
        case 4:
            window.location.href = baseURL + 'pages/prova.php';
            break;
        case 5:
            window.location.href = baseURL + 'pages/resultado.php';
            break;
        case 6:
            window.location.href = baseURL + 'pages/paginasEdina/cadastro_inimigo.php';
            break;
        case 7:
            window.location.href = baseURL + 'pages/paginasEdina/table_inimigo.php';
            break;
        case 8:
            window.location.href = baseURL + 'pages/paginasEdina/table_area.php';
            break;
        case 9:
            window.location.href = baseURL + 'pages/paginasEdina/table_npc.php';
            break;
        case 10:
            window.location.href = baseURL + 'pages/paginasEdina/table_amuleto.php';
            break;
        case 11:
            window.location.href = baseURL + 'pages/paginasEdina/inner_npc.php';
            break;
        case 12:
            window.location.href = baseURL + 'pages/paginasEdina/inner_amuleto.php';
            break;
        case 13:
            window.location.href = baseURL + 'pages/paginasEdina/inner_inimigo.php';
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