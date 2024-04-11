<?php

   if (!empty($_POST["btnLogin"])){
     if(!empty($_POST["Usuario"]) or  !empty($_POST["Clave"]))
		   {
			 $Usuario=$_POST["Usuario"];
			 $Clave=$_POST["Clave"];
			 $sql=$conexion->query("select * from usuario where usuario='$Usuario' and clave='$Clave' ");
				   if($datos=$sql->fetch_objetc()){
				     header("location :../Views/Index.php");
				   }
				   else{
				   
				   } 
		   }
		   else {
		       echo "Campo Vacio";
		    }
	   
   }

?>