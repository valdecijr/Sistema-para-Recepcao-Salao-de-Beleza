<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>|Cadastro de Comanda </title>
	<link rel="icon"  href="logo.ico" />
</head>

<body>
<?php 
// RECEBENDO OS DADOS PREENCHIDOS !
$id	= $_POST ["id"];$codigoclinair	= $_POST ["codigoclinair"];$profissionalnair	= $_POST ["profissionalnair"];	$servico1nair	= $_POST ["servico1nair"];$servico2nair	= $_POST ["servico2nair"];$bebidasnair	= $_POST ["bebidasnair"];$vtotalnair	= $_POST ["vtotalnair"];$datanair	= $_POST ["datanair"];$horarionair	= $_POST ["horarionair"];$obsnair	= $_POST ["obsnair"];$comissaonair	= $_POST ["comissaonair"];
//Gravando no banco de dados !
//conectando com o localhost - mysql
$conexao = mysql_connect('mysql762.umbler.com','adminbounjour','junior2302');
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("banco_opbounjour",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
$teste = "SELECT * FROM comandanair WHERE codigoclinair = '$codigoclinair'";
if($teste == $servico){
        echo"<script language='javascript' type='text/javascript'>alert('Esse Serviço já foi cadastrado!   Fale com Seu supervisor se tiver alguma duvida sobre isso!');window.location.href='boleto.html';</script>";
        die();
      }
	  else{
$query = "INSERT INTO `comandanair` ( `id` , `codigoclinair` , `profissionalnair`, `servico1nair`, `servico2nair`, `bebidasnair`, `vtotalnair`, `datanair`, `horarionair`, `obsnair`, `comissaonair` )
VALUES (NULL , '$codigoclinair', '$profissionalnair', '$servico1nair', '$servico2nair', '$bebidasnair', '$vtotalnair', '$datanair', '$horarionair', '$obsnair', '$comissaonair'
);";
		}
mysql_query($query,$conexao);
echo "<script language='javascript' type='text/javascript'>alert('Comanda cadastrada com sucesso :)');window.location.href='comandanair.php'</script>";
?> 
</body>
</html>
