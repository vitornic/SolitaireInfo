<?php
    include '../inc/cabecalho.inc';
    include '../inc/conecta_mysql.inc';

    if(isset($_POST['email'])) {
        $Email   = $_POST['email'];
    }

    if(isset($_POST['senha'])) {
        $Senha   = $_POST['senha'];
    }

    if(isset($_POST['entrar'])) {
        $entrar  = $_POST['entrar'];
    }

    $continua = 0;

    if (isset($entrar)) {
                     
        $verifica = $conexao->query("SELECT * FROM `clientes` WHERE email = '".$Email."' AND senha = '".$Senha."'") or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)<=0){
                echo "<p uk-margin>
                <script type='text/javascript'>
                        UIkit.modal.alert('EMAIL E/OU SENHA ERRADOS !!!').then(function() {
                            window.location.replace('entrar.php');
                        })
                       blur()
                </script>
                </p>";
                die();
        } else {
            setcookie("Email", $Email);
            echo "<p uk-margin>
                <script type='text/javascript'>
                        UIkit.modal.alert('LOGADO COM SUCESSO !!!').then(function() {
                            window.location.replace('entrar.php');
                        })

                       blur()
                </script>
                </p>";
            
            //header("location:formulario.php");
            
        }
    }
?>