<?php
	//' or '1'='1
	//'; drop table empregado; '
	
	$nome = $_POST['nome'];
	$con = new PDO("mysql:host=mariadb-curso;dbname=ponto_eletronico", "root", "senac");
	
	/*
	$sql = "SELECT * FROM empregado WHERE nome = '".$nome."' LIMIT 100";
	echo $sql;
	echo "<br>";
	$rs = $con->query($sql);
	$statuso = $rs->execute();
	*/
	$sql = "SELECT * FROM empregado WHERE nome = :var1 LIMIT 100";
	$st = $con->prepare($sql);
	$st->bindParam(':var1', $nome);
	$statuso = $st->execute();

	$dados = $st->fetchAll();

	for ($i = 0; $i< sizeof($dados); $i++){
		echo "Nome Completo: ".$dados[$i]["nome"] ." ".$dados[$i]["sobrenome"]. "<br>";
	}
	
	
	$con = null;
	


?>
