<?php
	//' or '1'='1
	//'; desc 'empregado';
	$nome = $_POST['nome'];
	$con = new PDO("mysql:host=mariadbsenac;dbname=ponto_eletronico", "root", "senac");
	
	$sql = "SELECT * FROM empregado WHERE nome = '".$nome."'";
	echo $sql;
	$rs = $con->query($sql);

	$statuso = $rs->execute();
	$dados = $rs->fetchAll();
	$total_registros = $rs->rowCount();

	for ($i = 0; $i< sizeof($dados); $i++){
		echo "Nome: ".$dados[$i]["nome"]."<br>";
	}
	
	
	$con = null;
	


?>
