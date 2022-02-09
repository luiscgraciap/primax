<html>
<head>
<link rel="SHORTCUT ICON" href="../../../../imagenes/iconoPRIMAX1.ico">
<meta content="text/html; charset=utf-8" http-equiv="content-type">
<style>
  body,html {color:rgba(40,40,40,1); background-color:rgba(255,255,255,1); text-align:center}
</style>
<script language="JavaScript">
  function cerrar_x_tiempo() {setTimeout("window.close()",2000);}		// el tiempo es en milisegundos, 2000 equivale a 2 seg
</script>
</head>
<body onLoad="cerrar_x_tiempo()">
<?php
include ("../conectar_db.php");
error_reporting(E_ALL ^ E_NOTICE);
$consecutivo = $_REQUEST['consecutivo'];
$fecha = $_REQUEST['fecha'];
$instalacion = $_REQUEST['instalacion'];
$certificado = $_REQUEST['certificado'];
$ubicacion = $_REQUEST['ubicacion'];
$ats = $_REQUEST['ats'];
$equipo = $_REQUEST['equipo'];
$fechaA = $_REQUEST['fechaA'];
$horainicioA = $_REQUEST['horainicioA'];
$horafinalA = $_REQUEST['horafinalA'];
$descripcion = $_REQUEST['descripcion'];
$cambio = $_REQUEST['cambio'];
$pedidocambio = $_REQUEST['pedidocambio'];
$C1 = $_REQUEST['C1'];
$C2 = $_REQUEST['C2'];
$C3 = $_REQUEST['C3'];
$C4 = $_REQUEST['C4'];
$C5 = $_REQUEST['C5'];
$C6 = $_REQUEST['C6'];
$C7 = $_REQUEST['C7'];
$C8 = $_REQUEST['C8'];
$C9 = $_REQUEST['C9'];
$C10 = $_REQUEST['C10'];
$C11 = $_REQUEST['C11'];
$C12 = $_REQUEST['C12'];
$C13 = $_REQUEST['C13'];
$C14 = $_REQUEST['C14'];
$C15 = $_REQUEST['C15'];
$C16 = $_REQUEST['C16'];
$C17 = $_REQUEST['C17'];
$C18 = $_REQUEST['C18'];
$C19 = $_REQUEST['C19'];
$C20 = $_REQUEST['C20'];
$C21 = $_REQUEST['C21'];
$C22 = $_REQUEST['C22'];
$C23 = $_REQUEST['C23'];
$C24 = $_REQUEST['C24'];
$C25 = $_REQUEST['C25'];
$C26 = $_REQUEST['C26'];
$C27 = $_REQUEST['C27'];
$C28 = $_REQUEST['C28'];
$C29 = $_REQUEST['C29'];
$C30 = $_REQUEST['C30'];
$C31 = $_REQUEST['C31'];
$C32 = $_REQUEST['C32'];
$C33 = $_REQUEST['C33'];
$C34 = $_REQUEST['C34'];
$C35 = $_REQUEST['C35'];
$C36 = $_REQUEST['C36'];
$C37 = $_REQUEST['C37'];
$C38 = $_REQUEST['C38'];
$C39 = $_REQUEST['C39'];
$otrasactividades = $_REQUEST['otrasactividades'];
$D1 = $_REQUEST['D1'];
$numeroD1 = $_REQUEST['numeroD1'];
$D2 = $_REQUEST['D2'];
$numeroD2 = $_REQUEST['numeroD2'];
$D3 = $_REQUEST['D3'];
$numeroD3 = $_REQUEST['numeroD3'];
$D4 = $_REQUEST['D4'];
$numeroD4 = $_REQUEST['numeroD4'];
$D5 = $_REQUEST['D5'];
$numeroD5 = $_REQUEST['numeroD5'];
$D6 = $_REQUEST['D6'];
$numeroD6 = $_REQUEST['numeroD6'];
$D7 = $_REQUEST['D7'];
$numeroD7 = $_REQUEST['numeroD7'];
$D8 = $_REQUEST['D8'];
$numeroD8 = $_REQUEST['numeroD8'];
$D9 = $_REQUEST['D9'];
$numeroD9 = $_REQUEST['numeroD9'];
$D10 = $_REQUEST['D10'];
$numeroD10 = $_REQUEST['numeroD10'];
$D11 = $_REQUEST['D11'];
$numeroD11 = $_REQUEST['numeroD11'];
$D12 = $_REQUEST['D12'];
$numeroD12 = $_REQUEST['numeroD12'];
$D13 = $_REQUEST['D13'];
$numeroD13 = $_REQUEST['numeroD13'];
$D14 = $_REQUEST['D14'];
$numeroD14 = $_REQUEST['numeroD14'];
$D15 = $_REQUEST['D15'];
$numeroD15 = $_REQUEST['numeroD15'];
$D16 = $_REQUEST['D16'];
$numeroD16 = $_REQUEST['numeroD16'];
$precauciones = $_REQUEST['precauciones'];
$empleado = $_REQUEST['empleado'];
$companiacp = $_REQUEST['companiacp'];
$companiact = $_REQUEST['companiact'];
$ejecutorG = $_REQUEST['ejecutorG'];
$fechaejecG = $_REQUEST['fechaejecG'];
$horaejecG = $_REQUEST['horaejecG'];
$inspectorG = $_REQUEST['inspectorG'];
$fechainspG = $_REQUEST['fechainspG'];
$horainspG = $_REQUEST['horainspG'];
$docum_adic = $_REQUEST['docum_adic'];
$cantidad = $_REQUEST['cantidad'];
$nombre1 = $_REQUEST['nombre1'];
$nombre2 = $_REQUEST['nombre2'];
$nombre3 = $_REQUEST['nombre3'];
$nombre4 = $_REQUEST['nombre4'];
$nombre5 = $_REQUEST['nombre5'];
$nombre6 = $_REQUEST['nombre6'];
$nombre7 = $_REQUEST['nombre7'];
$aprobadorH = $_REQUEST['aprobadorH'];
$fechaaprobH = $_REQUEST['fechaaprobH'];
$horaaprobH = $_REQUEST['horaaprobH'];
$emisorH = $_REQUEST['emisorH'];
$fechaemisorH = $_REQUEST['fechaemisorH'];
$horaemisorH = $_REQUEST['horaemisorH'];
$completado = $_REQUEST['completado'];
$ejecutorI = $_REQUEST['ejecutorI'];
$horaejecI = $_REQUEST['horaejecI'];
$inspectorI = $_REQUEST['inspectorI'];
$horainspI = $_REQUEST['horainspI'];
$emisorI = $_REQUEST['emisorI'];
$horaemisorI = $_REQUEST['horaemisorI'];

$datos="INSERT INTO `formulario01` (`consecutivo`, `fecha`, `instalacion`, `certificado`, `ubicacion`, `ats`, `equipo`, `fechaA`, `horainicioA`, `horafinalA`, `descripcion`, `cambio`, `pedidocambio`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`, `C7`, `C8`, `C9`, `C10`, `C11`, `C12`, `C13`, `C14`, `C15`, `C16`, `C17`, `C18`, `C19`, `C20`, `C21`, `C22`, `C23`, `C24`, `C25`, `C26`, `C27`, `C28`, `C29`, `C30`, `C31`, `C32`, `C33`, `C34`, `C35`, `C36`, `C37`, `C38`, `C39`, `otrasactividades`, `D1`, `numeroD1`, `D2`, `numeroD2`, `D3`, `numeroD3`, `D4`, `numeroD4`, `D5`, `numeroD5`, `D6`, `numeroD6`, `D7`, `numeroD7`, `D8`, `numeroD8`, `D9`, `numeroD9`, `D10`, `numeroD10`, `D11`, `numeroD11`, `D12`, `numeroD12`, `D13`, `numeroD13`, `D14`, `numeroD14`, `D15`, `numeroD15`, `D16`, `numeroD16`, `precauciones`, `empleado`, `companiacp`, `companiact`, `ejecutorG`, `fechaejecG`, `horaejecG`, `inspectorG`, `fechainspG`, `horainspG`, `docum_adic`, `cantidad`, `nombre1`, `nombre2`, `nombre3`, `nombre4`, `nombre5`, `nombre6`, `nombre7`, `aprobadorH`, `fechaaprobH`, `horaaprobH`, `emisorH`, `fechaemisorH`, `horaemisorH`, `completado`, `ejecutorI`, `horaejecI`, `inspectorI`, `horainspI`, `emisorI`, `horaemisorI`)
VALUES ('$consecutivo', '$fecha', '$instalacion', '$certificado', '$ubicacion', '$ats', '$equipo', '$fechaA', '$horainicioA', '$horafinalA', '$descripcion', '$cambio', '$pedidocambio', '$C1', '$C2', '$C3', '$C4', '$C5', '$C6', '$C7', '$C8', '$C9', '$C10', '$C11', '$C12', '$C13', '$C14', '$C15', '$C16', '$C17', '$C18', '$C19', '$C20', '$C21', '$C22', '$C23', '$C24', '$C25', '$C26', '$C27', '$C28', '$C29', '$C30', '$C31', '$C32', '$C33', '$C34', '$C35', '$C36', '$C37', '$C38', '$C39', '$otrasactividades', '$D1', '$numeroD1', '$D2', '$numeroD2', '$D3', '$numeroD3', '$D4', '$numeroD4', '$D5', '$numeroD5', '$D6', '$numeroD6', '$D7', '$numeroD7', '$D8', '$numeroD8', '$D9', '$numeroD9', '$D10', '$numeroD10', '$D11', '$numeroD11', '$D12', '$numeroD12', '$D13', '$numeroD13', '$D14', '$numeroD14', '$D15', '$numeroD15', '$D16', '$numeroD16', '$precauciones', '$empleado', '$companiacp', '$companiact', '$ejecutorG', '$fechaejecG', '$horaejecG', '$inspectorG', '$fechainspG', '$horainspG', '$docum_adic', '$cantidad', '$nombre1', '$nombre2', '$nombre3', '$nombre4', '$nombre5', '$nombre6', '$nombre7', '$aprobadorH', '$fechaaprobH', '$horaaprobH', '$emisorH', '$fechaemisorH', '$horaemisorH', '$completado', '$ejecutorI', '$horaejecI', '$inspectorI', '$horainspI', '$emisorI', '$horaemisorI')";

$conexion->query($datos) or die ('<br><br><b>ESE CONSECUTIVO YA ESTÁ ASIGNADO</b>');

$confirmacion = '<br><br><b>DATOS INGRESADOS SATISFACTORIAMENTE</b>';
echo $confirmacion;

// se cierra la conexion a la base de datos
$conexion->close();
?>
</body>
</html>
