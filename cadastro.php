<?php

$login = $_POST ['login'];
$senha = $_POST ['senha'];
$connect = mysqli_connect('localhost','root','','know_plus');
$query_select = "SELECT login FROM usuario WHERE login = '$login'";
$select = mysqli_query($connect, $query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['login'];

  if ($login == "" || $login == NULL) {

    echo"<script type='text/javascript'> alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";

  }
  else{
    if ($logarray == $login) {

      echo"<script type='text/javascript'> alert('esse login já existe');window.location.href='cadastro.html';</script>";
      die();

    }
    else {
      $query = "INSERT INTO usuario (login,senha) VALUES ('$login', '$senha')";
      $insert  = mysqli_query($connect, $query);

      if ($insert) {
        echo"<script type='text/javascript'> alert('tudo certo! usuário cadastrado');window.location.href='cadastro.html';</script>";
      }
      else {
        echo"<script type='text/javascript'> alert('Ops! não foi possivel cadastrar esse usuário');window.location.href='cadastro.html';</script>";
      }

    }
  }
?>
