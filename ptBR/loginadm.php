<?php
    include '../inc/cabecalho.inc';
    include '../inc/conecta_mysql.inc';

    $paginaAtual = $_SERVER['HTTP_REFERER'];

    if(isset($_POST['emailADM'])) {
        $Email   = $_POST['emailADM'];
    }

    if(isset($_POST['senhaADM'])) {
        $Senha   = $_POST['senhaADM'];
    }

    if(isset($_POST['entrar'])) {
        $entrar  = $_POST['entrar'];
    }

    if (isset($entrar)) {
                     
        $verifica = $conexao->query("SELECT * FROM `administradores` WHERE email = '".$Email."' AND senha = '".$Senha."'") or
        die("<p uk-margin>
                    <script type='text/javascript'>
                        UIkit.modal.alert('Algo deu errado...').then(function() {
                        window.location.replace('$paginaAtual');
                        })
                        blur();
                    </script>
                </p>");

        if (mysqli_num_rows($verifica)<=0){
                exit("<p uk-margin>
                        <script type='text/javascript'>
                            UIkit.modal.alert('EMAIL E/OU SENHA ERRADOS !!!').then(function() {
                            window.location.replace('entrar.php');
                            })
                            blur()
                        </script>
                    </p>");
        } else {
            $con    = $conexao->query("SELECT nome FROM `administradores` WHERE email = '".$Email."'") or 
            die("<p uk-margin>
                    <script type='text/javascript'>
                        UIkit.modal.alert('Algo deu errado...').then(function() {
                        window.location.replace('$paginaAtual');
                        })
                        blur();
                    </script>
                </p>");

            $array  = $con->fetch_array();
            $nome   = $array[0];

            setcookie("EmailADM", $Email);
            setcookie("NomeADM", $nome);
            exit("<p uk-margin>
                    <script type='text/javascript'>
                            UIkit.modal.alert('LOGADO COM SUCESSO !!!').then(function() {
                            window.location.replace('entrar.php');
                        })
                        blur()
                    </script>
                </p>");
        }
    }
?>