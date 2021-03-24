<?php 
include("../../../conexao.php");

//restrito

$corpo  = $_POST["corpo"];
$titulo = $_POST["titulo"];
$codigo = $_GET["idcdi"];
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
	  

	  
	  mysqli_query($conexao,"UPDATE blogimagem SET BlogImagem_Nome = '$nomeFoto' WHERE BlogImagem_Blog_Codigo='$codigo'");
	  
	  	  mysqli_query($conexao,"UPDATE blog SET Blog_Titulo = '$titulo', Blog_Corpo = '$corpo' WHERE Blog_Codigo = '$codigo' ");
	
	 header("location:../tables/basic-table.php");
    }
	else
	{	
		mysqli_query($conexao,"UPDATE blog SET Blog_Titulo = '$titulo', Blog_Corpo = '$corpo' WHERE Blog_Codigo = '$codigo' ");
		 header("location:../tables/basic-table.php");
	}
	
 

  

?>

