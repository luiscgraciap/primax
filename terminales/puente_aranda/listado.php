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
				 background-color:rgba(255,115,0,0); color:rgba(0,0,0,1)}
  .contenido	{position:relative; width:100%; top:44px; left:0px; z-index:9; margin-top:0px; margin-right:0px; margin-bottom:0px; margin-left:0px;
				 background-color:rgba(255,255,255,1); color:rgba(0,0,0,1)}
  table		{table-layout:fixed;}
  td,th		{overflow:hidden; text-transform:uppercase; text-overflow:ellipsis; white-space:nowrap; width:100%;}
  td:hover	{overflow:visible; background-color:rgba(0,255,0,0); color:rgba(0,0,0,1)}
  tr:hover	{overflow:auto; font-weight:bold; background-color:rgba(255,115,0,0.25); color:rgba(0,0,0,1)}
  .titulo	{border-top:solid white 0px; border-right:solid white 1px; border-bottom:solid white 0px; border-left:solid white 1px;
			 background-color:rgba(255,115,0,1); color:rgba(40,40,40,1); font-size:10px; font-family:Arlrdbd; text-align:center}
  .tabla	{width:45%; margin-left:auto; margin-right:auto}
  .cantidad {width:15%; font-family:Arlrdbd; font-size:17px; color:black; text-align:center}
  .formato	{width:85%; font-family:Arlrdbd; font-size:15px; color:black; text-align:left}
</style>
<script>
function closed() {window.open('','_parent',''); window.close();}
</script>
</head>
<body>
<?php
include("formatos/conectar_db.php");

$query01="SELECT * FROM formulario01 ORDER BY consecutivo";
$numpermisos01=$conexion->query($query01);
$total01=$numpermisos01->num_rows;

$query02="SELECT * FROM formulario02 ORDER BY consecutivo";
$numpermisos02=$conexion->query($query02);
$total02=$numpermisos02->num_rows;

/*
$query03="SELECT * FROM formulario03 ORDER BY consecutivo";
$numpermisos03=$conexion->query($query03);
$total03=$numpermisos03->num_rows;

$query04="SELECT * FROM formulario04 ORDER BY consecutivo";
$numpermisos04=$conexion->query($query04);
$total04=$numpermisos04->num_rows;

$query05="SELECT * FROM formulario05 ORDER BY consecutivo";
$numpermisos05=$conexion->query($query05);
$total05=$numpermisos05->num_rows;

$query06="SELECT * FROM formulario06 ORDER BY consecutivo";
$numpermisos06=$conexion->query($query06);
$total06=$numpermisos06->num_rows;

$query07="SELECT * FROM formulario07 ORDER BY consecutivo";
$numpermisos07=$conexion->query($query07);
$total07=$numpermisos07->num_rows;

$query08="SELECT * FROM formulario08 ORDER BY consecutivo";
$numpermisos08=$conexion->query($query08);
$total08=$numpermisos08->num_rows;

$query09="SELECT * FROM formulario09 ORDER BY consecutivo";
$numpermisos09=$conexion->query($query09);
$total09=$numpermisos09->num_rows;

$query10="SELECT * FROM formulario10 ORDER BY consecutivo";
$numpermisos10=$conexion->query($query10);
$total10=$numpermisos10->num_rows;

$query11="SELECT * FROM formulario11 ORDER BY consecutivo";
$numpermisos11=$conexion->query($query11);
$total11=$numpermisos11->num_rows;

$query12="SELECT * FROM formulario12 ORDER BY consecutivo";
$numpermisos12=$conexion->query($query12);
$total12=$numpermisos12->num_rows;

$query13="SELECT * FROM formulario13 ORDER BY consecutivo";
$numpermisos13=$conexion->query($query13);
$total13=$numpermisos13->num_rows;

$query14="SELECT * FROM formulario14 ORDER BY consecutivo";
$numpermisos14=$conexion->query($query14);
$total14=$numpermisos14->num_rows;

$query15="SELECT * FROM formulario15 ORDER BY consecutivo";
$numpermisos15=$conexion->query($query15);
$total15=$numpermisos15->num_rows;

$query16="SELECT * FROM formulario16 ORDER BY consecutivo";
$numpermisos16=$conexion->query($query16);
$total16=$numpermisos16->num_rows;

$query17="SELECT * FROM formulario17 ORDER BY consecutivo";
$numpermisos17=$conexion->query($query17);
$total17=$numpermisos17->num_rows;

$query18="SELECT * FROM formulario18 ORDER BY consecutivo";
$numpermisos18=$conexion->query($query18);
$total18=$numpermisos18->num_rows;

$query19="SELECT * FROM formulario19 ORDER BY consecutivo";
$numpermisos19=$conexion->query($query19);
$total19=$numpermisos19->num_rows;

$query20="SELECT * FROM formulario20 ORDER BY consecutivo";
$numpermisos20=$conexion->query($query20);
$total20=$numpermisos20->num_rows;
*/

/*
$total=$total01 + $total02 + $total03 + $total04 + $total05 + $total06 + $total07 + $total08 + $total09 + $total10 + $total11 + $total12 + $total13 + $total14 + $total15 + $total16 + $total17 + $total18 + $total19 + $total20;
*/

$total=$total01 + $total02;

echo "<div class='encabezado'>
		<table class='tabla' border='0' cellpadding='0' cellspacing='0'>
		  <tr height='44px'>
		    <td class='titulo' style='width:15%; font-size:10px'>Formatos<br>Diligenciados</td>
		    <td class='titulo' style='width:85%; font-size:16px'>PERMISOS DE TRABAJO<br>TERMINAL "; echo strtoupper($terminal); echo "</td>
		  </tr>
		</table>
      </div>";
echo "<div class='contenido'>
	<table><tr height='3px'><td></td></tr></table>
	<table class='tabla' border='1' cellpadding='0' cellspacing='0'>";
	  	  echo "<script type='text/javascript'>document.write('<tr height=' + (window.innerHeight-44)/21 + '>');</script>
		  <td class='cantidad'>" . $total01 . "</td><td class='formato'>&nbsp;CERTIFICADO DE HABILITACIÓN</td>
		</tr>";
echo "  </table>
	<table><tr height='3px'><td></td></tr></table>
	<table class='tabla' border='1' cellpadding='0' cellspacing='0'>";
	  echo "<script type='text/javascript'>document.write('<tr height=' + (window.innerHeight-44)/21 + '>');</script>
		  <td class='cantidad'>" . $total02 . "</td><td class='formato'>&nbsp;PERMISO TRABAJO EN CALIENTE ESPACIO CONFINADO</td>
		</tr>";
echo "  </table>
	<table><tr height='3px'><td></td></tr></table>
<!--
	<table class='tabla' border='1' cellpadding='0' cellspacing='0'>";
	  echo "<script type='text/javascript'>document.write('<tr height=' + (window.innerHeight-44)/21 + '>');</script>
		  <td class='cantidad'>" . $total03 . "</td><td class='formato'>&nbsp;PERMISO TRABAJO EN CALIENTE ESPACIO NO CONFINADO</td>
		</tr>";
echo "  </table>
	<table><tr height='3px'><td></td></tr></table>
	<table class='tabla' border='1' cellpadding='0' cellspacing='0'>";
	  echo "<script type='text/javascript'>document.write('<tr height=' + (window.innerHeight-44)/21 + '>');</script>
		  <td class='cantidad'>" . $total04 . "</td><td class='formato'>&nbsp;PERMISO TRABAJO EN FRIO ESPACIO CONFINADO</td>
		</tr>";
echo "  </table>
	<table><tr height='3px'><td></td></tr></table>
	<table class='tabla' border='1' cellpadding='0' cellspacing='0'>";
	  echo "<script type='text/javascript'>document.write('<tr height=' + (window.innerHeight-44)/21 + '>');</script>
		  <td class='cantidad'>" . $total05 . "</td><td class='formato'>&nbsp;PERMISO TRABAJO EN FRIO ESPACIO NO CONFINADO</td>
		</tr>";
echo "  </table>
	<table><tr height='3px'><td></td></tr></table>
	<table class='tabla' border='1' cellpadding='0' cellspacing='0'>";
	  echo "<script type='text/javascript'>document.write('<tr height=' + (window.innerHeight-44)/21 + '>');</script>
		  <td class='cantidad'>" . $total06 . "</td><td class='formato'>&nbsp;CERTIFICADO AISLAMIENTO ELÉCTRICO</td>
		</tr>";
echo "  </table>
	<table><tr height='3px'><td></td></tr></table>
	<table class='tabla' border='1' cellpadding='0' cellspacing='0'>";
	  echo "<script type='text/javascript'>document.write('<tr height=' + (window.innerHeight-44)/21 + '>');</script>
		  <td class='cantidad'>" . $total07 . "</td><td class='formato'>&nbsp;PERMISOS TRABAJO ELÉCTRICO</td>
		</tr>";
echo "  </table>
	<table><tr height='3px'><td></td></tr></table>
	<table class='tabla' border='1' cellpadding='0' cellspacing='0'>";
	  echo "<script type='text/javascript'>document.write('<tr height=' + (window.innerHeight-44)/21 + '>');</script>
		  <td class='cantidad'>" . $total08 . "</td><td class='formato'>&nbsp;PERMISO DESACOPLE DE EQUIPOS</td>
		</tr>";
echo "  </table>
	<table><tr height='3px'><td></td></tr></table>
	<table class='tabla' border='1' cellpadding='0' cellspacing='0'>";
	  echo "<script type='text/javascript'>document.write('<tr height=' + (window.innerHeight-44)/21 + '>');</script>
		  <td class='cantidad'>" . $total09 . "</td><td class='formato'>&nbsp;AUTORIZACIÓN PARA EXCAVACIÓN</td>
		</tr>";
echo "  </table>
	<table><tr height='3px'><td></td></tr></table>
	<table class='tabla' border='1' cellpadding='0' cellspacing='0'>";
	  echo "<script type='text/javascript'>document.write('<tr height=' + (window.innerHeight-44)/21 + '>');</script>
		  <td class='cantidad'>" . $total10 . "</td><td class='formato'>&nbsp;VERIFICACIÓN EQUIPOS MOTOR DE COMBUSTIÓN</td>
		</tr>";
echo "  </table>
	<table><tr height='3px'><td></td></tr></table>
	<table class='tabla' border='1' cellpadding='0' cellspacing='0'>";
	  echo "<script type='text/javascript'>document.write('<tr height=' + (window.innerHeight-44)/21 + '>');</script>
		  <td class='cantidad'>" . $total11 . "</td><td class='formato'>&nbsp;VERIFICACIÓN EQUIPO OXIACETILENO</td>
		</tr>";
echo "  </table>
	<table><tr height='3px'><td></td></tr></table>
	<table class='tabla' border='1' cellpadding='0' cellspacing='0'>";
	  echo "<script type='text/javascript'>document.write('<tr height=' + (window.innerHeight-44)/21 + '>');</script>
		  <td class='cantidad'>" . $total12 . "</td><td class='formato'>&nbsp;VERIFICACIÓN PREVIA AL IZAJE</td>
		</tr>";
echo "  </table>
	<table><tr height='3px'><td></td></tr></table>
	<table class='tabla' border='1' cellpadding='0' cellspacing='0'>";
	  echo "<script type='text/javascript'>document.write('<tr height=' + (window.innerHeight-44)/21 + '>');</script>
		  <td class='cantidad'>" . $total13 . "</td><td class='formato'>&nbsp;PERMISO TRABAJO EN ALTURAS</td>
		</tr>";
echo "  </table>
	<table><tr height='3px'><td></td></tr></table>
	<table class='tabla' border='1' cellpadding='0' cellspacing='0'>";
	  echo "<script type='text/javascript'>document.write('<tr height=' + (window.innerHeight-44)/21 + '>');</script>
		  <td class='cantidad'>" . $total14 . "</td><td class='formato'>&nbsp;CONTROL OPERACIÓN RECIBO POLIDUCTO MEDICIÓN MANUAL</td>
		</tr>";
echo "  </table>
	<table><tr height='3px'><td></td></tr></table>
	<table class='tabla' border='1' cellpadding='0' cellspacing='0'>";
	  echo "<script type='text/javascript'>document.write('<tr height=' + (window.innerHeight-44)/21 + '>');</script>
		  <td class='cantidad'>" . $total15 . "</td><td class='formato'>&nbsp;CONTROL OPERACIÓN RECIBO POLIDUCTO MEDICIÓN AUTOMÁTICA</td>
		</tr>";
echo "  </table>
	<table><tr height='3px'><td></td></tr></table>
	<table class='tabla' border='1' cellpadding='0' cellspacing='0'>";
	  echo "<script type='text/javascript'>document.write('<tr height=' + (window.innerHeight-44)/21 + '>');</script>
		  <td class='cantidad'>" . $total16 . "</td><td class='formato'>&nbsp;CERTIFICADO DE INTERFACES</td>
		</tr>";
echo "  </table>
	<table><tr height='3px'><td></td></tr></table>
	<table class='tabla' border='1' cellpadding='0' cellspacing='0'>";
	  echo "<script type='text/javascript'>document.write('<tr height=' + (window.innerHeight-44)/21 + '>');</script>
		  <td class='cantidad'>" . $total17 . "</td><td class='formato'>&nbsp;ENTRADA/SALIDA MATERIALES</td>
		</tr>";
echo "  </table>
	<table><tr height='3px'><td></td></tr></table>
	<table class='tabla' border='1' cellpadding='0' cellspacing='0'>";
	  echo "<script type='text/javascript'>document.write('<tr height=' + (window.innerHeight-44)/21 + '>');</script>
		  <td class='cantidad'>" . $total18 . "</td><td class='formato'>&nbsp;COMPROBANTE DE MEDIDA FINAL</td>
		</tr>";
echo "  </table>
	<table><tr height='3px'><td></td></tr></table>
	<table class='tabla' border='1' cellpadding='0' cellspacing='0'>";
	  echo "<script type='text/javascript'>document.write('<tr height=' + (window.innerHeight-44)/21 + '>');</script>
		  <td class='cantidad'>" . $total19 . "</td><td class='formato'>&nbsp;ENTREGA JET A-1 CARTAGENA</td>
		</tr>";
echo "  </table>
	<table><tr height='3px'><td></td></tr></table>
	<table class='tabla' border='1' cellpadding='0' cellspacing='0'>";
	  echo "<script type='text/javascript'>document.write('<tr height=' + (window.innerHeight-44)/21 + '>');</script>
		  <td class='cantidad'>" . $total20 . "</td><td class='formato'>&nbsp;BOMBEO JET A-1 PUENTE ARANDA</td>
		</tr>";
echo "  </table>
	<table><tr height='3px'><td></td></tr></table>
-->
      <div style='text-align:center;font-size:16px'>
		Total de formatos diligenciados: <b>$total</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href='javascript:closed();'><img src='../../imagenes/regresar.png' width='25' height='auto' title='Cerrar esta pestaña'></a>
	  </div>
  </div>"; //cierre <div class='contenido'>
?>
</body>
</html>

<!--
01. CERTIFICADO DE HABILITACIÓN
02. PERMISO TRABAJO EN CALIENTE ESPACIO CONFINADO
03. PERMISO TRABAJO EN CALIENTE ESPACIO NO CONFINADO
04. PERMISO TRABAJO EN FRIO ESPACIO CONFINADO
05. PERMISO TRABAJO EN FRIO ESPACIO NO CONFINADO
06. CERTIFICADO AISLAMIENTO ELÉCTRICO
07. PERMISOS TRABAJO ELÉCTRICO
08. PERMISO DESACOPLE DE EQUIPOS
09. AUTORIZACIÓN PARA EXCAVACIÓN
10. VERIFICACIÓN EQUIPOS MOTOR DE COMBUSTIÓN
11. VERIFICACIÓN EQUIPO OXIACETILENO
12. VERIFICACIÓN PREVIA AL IZAJE
13. PERMISO TRABAJO EN ALTURAS
14. CONTROL OPERACIÓN RECIBO POLIDUCTO MEDICIÓN MANUAL
15. CONTROL OPERACIÓN RECIBO POLIDUCTO MEDICIÓN AUTOMÁTICA
16. CERTIFICADO DE INTERFACES
17. ENTRADA/SALIDA MATERIALES
18. COMPROBANTE DE MEDIDA FINAL
19. ENTREGA JET A-1 CARTAGENA
20. BOMBEO JET A-1 PUENTE ARANDA
21. CHECKLIST PARA BLOQUEO Y ETIQUETADO ELÉCTRICO
22. RADIACIONES IONIZANTES
23. RECIBO ADITIVO POR CTK
24. RECIBO ALCOHOL POR CTK
25. RECIBO B2E POR CTK
26. RECIBO ACEM POR CTK (GALAPA)
27. RECIBO GASOLINA
28. RECIBO GASOLINA (EXTRA)
29. RECIBO BIODIESEL B100
30. RECIBO BIODIESEL B100 CON  PREMEZCLA
31. PRUEBAS ABREVIADAS CALIDAD B2E - (PUA)
32. PRUEBAS ABREVIADAS CALIDAD EXTRA - (PUA)
33. PRUEBAS ABREVIADAS CALIDAD MOTOR  - (PUA)
34. AISLAMIENTO DE ENERGÍA Y APERTURA DE EQUIPO
35. ANÁLISIS DE PERDIDAS EN LA TAREA
36. SALIDA CAMIONES TANQUE - (PUA)
37. ASIGNACIÓN TURNO CAMIONES TANQUE - (PUA)
38. AUTORIZACIÓN ENTRADA MATERIALES - (PUA)
39. AUTORIZACIÓN SALIDA MATERIALES - (PUA)
40. PLANILLA VEHÍCULOS SIN TARJETA - (PUA)
41. CARTA SOLICITUD DE ANÁLISIS
42. Autorización ENTRADA y SALIDA Materiales CARTAGENA
43. RECIBO BIODIESEL B100 CON PREMEZCLA - ANEXO 15B

<td class='cantidad'>";
    if ($total01 <= 9) {echo "000";} else {if ($total01 <= 99) {echo "00";} else {if ($total01 <= 999) {echo "0";}}} echo "" . $total01 . "</td>
-->
