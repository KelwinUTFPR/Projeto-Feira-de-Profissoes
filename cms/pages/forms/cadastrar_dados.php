<?php 
include("../../../conexao.php");

//restrito

$corpo  = $_POST["corpo"];
$titulo = $_POST["titulo"];
$codigo = $_POST["codigo"];
$imagem = $_GET["idi"];
$Foto = $_FILES["arquivo"]?$_FILES["arquivo"]:false;

$query= mysqli_query($conexao, "SELECT * FROM blogimagem WHERE BlogImagem_Codigo = '$imagem'"); 



$ext = pathinfo($Foto["name"], PATHINFO_EXTENSION);
     if($ext=="jpg")
	  {
		  while($exibe = mysqli_fetch_array($query))
	{	
	unlink("../../../img/".$exibe["BlogImagem_Nome"]);
	}
	  $cod= md5(uniqid($Foto["name"]));
	  $nomeFoto= $cod.".".$ext;
	  $destino = "../../../img/".$nomeFoto;
	  move_uploaded_file($Foto["tmp_name"],$destino);
	  

	   mysqli_query($conexao,"INSERT INTO blog(Blog_Codigo, Blog_Titulo, Blog_Corpo) VALUES ('$codigo', '$titulo', '$corpo')");
	  mysqli_query($conexao,"INSERT INTO blogimagem(BlogImagem_Nome, BlogImagem_Blog_Codigo)  VALUES('$nomeFoto', '$codigo')");
	  
	 
	
	 header("location:../tables/basic-table.php");
    }
	else
	{	
		mysqli_query($conexao,"INSERT INTO blog(Blog_Titulo, Blog_Corpo) VALUES ('$titulo', '$corpo')");
		 header("location:../tables/basic-table.php");
	}
	
 

  

?>