<?php
include("../../../conexao.php");

	$imagem = $_GET["idi"];
	$codigo = $_GET["idcdi"];

	$query = mysqli_query($conexao, "SELECT * FROM blogimagem WHERE BlogImagem_Codigo = '$imagem'");

	while($exibe = mysqli_fetch_array($query))
	{	
	unlink("../../../img/".$exibe["BlogImagem_Nome"]);
	}

	mysqli_query($conexao,"DELETE FROM blogimagem WHERE BlogImagem_Codigo = '$imagem';");
	mysqli_query($conexao,"DELETE FROM blog WHERE Blog_Codigo = '$codigo'");

	header("location:../tables/basic-table.php");
 ?>