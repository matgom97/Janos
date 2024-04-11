<?php

$host = "localhost"; 	//TU HOST//
$dbuser = "janoscom_janos";	 	//TU USUARIO DEL HOST//
$dbpwd = "bms_janos#!";	//TU CONTRASEÑA//
$db = "janoscom_bms";		//TU BASE DE DATOS//

$connect = mysql_connect ($host, $dbuser, $dbpwd);
if(!$connect)
    echo ("No se pudo conectar a la base de datos");
else
   $select = mysql_select_db($db);
   mysql_query("SET NAMES 'utf8'",$connect);
?> 
