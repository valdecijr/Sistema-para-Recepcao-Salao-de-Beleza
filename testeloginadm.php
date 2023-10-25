<?php 
session_start();
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];
  $connect = mysql_connect('mysql762.umbler.com:41890','adminbounjour','junior2302');
  $db = mysql_select_db('banco_opbounjour');
    if (isset($entrar)) {
            
      $verifica = mysql_query("SELECT * FROM usuariosadm WHERE login = '$login' AND senha = '$senha'") or die("Erro ao conectar ao banco de dados!");
        if (mysql_num_rows($verifica)<=0){
			unset ($_SESSION['login']);
			unset ($_SESSION['senha']);
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos ou Você não tem acesso');window.location.href='loginadm.html';</script>";
          die();
        }else{
          $_SESSION['login'] = $login;
		  $_SESSION['senha'] = $senha;
		  header("Location:menudeservicos.php");
        }
    }
?>