<?php
    include '../inc/cabecalho.inc'; // Contém os códigos necessários para a utilização do framework "UIKit"

    $paginaAtual = $_SERVER['HTTP_REFERER']; //Pega URL que o usuário estava

    if(isset($_COOKIE["Email"])) { //verifica se o cookie "Email" existe
        setcookie("Email", null, -1); // Seta o cookie "Email" como nulo, excluindo-o
        exit("<p uk-margin>
                <script type='text/javascript'>
                    UIkit.modal.alert('SAINDO...').then(function() {
                        window.location.replace('$paginaAtual');
                    })
                    blur();
                </script>
            </p>");
        } else { // Se não
            exit(header("Location: $paginaAtual")); //Volta o usuário para a página que estava inicialmente
        }
?>