<?php
if(isset($_COOKIE["Nome"]) and (isset($_COOKIE["Email"]))) {
    $login_cookie = $_COOKIE['Nome'];
    $pagatual = basename($_SERVER['SCRIPT_NAME']);

    echo "<li><a href='ENlogout.php'>Logout</a></li>";
    echo "<li><a href='ENprofile.php'>Hello, $login_cookie</a></li>";
    } else {
        switch($pagatual) {
            case "login.php":
                echo '<li><a id="ativado" href="login.php">Login</a></li>';
                echo '<li><a href="signup.php">SignUP</a></li>';
                echo '<li><a href="form.php">Form</a></li>';
                break;
            case "signup.php":
                echo '<li><a href="login.php">Login</a></li>';
                echo '<li><a id="ativado" href="signup.php">SignUP</a></li>';
                echo '<li><a href="form.php">Form</a></li>';
                break;
            case "form.php":
                echo '<li><a href="login.php">Login</a></li>';
                echo '<li><a href="signup.php">SignUP</a></li>';
                echo '<li><a id ="ativado" href="form.php">Form</a></li>';
                break;
            default:
                echo '<li><a href="login.php">Login</a></li>';
                echo '<li><a href="signup.php">SignUP</a></li>';
                echo '<li><a href="form.php">Form</a></li>';
        }
    }
?>