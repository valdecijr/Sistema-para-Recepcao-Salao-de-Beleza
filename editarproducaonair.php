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
$tt = mysql_query("SELECT * FROM comandanair where ID = '$id' ");
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
<form id="cadastro" name="cadastro" method="post" action="updatecomissaonair.php" onsubmit="return validaCampo(); return false;">
  <table width="625" border="0">
   <tr>
      <input name="id" type="hidden" id="id" size="30" maxlength="30" value="<?php echo $row['id']; ?>"/> 
	  <br>
	<br>		<tr>      <td width="69">Codigo do Cliente</td>      <td width="546"><input name="codigoclinair" class="btn-default btn" type="text" id="codigoclinair" size="30" maxlength="30" value="<?php echo $row['codigoclinair'];  ?>" /><br>	<br>    </tr>
	<br>
	<tr>
	<td>Profissional</td>
      <td><input name="profissionalnair" class="btn-default btn" type="text" id="profissionalnair" size="30" maxlength="30" value="<?php echo $row['profissionalnair'];  ?>" />
	  <br>
	<br>
    </tr>
	<br>
	<br>
    <tr>
      <td width="69">Serviço 1</td>
      <td width="546"><input name="servico1nair" class="btn-default btn" type="text" id="servico1nair" size="30" maxlength="30" value="<?php echo $row['servico1nair'];  ?>" />
	  <br>
	<br>
    </tr>	<tr>      <td width="69">Serviço 2</td>      <td width="546"><input name="servico2nair" class="btn-default btn" type="text" id="servico2nair" size="30" maxlength="30" value="<?php echo $row['servico2nair'];  ?>" />	  <br>	<br>    </tr>		
	<br>
	<tr>
      <td width="69">Bebidas</td>
      <td width="546"><input name="bebidasnair" class="btn-default btn" type="text" id="bebidasnair" size="30" maxlength="30" value="<?php echo $row['bebidasnair'];  ?>" />
<br>
	<br>
    </tr>			<tr>      <td width="69">Valor Total</td>      <td width="546"><input name="vtotalnair" class="btn-default btn" type="text" id="vtotalnair" size="30" maxlength="30" value="<?php echo $row['vtotalnair'];  ?>" />	  <br>	<br>    </tr>		<tr>      <td width="69">Data</td>      <td width="546"><input name="datanair" class="btn-default btn" type="text" id="datanair" size="30" maxlength="30" value="<?php echo $row['datanair'];  ?>" />	  <br>	<br>    </tr>	<tr>      <td width="69">Horario</td>      <td width="546"><input name="horarionair" class="btn-default btn" type="text" id="horarionair" size="30" maxlength="30" value="<?php echo $row['horarionair'];  ?>" />	  <br>	<br>    </tr>	
	<br>
	<tr>
      <td>Observações</td>
      <td><input name="obsnair" class="btn-default btn" type="text" id="obsnair" maxlength="30" value="<?php echo $row['obsnair'];  ?>" />
	<br>
	<br>
	<tr>
	<tr>
      <td>Comissão</td>
      <td><input name="comissaonair" class="btn-default btn" type="text" id="comissaonair" maxlength="30" value="<?php echo $row['comissaonair'];  ?>" />
	<br>
        <input name="cadastrar" class="btn-default btn" type="submit" id="cadastrar" value="Concluir minha Edição!" /> 
        <br>
		<center><a href="controleproducaoadmnair.php" class="btn btn-danger">Voltar!</a></center>
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