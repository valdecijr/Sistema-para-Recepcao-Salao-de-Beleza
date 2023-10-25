﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Comanda</title>
<link rel="icon" type="image/png" href="iconrecibo.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/animate.min.css">
	<link rel="stylesheet" href="../css/et-line-font.css">
	<link rel="stylesheet" href="../css/nivo-lightbox.css">
	<link rel="stylesheet" href="../css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/login.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
    
 
<script type="text/javascript">
function validaCampo()
{
if(document.cadastro.cpf.value=="")
	{
	alert("O Campo CPF é obrigatório!");
	return false;
	}
else
	if(document.cadastro.nome.value=="")
	{
	alert("O Campo Nome do Cliente negociados é obrigatório!");
	return false;
	}
else
	if(document.cadastro.voriginal.value=="")
	{
	alert("O Campo Valor Original é obrigatório!");
	return false;
	}
else
	if(document.cadastro.vatualizado.value=="")
	{
	alert("O Campo Valor Atualizado é obrigatório!");
	return false;
	}
else
	if(document.cadastro.maioratraso.value=="")
	{
	alert("O Campo Maior Atraso é obrigatório!");
	return false;
	}
else
	if(document.cadastro.menoratraso.value=="")
	{
	alert("O Campo Menor Atraso é obrigatório!");
	return false;
	}
else
	if(document.cadastro.pgto.value=="")
	{
	alert("O Campo Pagamento é obrigatório!");
	return false;
	}
else
	if(document.cadastro.vproposta.value=="")
	{
	alert("O Campo Valor da Proposta é obrigatório!");
	return false;
	}
else
	if(document.cadastro.dvencimento.value=="")
	{
	alert("O Campo Data Vencimento: é obrigatório!");
	return false;
	}
else
	if(document.cadastro.logineasy.value=="")
	{
	alert("O Campo Operador é obrigatório!");
	return false;
	}	
else
return true;
}
<!-- Fim do JavaScript que validará os campos obrigatórios! -->
</script> 
</head>
<body >

<!-- preloader section -->



<!-- navigation section -->
<section class=" navbar-fixed-top navbar" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon icon-bar"></span> <span class="icon icon-bar"></span> <span class="icon icon-bar"></span></button>
            </div>
            <ul class="nav navbar-nav navbar-right">
			<li><a href="opcaoadmproducao.php" class="smoothScroll">Voltar</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="controleproducaoadmnair.php" class="smoothScroll">Consulte a produção (Nair)</a></li>
			</ul>
		</div>
			</div>
		
	
	
</section>	
<br>
<br>
<br>
<div class="text-center">
		<div class="">
			<div class="col-sm-12">
				<h1>Cadastre a Comanda</h1>	
<br>
<br>				
			</div>
		</div>
	</div>	
<form id="cadastro" name="cadastro" method="post" action="cadastrocomandanair.php" onsubmit="return validaCampo(); return false;">
  <table width="625" border="0">
  <td>Profissional:</td>
<td> 
<select name="profissionalnair" class="form-control" id="profissionalnair" />
        <option>Selecione...</option>
		<option value="Nair / Estética">Nair / Estética</option>
</select>
		  </tr>
		  <br>
    <tr>
	<br>
	<br>
   
   <td>Serviços Estética Corporal:</td> 
		  <br>
		  </tr>
	<tr>
      <td>Bebidas:</td> 
      <td> <select name="bebidasnair" class="form-control" id="bebidasnair" />
        <option>Selecione...</option>
        <option value="Vinho">Vinho / 10,00</option>
          </select>
		  <br>
		  </tr>	  
	<tr>
      <td>Observação:</td>
      <td><input name="obsnair" class="form-control" type="text" id="obsnair" maxlength="100" />
       <br>
    </tr>
	<tr>
      <td colspan="2"><p>
       <center> <input name="cadastrar" class="btn-danger" type="submit" id="cadastrar" value="Concluir Cadastro"/> </center> 
        <br>
		<br>
          <input name="limpar" class=" btn btn-danger" type="reset" id="limpar" value="Limpar Campos preenchidos!" />
          <br />

    </tr>
  </table>
</form>
<center><br>
<br>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>Copyright © Grupo Talentos | Equipe Suporte</a></p>
               	<hr>
				<ul class="social-icon">
</center>				 
				</ul>
			</div>
		</div>
	</div>
</footer>

	</div>
</section>
</body>
</html>