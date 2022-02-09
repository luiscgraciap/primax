<html>
<head>
<link rel="SHORTCUT ICON" href="../../../../imagenes/iconoPRIMAX1.ico">
<link rel="stylesheet" type="text/css" href="../../../../css/noimprimir.css" media="print">
<link rel="stylesheet" type="text/css" href="../../../../css/fuentes.css">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<style>
  body  {font-family:Arlrdlt; font-size:10px; text-align:center; color:rgba(0,0,191,1)}
  button {background-color:rgba(0,255,0,0.0); border:0px; border-radius:0px; cursor:pointer; height:25px}
</style>
<script>
  function closed() {window.open('','_parent',''); window.close();}
  document.title = '<?echo $instalacion;?> - Certificado de Habilitacion #<?echo $_POST['consec'];?>';
</script>
</head>
<body>
<?php
$consec = $_POST['consec'];
$consulta = "SELECT * FROM formulario01 WHERE consecutivo=$consec";
$resultado = $conexion->query($consulta) or die(mysqli_error());
while ($row = $resultado->fetch_assoc()){extract($row);}
?>

<!-- *****************************************       INICIO DEL FORMULARIO       ***************************************** -->
<div style="position:absolute; left:50%; margin-left:-107.5mm; top:0px; width:215mm; height:558mm; background-color:rgba(255,255,255,0.95); overflow:hidden; border:0px solid rgba(0,0,0,0.25)">
  <div style="position:absolute; left:0mm; top:0mm"><img src="../../../../formatos_SVG/01_tiro.svg" width=812.6px></div>
<!--  <div style="position:absolute; left:0mm; top:279.5mm"><hr size=1mm style="width:215mm; border-top:1px solid gray"></div> -->
  <div style="position:absolute; left:0mm; top:280mm"><img src="../../../../formatos_SVG/01_retiro.svg" width=812.6px></div>

<!-- *****************************************       encabezado formato       ***************************************** -->
  <div style="position:absolute; left:185.55mm; top:8.75mm">
    <span style="font-family:SCHLBKB; font-size:16px; color:red; vertical-align:top">
    <? if ($consecutivo <= 9) {echo "000";} else {if ($consecutivo <= 99) {echo "00";} else {if ($consecutivo <= 999) {echo "0";}}} echo $consecutivo;?>
    </span>
  </div>
  <div style="position:absolute; left: 4.40cm; top:2.275cm">
    <span style="width:3.0cm; background-color:rgba(240,240,240,0); color:rgba(0,0,191,1); border:0px"><?echo $instalacion;?>
  </div>
  <div style="position:absolute; left:18.50cm; top:2.275cm"><?echo $certificado;?></div>

<!-- *****************************************       sección A       ***************************************** -->
  <div style="position:absolute; left: 4.00cm; top: 3.11cm"><?echo $ubicacion;?></div>
  <div style="position:absolute; left:18.60cm; top: 3.11cm"><?echo $ats;?></div>
  <div style="position:absolute; left: 4.00cm; top: 3.43cm"><?echo $equipo;?></div>
  <div style="position:absolute; left: 9.50cm; top: 3.43cm"><?echo $fechaA;?></div>
  <div style="position:absolute; left:14.70cm; top: 3.43cm"><?echo date ("g:i A", strtotime($horainicioA));?></div>
  <div style="position:absolute; left:18.35cm; top: 3.43cm"><?echo date ("g:i A", strtotime($horafinalA));?></div>
  <div style="position:absolute; left: 6.40cm; top: 3.78cm"><?echo $descripcion;?></div>

<!-- *****************************************       sección B       ***************************************** -->
  <div style="position:absolute; left:12.92cm; top: 4.62cm"><?if ($cambio == 'CME') {echo 'X';}?></div>
  <div style="position:absolute; left:12.92cm; top: 4.95cm"><?if ($cambio == 'CDE') {echo 'X';}?></div>
  <div style="position:absolute; left:17.60cm; top: 4.95cm"><?if ($cambio == 'CDE') {echo $pedidocambio;}?></div>

<!-- *****************************************       sección C       ***************************************** -->
  <div style="position:absolute; left:10.28cm; top: 6.08cm"><?if ($C1 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:10.88cm; top: 6.08cm"><?if ($C1 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:10.28cm; top: 6.38cm"><?if ($C2 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:10.88cm; top: 6.38cm"><?if ($C2 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:10.28cm; top: 6.68cm"><?if ($C3 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:10.88cm; top: 6.68cm"><?if ($C3 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:10.28cm; top: 6.98cm"><?if ($C4 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:10.88cm; top: 6.98cm"><?if ($C4 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:10.28cm; top: 7.28cm"><?if ($C5 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:10.88cm; top: 7.28cm"><?if ($C5 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:10.28cm; top: 7.58cm"><?if ($C6 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:10.88cm; top: 7.58cm"><?if ($C6 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:10.28cm; top: 7.88cm"><?if ($C7 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:10.88cm; top: 7.88cm"><?if ($C7 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:10.28cm; top: 8.18cm"><?if ($C8 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:10.88cm; top: 8.18cm"><?if ($C8 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:10.28cm; top: 8.48cm"><?if ($C9 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:10.88cm; top: 8.48cm"><?if ($C9 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:10.28cm; top: 8.78cm"><?if ($C10 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:10.88cm; top: 8.78cm"><?if ($C10 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:10.28cm; top: 9.08cm"><?if ($C11 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:10.88cm; top: 9.08cm"><?if ($C11 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:10.28cm; top: 9.38cm"><?if ($C12 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:10.88cm; top: 9.38cm"><?if ($C12 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:10.28cm; top: 9.68cm"><?if ($C13 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:10.88cm; top: 9.68cm"><?if ($C13 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:10.28cm; top: 9.98cm"><?if ($C14 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:10.88cm; top: 9.98cm"><?if ($C14 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:10.28cm; top:10.28cm"><?if ($C15 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:10.88cm; top:10.28cm"><?if ($C15 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:10.28cm; top:10.58cm"><?if ($C16 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:10.88cm; top:10.58cm"><?if ($C16 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:10.28cm; top:11.18cm"><?if ($C17 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:10.88cm; top:11.18cm"><?if ($C17 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:10.28cm; top:11.48cm"><?if ($C18 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:10.88cm; top:11.48cm"><?if ($C18 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:10.28cm; top:11.78cm"><?if ($C19 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:10.88cm; top:11.78cm"><?if ($C19 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:10.28cm; top:12.38cm"><?if ($C20 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:10.88cm; top:12.38cm"><?if ($C20 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:10.28cm; top:12.78cm"><?if ($C21 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:10.88cm; top:12.78cm"><?if ($C21 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:19.58cm; top: 6.08cm"><?if ($C22 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:20.18cm; top: 6.08cm"><?if ($C22 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:19.58cm; top: 6.38cm"><?if ($C23 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:20.18cm; top: 6.38cm"><?if ($C23 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:19.58cm; top: 6.98cm"><?if ($C24 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:20.18cm; top: 6.98cm"><?if ($C24 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:19.58cm; top: 7.28cm"><?if ($C25 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:20.18cm; top: 7.28cm"><?if ($C25 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:19.58cm; top: 7.58cm"><?if ($C26 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:20.18cm; top: 7.58cm"><?if ($C26 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:19.58cm; top: 7.88cm"><?if ($C27 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:20.18cm; top: 7.88cm"><?if ($C27 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:19.58cm; top: 8.18cm"><?if ($C28 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:20.18cm; top: 8.18cm"><?if ($C28 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:19.58cm; top: 8.48cm"><?if ($C29 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:20.18cm; top: 8.48cm"><?if ($C29 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:19.58cm; top: 9.08cm"><?if ($C30 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:20.18cm; top: 9.08cm"><?if ($C30 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:19.58cm; top: 9.38cm"><?if ($C31 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:20.18cm; top: 9.38cm"><?if ($C31 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:19.58cm; top: 9.68cm"><?if ($C32 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:20.18cm; top: 9.68cm"><?if ($C32 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:19.58cm; top: 9.98cm"><?if ($C33 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:20.18cm; top: 9.98cm"><?if ($C33 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:19.58cm; top:10.28cm"><?if ($C34 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:20.18cm; top:10.28cm"><?if ($C34 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:19.58cm; top:10.58cm"><?if ($C35 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:20.18cm; top:10.58cm"><?if ($C35 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:19.58cm; top:10.88cm"><?if ($C36 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:20.18cm; top:10.88cm"><?if ($C36 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:19.58cm; top:11.18cm"><?if ($C37 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:20.18cm; top:11.18cm"><?if ($C37 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:19.58cm; top:11.48cm"><?if ($C38 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:20.18cm; top:11.48cm"><?if ($C38 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:19.58cm; top:12.08cm"><?if ($C39 == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:20.18cm; top:12.08cm"><?if ($C39 == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:8.65cm; top:13.10cm"><?echo $otrasactividades;?></div>
  
<!-- *****************************************       sección D       ***************************************** -->
  <div style="position:absolute; left: 9.17cm; top:14.37cm"><?if ($D1=="on"):echo "X";endif?>&nbsp;&nbsp;&nbsp;<?if ($D1!="on"):echo "";else:echo  $numeroD1;endif; ?></div>
  <div style="position:absolute; left: 9.17cm; top:14.67cm"><?if ($D2=="on"):echo "X";endif?>&nbsp;&nbsp;&nbsp;<?if ($D2!="on"):echo "";else:echo  $numeroD2;endif; ?></div>
  <div style="position:absolute; left: 9.17cm; top:14.97cm"><?if ($D3=="on"):echo "X";endif?>&nbsp;&nbsp;&nbsp;<?if ($D3!="on"):echo "";else:echo  $numeroD3;endif; ?></div>
  <div style="position:absolute; left: 9.17cm; top:15.27cm"><?if ($D4=="on"):echo "X";endif?>&nbsp;&nbsp;&nbsp;<?if ($D4!="on"):echo "";else:echo  $numeroD4;endif; ?></div>
  <div style="position:absolute; left: 9.17cm; top:15.57cm"><?if ($D5=="on"):echo "X";endif?>&nbsp;&nbsp;&nbsp;<?if ($D5!="on"):echo "";else:echo  $numeroD5;endif; ?></div>
  <div style="position:absolute; left: 9.17cm; top:15.87cm"><?if ($D6=="on"):echo "X";endif?>&nbsp;&nbsp;&nbsp;<?if ($D6!="on"):echo "";else:echo  $numeroD6;endif; ?></div>
  <div style="position:absolute; left: 9.17cm; top:16.17cm"><?if ($D7=="on"):echo "X";endif?>&nbsp;&nbsp;&nbsp;<?if ($D7!="on"):echo "";else:echo  $numeroD7;endif; ?></div>
  <div style="position:absolute; left: 9.17cm; top:16.47cm"><?if ($D8=="on"):echo "X";endif?>&nbsp;&nbsp;&nbsp;<?if ($D8!="on"):echo "";else:echo  $numeroD8;endif; ?></div>
  <div style="position:absolute; left:18.17cm; top:14.37cm"><?if ($D9=="on"):echo "X";endif?>&nbsp;&nbsp;&nbsp;<?if ($D9!="on"):echo "";else:echo  $numeroD9;endif; ?></div>
  <div style="position:absolute; left:18.17cm; top:14.67cm"><?if ($D10=="on"):echo "X";endif?>&nbsp;&nbsp;&nbsp;<?if ($D10!="on"):echo "";else:echo  $numeroD10;endif; ?></div>
  <div style="position:absolute; left:18.17cm; top:14.97cm"><?if ($D11=="on"):echo "X";endif?>&nbsp;&nbsp;&nbsp;<?if ($D11!="on"):echo "";else:echo  $numeroD11;endif; ?></div>
  <div style="position:absolute; left:18.17cm; top:15.27cm"><?if ($D12=="on"):echo "X";endif?>&nbsp;&nbsp;&nbsp;<?if ($D12!="on"):echo "";else:echo  $numeroD12;endif; ?></div>
  <div style="position:absolute; left:18.17cm; top:15.57cm"><?if ($D13=="on"):echo "X";endif?>&nbsp;&nbsp;&nbsp;<?if ($D13!="on"):echo "";else:echo  $numeroD13;endif; ?></div>
  <div style="position:absolute; left:18.17cm; top:15.87cm"><?if ($D14=="on"):echo "X";endif?>&nbsp;&nbsp;&nbsp;<?if ($D14!="on"):echo "";else:echo  $numeroD14;endif; ?></div>
  <div style="position:absolute; left:18.17cm; top:16.17cm"><?if ($D15=="on"):echo "X";endif?>&nbsp;&nbsp;&nbsp;<?if ($D15!="on"):echo "";else:echo  $numeroD15;endif; ?></div>
  <div style="position:absolute; left:18.17cm; top:16.47cm"><?if ($D16=="on"):echo "X";endif?>&nbsp;&nbsp;&nbsp;<?if ($D16!="on"):echo "";else:echo  $numeroD16;endif; ?></div>

<!-- *****************************************       sección E       ***************************************** -->

<!-- *****************************************       sección F       ***************************************** -->
  <div style="position:absolute; left:2.40cm; top:18.15cm"><?echo $precauciones;?></div>

<!-- *****************************************       sección G       ***************************************** -->
  <div style="position:absolute; left: 4.02cm; top:19.60cm"><?if ($empleado == 'E') {echo 'X';}?></div>
  <div style="position:absolute; left:10.45cm; top:19.60cm"><?if ($empleado == 'CP') {echo 'X';}?></div>
  <div style="position:absolute; left:10.45cm; top:19.95cm"><?if ($empleado == 'CT') {echo 'X';}?></div>
  <div style="position:absolute; left:12.80cm; top:19.60cm"><?if ($empleado == 'CP') {echo $companiacp;}?></div>
  <div style="position:absolute; left:12.80cm; top:19.95cm"><?if ($empleado == 'CT') {echo $companiact;}?></div>
  <div style="position:absolute; left: 4.00cm; top:20.37cm"><?echo $ejecutorG;?></div>
  <div style="position:absolute; left:15.40cm; top:20.37cm"><?echo $fechaejecG;?></div>
  <div style="position:absolute; left:19.10cm; top:20.37cm"><?echo date ("g:i A", strtotime($horaejecG));?></div>
  <div style="position:absolute; left: 4.00cm; top:20.79cm"><?echo $inspectorG;?></div>
  <div style="position:absolute; left:15.40cm; top:20.79cm"><?echo $fechainspG;?></div>
  <div style="position:absolute; left:19.10cm; top:20.79cm"><?echo date ("g:i A", strtotime($horainspG));?></div>

<!-- *****************************************       sección H       ***************************************** -->
  <div style="position:absolute; left: 2.78cm; top:21.61cm"><?if ($docum_adic == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left: 2.78cm; top:21.91cm"><?if ($docum_adic == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left:11.00cm; top:22.20cm"><?echo $cantidad;?></div>
  <div style="position:absolute; left:14.45cm; top:22.20cm"><?echo $nombre1;?></div>
  <div style="position:absolute; left: 2.35cm; top:22.60cm"><?echo $nombre2;?></div>
  <div style="position:absolute; left: 8.40cm; top:22.60cm"><?echo $nombre3;?></div>
  <div style="position:absolute; left:14.45cm; top:22.60cm"><?echo $nombre4;?></div>
  <div style="position:absolute; left: 2.35cm; top:23.05cm"><?echo $nombre5;?></div>
  <div style="position:absolute; left: 8.40cm; top:23.05cm"><?echo $nombre6;?></div>
  <div style="position:absolute; left:14.45cm; top:23.05cm"><?echo $nombre7;?></div>
  <div style="position:absolute; left: 5.00cm; top:23.48cm"><?echo $aprobadorH;?></div>
  <div style="position:absolute; left:15.50cm; top:23.48cm"><?echo $fechaaprobH;?></div>
  <div style="position:absolute; left:19.15cm; top:23.48cm"><?echo date ("g:i A", strtotime($horaaprobH));?></div>
  <div style="position:absolute; left: 3.85cm; top:23.95cm"><?echo $emisorH;?></div>
  <div style="position:absolute; left:15.50cm; top:23.95cm"><?echo $fechaemisorH;?></div>
  <div style="position:absolute; left:19.15cm; top:23.95cm"><?echo date ("g:i A", strtotime($horaemisorH));?></div>

<!-- *****************************************       sección I       ***************************************** -->
  <div style="position:absolute; left: 7.33cm; top:24.82cm"><?if ($completado == 'SI') {echo 'X';}?></div>
  <div style="position:absolute; left:10.75cm; top:24.82cm"><?if ($completado == 'NO') {echo 'X';}?></div>
  <div style="position:absolute; left: 4.10cm; top:25.25cm"><?echo $ejecutorI;?></div>
  <div style="position:absolute; left:19.05cm; top:25.25cm"><?echo date ("g:i A", strtotime($horaejecI));?></div>
  <div style="position:absolute; left: 4.10cm; top:25.70cm"><?echo $inspectorI;?></div>
  <div style="position:absolute; left:19.05cm; top:25.70cm"><?echo date ("g:i A", strtotime($horainspI));?></div>
  <div style="position:absolute; left: 4.10cm; top:26.58cm"><?echo $emisorI;?></div>
  <div style="position:absolute; left:19.05cm; top:26.58cm"><?echo date ("g:i A", strtotime($horaemisorI));?></div>

<!-- *****************************************       FIN DEL FORMULARIO       ***************************************** -->
  <div style="position:absolute; left:20mm; top:271mm">
    <span style="font-family:Arlrdlt; font-size:8px; color:rgba(0,0,0,1); background-color:rgba(255,255,255,0)">Fecha diligenciamiento: <?echo $fecha;?></span>
  </div>
  <?date_default_timezone_set('America/Bogota');?>
  <div style="position:absolute; left:167.5mm; top:271mm">
    <span style="font-family:Arlrdlt; font-size:8px; color:rgba(0,0,0,1)">Fecha consulta: <?echo date("Y-m-d / g:i A");?></span>
  </div>

  <div class="noimprimir">
	<div style="position:absolute; left:192.75mm; top:0mm; width:10mm; text-align:center; background-color:rgba(255,0,0,0.0)">
	  <button onclick="window.print();"><img src="../../../../imagenes/impresora.png" height="25px" title="Imprimir este consecutivo"></button>
	</div>
	<div style="position:absolute; left:205mm; top:0mm; width:10mm; text-align:center; background-color:rgba(0,0,255,0.0)">
	  <a href="javascript:closed();"><img src="../../../../imagenes/regresar.png" width="auto" height="25" title="Cerrar esta pestaña"></a>
	</div>
  </div>

  <div style="position:absolute; left:50%; margin-left:-93.5mm; top:150mm; width:5mm; text-align:right; background-color:rgba(255,0,0,0)">
    <a href="mailto:comercial@solucionesgraficas.net?Subject=Solicitud%20pedido%20libretas%20permisos%20de%20trabajo">
    <img src="../../../../imagenes/piedepagina.svg" title="Enviar pedido por correo electrónico a&#x00A;comercial@solucionesgraficas.net"></a>
  </div>
</div>
<script type='text/javascript'>
  document.oncontextmenu = function(){return false}
</script>
</body>
</html>
