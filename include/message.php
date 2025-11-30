<?php
if (!isset($baseUrl)) {
    $includeDir = dirname(__FILE__);
    require_once $includeDir . '/../scripts/caminho.php';
}

if (!isset($_SESSION['message'])) {
    return;
}

$msg_id = $_SESSION['msg_id'] ?? -1;
$input_target = '';
$icon = 'error';  
$title = 'Ops!';

switch ($msg_id) {
    case 0:
        $input_target = 'email';
        break;
    case 1:
        $input_target = 'password';
        break;
    case 2:
        $input_target = 'confirm-password';
        break;
    case 3:
        $icon = 'success';
        $title = 'Sucesso!';
        break;
}

$mensagem = $_SESSION['message'];
?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
    .input-error {
        border: 2px solid #dc3545 !important;
        box-shadow: 0 0 5px rgba(220, 53, 69, 0.5);
        animation: shake 0.5s; 
    }
    
    @keyframes shake {
        0% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        50% { transform: translateX(5px); }
        75% { transform: translateX(-5px); }
        100% { transform: translateX(0); }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        Swal.fire({
            icon: '<?php echo $icon; ?>',
            title: '<?php echo $title; ?>',
            text: '<?php echo $mensagem; ?>',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Entendi'
        });

        <?php if (!empty($input_target)): ?>
            const inputAlvo = document.getElementById('<?php echo $input_target; ?>');
            const labelAlvo = document.getElementById('label<?php echo $input_target; ?>');

            if (inputAlvo) {
                inputAlvo.classList.add('input-error');
                
                inputAlvo.addEventListener('focus', function() {
                    this.classList.remove('input-error');
                    if(labelAlvo) labelAlvo.style.color = ''; 
                });
            }
            
            if (labelAlvo) {
                labelAlvo.style.color = '#dc3545';
            }
        <?php endif; ?>
    });
</script>

<?php
unset($_SESSION['message']);
unset($_SESSION['msg_id']);
?>