<html>
<head>
<title>PERMISOS DE TRABAJO</title>
<link rel="SHORTCUT ICON" href="imagenes/iconoPRIMAX1.ico">
<link rel="stylesheet" type="text/css" href="css/fuentes.css">
<meta http-equiv=Content-Type content="text/html; charset=UTF-8">
<style>
  body  {color:rgba(0,0,0,1); background-color:rgba(255,255,255,1);
	 background:url(imagenes/primax.svg) no-repeat center center; background-size:auto 181.5%;
	 font-family:Arlrdbd; text-align:center}
  input	{color:rgba(0,0,0,1); background-color:rgba(0,255,255,0); border:0px solid rgba(0,128,0,1); border-radius:10px;
	 font-family:Arlrdbd; font-size:50px; text-align:center}
  input[type=checkbox]	{transform:scale(1.0)}
  input[type=radio]	{transform:scale(1.0)}
  button {background-color:rgba(255,112,0,0.0); border:0px solid black; width:100%}
  select {font-size:28px; font-family:Arlrdbd; background-color:rgba(205,205,205,1); width:50%; height:50px; text-align:left; border-radius:10px}
</style>
<script LANGUAGE="JavaScript">
//function abrir_formato() {URL = ""; web = document.formatos.permiso.options[document.formatos.permiso.selectedIndex].value; window.open(URL+web,'_self','');}
function abrir_formato() {formato = document.formatos.permiso.options[document.formatos.permiso.selectedIndex].value; window.open(formato,'_blank','');}
</script>
</head>
<body>
<script type="text/javascript">document.write('<table height="' + window.innerHeight*0.975 + '" style="width:100%; background-color:rgba(255,255,255,0); margin-left:auto; margin-right:auto" border="0" cellpadding="0" cellspacing="0">')</script>
  <tr style="background-color:rgba(240,0,0,0); height:15%"><td></td></tr>
  <tr style="background-color:rgba(0,240,0,0); height:15%">
    <td style="text-align:center">
      <br>
	  <span style="display:block; font-size:48px">TERMINAL <?echo strtoupper($terminal);?></span>
	  <span style="display:block; font-size:36px">PERMISOS DE TRABAJO</span>
	  <span style="display:none; font-size:15px">Si no hay elección, en <? echo $tiempo_cierre_pestana; ?> minutos(s) se cierra la pestaña)</span>
      <br><br><br><br>
      <div style="position:relative; left:50%; margin-left:-40mm; top:0mm; width:15mm; text-align:center; vertical-align:middle; background-color:rgba(0,0,255,0.0)">
        <img style="width:auto; height:50px" src="imagenes/listado.png">
      </div>
      <div style="position:relative; left:50%; margin-left:-40mm; top:-13.25mm; width:15mm; text-align:center; background-color:rgba(255,0,0,0.0)">
        <input type="button" onClick="window.open('terminales/<?echo $terminal;?>/listado.php', '_blank');" value="" style="width:100%; height:50px; cursor:pointer"
        title="Formatos diligenciados en esta Terminal">
      </div>
      <div style="position:relative; left:50%; margin-left: 20mm; top:-26.5mm; width:15mm; text-align:center; background-color:rgba(0,255,0,0.0)">
        <img style="width:auto; height:50px" src="imagenes/usuarios.png">
      </div>
      <div style="position:relative; left:50%; margin-left: 20mm; top:-39.75mm; width:15mm; text-align:center; background-color:rgba(255,0,255,0.0)">
        <input type="button" onClick="window.open('terminales/<?echo $terminal;?>/listado_usuarios.php', '_blank');" value="" style="width:100%; height:50px; cursor:pointer"
        title="Usuarios autorizados en esta Terminal">
      </div>
	  <br><br>
      <div style="position:relative; left:50%; margin-left:-50%; top:-35mm; width:100%; text-align:center; background-color:rgba(255,0,0,0.0)">
		<form name="formatos" id="formatos" onChange="abrir_formato()">
  		  <select name="permiso" required>
		    <option value="" disabled selected>SELECCIONE EL FORMATO</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/01/index.php">&nbsp;&nbsp;1. CERTIFICADO DE HABILITACIÓN</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/02/index.php" disabled>&nbsp;&nbsp;2. PERMISO TRABAJO EN CALIENTE ESPACIO CONFINADO</option>
		</select>
		</form>
	  </div>
    </td>
  </tr>
  <tr style="background-color:rgba(0,0,240,0); height:70%"><td></td></tr>
</table>
</body>
</html>

<!--
		    <option value="" disabled selected>SELECCIONE EL FORMATO</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/01/index.php">&nbsp;&nbsp;1. CERTIFICADO DE HABILITACIÓN</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/02/index.php" disabled>&nbsp;&nbsp;2. PERMISO TRABAJO EN CALIENTE ESPACIO CONFINADO</option>
			<option value="terminales/<?echo $terminal;?>/formatos/03/index.php" disabled>&nbsp;&nbsp;3. PERMISO TRABAJO EN CALIENTE ESPACIO NO CONFINADO</option>
			<option value="terminales/<?echo $terminal;?>/formatos/04/index.php" disabled>&nbsp;&nbsp;4. PERMISO TRABAJO EN FRIO ESPACIO CONFINADO</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/05/index.php" disabled>&nbsp;&nbsp;5. PERMISO TRABAJO EN FRIO ESPACIO NO CONFINADO</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/06/index.php" disabled>&nbsp;&nbsp;6. CERTIFICADO AISLAMIENTO ELÉCTRICO</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/07/index.php" disabled>&nbsp;&nbsp;7. PERMISOS TRABAJO ELÉCTRICO</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/08/index.php" disabled>&nbsp;&nbsp;8. PERMISO DESACOPLE DE EQUIPOS</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/09/index.php" disabled>&nbsp;&nbsp;9. AUTORIZACIÓN PARA EXCAVACIÓN</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/10/index.php" disabled>10. VERIFICACIÓN EQUIPOS MOTOR DE COMBUSTIÓN</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/11/index.php" disabled>11. VERIFICACIÓN EQUIPO OXIACETILENO</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/12/index.php" disabled>12. VERIFICACIÓN PREVIA AL IZAJE</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/13/index.php" disabled>13. PERMISO TRABAJO EN ALTURAS</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/14/index.php" disabled>14. CONTROL OPERACIÓN RECIBO POLIDUCTO MEDICIÓN MANUAL</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/15/index.php" disabled>15. CONTROL OPERACIÓN RECIBO POLIDUCTO MEDICIÓN AUTOMÁTICA&nbsp;&nbsp;</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/16/index.php" disabled>16. CERTIFICADO DE INTERFACES</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/17/index.php" disabled>17. ENTRADA/SALIDA MATERIALES</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/18/index.php" disabled>18. COMPROBANTE DE MEDIDA FINAL</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/19/index.php" disabled>19. ENTREGA JET A-1 CARTAGENA</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/20/index.php" disabled>20. BOMBEO JET A-1 PUENTE ARANDA</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/21/index.php" disabled>21. CHECKLIST PARA BLOQUEO Y ETIQUETADO ELÉCTRICO</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/22/index.php" disabled>22. RADIACIONES IONIZANTES</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/23/index.php" disabled>23. RECIBO ADITIVO POR CTK</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/24/index.php" disabled>24. RECIBO ALCOHOL POR CTK</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/25/index.php" disabled>25. RECIBO B2E POR CTK</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/26/index.php" disabled>26. RECIBO ACEM POR CTK (GALAPA)</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/27/index.php" disabled>27. RECIBO GASOLINA</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/28/index.php" disabled>28. RECIBO GASOLINA (EXTRA)</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/29/index.php" disabled>29. RECIBO BIODIESEL B100</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/30/index.php" disabled>30. RECIBO BIODIESEL B100 CON  PREMEZCLA</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/31/index.php" disabled>31. PRUEBAS ABREVIADAS CALIDAD B2E - (PUA)</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/32/index.php" disabled>32. PRUEBAS ABREVIADAS CALIDAD EXTRA - (PUA)</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/33/index.php" disabled>33. PRUEBAS ABREVIADAS CALIDAD MOTOR  - (PUA)</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/34/index.php" disabled>34. AISLAMIENTO DE ENERGÍA Y APERTURA DE EQUIPO</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/35/index.php" disabled>35. ANÁLISIS DE PERDIDAS EN LA TAREA</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/36/index.php" disabled>36. SALIDA CAMIONES TANQUE - (PUA)</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/37/index.php" disabled>37. ASIGNACIÓN TURNO CAMIONES TANQUE - (PUA)</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/38/index.php" disabled>38. AUTORIZACIÓN ENTRADA MATERIALES - (PUA)</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/39/index.php" disabled>39. AUTORIZACIÓN SALIDA MATERIALES - (PUA)</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/40/index.php" disabled>40. PLANILLA VEHÍCULOS SIN TARJETA - (PUA)</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/41/index.php" disabled>41. CARTA SOLICITUD DE ANÁLISIS</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/42/index.php" disabled>42. Autorización ENTRADA y SALIDA Materiales CARTAGENA</option>
		    <option value="terminales/<?echo $terminal;?>/formatos/43/index.php" disabled>43. RECIBO BIODIESEL B100 CON PREMEZCLA - ANEXO 15B</option>
-->