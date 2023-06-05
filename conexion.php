<?php
	$link = mysql_connect("127.0.0.1:3306","u903037789_danielcv123","Daniel367") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("u903037789_danielcv",$link) or die("<h2>Error de Conexion</h2>");
    
    
    $nombres = $_POST['nombre'];
	$correo = $_POST['correo'];
	$proyecto = $_POST['proyecto'];


    mysql_query("INSERT INTO clientes VALUES('','$nombres','$correo','$proyecto')",$link);
	
?> 