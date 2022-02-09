<html>
<head>
<title>CERTIFICADO DE HABILITACIÓN</title>
<meta http-equiv=Content-Type content="text/html; charset=UTF-8">
<link rel="SHORTCUT ICON" href="../../../../imagenes/iconoPRIMAX1.ico">
<link rel="stylesheet" type="text/css" href="../../../../css/fuentes.css">
<style>
  body	{color:rgba(0,0,0,1); background-color:rgba(255,255,255,1);
  		 background:url(../../../../imagenes/primax.svg) no-repeat center center; background-size:auto 180%;
  		 font-family:Arlrdbd; text-align:center}
  input	{color:rgba(0,0,0,1); background-color:rgba(0,255,255,0); border:0px solid rgba(0,128,0,1);
  		 font-family:Arlrdbd; font-size:50px; text-align:center}
  select {font-size:32px; font-family:Arlrdbd; background-color:rgba(205,205,205,1); width:45%; height:50px; text-align:left; border-radius:10px}
</style>
<script LANGUAGE="JavaScript">
function abrir_formato() {formato = document.formatos.permiso.options[document.formatos.permiso.selectedIndex].value; window.open(formato,'_blank','');}
</script>
</head>
<? $tiempo_cierre_pestana = 2; ?>																	<!-- tiempo en minutos -->
<body onLoad="setTimeout('window.close()',<? echo $tiempo_cierre_pestana * 60 * 1000; ?>)">
<? $terminal = substr(__FILE__,45,strlen(substr(__FILE__,1))-45-22+1); ?>
<script type="text/javascript">document.write('<table height="' + window.innerHeight*0.975 + '" style="width:100%; background-color:rgba(255,115,0,0); margin-left:auto; margin-right:auto" border="0" cellpadding="0" cellspacing="0">')</script>
  <tr style="background-color:rgba(240,0,0,0); height:15%"><td></td></tr>
  <tr style="background-color:rgba(255,115,0,0); height:15%">
    <td style="text-align:center">
    <span style="display:block; font-size:48px">TERMINAL <? echo strtoupper($terminal); ?></span>
    <span style="display:block; font-size:36px">CERTIFICADO DE HABILITACIÓN</span>
    <span style="display:none; font-size:15px">Si no hay elección, en <? echo $tiempo_cierre_pestana; ?> minutos(s) se cierra la pestaña)</span>
    <br><br><br><br>
      <form name="formatos">
      <select name="permiso" onChange="abrir_formato()" required>
        <option value="" selected>SELECCIONE UNA OPCIÓN</option>
        <option value="formato.php">DILIGENCIAR</option>
        <option value="consultar.html">CONSULTAR (imprimir en PDF)</option>
        <option value="editar.html">EDITAR</option>
<!--        <option value="borrar.html">BORRAR</option> -->
      </select>
      </form>
    </td>
  </tr>
  <tr style="background-color:rgba(0,0,240,0); height:70%"><td></td></tr>
</table>
</body>
</html>