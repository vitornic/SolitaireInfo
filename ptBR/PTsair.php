<?php
    include '../inc/cabecalho.inc'; // Contém os códigos necessários para a utilização do framework "UIKit"
    $paginaAtual = $_SERVER['HTTP_REFERER']; //Pega URL que o usuário estava
    if(isset($_COOKIE["Email"]) OR (isset($_COOKIE["Nome"]))) { //verifica se o cookie "Email" existe
        setcookie("Email", null, -1); // Seta o cookie "Email" como nulo, excluindo-o
        setcookie("Nome", null, -1);
        exit("<p uk-margin>
                <script type='text/javascript'>
                    UIkit.modal.alert('SAINDO...').then(function() {
                        window.location.replace('$paginaAtual');
                    })
                    blur();
                </script>
            </p>");
        } else if(isset($_COOKIE["EmailADM"]) OR (isset($_COOKIE["NomeADM"]))) { //verifica se o cookie "Email" existe
            setcookie("EmailADM", null, -1); // Seta o cookie "Email" como nulo, excluindo-o
            setcookie("NomeADM", null, -1);
            exit("<p uk-margin>
                    <script type='text/javascript'>
                        UIkit.modal.alert('SAINDO...').then(function() {
                            window.location.replace('$paginaAtual');
                        })
                        blur();
                    </script>
                </p>");
            } else {
                exit(header("Location: $paginaAtual")); //Volta o usuário para a página que estava inicialmente
            }
?>