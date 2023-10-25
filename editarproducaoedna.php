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
 
<script type="text/javascript">
function validaCampo()
{
if(document.cadastro.codcli.value=="")
	{
	alert("O Campo Codigo do Cliente é obrigatório!");
	return false;
	}
else
	if(document.cadastro.contrato.value=="")
	{
	alert("O Campo Contrato(s) negociados é obrigatório!");
	return false;
	}
else
	if(document.cadastro.vprincipal.value=="")
	{
	alert("O Campo Valor Principal é obrigatório!");
	return false;
	}
else
	if(document.cadastro.vproposta.value=="")
	{
	alert("O Campo Valor da Proposta é obrigatório!");
	return false;
	}
else
	if(document.cadastro.valcancado.value=="")
	{
	alert("O Campo Valor Alcançado é obrigatório!");
	return false;
	}
else
	if(document.cadastro.fatraso.value=="")
	{
	alert("O Campo Faixa de Atraso é obrigatório!");
	return false;
	}
else
	if(document.cadastro.dpagamento.value=="")
	{
	alert("O Campo Data de Pagamento é obrigatório!");
	return false;
	}
else
	if(document.cadastro.matraso.value=="")
	{
	alert("O Campo Motivo de Atraso é obrigatório!");
	return false;
	}
else
	if(document.cadastro.cob.value=="")
	{
	alert("O Campo Login do COB é obrigatório!");
	return false;
	}
else
	if(document.cadastro.status.value=="")
	{
	alert("O Campo Status é obrigatório!");
	return false;
	}	
else
return true;
}
<!-- Fim do JavaScript que validará os campos obrigatórios! -->
</script> 
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
$tt = mysql_query("SELECT * FROM comandaedna where ID = '$id' ");
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
<form id="cadastro" name="cadastro" method="post" action="updatecomissaoedna.php" onsubmit="return validaCampo(); return false;">
  <table width="625" border="0">
   <tr>
      <input name="id" type="hidden" id="id" size="30" maxlength="30" value="<?php echo $row['id']; ?>"/> 
	  <br>
	<tr>	<td>Codigo do cliente</td>      <td><input name="codigocliedna" class="btn-default btn" type="text" id="codigocliedna" size="30" maxlength="30" value="<?php echo $row['codigocliedna'];  ?>" />	  <br>	<br>    </tr>
	<br>
	<tr>
	<td>Profissional</td>
      <td><input name="profissionaledna" class="btn-default btn" type="text" id="profissionaledna" size="30" maxlength="30" value="<?php echo $row['profissionaledna'];  ?>" />
	  <br>
	<br>
    </tr>
	<br>
	<br>
    <tr>
      <td width="69">Serviços</td>
      <td width="546"><input name="servicoedna" class="btn-default btn" type="text" id="servicoedna" size="30" maxlength="30" value="<?php echo $row['servicoedna'];  ?>" />
	  <br>
	<br>
    </tr>
	<br>
	<tr>
      <td width="69">Bebidas</td>
      <td width="546"><input name="bebidasedna" class="btn-default btn" type="text" id="bebidasedna" size="30" maxlength="30" value="<?php echo $row['bebidasedna'];  ?>" />
<br>
	<br>
    </tr><tr>      <td>Valor Total</td>      <td><input name="vtotaledna" class="btn-default btn" type="text" id="vtotaledna" maxlength="30" value="<?php echo $row['vtotaledna'];  ?>" />	<br>	<tr>      <td>Data</td>      <td><input name="dataedna" class="btn-default btn" type="text" id="dataedna" maxlength="30" value="<?php echo $row['dataedna'];  ?>" />	<br>	<br>	<tr>      <td>Horario</td>      <td><input name="horarioedna" class="btn-default btn" type="text" id="horarioedna" maxlength="30" value="<?php echo $row['horarioedna'];  ?>" />	<br>		<tr>	<br>
	<tr>
      <td>Observações</td>
      <td><input name="obsedna" class="btn-default btn" type="text" id="obsedna" maxlength="30" value="<?php echo $row['obsedna'];  ?>" />
	<br>
	<br>
	<tr>
	<tr>
      <td>Comissão</td>
      <td><input name="comissaoedna" class="btn-default btn" type="text" id="comissaokedna" maxlength="30" value="<?php echo $row['comissaoedna'];  ?>" />
	<br>
	

	  
        <input name="cadastrar" class="btn-default btn" type="submit" id="cadastrar" value="Concluir minha Edição!" /> 
        <br>
		<center><a href="controleproducaoadmedna.php" class="btn btn-danger">Voltar!</a></center>
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