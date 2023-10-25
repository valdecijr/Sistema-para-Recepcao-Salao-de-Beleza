<!DOCTYPE html>
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
				<li><a href="controleproducaoadmedna.php" class="smoothScroll">Consulte a produção (Edna)</a></li>
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
	</div>	<!-- FUNÇÃO DE CADASTRO DE COMANDA DESABILITADO -->	
<form id="cadastro" name="cadastro" method="post" action="cadastrocomandaedna.php" onsubmit="return validaCampo(); return false;">
  <table width="625" border="0">
  <td>Profissional:</td>
<td> 
<select name="profissionaledna" class="form-control" id="profissionaledna" />
        <option>Selecione...</option>
		<option value="Edna / Manicure">Edna / Manicure</option>
</select>
		  </tr><tr>     		  <td>Codigo do Cliente</td>    		  <td><input name="codigocliedna" class="form-control" type="text" id="codigocliedna" maxlength="100" />     		  <br>   		  </tr>	
    <tr>
	<br>
	<br>
      <td>Serviços:</td> 
      <td> <select name="servicoedna" class="form-control" id="servicoedna" />
         <option>Selecione...</option>
         <option value="Mão / 22,00">Mão / 22,00</option>
         <option value="Pé / 28,00">Pé / 28,00</option>		 <option value="Banho de parafina mão / 20,00">Banho de parafina mão / 20,00</option>         <option value="Banhos de Parafina Pé / 20,00">Banhos de Parafina Pé / 20,00</option>		 <option value="Esmaltação em gel mão / 50,00">Esmaltação em gel mão / 50,00</option>         <option value="Esmaltação em gel pé / 60,00">Esmaltação em gel pé / 60,00</option>		 <option value="Unhas em gel mão(alongamento) / 180,00">Unhas em gel mão(alongamento) / 180,00</option>         <option value="c/ esmalte em gel mão e pé / 210,00">c/ esmalte em gel mão e pé / 210,00</option>		 <option value="Unhas em gel pé (alongamento) / 220,00">Unhas em gel pé (alongamento) / 220,00</option>		 <option value="Unhas em porcelana mão (alongamento) / 220,00">Unhas em poecelana mão (alongamento) / 220,00</option>		 <option value="c/ esmalte em gel / 240,00">c/ esmalte em gel / 240,00</option>		 <option value="unhas em porcelana pé (alongamento) / 200,00">unhas em porcelana pé (alongamento) / 200,00</option>		 <option value="manutenção unhas em gel / 80,00">manutenção unhas em gel / 80,00</option>		 <option value="banho em gel mão e pé / 120,00">banho em gel mão e pé / 120,00</option>		 <option value="alongamento (cada) / 25,00">alongamento (cada) / 25,00</option>		 <option value="francesinha / 7,00">francesinha / 7,00</option>		 <option value="francesinha esmalte em gel / 20,00">francesinha esmalte em gel / 20,00</option>		 <option value="adesivo cada / 5,00">adesivo cada / 5,00</option>		 <option value="desenho / 10,00">desenho / 10,00</option>		 <option value="chinelo descartavel / 3,00">chinelo descartavel / 3,00</option>
         </select>
<br>		  </tr>		  			  <tr>      		  <td>Bebidas:</td>       		  <td> <select name="bebidasedna" class="form-control" id="bebidasedna" />        		  <option>Selecione...</option>        		  <option value="Vinho">Vinho / 10,00</option>          		  </select>		  		  <br>		  		  </tr>	        		  <tr>      		  <td>Valor Total</td>      <td><input name="vtotaledna" class="form-control" type="text" id="vtotaledna" maxlength="100" />       		  <br>    		  </tr>				  <tr>      		  <td>Data</td>      		  <td><input name="dataedna" class="form-control" type="date" id="dataedna" maxlength="100" />       		  <br>  		  </tr>		  <tr>      <td>Horario:</td>      <td><input name="horarioiracema" class="form-control" type="text" id="horarioiracema" maxlength="100" />       <br>    </tr>	<tr>      <td>Observação:</td>      <td><input name="obsedna" class="form-control" type="text" id="obsedna" maxlength="100" />       <br>    </tr>	<tr>      	<td>Comissão:</td>      <td><input name="comissaoedna" class="form-control" type="text" id="comissaoedna" maxlength="100" />       <br>    </tr>     <tr>      <td colspan="2"><p>       <center> <input name="cadastrar" class="btn-danger" type="submit" id="cadastrar" value="Concluir Cadastro"/> </center>         <br>		<br>          <input name="limpar" class=" btn btn-danger" type="reset" id="limpar" value="Limpar Campos preenchidos!" />          <br />    </tr>  </table></form>
<center><br>
<br>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>Copyright © Devlas | Sites e Sistemas Web</a></p>
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