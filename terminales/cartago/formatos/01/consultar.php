<html>
<head>
<link rel="SHORTCUT ICON" href="../../../../imagenes/iconoPRIMAX1.ico">
<title>Consulta Consecutivo</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<link rel="stylesheet" href="../../../../css/fuentes.css">
<style>
  body  {background:url(../../../../imagenes/primax.svg) 0 center; background-size:100% auto;
  	       margin-top: 0px;
		transform: scale(1);
	 transform-origin: top center;
	   -moz-transform: scale(1);
    -moz-transform-origin: top center;}
  button {color:rgba(0,0,0,1); background-color:rgba(0,255,0,0.5); width:55%; height:70px; border:0px; border-radius:10px; font-family:Arlrdbd; font-size:28px}
</style>
<script>
  function cerrarVentana(){window.close();}
</script>
</head>
<body>
<?php
include ("../conectar_db.php");
$consec = $_POST['consec'];
$consulta = "SELECT * FROM formulario01 WHERE consecutivo=$consec";
$resultado = $conexion->query($consulta) or die(mysql_error());
if ($resultado->num_rows<=0)
   {echo "<br><br><button>ESE CONSECUTIVO NO EXISTE EN LA BASE DE DATOS</button><script>setTimeout(cerrarVentana,2000);</script>";}
  else
   {while ($row = $resultado->fetch_assoc()) {extract($row); include 'formato_consultado.php';}}
?>
</body>
</html>
