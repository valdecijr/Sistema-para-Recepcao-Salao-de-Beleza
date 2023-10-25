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
	</div>	<!-- FUNÇÃO DE CADASTRO DE COMANDA DESABILITADO -->	
<form id="cadastro" name="cadastro" method="post" action="cadastrocomandanair.php" onsubmit="return validaCampo(); return false;">
  <table width="625" border="0">  <tr>      <td>Codigo do Cliente</td>      <td><input name="codigoclinair" class="form-control" type="text" id="codigoclinair" maxlength="100" />       <br>    </tr>  
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
   
   <td>Serviços Estética Corporal:</td>       <td> <select name="servico1nair" class="form-control" id="servico1nair" maxlength="300"/>        <option>Selecione...</option>        <option value="Quick Massage 15 minutos / Avulso:35,00 / 10x Sessões:350,00">Quick Massage 15 minutos / Avulso:35,00 / 10x Sessões:350,00</option>		<option value="Drenagem Linfática + Esfoliação 45 minutos / Avulso:120,00 / 10x Sessões:790,00">Drenagem Linfática + Esfoliação 45 minutos / Avulso:120,00 / 10x Sessões:790,00</option>		<option value="Modeladora 40 minutos / Avulso:95,00 / 10x Sessões:790,00">Modeladora 40 minutos / Avulso:95,00 / 10x Sessões:790,00</option>		<option value="Massagem relaxante 45 minutos / Avulso:100,00 / 10x Sessões:790,00">Massagem relaxante 45 minutos / Avulso:100,00 / 10x Sessões:790,00</option>		<option value="Massagem Modeladora + Manta Térmica 45 minutos / Avulso:120,00 / 10x Sessões:850,00">Massagem Modeladora + Manta Térmica 45 minutos / Avulso:120,00 / 10x Sessões:850,00</option>		<option value="Bambu Terapia + Drenagem Linfática 50 minutos / Avulso:100,00 / 10x Sessões:850,00">Bambu Terapia + Drenagem Linfática 50 minutos / Avulso:100,00 / 10x Sessões:850,00</option>		<option value="Tratamento para Estrias 45 minutos / Avulso:120,00 / 10x Sessões:900,00">Tratamento para Estrias 45 minutos / Avulso:120,00 / 10x Sessões:900,00</option>		<option value="Drenagem Linfática Gestacional 45 minutos / Avulso:90,00 / 10x Sessões:800,00">Drenagem Linfática Gestacional 45 minutos / Avulso:90,00 / 10x Sessões:800,00</option>		<option value="Drenagem Linfática Pós Operatório 45 minutos / Avulso:120,00 / 10x Sessões:950,00">Drenagem Linfática Pós Operatório 45 minutos / Avulso:120,00 / 10x Sessões:950,00</option>		<option value="Crio lipóse (a região) / A partir da segunda região 400,00">Crio lipóse (a região) / A partir da segunda região 400,00</option>          </select>		  <br>		  </tr>		  		  <tr>	<br>	<br>      <td>Serviços Estética Facial:</td>       <td> <select name="servico2nair" class="form-control" id="servico2nair" maxlength="300" />        <option>Selecione...</option>        <option value="Limpeza de pele Simples 45 minutos / Valor:95,00">Limpeza de pele Simples 45 minutos / Valor:95,00</option>		<option value="Limpeza de Pele Profunda 50 minutos / Valor:130,00">Limpeza de Pele Profunda 50 minutos / Valor:130,00</option>		<option value="Lifting Rejuvenescedor + Drenagem Facial 45 minutos / Valor:250,00">Lifting Rejuvenescedor + Drenagem Facial 45 minutos / Valor:250,00</option>		<option value="Peeling Quimico 35 minutos / Valor:260,00">Peeling Quimico 35 minutos / Valor:260,00</option>		<option value="Peeling Despigmentado p/ Manchas 40 minutos / Valor:450,00">Peeling Despigmentado p/ Manchas 40 minutos / Valor:450,00</option>		<option value="Limpeza de Pele (costa) 45 minutos / Valor:170,00">Limpeza de Pele (costa) 45 minutos / Valor:170,00</option>		<option value="Drenagem Facial + Vitamina C 45 minutos / Valor:90,00">Drenagem Facial + Vitamina C 45 minutos / Valor:90,00</option>		<option value="Microagulhamento Acne / Manchas e Linhas de expressão 45 minutos / Valor:380,00">Microagulhamento Acne / Manchas e Linhas de expressão 45 minutos / Valor:380,00</option>		<option value="Designer de Sobrancelhas / A partir da segunda região 400,00">Designer de Sobrancelhas / A partir da segunda região 400,00</option>		<option value="Designer de Sobrancelhas + Henna 50 minutos / Valor: 65,00">Designer de Sobrancelhas + Henna 50 minutos / Valor: 65,00</option>		<option value="Limpezade Sobrancelhas 25 minutos / Valor:25,00">Limpezade Sobrancelhas 25 minutos / Valor:25,00</option>		<option value="Alongamento de Cílios c/ Retoque 2 horas / Valor:350,00">Alongamento de Cílios c/ Retoque 2 horas / Valor:350,00</option>		<option value="Crio frenquência Facil 30 minutos / Valor:280,00">Crio frenquência Facil 30 minutos / Valor:280,00</option>		<option value="Tratamento para olheiras 45 minutos / Valor:120,00">Tratamento para olheiras 45 minutos / Valor:120,00</option>		<option value="Crio frequência Papada 35 minutos / Valor:280,00">Crio frequência Papada 35 minutos / Valor:280,00</option>		<option value="Maquiagem A partir 1 hora e 0 min / Valor:150,00">Maquiagem A partir 1 hora e 0 min / Valor:150,00</option>		<option value="Auriculterapia 45 minutos / 1x 70,00 / 7x 400,00">Auriculterapia 45 minutos / 1x 70,00 / 7x 400,00</option>          </select>		  <br>
		  <br>
		  </tr>
	<tr>
      <td>Bebidas:</td> 
      <td> <select name="bebidasnair" class="form-control" id="bebidasnair" />
        <option>Selecione...</option>
        <option value="Vinho">Vinho / 10,00</option>
          </select>
		  <br>
		  </tr>	  		  <tr>      <td>Valor Total:</td>      <td><input name="vtotalnair" class="form-control" type="text" id="vtotalnair" maxlength="100" />       <br>    </tr>		<td>Data:</td>      <td><input name="datanair" class="form-control" type="text" id="datanair" maxlength="100" />       <br>    </tr>		<td>Horario</td>      <td><input name="horarionair" class="form-control" type="text" id="horarionair" maxlength="100" />       <br>    </tr>
	<tr>
      <td>Observação:</td>
      <td><input name="obsnair" class="form-control" type="text" id="obsnair" maxlength="100" />
       <br>
    </tr>
	<tr>      <td>Comissão:</td>      <td><input name="comissaonair" class="form-control" type="text" id="comissaonair" maxlength="100" />       <br>    </tr>
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