<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edição</title>
<link rel="icon"  href="logo.ico" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<!-- Scripts de estilo da página-->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/animate.min.css">
	<link rel="stylesheet" href="../css/et-line-font.css">
	<link rel="stylesheet" href="../css/nivo-lightbox.css">
	<link rel="stylesheet" href="../css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/login.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
    <!-- Fim dos scripts de estilo da página-->
</head>
<body>

<!-- Conectando ao banco de dados -->
 <?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:error.html');

	}
	
$id = $_GET['id'];
$connect = mysql_connect('mysql762.umbler.com:41890','adminbounjour','junior2302');
$db = mysql_select_db('banco_opbounjour');
$tt = mysql_query("SELECT * FROM comandajandira where ID = '$id' ");
$row = mysql_fetch_assoc($tt);

?>
<!-- Conectando ao banco de dados -->

<!-- Campo para editar solicitacoes -->
<section class=" navbar-fixed-top navbar" role="navigation">
	<div class="">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon icon-bar"></span> <span class="icon icon-bar"></span> <span class="icon icon-bar"></span></button>
        </div>
	</div>
</section>	

<div class="container">
<form id="cadastro" name="cadastro" method="post" action="updatecomissaojandira.php" onsubmit="return validaCampo(); return false;">
  <table width="625" border="0">
   <tr>
      <input name="id" type="hidden" id="id" size="30" maxlength="30" value="<?php echo $row['id']; ?>"/> 
	  <br>
	<tr>	<td>Codigo do cliente</td>      <td><input name="codigoclijandira" class="btn-default btn" type="text" id="codigoclijandira" size="30" maxlength="30" value="<?php echo $row['codigoclijandira'];  ?>" />	  <br>	<br>    </tr>
	<tr>
	<td>Profissional</td>
      <td><input name="profissionaljandira" class="btn-default btn" type="text" id="profissionaljandira" size="30" maxlength="30" value="<?php echo $row['profissionaljandira'];  ?>" />
	  <br>
	<br>
    </tr>
	<br>
	<br>
    <tr>
      <td width="69">Serviço 1</td>
      <td width="546"><input name="servico1jandira" class="btn-default btn" type="text" id="servico1jandira" size="30" maxlength="30" value="<?php echo $row['servico1jandira'];  ?>" />
	  <br>
	<br>
    </tr>		<tr>      <td width="69">Serviço 2</td>      <td width="546"><input name="servico2jandira" class="btn-default btn" type="text" id="servico2jandira" size="30" maxlength="30" value="<?php echo $row['servico2jandira'];  ?>" />	  <br>	<br>    </tr>
	<br>
	<tr>
      <td width="69">Bebidas</td>
      <td width="546"><input name="bebidasjandira" class="btn-default btn" type="text" id="bebidasjandira" size="30" maxlength="30" value="<?php echo $row['bebidasjandira'];  ?>" />
<br>
	<br>
    </tr>		<tr>      <td width="69">Valor Total</td>      <td width="546"><input name="vtotaljandira" class="btn-default btn" type="text" id="vtotaljandira" size="30" maxlength="30" value="<?php echo $row['vtotaljandira'];  ?>" /><br>	<br>    </tr>	<tr>      <td width="69">Data</td>      <td width="546"><input name="datajandira" class="btn-default btn" type="text" id="datajandira" size="30" maxlength="30" value="<?php echo $row['datajandira'];  ?>" /><br>	<br>    </tr>		<tr>      <td width="69">Horario</td>      <td width="546"><input name="horariojandira" class="btn-default btn" type="text" id="horariojandira" size="30" maxlength="30" value="<?php echo $row['horariojandira'];  ?>" /><br>	<br>    </tr>	
	<br>
	<tr>
      <td>Observações</td>
      <td><input name="obsjandira" class="btn-default btn" type="text" id="obsjandira" maxlength="30" value="<?php echo $row['obsjandira'];  ?>" />
	<br>
	<br>
	<tr>
	<tr>
      <td>Comissão</td>
      <td><input name="comissaojandira" class="btn-default btn" type="text" id="comissaojandira" maxlength="30" value="<?php echo $row['comissaojandira'];  ?>" />
	<br>
	

	  
        <input name="cadastrar" class="btn-default btn" type="submit" id="cadastrar" value="Concluir minha Edição!" /> 
        <br>
		<center><a href="controleproducaoadmjandira.php" class="btn btn-danger">Voltar!</a></center>
          <br>
     </tr>
  </table>
</form>
<!-- Campo para editar solicitacoes -->

<!-- Rodapé da página -->
	</div>
</section>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<center><p>Copyright © Devlas | Sites e Sistemas Web</a></p></center>
               	<hr>
				
			</div>
		</div>
	</div>
</footer>
<!-- Fim do rodapé -->

 <!-- JavaScripts de estilo da página-->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
 <!-- JavaScripts de estilo da página-->

</body>
</html>