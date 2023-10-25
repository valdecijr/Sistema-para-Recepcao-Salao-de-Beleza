<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Solicitação </title>
</head>

<body>
<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$id = $_POST["id"]; //atribuição do campo "id" vindo do formulário para variavel	
$nome = $_POST ["nome"];
$escova = $_POST ["escova"];
$hidratacao = $_POST ["hidratacao"];
$maoepe = $_POST ["maoepe"];
$obs = $_POST ["obs"];
$profissionalhair = $_POST ["profissionalhair"];
$profissionalestetica = $_POST ["profissionalestetica"];
$profissionalmanicure = $_POST ["profissionalmanicure"];
$enviado	= $_POST ["enviado"];
//Gravando no banco de dados !

//conectando com o localhost - mysql
$conexao = mysql_connect('mysql762.umbler.com:41890','adminbounjour','junior2302');
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("banco_opbounjour",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());



$query = "UPDATE `opcoes` SET `nome` = '$nome',
`escova` = '$escova',
`hidratacao` = '$hidratacao',
`maoepe` = '$maoepe',
`obs` = '$obs',
`profissionalhair` = '$profissionalhair',
`profissionalestetica` = '$profissionalestetica',
`profissionalmanicure` = '$profissionalmanicurea',
`enviado` = '$enviado' WHERE `id` = '$id' LIMIT 1 ;";
 

mysql_query($query,$conexao);

echo "<script language='javascript' type='text/javascript'>alert('Solicitação atualizada com sucesso!');window.location.href='controleescolhas.php'</script>";
?> 
</body>
</html>
