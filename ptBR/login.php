<?php
    include '../inc/conecta_mysql.inc';
    
    $Email   = $_POST['email'];
    $entrar  = $_POST['entrar'];
    $Senha   = $_POST['senha'];

    if (isset($entrar)) {
                     
        $verifica = $conexao->query("SELECT * FROM `clientes` WHERE email = '".$Email."' AND senha = '".$Senha."'") or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)<=0){
                echo"<script>alert('Login e/ou senha incorretos');window.location.href='../ptBR/entrar.html';</script>";
                die();
        } else {
            setcookie("Email", $Email);
            header("location:formulario.php");
            //header("Location:../ptBR/formulario.php");
        }
    }
?>