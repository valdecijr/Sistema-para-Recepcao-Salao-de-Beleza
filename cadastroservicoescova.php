<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>|Cadastro de Desejo </title>
	<link rel="icon"  href="logo.ico" />
</head>

<body>
<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULIO !
$id	= $_POST ["id"];$codigocli	= $_POST ["codigocli"];
$servicos	= $_POST ["servicos"];
//Gravando no banco de dados !

//conectando com o localhost - mysql
$conexao = mysql_connect('mysql762.umbler.com','adminbounjour','junior2302');
if (!$conexao)
	die ("Erro de conex䯠com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("banco_opbounjour",$conexao);
if (!$banco)
	die ("Erro de conex䯠com banco de dados, o seguinte erro ocorreu -> ".mysql_error());



$teste = "SELECT * FROM escolhasdocliente WHERE codigocli = '$codigocli'";


if($teste == $servicos){

        echo"<script language='javascript' type='text/javascript'>alert('Esse Cliente jᡦoi cadastrado!   Fale com Seu supervisor se tiver alguma duvida sobre isso!');window.location.href='boleto.html';</script>";
        die();

      }
	  else{

$query = "INSERT INTO `escolhasdocliente` ( `id`, `codigocli` , `servicos` )
VALUES (NULL, '$codigocli', '$servicos'
);";


		}
mysql_query($query,$conexao);

echo "<script language='javascript' type='text/javascript'>alert('Pronto, se o cliente desejar cadastre mais ;)');window.location.href='menudeservicos.php'</script>";
?> 
</body>
</html>
