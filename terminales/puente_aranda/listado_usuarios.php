<html>
<head>
<meta http-equiv="Content-Type" content="text/html charset=utf-8">
<link rel="stylesheet" href="../../css/fuentes.css">
<style type="text/css">
  body{font-family:Arlrdbd; font-size:10px;
  	       margin-top: 0px;
		transform: scale(1.55);
	 transform-origin: top center;
	   -moz-transform: scale(1.55);
    -moz-transform-origin: top center;}
  .encabezado	{position:fixed; width:100%; top:0px; left:0px; z-index:10; margin-top:0px; margin-right:0px; margin-bottom:0px; margin-left:0px;
  		 background-color:rgba(255,115,0,0); color:rgba(0,0,0,1); text-align:center;}
  .contenido	{position:relative; width:100%; top:44px; left:0px; z-index:9; margin-top:0px; margin-right:0px; margin-bottom:0px; margin-left:0px;
  		 background-color:rgba(255,255,255,1); color:rgba(0,0,0,1); text-align:center;}
  table		{table-layout:fixed; text-align:center;}
  td,th		{font-size:Arlrdbd; overflow:hidden; text-overflow:ellipsis; white-space:nowrap; width:100%; text-align:center;}
  td:hover	{overflow:visible; font-size:100%; font-weight:bold; background-color:rgba(0,255,0,0); color:rgba(0,0,0,1)}
  tr:hover	{overflow:auto; font-weight:bold; background-color:rgba(255,115,0,0.25); color:rgba(0,0,0,1)}
  .titulo	{border-top:solid white 0px; border-right:solid white 1px; border-bottom:solid white 0px; border-left:solid white 1px;
  		 background-color:rgba(255,115,0,1); color:rgba(40,40,40,1); font-size:10px; font-family:Arlrdbd; text-align:center}
  .titulo_sin	{border-top:solid white 0px; border-right:solid white 0px; border-bottom:solid white 0px; border-left:solid white 0px;
  		 background-color:rgba(255,115,0,1); color:rgba(40,40,40,1); font-size:10px; font-family:Arlrdbd; text-align:center}
</style>
<script>
function closed() {window.open('','_parent',''); window.close();}
</script>
</head>
<body>
<?php
include("formatos/conectar_db.php");
include("../../conectar_db_usuarios.php");

$usuarios = "SELECT * FROM usuarios WHERE terminal='$terminal'";
$resultado = $conexion_usuario->query($usuarios) or die($conexion_usuario->error);
echo "<div class='encabezado'>
	<table style='width:30%; margin-left:auto; margin-right:auto' border='0' cellpadding='0' cellspacing='0'>
	  <tr height='3px'>
	    <td class='titulo_sin' style='width:20%; color:rgba(255,112,0,1); background-color:rgba(0,0,0,1)'></td>
	    <td class='titulo_sin' style='width:80%; color:rgba(255,112,0,1); background-color:rgba(0,0,0,1)'></td>
	  </tr>
	  <tr height='16px'>
	    <td colspan='4' rowspan='1' class='titulo_sin' style='color:rgba(255,112,0,1); background-color:rgba(0,0,0,1); text-align:center'>
	      TERMINAL "; echo strtoupper($terminal); echo "
	    </td>
	  </tr>
	  <tr height='3px'>
	    <td class='titulo_sin'></td>
	    <td class='titulo_sin'></td>
	  </tr>
	  <tr height='22px'>
	    <td class='titulo_sin'>ID</td>
	    <td class='titulo_sin'>USUARIO</td>
	  </tr>
	</table>
      </div>";
if ($resultado->num_rows > 0)
{while ($user = $resultado->fetch_array()) {
echo "
<div class='contenido'>
	<table><tr height='3px'><td></td></tr></table>
	<table style='width:30%; margin-left:auto; margin-right:auto' border='1' cellpadding='0' cellspacing='0'>
		  <script type='text/javascript'>document.write('<tr height=' + (window.innerHeight-0)/30 + '>');</script>"
		    ."<td style='width:20%; font-size:14px; color:black'>".$user['id']."</td>"
		    ."<td style='width:80%; font-size:14px; color:black; text-align:right'>&nbsp;".$user['usuario'].'@primax.com.co&nbsp;&nbsp;'."</td>"
		  ."</tr>";} echo "
       </table>";}
echo "</div>
";
?>
<div style="position:relative; left:50%; margin-left:-5mm; top:15mm; width:10mm; text-align:center; background-color:rgba(255,0,0,0.0)">
  <a href="javascript:closed();"><img src="../../imagenes/regresar.png" width="25px" height="auto" title="Cerrar esta pestaña"></a>
</div>
</body>
</html>
