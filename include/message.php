<?php
$baseUrl = '/quiz/';
?>
<link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/message.css">
<?php
 if (isset($_SESSION['message'])) {
    if($_SESSION['msg_id'] == 1){
        echo "<style>
            #password {
                border: 2px solid red !important;
            }
            #labelpassword {
                color: red !important;
            }
        </style>";
    }else if($_SESSION['msg_id'] == 2){
        echo "<style>
            #confirm-password {
                border: 2px solid red !important;
            }#labelconfirm-password {
                color: red !important;
            }
        </style>";
    }else if($_SESSION['msg_id'] == 0){
        echo "<style>
            #email {
                border: 2px solid red !important;
            }
            #labelemail {
                color: red !important;
            }
        </style>";
    }else if($_SESSION['msg_id'] == 3){
        echo "<style>
            .message {
                background-color: #4BB543 !important;
                color: white !important;
            }
        </style>";
}}
if (isset($_SESSION['message'])){ ?>
            <div class="message" onclick="fecharPopup()">
                <?php
                    echo $_SESSION['message'];
                ?>
                <p>CLIQUE EM QUALQUER LUGAR PARA FECHAR</p>
            </div> <?php } 
            unset($_SESSION['message']);
            unset($_SESSION['msg_id']);
?>
<script src="<?php echo $baseUrl?>assets/js/message.js"></script>