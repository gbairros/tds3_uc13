
<?php
	require_once "Empregado.php";

	$empregado = new Empregado();
	$empregado->__set("id", 4);
	$empregado->__set("noMatricula", "100");
	$empregado->__set("nome", "Caroline");
	$empregado->__set("sobrenome", "Souza");
	$empregado->__set("dataContratacao", "2021-02-27");
	$empregado->__set("dataNascimento", "1985-09-10");

	$empregado->atualizar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

</body>
</html>
