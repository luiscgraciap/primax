<html>
<head>
<title>VERIFICAR USUARIO PRIMAX</title>
<link rel="SHORTCUT ICON" href="imagenes/iconoPRIMAX1.ico">
<link rel="stylesheet" href="css/fuentes.css">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<style>
  body {font-size:80px; color:rgba(40,40,40,1); background-color:rgba(255,255,255,1); text-align:center; vertical-align:middle}
  body {	margin-top: 0px;
		 transform: scale(1);
	  transform-origin: top center;
	    -moz-transform: scale(1);
     -moz-transform-origin: top center;}
</style>
<script>
  function cerrarVentana_x_usuario(){window.close();}
</script>
</head>
<? $tiempo_cierre_pestana = 2; ?>		<!-- tiempo en minutos -->
<body onLoad="setTimeout('window.close()',<? echo $tiempo_cierre_pestana * 60 * 1000; ?>)">
<?php
include ("conectar_db_usuarios.php");
$usuario  = $_POST['usuario'];
$usuario1 = $_POST['usuario'] . '@primax.com.co';
$clave    = $_POST['clave'];
$terminal = $_POST['terminal'];
//echo "verificar_usuario.php<br>usuario: $usuario1<br>contraseña: $clave<br>terminal: $terminal";
$consulta_usuario = "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave' AND terminal='$terminal'";
$resultado_usuario = $conexion_usuario->query($consulta_usuario) or die($conexion_usuario->error);
if ($resultado_usuario->num_rows<=0) {echo "<br><br><b>VERIFIQUE USUARIO y/o CLAVE</b><script>setTimeout(cerrarVentana_x_usuario,2000);</script>";}
  else {while ($row_usuario = $resultado_usuario->fetch_assoc()) {extract($row_usuario); include "permisos.php";}}
?>
<div style="position:absolute; left:3%; top:25%; background-color:rgba(255,0,0,0.0)">
  <a href="mailto:comercial@solucionesgraficas.net?Subject=Solicitud%20pedido%20libretas%20permisos%20de%20trabajo">
  <img style="width:200%; height:auto" src="imagenes/pedidos.svg" title="Enviar pedido por correo electrónico a&#x00A;comercial@solucionesgraficas.net">
  </a>
</div>
</body>
</html>