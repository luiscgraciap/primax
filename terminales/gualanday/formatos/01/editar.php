<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="SHORTCUT ICON" href="../../../../imagenes/iconoPRIMAX1.ico">
<title>Editar / Modificar un consecutivo</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../../../css/fuentes.css">
<style type="text/css">
  body  {background:url(../../../../imagenes/primax.svg) top center; background-size:105% auto;
					 color:rgba(0,0,0,1); background-color:rgba(255,255,255,1); text-align:center;
				margin-top: 0px;
				 transform: scale(1.5);
		  transform-origin: top center;
			-moz-transform: scale(1.5);
	 -moz-transform-origin: top center;}
  button {color:rgba(0,0,0,1); background-color:rgba(0,255,0,0.5); width:37.5%; height:47px; border:0px; border-radius:10px; font-family:Arlrdbd; font-size:19px}
</style>
<script type="text/javascript">
function closed() {window.open('','_parent',''); window.close();}
function cerrarVentana(){window.close();}
</script>
</head>
<body>
<?php
include ("../conectar_db.php");
$consec = $_POST['consec'];
$consulta = "SELECT * FROM formulario01 WHERE consecutivo=$consec";
$resultado = $conexion->query($consulta) or die(mysql_error());
if($row=$resultado->fetch_array()){
	echo "<form action='modificar.php' method='post'>"; include ('editar_datos.php');
	echo "<div style='position:absolute; left:50%; margin-left:-107.5mm; top:271mm; width:102.5mm; text-align:right; background-color:rgba(0,0,255,0)'>
		<img style='width:auto; height:25px' src='../../../../imagenes/editar.png'>
	      </div>
	      <div style='position:absolute; left:50%; margin-left:-107.5mm; top:271mm; width:102.5mm; text-align:right; background-color:rgba(0,255,0,0)'>
		<input style='font-weight:bold; font-size:14px; height:25px; width:25px; background-color:rgba(0,0,255,0); color:rgba(0,255,255,0);
		border:0px solid rgba(0,255,255,0); border-radius:10px; text-align:center; cursor:pointer' type='submit' name='modificar' value='.' title='Modificar la información en la base de datos'>
	      </div>
	      <div style='position:absolute; left:50%; margin-left:5mm; top:271mm; width:102.5mm; text-align:left; background-color:rgba(255,0,0,0)'>
		<a href='javascript:closed();'><img src='../../../../imagenes/regresar.png' width='auto' height='25' title='Cerrar este formato sin modificarlo.'></a>
	      </div>
	      </form>";}
  else {echo "<br><br><button>ESE CONSECUTIVO NO EXISTE EN LA BASE DE DATOS</button><script>setTimeout(cerrarVentana,2000);</script>";}
?>
</body>
</html>
