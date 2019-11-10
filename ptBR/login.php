<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/css/uikit.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/js/uikit-icons.min.js"></script>
</head>
<body>

<?php
    include '../inc/conecta_mysql.inc';
    
    $Email   = $_POST['email'];
    $entrar  = $_POST['entrar'];
    $Senha   = $_POST['senha'];
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