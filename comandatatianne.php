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
</head>
<body >
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
			<li><a href="controleproducaoadmtatianne.php" class="smoothScroll">Consulte a produção (Tatianne)</a></li>
			</ul>
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
<form id="cadastro" name="cadastro" method="post" action="cadastrocomandatatianne.php" onsubmit="return validaCampo(); return false;">
  <table width="625" border="0">
  <td>Profissional:</td>
<td> 
<select name="profissionaltatianne" class="form-control" id="profissionaltatianne" />
        <option>Selecione...</option>
		<option value="Tatianne / Hair">Tatianne / Hair</option>
</select><br>
		  </tr>
		  
		  <tr>      
		  <td>Codigo do Cliente</td>      <td><input name="codigoclitatianne" class="form-control" type="text" id="codigoclitatianne" maxlength="100" />       
		  <br>    
		  </tr>		
    <tr>
	<br>
	<br>
    <td>Serviços:</td> 
    <td> <select name="servicotatianne" class="form-control" id="servicotatianne" />         <option>Selecione...</option>
        <option value="Escova 2 / 50,00">Escova 2 / 50,00</option>
        <option value="Escova 3 / 60,00">Escova 3 / 60,00</option>
		<option value="Escova 4 / 85,00">Escova 4 / 85,00</option>
		<option value="Hidratação Trivit / 85,00">Hidratação Trivit / 85,00</option>
		<option value="Hidratação Alquimia Sweet">Hidratação Alquimia Sweet / 120,00</option>
		<option value="c/ ampola alquimia cd aplicação / 150,00">c/ ampola alquimia cd aplicação / 150,00</option>
		<option value="Hidratação com loreal paris / 140,00">Hidratação com loreal paris / 140,00</option>
		<option value="Hidratação com kerastase">Hidratação com kerastase / 150,00</option>
		<option value="Lavagem Simples / 30,00">Lavagem Simples / 30,00</option>
		<option value="Lavagem c/ secagem / 40,00">Lavagem c/ secagem / 40,00</option>
		<option value="Luzes 1 / 250,00">Luzes 1 / 250,00</option>
		<option value="Luzes 2 / 270,00">Luzes 2 / 270,00</option>
		<option value="Luzes 3 / 320,00">Luzes 3 / 320,00</option>
		<option value="Maquiagem c/ ou s/ cilios / 180,00">Maquiagem c/ ou s/ cilios / 180,00</option>
		<option value="Botox 1 / 180,00">Botox 1 / 180,00</option>
		<option value="Botox 2 / 240,00">Botox 2 / 240,00</option>
		<option value="Botox 3 / 280,00">Botox 3 / 280,00</option>
		<option value="Corte Feminino / 85,00">Corte Feminino / 85,00</option>
		<option value="Corte Infantil Feminino / 60,00">Corte Infantil Feminino / 60,00</option>
		<option value="Californiana 1 / 220,00">Californiana 1 / 220,00</option>
		<option value="Californiana 2 / 260,00">Californiana 2 / 260,00</option>
		<option value="Californiana 3 / 350,00">Californiana 3 / 350,00</option>
		<option value="Cauterização 1 / 180,00">Cauterização 1 / 180,00</option>
		<option value="Cauterização 2 / 220,00">Cauterização 2 / 220,00</option>
		<option value="Coloração 1 / 135,00">Coloração 1 / 135,00</option>
		<option value="Coloração 2 / 155,00">Coloração 2 / 155,00</option>
		<option value="Coloração 3 / 180,00">Coloração 3 / 180,00</option>
		<option value="Escova 1 / 45,00">Escova 1 / 45,00</option>
		<option value="Corte Masculino / 60,00">Corte Masculino / 60,00</option>
		<option value="Corte Infantil Masculino / 50,00">Corte Infantil Masculino / 50,00</option>
		<option value="Barba / 40,00">Barba / 40,00</option>
		<option value="Pigmentação de Barba / 45,00">Pigmentação de Barba / 45,00</option>
		<option value="Coloração / 130,00">Coloração / 130,00</option>
		<option value="Luzes / 150,00">Luzes / 150,00</option>
		<option value="Sobrancelha Masculina na navalha / 35,00">Sobrancelha Masculina na navalha / 35,00</option>
		<option value="Lavagem c/ 1° linha / 30,00">Lavagem c/ 1° linha / 30,00</option>
		<option value="Progressiva / 100,00">Progressiva / 100,00</option>
		<option value="Ombre Hair 1 / 250,00">Ombre Hair 1 / 250,00</option>
		<option value="Ombre Hair 2 / 280,00">Ombre Hair 2 / 280,00</option>
		<option value="Ombre Hair 3 / 340,00">Ombre Hair 3 / 340,00</option>
		<option value="Penteado / 160,00">Penteado / 160,00</option>
		<option value="Progressiva / 100,00">Progressiva / 100,00</option>
		<option value="Ombre Hair 1 / 240,00">Ombre Hair 1 / 240,00</option>
		<option value="Ombre Hair 2 / 280,00">Ombre Hair 2 / 280,00</option>
		<option value="Ombre Hair 3 / 340,00">Ombre Hair 3 / 340,00</option>
		<option value="Penteado / 100,00">Penteado / 100,00</option>
		<option value="Progressiva 1 / 100,00">Progressiva 1 / 100,00</option>
		<option value="Progressiva 2 / 100,00">Progressiva 2 / 100,00</option>
		<option value="Progressiva 3 / 100,00">Progressiva 3 / 100,00</option>
		<option value="Reconstrução c/ schwarzkopf BC / 220,00">Reconstrução c/ schwarzkopf BC / 220,00</option>
		<option value="Retoque Raiz / 120,00">Retoque Raiz / 120,00</option>
		<option value="Retoque Raiz c/ tinta cliente / 80,00">Retoque Raiz c/ tinta cliente / 80,00</option>        </select>
<br>		  </tr>		  			  <tr>      		  <td>Bebidas:</td>       		  <td> <select name="bebidastatianne" class="form-control" id="bebidastatianne" />        		  <option>Selecione...</option>        		  <option value="Vinho">Vinho / 10,00</option>          		  </select>		  		  <br>		  		  </tr>	        		  <tr>      		  <td>Valor Total</td>      <td><input name="vtotaltatianne" class="form-control" type="text" id="vtotaltatianne" maxlength="100" />       		  <br>    		  </tr>				  <tr>      		  <td>Data</td>      		  <td><input name="datatatianne" class="form-control" type="date" id="datatatianne" maxlength="100" />       		  <br>  		  </tr>
		  <tr>
      <td>Horario:</td>
      <td><input name="horariotatianne" class="form-control" type="text" id="horariotatianne" maxlength="100" />
       <br>
    </tr>	<tr>      <td>Observação:</td>      <td><input name="obstatianne" class="form-control" type="text" id="obstatianne" maxlength="100" />       <br>    </tr>	<tr>      	<td>Comissão:</td>      <td><input name="comissaotatianne" class="form-control" type="text" id="comissaotatianne" maxlength="100" />       <br>    </tr>     <tr>      <td colspan="2"><p>       <center> <input name="cadastrar" class="btn-danger" type="submit" id="cadastrar" value="Concluir Cadastro"/> </center>         <br>		<br>          <input name="limpar" class=" btn btn-danger" type="reset" id="limpar" value="Limpar Campos preenchidos!" />          <br />    </tr>  </table></form>
<center><br>
<br>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>Copyright © Devlas | Site e Sistemas Web</a></p>
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