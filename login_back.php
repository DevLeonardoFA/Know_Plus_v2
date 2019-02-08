<?php

$login = $_POST['login'];
$senha = $_POST['senha'];
$entrar = $_POST['btn_entrar'];
$connect = mysqli_connect('localhost','root','','know_plus');

if (isset($entrar)) {

  $verificar = mysqli_query($connect, "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'") OR DIE("ERRO AO SELECIONAR");
  if (mysqli_num_rows($verificar) <= 0) {

    echo"<script type='text/javascript'> alert('Login ou Senha incorretos');window.location.href='login_front.php';</script>";
    die();
  }else{
    setcookie("login",$login);
    header("Location:index.php");
  }


}

?>
