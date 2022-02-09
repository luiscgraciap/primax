<html>
<head>
<link rel="SHORTCUT ICON" href="../../../../imagenes/iconoPRIMAX1.ico">
<link rel="stylesheet" type="text/css" href="../../../../css/noimprimir.css" media="print">
<link rel="stylesheet" type="text/css" href="../../../../css/fuentes.css">
<meta http-equiv=Content-Type content="text/html; charset=UTF-8">
<title>Diligenciar Consecutivo</title>
<style>
  body  {font-family:Arlrdbd; font-size:18px; text-align:center;
	  background:url(../../../../imagenes/primax.svg) center center; background-size:100% auto;
  	       margin-top: 0px;
		transform: scale(1.5);
	 transform-origin: top center;
	   -moz-transform: scale(1.5);
    -moz-transform-origin: top center;}
  input	{background-color:rgba(255,112,0,0.33); color:rgba(0,0,191,1);
	 border:0.00px solid rgba(0,128,0,1); border-radius:2px;
	 font-family:Arlrdlt; font-size:10px; text-align:left; vertical-align:middle; height:4mm}
  input[type=checkbox]	{transform:scale(1.0)}
  input[type=radio]	{transform:scale(1.0)}

/*the container must be positioned relative:*/
.custom-select {position:relative; font-family:Arlrdlt; font-size:10px}

/*hide original SELECT element:*/
.custom-select select {display:none;}
.select-selected {background-color:rgba(255,0,0,1); border-radius:4px;}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 4px;
  right: 4px;
  width: 0;
  height: 0;
  border: 7px solid transparent;
  border-color: rgba(0,0,191,1) transparent transparent transparent;
  border-radius: 0px;}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {border-color:transparent transparent rgba(0,0,191,1) transparent; top:-4px;}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color:rgba(0,0,191,1);
  background-color:rgba(0,255,255,1);
  padding: 2px 2px;
  border: 0px solid transparent;
  border-color: transparent transparent rgba(0,0,0,0.2) transparent;
  border-radius:4px;
  cursor: pointer;
  vertical-align: middle;
  height: 0.3cm;
  user-select: none;}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: rgba(255,0,0,0);
  border-radius:4px;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;}

/*hide the items when the select box is closed:*/
.select-hide {display:none;}
.select-items div:hover, .same-as-selected {background-color:rgba(0,255,0,1); border-radius:4px;}
</style>
<script type="text/javascript">
function closed() {window.open('','_parent',''); window.close();}
function cerrarVentana() {window.close();}
function comprobarD1(obj) {if (obj.checked){document.getElementById('numeroD1').style.display = ""; document.getElementById('numeroD1').required = true;}
    else{document.getElementById('numeroD1').disabled = true; document.getElementById('numeroD1').style.display = "none";}}
function comprobarD2(obj) {if (obj.checked){document.getElementById('numeroD2').style.display = ""; document.getElementById('numeroD2').required = true;}
    else{document.getElementById('numeroD2').disabled = true; document.getElementById('numeroD2').style.display = "none";}}
function comprobarD3(obj) {if (obj.checked){document.getElementById('numeroD3').style.display = ""; document.getElementById('numeroD3').required = true;}
    else{document.getElementById('numeroD3').disabled = true; document.getElementById('numeroD3').style.display = "none";}}
function comprobarD4(obj) {if (obj.checked){document.getElementById('numeroD4').style.display = ""; document.getElementById('numeroD4').required = true;}
    else{document.getElementById('numeroD4').disabled = true; document.getElementById('numeroD4').style.display = "none";}}
function comprobarD5(obj) {if (obj.checked){document.getElementById('numeroD5').style.display = ""; document.getElementById('numeroD5').required = true;}
    else{document.getElementById('numeroD5').disabled = true; document.getElementById('numeroD5').style.display = "none";}}
function comprobarD6(obj) {if (obj.checked){document.getElementById('numeroD6').style.display = ""; document.getElementById('numeroD6').required = true;}
    else{document.getElementById('numeroD6').disabled = true; document.getElementById('numeroD6').style.display = "none";}}
function comprobarD7(obj) {if (obj.checked){document.getElementById('numeroD7').style.display = ""; document.getElementById('numeroD7').required = true;}
    else{document.getElementById('numeroD7').disabled = true; document.getElementById('numeroD7').style.display = "none";}}
function comprobarD8(obj) {if (obj.checked){document.getElementById('numeroD8').style.display = ""; document.getElementById('numeroD8').required = true;}
    else{document.getElementById('numeroD8').disabled = true; document.getElementById('numeroD8').style.display = "none";}}
function comprobarD9(obj) {if (obj.checked){document.getElementById('numeroD9').style.display = ""; document.getElementById('numeroD9').required = true;}
    else{document.getElementById('numeroD9').disabled = true; document.getElementById('numeroD9').style.display = "none";}}
function comprobarD10(obj) {if (obj.checked){document.getElementById('numeroD10').style.display = ""; document.getElementById('numeroD10').required = true;}
    else{document.getElementById('numeroD10').disabled = true; document.getElementById('numeroD10').style.display = "none";}}
function comprobarD11(obj) {if (obj.checked){document.getElementById('numeroD11').style.display = ""; document.getElementById('numeroD11').required = true;}
    else{document.getElementById('numeroD11').disabled = true; document.getElementById('numeroD11').style.display = "none";}}
function comprobarD12(obj) {if (obj.checked){document.getElementById('numeroD12').style.display = ""; document.getElementById('numeroD12').required = true;}
    else{document.getElementById('numeroD12').disabled = true; document.getElementById('numeroD12').style.display = "none";}}
function comprobarD13(obj) {if (obj.checked){document.getElementById('numeroD13').style.display = ""; document.getElementById('numeroD13').required = true;}
    else{document.getElementById('numeroD13').disabled = true; document.getElementById('numeroD13').style.display = "none";}}
function comprobarD14(obj) {if (obj.checked){document.getElementById('numeroD14').style.display = ""; document.getElementById('numeroD14').required = true;}
    else{document.getElementById('numeroD14').disabled = true; document.getElementById('numeroD14').style.display = "none";}}
function comprobarD15(obj) {if (obj.checked){document.getElementById('numeroD15').style.display = ""; document.getElementById('numeroD15').required = true;}
    else{document.getElementById('numeroD15').disabled = true; document.getElementById('numeroD15').style.display = "none";}}
function comprobarD16(obj) {if (obj.checked){document.getElementById('numeroD16').style.display = ""; document.getElementById('numeroD16').required = true;}
    else{document.getElementById('numeroD16').disabled = true; document.getElementById('numeroD16').style.display = "none";}}
</script>
</head>
<body>
<div class="noimprimir">
<!-- *****************************************       INICIO DEL FORMULARIO       ***************************************** -->
<form id="formato" name="formato" method="post" action="grabardatos.php" enctype="application_x-www-form-urlencoded" autocomplete="off">
<div style="position:absolute; left:50%; margin-left:-107.5mm; top:0px; width:215mm; height:561mm; background-color: rgba(255,255,255,0.95); overflow:hidden; border:0px solid rgba(0,0,0,1)">
  <div style="position:absolute; left:0mm; top:0mm"><img src="../../../../formatos_SVG/01_tiro.svg" width=812.6px height=auto></div>
<!--  <div style="position:absolute; left:0mm; top:279.5mm"><hr size=1mm style="width:215mm; border-top:1px solid black"></div> -->
  <div style="position:absolute; left:0mm; top:280mm"><img src="../../../../formatos_SVG/01_retiro.svg" width=812.6px height=auto></div>

<!-- *****************************************       encabezado formato       ***************************************** -->
  <?php
  include ("../conectar_db.php");
  include ("consecutivos01.php");

  //se conecta a la base de datos y se verifica el consecutivo inicial (o el siguiente libre)
  $consult = $conexion->query('SELECT MAX(consecutivo) as consecutivo FROM formulario01 LIMIT 1');
  $consulta = $consult->fetch_array(MYSQLI_ASSOC);
  $consec = (empty($consulta['consecutivo']) ? $primerconsecutivo : $consulta['consecutivo']+=1);
  date_default_timezone_set('America/Bogota');
  $fecha = date("Y-m-d / H:i");
  $fechaactual = date("Y-m-d");
  $horaactual = date("g:i A");
  $fechamin = date ("Y-m-d", strtotime("-2 days", strtotime(date ("Y-m-d"))));
  $fechamax = date ("Y-m-d", strtotime("+0 days", strtotime(date ("Y-m-d"))));
  $conexion->close();
  // se valida que no se sobrepase el número de libretas compradas
  $ultimo_consec = $primerconsecutivo + $formatosporlibreta * $libretas - 1;
  $consec_por_usar = $ultimo_consec - $consec + 1;
  $aviso_pedido = "<br><br><br><br><br><br><b>Se diligenciaron todos los formatos comprados !!!</b><br><br>Por favor realice un NUEVO PEDIDO de permisos de trabajo<br><br><br><br><br>SOLUCIONES GRÁFICAS LTDA<br><br>comercial@solucionesgraficas.net<br><br>Celular: 315 578 7976<br><br>Contacto: Luis Carlos Gracia Puentes<br><br># proveedor PRIMAX: 775594";
  if ($consec <= "$ultimo_consec") {echo "";}
    else {echo "<script>setTimeout(cerrarVentana,5*60*1000); document.body.innerHTML = '$aviso_pedido';</script>";}
  ?>

<!-- se inicia el código para diligenciar el formato -->
  <div style="position:absolute; left:185mm; top:9.3mm">
   <input style="width:12mm; height:4mm; font-family:SCHLBKB; font-size:16px; text-align:left; vertical-align:top; color:red; background-color:rgba(0,0,255,0); border:0"
   id="consecutivo" name="consecutivo" type="text" value="<? if ($consec <= 9) {echo "000";} else {if ($consec <= 99) {echo "00";} else {if ($consec <= 999) {echo "0";}}} echo $consec;?>"
   pattern="^(?:[0-9]{4})$" title="A partir del # <? if ($primerconsecutivo <= 9) {echo "000";} else {if ($primerconsecutivo <= 99) {echo "00";} else {if ($primerconsecutivo <= 999) {echo "0";}}} echo $primerconsecutivo;?> hasta el # <? if ($ultimo_consec <= 9) {echo "000";} else {if ($ultimo_consec <= 99) {echo "00";} else {if ($ultimo_consec <= 999) {echo "0";}}} echo $ultimo_consec;?>" readonly>
  </span>
  </div>

  <div style="position:absolute; left:4.3cm; top:2.2cm">
    <input style="width:35mm; height:4mm; text-align:left; background-color:rgba(0,0,0,0); border:0" id="instalacion" name="instalacion" type="text" value="<?echo strtoupper($terminal);?>" readonly>
  </div>
  <div style="position:absolute; left:18.4cm; top: 2.22cm">
    <input style="width:1.0cm" id="certificado" name="certificado" maxlength="4" type="text" pattern="^(?:[0-9]{4})$" title="Debe ingresar 4 números." value="" autofocus required>
  </div>

<!-- *****************************************       sección A       ***************************************** -->
  <div style="position:absolute; left: 3.9cm; top: 3.07cm">
    <input style="width:11.3cm" id="ubicacion" name="ubicacion" maxlength="50" type="text" pattern="^(?:[a-z A-Z [0-9].ÁáÉéÍíÓóÚúÜüÑñ/-_]+)$" value="" required>
  </div>
  <div style="position:absolute; left:18.5cm; top: 3.07cm">
    <input style="width:1.0cm"  id="ats" name="ats" maxlength="4" type="text" pattern="^(?:[0-9]{4})$" title="Debe ingresar 4 números." value="" required>
  </div>
  <div style="position:absolute; left: 3.9cm; top: 3.37cm">
    <input style="width:2.2cm" id="equipo" name="equipo" maxlength="10" type="text" pattern="^(?:[0-9]{0,10})$" title="Debe ingresar mínimo 1 número." value="" required>
  </div>
  <div style="position:absolute; left: 9.4cm; top: 3.37cm">
    <input style="width:3.2cm" type="date" id="fechaA" name="fechaA" min="<?echo $fechamin;?>" max="<?echo $fechamax;?>" value="<?echo $fechaactual;?>"
    title="Solo se aceptan fechas entre el <?echo $fechamin;?> y <?echo $fechamax;?>." required>
  </div>
  <div style="position:absolute; left:14.45cm; top: 3.37cm">
    <input style="width:2.4cm" type="time" id="horainicioA" name="horainicioA" value="<?echo date("H:i");?>" required>
  </div>
  <div style="position:absolute; left:18.2cm; top: 3.37cm">
    <input style="width:2.4cm" type="time" id="horafinalA" name="horafinalA" value="<?echo date("H:i");?>" required>
  </div>
  <div style="position:absolute; left: 6.3cm; top: 3.7cm">
	<input style="width:13.6cm; padding: 0px 0px" id="descripcion" name="descripcion" maxlength="60" type="text" pattern="^(?:[a-z A-Z  [0-9] .ÁáÉéÍíÓóÚúÜüÑñ/-_]+)$" value="" required>
  </div>

<!-- *****************************************       sección B       ***************************************** -->
  <div style="position:absolute; left:12.71cm; top: 4.525cm">
    <input type="radio" id="cambioA" name="cambio" value="CME" onclick="gestionarClickRadio(this)" title="Debe escoger una opción." checked required>
  </div>
  <div style="position:absolute; left:12.71cm; top: 4.835cm">
    <input type="radio" id="cambioB" name="cambio" value="CDE" onclick="gestionarClickRadio(this);">
  </div>
  <div style="position:absolute; left:17.3cm; top: 4.925cm">
    <input style="width:1.0cm; display:none" id="pedidocambio" name="pedidocambio" maxlength="4" type="text" value="" pattern="^(?:[0-9]{4})$" title="Debe ingresar 4 números.">
    <script>
    var pedidocambio = document.getElementById('pedidocambio');
    document.getElementById('cambioA').addEventListener('click', function(e) {pedidocambio.disabled = true; pedidocambio.style.display = "none";});
    document.getElementById('cambioB').addEventListener('click', function(e) {pedidocambio.disabled = false; pedidocambio.style.display = "block"; pedidocambio.required = true;});
    </script>
  </div>

<!-- *****************************************       sección C       ***************************************** -->
  <div style="position:absolute; left:10.05cm; top: 6.00cm"><input type="radio" id= "C1" name= "C1" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:10.65cm; top: 6.00cm"><input type="radio" id= "c1" name= "C1" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:10.05cm; top: 6.30cm"><input type="radio" id= "C2" name= "C2" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:10.65cm; top: 6.30cm"><input type="radio" id= "c2" name= "C2" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:10.05cm; top: 6.60cm"><input type="radio" id= "C3" name= "C3" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:10.65cm; top: 6.60cm"><input type="radio" id= "c3" name= "C3" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:10.05cm; top: 6.90cm"><input type="radio" id= "C4" name= "C4" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:10.65cm; top: 6.90cm"><input type="radio" id= "c4" name= "C4" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:10.05cm; top: 7.20cm"><input type="radio" id= "C5" name= "C5" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:10.65cm; top: 7.20cm"><input type="radio" id= "c5" name= "C5" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:10.05cm; top: 7.50cm"><input type="radio" id= "C6" name= "C6" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:10.65cm; top: 7.50cm"><input type="radio" id= "c6" name= "C6" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:10.05cm; top: 7.80cm"><input type="radio" id= "C7" name= "C7" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:10.65cm; top: 7.80cm"><input type="radio" id= "c7" name= "C7" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:10.05cm; top: 8.10cm"><input type="radio" id= "C8" name= "C8" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:10.65cm; top: 8.10cm"><input type="radio" id= "c8" name= "C8" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:10.05cm; top: 8.40cm"><input type="radio" id= "C9" name= "C9" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:10.65cm; top: 8.40cm"><input type="radio" id= "c9" name= "C9" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:10.05cm; top: 8.70cm"><input type="radio" id="C10" name="C10" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:10.65cm; top: 8.70cm"><input type="radio" id="c10" name="C10" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:10.05cm; top: 9.00cm"><input type="radio" id="C11" name="C11" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:10.65cm; top: 9.00cm"><input type="radio" id="c11" name="C11" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:10.05cm; top: 9.30cm"><input type="radio" id="C12" name="C12" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:10.65cm; top: 9.30cm"><input type="radio" id="c12" name="C12" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:10.05cm; top: 9.60cm"><input type="radio" id="C13" name="C13" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:10.65cm; top: 9.60cm"><input type="radio" id="c13" name="C13" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:10.05cm; top: 9.90cm"><input type="radio" id="C14" name="C14" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:10.65cm; top: 9.90cm"><input type="radio" id="c14" name="C14" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:10.05cm; top:10.20cm"><input type="radio" id="C15" name="C15" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:10.65cm; top:10.20cm"><input type="radio" id="c15" name="C15" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:10.05cm; top:10.50cm"><input type="radio" id="C16" name="C16" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:10.65cm; top:10.50cm"><input type="radio" id="c16" name="C16" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:10.05cm; top:11.10cm"><input type="radio" id="C17" name="C17" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:10.65cm; top:11.10cm"><input type="radio" id="c17" name="C17" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:10.05cm; top:11.40cm"><input type="radio" id="C18" name="C18" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:10.65cm; top:11.40cm"><input type="radio" id="c18" name="C18" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:10.05cm; top:11.70cm"><input type="radio" id="C19" name="C19" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:10.65cm; top:11.70cm"><input type="radio" id="c19" name="C19" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:10.05cm; top:12.30cm"><input type="radio" id="C20" name="C20" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:10.65cm; top:12.30cm"><input type="radio" id="c20" name="C20" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:10.05cm; top:12.60cm"><input type="radio" id="C21" name="C21" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:10.65cm; top:12.60cm"><input type="radio" id="c21" name="C21" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:19.35cm; top: 6.00cm"><input type="radio" id="C22" name="C22" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:19.95cm; top: 6.00cm"><input type="radio" id="c22" name="C22" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:19.35cm; top: 6.30cm"><input type="radio" id="C23" name="C23" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:19.95cm; top: 6.30cm"><input type="radio" id="c23" name="C23" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:19.35cm; top: 6.90cm"><input type="radio" id="C24" name="C24" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:19.95cm; top: 6.90cm"><input type="radio" id="c24" name="C24" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:19.35cm; top: 7.20cm"><input type="radio" id="C25" name="C25" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:19.95cm; top: 7.20cm"><input type="radio" id="c25" name="C25" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:19.35cm; top: 7.50cm"><input type="radio" id="C26" name="C26" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:19.95cm; top: 7.50cm"><input type="radio" id="c26" name="C26" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:19.35cm; top: 7.80cm"><input type="radio" id="C27" name="C27" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:19.95cm; top: 7.80cm"><input type="radio" id="c27" name="C27" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:19.35cm; top: 8.10cm"><input type="radio" id="C28" name="C28" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:19.95cm; top: 8.10cm"><input type="radio" id="c28" name="C28" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:19.35cm; top: 8.40cm"><input type="radio" id="C29" name="C29" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:19.95cm; top: 8.40cm"><input type="radio" id="c29" name="C29" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:19.35cm; top: 9.00cm"><input type="radio" id="C30" name="C30" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:19.95cm; top: 9.00cm"><input type="radio" id="c30" name="C30" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:19.35cm; top: 9.30cm"><input type="radio" id="C31" name="C31" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:19.95cm; top: 9.30cm"><input type="radio" id="c31" name="C31" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:19.35cm; top: 9.60cm"><input type="radio" id="C32" name="C32" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:19.95cm; top: 9.60cm"><input type="radio" id="c32" name="C32" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:19.35cm; top: 9.90cm"><input type="radio" id="C33" name="C33" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:19.95cm; top: 9.90cm"><input type="radio" id="c33" name="C33" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:19.35cm; top:10.20cm"><input type="radio" id="C34" name="C34" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:19.95cm; top:10.20cm"><input type="radio" id="c34" name="C34" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:19.35cm; top:10.50cm"><input type="radio" id="C35" name="C35" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:19.95cm; top:10.50cm"><input type="radio" id="c35" name="C35" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:19.35cm; top:10.80cm"><input type="radio" id="C36" name="C36" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:19.95cm; top:10.80cm"><input type="radio" id="c36" name="C36" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:19.35cm; top:11.10cm"><input type="radio" id="C37" name="C37" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:19.95cm; top:11.10cm"><input type="radio" id="c37" name="C37" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:19.35cm; top:11.40cm"><input type="radio" id="C38" name="C38" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:19.95cm; top:11.40cm"><input type="radio" id="c38" name="C38" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left:19.35cm; top:12.00cm"><input type="radio" id="C39" name="C39" value="SI" onclick="gestionarClickRadio(this)" checked required></div>
  <div style="position:absolute; left:19.95cm; top:12.00cm"><input type="radio" id="c39" name="C39" value="NO" onclick="gestionarClickRadio(this)"></div>
  <div style="position:absolute; left: 8.6cm; top:13.0cm">
    <input style="width:11.5cm" id="otrasactividades" name="otrasactividades" maxlength="50" type="text" pattern="^(?:[a-z A-Z  [0-9] .ÁáÉéÍíÓóÚúÜüÑñ/-_]+)$" value="" required>
  </div>

<!-- *****************************************       sección D       ***************************************** -->
  <div style="position:absolute; left:9.0cm; top:14.30cm">
    <input name="D1" type="checkbox" id="D1" onChange="comprobarD1(this)">
  </div>
  <div style="position:absolute; left:9.60cm; top:14.40cm">
    <input style="display:none; text-align:right; width:1.0cm; font-size:9px" id="numeroD1" name="numeroD1" maxlength="4" type="text" value="" pattern="^(?:[0-9]{4})$" title="Debe ingresar 4 números.">
  </div>
  <div style="position:absolute; left:9.0cm; top:14.60cm">
    <input name="D2" type="checkbox" id="D2" onChange="comprobarD2(this)">
  </div>
  <div style="position:absolute; left:9.60cm; top:14.70cm">
    <input style="display:none; text-align:right; width:1.0cm; font-size:9px" id="numeroD2" name="numeroD2" maxlength="4" type="text" value="" pattern="^(?:[0-9]{4})$" title="Debe ingresar 4 números.">
  </div>
  <div style="position:absolute; left:9.0cm; top:14.90cm">
    <input name="D3" type="checkbox" id="D3" onChange="comprobarD3(this)">
  </div>
  <div style="position:absolute; left:9.60cm; top:15.00cm">
    <input style="display:none; text-align:right; width:1.0cm; font-size:9px" id="numeroD3" name="numeroD3" maxlength="4" type="text" value="" pattern="^(?:[0-9]{4})$" title="Debe ingresar 4 números.">
  </div>
  <div style="position:absolute; left:9.0cm; top:15.20cm">
    <input name="D4" type="checkbox" id="D4" onChange="comprobarD4(this)">
  </div>
  <div style="position:absolute; left:9.60cm; top:15.30cm">
    <input style="display:none; text-align:right; width:1.0cm; font-size:9px" id="numeroD4" name="numeroD4" maxlength="4" type="text" value="" pattern="^(?:[0-9]{4})$" title="Debe ingresar 4 números.">
  </div>
  <div style="position:absolute; left:9.0cm; top:15.50cm">
    <input name="D5" type="checkbox" id="D5" onChange="comprobarD5(this)">
  </div>
  <div style="position:absolute; left:9.60cm; top:15.60cm">
    <input style="display:none; text-align:right; width:1.0cm; font-size:9px" id="numeroD5" name="numeroD5" maxlength="4" type="text" value="" pattern="^(?:[0-9]{4})$" title="Debe ingresar 4 números.">
  </div>
  <div style="position:absolute; left:9.0cm; top:15.80cm">
    <input name="D6" type="checkbox" id="D6" onChange="comprobarD6(this)">
  </div>
  <div style="position:absolute; left:9.60cm; top:15.90cm">
    <input style="display:none; text-align:right; width:1.0cm; font-size:9px" id="numeroD6" name="numeroD6" maxlength="4" type="text" value="" pattern="^(?:[0-9]{4})$" title="Debe ingresar 4 números.">
  </div>
  <div style="position:absolute; left:9.0cm; top:16.10cm">
    <input name="D7" type="checkbox" id="D7" onChange="comprobarD7(this)">
  </div>
  <div style="position:absolute; left:9.60cm; top:16.20cm">
    <input style="display:none; text-align:right; width:1.0cm; font-size:9px" id="numeroD7" name="numeroD7" maxlength="4" type="text" value="" pattern="^(?:[0-9]{4})$" title="Debe ingresar 4 números.">
  </div>
  <div style="position:absolute; left:9.0cm; top:16.40cm">
    <input name="D8" type="checkbox" id="D8" onChange="comprobarD8(this)">
  </div>
  <div style="position:absolute; left:9.60cm; top:16.50cm">
    <input style="display:none; text-align:right; width:1.0cm; font-size:9px" id="numeroD8" name="numeroD8" maxlength="4" type="text" value="" pattern="^(?:[0-9]{4})$" title="Debe ingresar 4 números.">
  </div>
  <div style="position:absolute; left:18.0cm; top:14.30cm">
    <input name="D9" type="checkbox" id="D9" onChange="comprobarD9(this)">
  </div>
  <div style="position:absolute; left:18.60cm; top:14.40cm">
    <input style="display:none; text-align:right; width:1.0cm; font-size:9px" id="numeroD9" name="numeroD9" maxlength="4" type="text" value="" pattern="^(?:[0-9]{4})$" title="Debe ingresar 4 números.">
  </div>
  <div style="position:absolute; left:18.0cm; top:14.60cm">
    <input name="D10" type="checkbox" id="D10" onChange="comprobarD10(this)">
  </div>
  <div style="position:absolute; left:18.60cm; top:14.70cm">
    <input style="display:none; text-align:right; width:1.0cm; font-size:9px" id="numeroD10" name="numeroD10" maxlength="4" type="text" value="" pattern="^(?:[0-9]{4})$" title="Debe ingresar 4 números.">
  </div>
  <div style="position:absolute; left:18.0cm; top:14.90cm">
    <input name="D11" type="checkbox" id="D11" onChange="comprobarD11(this)">
  </div>
  <div style="position:absolute; left:18.60cm; top:15.00cm">
    <input style="display:none; text-align:right; width:1.0cm; font-size:9px" id="numeroD11" name="numeroD11" maxlength="4" type="text" value="" pattern="^(?:[0-9]{4})$" title="Debe ingresar 4 números.">
  </div>
  <div style="position:absolute; left:18.0cm; top:15.20cm">
    <input name="D12" type="checkbox" id="D12" onChange="comprobarD12(this)">
  </div>
  <div style="position:absolute; left:18.60cm; top:15.30cm">
    <input style="display:none; text-align:right; width:1.0cm; font-size:9px" id="numeroD12" name="numeroD12" maxlength="4" type="text" value="" pattern="^(?:[0-9]{4})$" title="Debe ingresar 4 números.">
  </div>
  <div style="position:absolute; left:18.0cm; top:15.50cm">
    <input name="D13" type="checkbox" id="D13" onChange="comprobarD13(this)">
  </div>
  <div style="position:absolute; left:18.60cm; top:15.60cm">
    <input style="display:none; text-align:right; width:1.0cm; font-size:9px" id="numeroD13" name="numeroD13" maxlength="4" type="text" value="" pattern="^(?:[0-9]{4})$" title="Debe ingresar 4 números.">
  </div>
  <div style="position:absolute; left:18.0cm; top:15.80cm">
    <input name="D14" type="checkbox" id="D14" onChange="comprobarD14(this)">
  </div>
  <div style="position:absolute; left:18.60cm; top:15.90cm">
    <input style="display:none; text-align:right; width:1.0cm; font-size:9px" id="numeroD14" name="numeroD14" maxlength="4" type="text" value="" pattern="^(?:[0-9]{4})$" title="Debe ingresar 4 números.">
  </div>
  <div style="position:absolute; left:18.0cm; top:16.10cm">
    <input name="D15" type="checkbox" id="D15" onChange="comprobarD15(this)">
  </div>
  <div style="position:absolute; left:18.60cm; top:16.20cm">
    <input style="display:none; text-align:right; width:1.0cm; font-size:9px" id="numeroD15" name="numeroD15" maxlength="4" type="text" value="" pattern="^(?:[0-9]{4})$" title="Debe ingresar 4 números.">
  </div>
  <div style="position:absolute; left:18.0cm; top:16.40cm">
    <input name="D16" type="checkbox" id="D16" onChange="comprobarD16(this)">
  </div>
  <div style="position:absolute; left:18.60cm; top:16.50cm">
    <input style="display:none; text-align:right; width:1.0cm; font-size:9px" id="numeroD16" name="numeroD16" maxlength="4" type="text" value="" pattern="^(?:[0-9]{4})$" title="Debe ingresar 4 números.">
  </div>

<!-- *****************************************       sección E       ***************************************** -->

<!-- *****************************************       sección F       ***************************************** -->
  <div style="position:absolute; left: 2.4cm; top:18.075cm">
    <input style="width:18.0cm" id="precauciones" name="precauciones" maxlength="80" type="text" pattern="^(?:[a-z A-Z  [0-9] .ÁáÉéÍíÓóÚúÜüÑñ/-_]+)$" value="" required>
  </div>

<!-- *****************************************       sección G       ***************************************** -->
  <div style="position:absolute; left:3.95cm; top:19.495cm">
    <input type="radio" id="empleadop" name="empleado" value="E" onclick="gestionarClickRadio(this)" title="Debe escoger una opción." checked required>
  </div>
  <div style="position:absolute; left:10.25cm; top:19.495cm">
    <input type="radio" id="empleadocp" name="empleado" value="CP" onclick="gestionarClickRadio(this)">
  </div>
  <div style="position:absolute; left:12.75cm; top:19.595cm">
    <input style="width:6.2cm; display:none" id="companiacp" name="companiacp" maxlength="25" type="text" value="" pattern="^(?:[a-z A-Z  [0-9] .ÁáÉéÍíÓóÚúÜüÑñ/-_]+)$">
  </div>
  <div style="position:absolute; left:10.25cm; top:19.825cm">
    <input type="radio" id="empleadoct" name="empleado" value="CT" onclick="gestionarClickRadio(this);">
  </div>
  <div style="position:absolute; left:12.75cm; top:19.925cm">
    <input style="width:6.2cm; display:none" id="companiact" name="companiact" maxlength="25" type="text" value="" pattern="^(?:[a-z A-Z  [0-9] .ÁáÉéÍíÓóÚúÜüÑñ/-_]+)$">
  </div>
  <script>
    var companiacp = document.getElementById('companiacp'); companiact = document.getElementById('companiact');
    document.getElementById('empleadop').addEventListener('click', function(e) {companiacp.disabled = true; companiacp.style.display = "none";});
    document.getElementById('empleadop').addEventListener('click', function(e) {companiact.disabled = true; companiact.style.display = "none";});
    document.getElementById('empleadocp').addEventListener('click', function(e) {companiacp.disabled = false; companiacp.style.display = "block"; companiacp.required = true;});
    document.getElementById('empleadocp').addEventListener('click', function(e) {companiact.disabled = true; companiact.style.display = "none";});
    document.getElementById('empleadoct').addEventListener('click', function(e) {companiacp.disabled = true; companiacp.style.display = "none";});
    document.getElementById('empleadoct').addEventListener('click', function(e) {companiact.disabled = false; companiact.style.display = "block"; companiact.required = true;});
  </script>
  <div style="position:absolute; left: 3.85cm; top:20.30cm">
    <input style="width:5.7cm" id="ejecutorG" name="ejecutorG" maxlength="25" type="text" value="" pattern="^(?:[a-z A-Z  [0-9] .ÁáÉéÍíÓóÚúÜüÑñ/-_]+)$" required>
  </div>
  <div style="position:absolute; left:15.35cm; top:20.30cm">
    <input style="width:3.2cm" type="date" id="fechaejecG" name="fechaejecG" min="<?echo $fechamin;?>" max="<?echo $fechamax;?>" value="<?echo $fechaactual;?>"
    title="Solo se aceptan fechas entre el <?echo $fechamin;?> y <?echo $fechamax;?>." required>
  </div>
  <div style="position:absolute; left:19.00cm; top:20.30cm">
    <input style="width:2.4cm" type="time" id="horaejecG" name="horaejecG" min="<?echo date("H:i");?>" value="<?echo date("H:i");?>" required>
  </div>
  <div style="position:absolute; left: 4.00cm; top:20.70cm">
    <input style="width:5.7cm" id="inspectorG" name="inspectorG" maxlength="25" type="text" value="" pattern="^(?:[a-z A-Z  [0-9] .ÁáÉéÍíÓóÚúÜüÑñ/-_]+)$" required>
  </div>
  <div style="position:absolute; left:15.35cm; top:20.70cm">
    <input style="width:3.2cm" type="date" id="fechainspG" name="fechainspG" min="<?echo $fechamin;?>" max="<?echo $fechamax;?>" value="<?echo $fechaactual;?>"
    title="Solo se aceptan fechas entre el <?echo $fechamin;?> y <?echo $fechamax;?>." required>
  </div>
  <div style="position:absolute; left:19.00cm; top:20.70cm">
    <input style="width:2.4cm" type="time" id="horainspG" name="horainspG" min="<?echo date("H:i");?>" value="<?echo date("H:i");?>" required>
  </div>

<!-- *****************************************       sección H       ***************************************** -->
  <div style="position:absolute; left:2.60cm; top:21.525cm">
    <input type="radio" id="docum_adic_SI" name="docum_adic" value="SI" onclick="gestionarClickRadio(this)" checked required>
  </div>
  <div style="position:absolute; left:2.60cm; top:21.825cm">
    <input type="radio" id="docum_adic_NO" name="docum_adic" value="NO" onclick="gestionarClickRadio(this);">
  </div>
  <div style="position:absolute; left:11.0cm; top:22.15cm">
    <input style="width:0.6cm; display:none; text-align:center" id="cantidad" name="cantidad" maxlength="1" type="text" value="" pattern="^(?:[1-7]{1})$" title="Mínimo 1 persona, máximo 7 personas.">
  </div>
  <div style="position:absolute; left:15.40cm; top:22.15cm">
    <input style="width:5.8cm; display:none" id="nombre1" name="nombre1" maxlength="25" type="text" pattern="^(?:[a-z A-Z  [0-9] .ÁáÉéÍíÓóÚúÜüÑñ/-_]+)$" value="">
  </div>
  <div style="position:absolute; left:2.4cm; top:22.6cm">
    <input style="width:5.8cm; display:none" id="nombre2" name="nombre2" maxlength="25" type="text" pattern="^(?:[a-z A-Z  [0-9] .ÁáÉéÍíÓóÚúÜüÑñ/-_]+)$" value="">
  </div>
  <div style="position:absolute; left:8.9cm; top:22.6cm">
    <input style="width:5.8cm; display:none" id="nombre3" name="nombre3" maxlength="25" type="text" pattern="^(?:[a-z A-Z  [0-9] .ÁáÉéÍíÓóÚúÜüÑñ/-_]+)$" value="">
  </div>
  <div style="position:absolute; left:15.40cm; top:22.6cm">
    <input style="width:5.8cm; display:none" id="nombre4" name="nombre4" maxlength="25" type="text" pattern="^(?:[a-z A-Z  [0-9] .ÁáÉéÍíÓóÚúÜüÑñ/-_]+)$" value="">
  </div>
  <div style="position:absolute; left:2.4cm; top:23.05cm">
    <input style="width:5.8cm; display:none" id="nombre5" name="nombre5" maxlength="25" type="text" pattern="^(?:[a-z A-Z  [0-9] .ÁáÉéÍíÓóÚúÜüÑñ/-_]+)$" value="">
  </div>
  <div style="position:absolute; left:8.9cm; top:23.05cm">
    <input style="width:5.8cm; display:none" id="nombre6" name="nombre6" maxlength="25" type="text" pattern="^(?:[a-z A-Z  [0-9] .ÁáÉéÍíÓóÚúÜüÑñ/-_]+)$" value="">
  </div>
  <div style="position:absolute; left:15.40cm; top:23.05cm">
    <input style="width:5.8cm; display:none" id="nombre7" name="nombre7" maxlength="25" type="text" pattern="^(?:[a-z A-Z  [0-9] .ÁáÉéÍíÓóÚúÜüÑñ/-_]+)$" value="">
  </div>
  <script>
    var
      c = document.getElementById("cantidad");
      n1 = document.getElementById("nombre1");
      n2 = document.getElementById("nombre2");
      n3 = document.getElementById("nombre3");
      n4 = document.getElementById("nombre4");
      n5 = document.getElementById("nombre5");
      n6 = document.getElementById("nombre6");
      n7 = document.getElementById("nombre7");
    document.getElementById("docum_adic_SI").addEventListener("click", function(e) {
      c.style.display = "none"; c.disabled = true;
      n1.style.display = "none"; n1.disabled = true;
      n2.style.display = "none"; n2.disabled = true;
      n3.style.display = "none"; n3.disabled = true;
      n4.style.display = "none"; n4.disabled = true;
      n5.style.display = "none"; n5.disabled = true;
      n6.style.display = "none"; n6.disabled = true;
      n7.style.display = "none"; n7.disabled = true;});
    document.getElementById("docum_adic_NO").addEventListener("click", function(e) {c.disabled = false; c.style.display = "block"; c.required = true;});
    document.getElementById("cantidad").addEventListener("blur", function(e) {
      if (c.value == 0) {c.value = 1;
			 n1.disabled = false; n1.style.display = "block"; n1.required = true;
			 n2.disabled = true; n2.style.display = "none";
			 n3.disabled = true; n3.style.display = "none";
			 n4.disabled = true; n4.style.display = "none";
			 n5.disabled = true; n5.style.display = "none";
			 n6.disabled = true; n6.style.display = "none";
			 n7.disabled = true; n7.style.display = "none";};
      if (c.value == 1) {n1.disabled = false; n1.style.display = "block"; n1.required = true;
			 n2.disabled = true; n2.style.display = "none";
			 n3.disabled = true; n3.style.display = "none";
			 n4.disabled = true; n4.style.display = "none";
			 n5.disabled = true; n5.style.display = "none";
			 n6.disabled = true; n6.style.display = "none";
			 n7.disabled = true; n7.style.display = "none";};
      if (c.value == 2) {n1.disabled = false; n1.style.display = "block"; n1.required = true;
			 n2.disabled = false; n2.style.display = "block"; n2.required = true;
			 n3.disabled = true; n3.style.display = "none";
			 n4.disabled = true; n4.style.display = "none";
			 n5.disabled = true; n5.style.display = "none";
			 n6.disabled = true; n6.style.display = "none";
			 n7.disabled = true; n7.style.display = "none";};
      if (c.value == 3) {n1.disabled = false; n1.style.display = "block"; n1.required = true;
			 n2.disabled = false; n2.style.display = "block"; n2.required = true;
			 n3.disabled = false; n3.style.display = "block"; n3.required = true;
			 n4.disabled = true; n4.style.display = "none";
			 n5.disabled = true; n5.style.display = "none";
			 n6.disabled = true; n6.style.display = "none";
			 n7.disabled = true; n7.style.display = "none";};
      if (c.value == 4) {n1.disabled = false; n1.style.display = "block"; n1.required = true;
			 n2.disabled = false; n2.style.display = "block"; n2.required = true;
			 n3.disabled = false; n3.style.display = "block"; n3.required = true;
			 n4.disabled = false; n4.style.display = "block"; n4.required = true;
			 n5.disabled = true; n5.style.display = "none";
			 n6.disabled = true; n6.style.display = "none";
			 n7.disabled = true; n7.style.display = "none";};
      if (c.value == 5) {n1.disabled = false; n1.style.display = "block"; n1.required = true;
			 n2.disabled = false; n2.style.display = "block"; n2.required = true;
			 n3.disabled = false; n3.style.display = "block"; n3.required = true;
			 n4.disabled = false; n4.style.display = "block"; n4.required = true;
			 n5.disabled = false; n5.style.display = "block"; n5.required = true;
			 n6.disabled = true; n6.style.display = "none";
			 n7.disabled = true; n7.style.display = "none";};
      if (c.value == 6) {n1.disabled = false; n1.style.display = "block"; n1.required = true;
			 n2.disabled = false; n2.style.display = "block"; n2.required = true;
			 n3.disabled = false; n3.style.display = "block"; n3.required = true;
			 n4.disabled = false; n4.style.display = "block"; n4.required = true;
			 n5.disabled = false; n5.style.display = "block"; n5.required = true;
			 n6.disabled = false; n6.style.display = "block"; n6.required = true;
			 n7.disabled = true; n7.style.display = "none";};
      if (c.value == 7) {n1.disabled = false; n1.style.display = "block"; n1.required = true;
			 n2.disabled = false; n2.style.display = "block"; n2.required = true;
			 n3.disabled = false; n3.style.display = "block"; n3.required = true;
			 n4.disabled = false; n4.style.display = "block"; n4.required = true;
			 n5.disabled = false; n5.style.display = "block"; n5.required = true;
			 n6.disabled = false; n6.style.display = "block"; n6.required = true;
			 n7.disabled = false; n7.style.display = "block"; n7.required = true;}
      if (c.value == 8) {c.value = 7;
			 n1.disabled = false; n1.style.display = "block"; n1.required = true;
			 n2.disabled = false; n2.style.display = "block"; n2.required = true;
			 n3.disabled = false; n3.style.display = "block"; n3.required = true;
			 n4.disabled = false; n4.style.display = "block"; n4.required = true;
			 n5.disabled = false; n5.style.display = "block"; n5.required = true;
			 n6.disabled = false; n6.style.display = "block"; n6.required = true;
			 n7.disabled = false; n7.style.display = "block"; n7.required = true;}
      if (c.value == 9) {c.value = 7;
			 n1.disabled = false; n1.style.display = "block"; n1.required = true;
			 n2.disabled = false; n2.style.display = "block"; n2.required = true;
			 n3.disabled = false; n3.style.display = "block"; n3.required = true;
			 n4.disabled = false; n4.style.display = "block"; n4.required = true;
			 n5.disabled = false; n5.style.display = "block"; n5.required = true;
			 n6.disabled = false; n6.style.display = "block"; n6.required = true;
			 n7.disabled = false; n7.style.display = "block"; n7.required = true;}});
  </script>
  <div style="position:absolute; left: 4.85cm; top:23.4cm">
    <input style="width:4.6cm" id="aprobadorH" name="aprobadorH" maxlength="20" type="text" pattern="^(?:[a-z A-Z  [0-9] .ÁáÉéÍíÓóÚúÜüÑñ/-_]+)$" value=""required>
  </div>
  <div style="position:absolute; left:15.35cm; top:23.4cm">
    <input style="width:3.2cm" type="date" id="fechaaprobH" name="fechaaprobH" min="<?echo $fechamin;?>" max="<?echo $fechamax;?>" value="<?echo $fechaactual;?>"
    title="Solo se aceptan fechas entre el <?echo $fechamin;?> y <?echo $fechamax;?>." required>
  </div>
  <div style="position:absolute; left:19.00cm; top:23.4cm">
    <input style="width:2.4cm" type="time" id="horaaprobH" name="horaaprobH" min="<?echo date("H:i");?>" value="<?echo date("H:i");?>" required>
  </div>
  <div style="position:absolute; left: 3.5cm; top:23.9cm">
    <input style="width:6.2cm" id="emisorH" name="emisorH" maxlength="25" type="text" pattern="^(?:[a-z A-Z  [0-9] .ÁáÉéÍíÓóÚúÜüÑñ/-_]+)$" value="" required>
  </div>
  <div style="position:absolute; left:15.35cm; top:23.9cm">
    <input style="width:3.2cm" type="date" id="fechaemisorH" name="fechaemisorH" min="<?echo $fechamin;?>" max="<?echo $fechamax;?>" value="<?echo $fechaactual;?>"
    title="Solo se aceptan fechas entre el <?echo $fechamin;?> y <?echo $fechamax;?>." required>
  </div>
  <div style="position:absolute; left:19.00cm; top:23.9cm">
    <input style="width:2.4cm" type="time" id="horaemisorH" name="horaemisorH" min="<?echo date("H:i");?>" value="<?echo date("H:i");?>" required>
  </div>

<!-- *****************************************       sección I       ***************************************** -->
  <div style="position:absolute; left:7.15cm; top:24.7cm">
    <input type="radio" id="completadoSI" name="completado" value="SI" onclick="gestionarClickRadio(this)" checked required>
  </div>
  <div style="position:absolute; left:10.55cm; top:24.7cm">
    <input type="radio" id="completadoNO" name="completado" value="NO" onclick="gestionarClickRadio(this);">
  </div>
  <div style="position:absolute; left: 4.05cm; top:25.18cm">
    <input style="width:6.2cm" id="ejecutorI" name="ejecutorI" maxlength="25" type="text" value="" pattern="^(?:[a-z A-Z  [0-9] .ÁáÉéÍíÓóÚúÜüÑñ/-_]+)$" required>
  </div>
  <div style="position:absolute; left:19.00cm; top:25.18cm">
    <input style="width:2.4cm" type="time" id="horaejecI" name="horaejecI" min="<?echo date("H:i");?>" value="<?echo date("H:i");?>" required>
  </div>
  <div style="position:absolute; left: 4.05cm; top:25.63cm">
    <input style="width:6.2cm" id="inspectorI" name="inspectorI" maxlength="25" type="text" value="" pattern="^(?:[a-z A-Z  [0-9] .ÁáÉéÍíÓóÚúÜüÑñ/-_]+)$" required>
  </div>
  <div style="position:absolute; left:19.00cm; top:25.63cm">
    <input style="width:2.4cm" type="time" id="horainspI" name="horainspI" min="<?echo date("H:i");?>" value="<?echo date("H:i");?>" required>
  </div>
  <div style="position:absolute; left: 4.05cm; top:26.53cm">
    <input style="width:6.2cm" id="emisorI" name="emisorI" maxlength="25" type="text" value="" pattern="^(?:[a-z A-Z  [0-9] .ÁáÉéÍíÓóÚúÜüÑñ/-_]+)$" required>
  </div>
  <div style="position:absolute; left:19.00cm; top:26.53cm">
    <input style="width:2.4cm" type="time" id="horaemisorI" name="horaemisorI" min="<?echo date("H:i");?>" value="<?echo date("H:i");?>" required>
  </div>
<!-- *****************************************       FIN DEL FORMULARIO       ***************************************** -->

  <div style="position:absolute; left:20mm; top:271mm">
    <span style="font-family:Arlrdlt; font-size:8px; color:rgba(0,0,0,1)">Fecha diligenciamiento: <?echo $fechaactual;?> / <?echo $horaactual;?></span>
    <input style="display:none; width:3.10cm" type="text" id="fecha" name="fecha" value="<?echo $fechaactual;?> / <?echo $horaactual;?>" readonly>
  </div>
  <div style="position:absolute; left:20mm; top:274mm">
    <span style="font-family:Arlrdlt; font-size:8px; color:rgba(0,0,0,1)">Quedan <?echo $consec_por_usar;?> consecutivos, incluido este.</span>
  </div>
  <div style="position:absolute; left:50%; margin-left:-112.5mm; top:271mm; width:107.5mm; text-align:right; background-color:rgba(0,255,0,0)">
    <input type="image" src="../../../../imagenes/grabar.png" alt="Submit" title="Grabar información en la base de datos." width="25" height="auto"
    style="border:0px; height:25px; ; background-color:rgba(0,0,0,0)">
  </div>
  <div style="position:absolute; left:50%; margin-left:     5mm; top:271mm; width:107.5mm; text-align:left; background-color:rgba(255,0,0,0)">
    <a href="javascript:closed();"><img src="../../../../imagenes/regresar.png" width="25" height="auto" title="Cerrar esta pestaña sin modificar nada."></a>
  </div>
  <div style="position:absolute; left:50%; margin-left:-93.5mm; top:150mm; width:5mm; text-align:right; background-color:rgba(250,0,0,0)">
    <a href="mailto:comercial@solucionesgraficas.net?Subject=Solicitud%20pedido%20libretas%20permisos%20de%20trabajo">
    <img src="../../../../imagenes/piedepagina.svg" title="Enviar pedido por correo electrónico a&#x00A;comercial@solucionesgraficas.net"></a>
  </div>

</div>

<!-- *****************************************       INICIO DES-SELECCIONAR INPUT radio       ***************************************** -->
<!-- *****************************************            debe ir al final del html           ***************************************** -->
<script type="text/javascript">
  //Para distinguir la opción actualmente pulsada en cada grupo
  var pref_opcActual = "opcActual_";
  //Verifica si una variable definida dinámicamente existe o no
  function varExiste(sNombre) {return (eval("typeof(" + sNombre + ");") != "undefined");}
  //Asigna un valor a una variable creada dinámicamente a partir de su nombre
  function asignaVar(sNombre, valor) {eval(sNombre + " = " + valor + ";");}
  //generamos dinámicamente variables globales para contener la opción pulsada en cada uno de los grupos
  for (f= 0; f<document.forms.length; f++) {
    for (i = 0; i< document.forms[f].elements.length; i++) {
      var eltoAct = document.forms[f].elements[i];
      var exprCrearVariable = "";
      if (eltoAct.type == "radio") {
        //Si la variable no existe la definimos siempre,pero sólo la redefinimos en caso de que el elemento actual del grupo esté asignado
        if (!varExiste(pref_opcActual + eltoAct.name) ) exprCrearVariable = "var " + pref_opcActual + eltoAct.name + " = ";
          else exprCrearVariable = pref_opcActual + eltoAct.name + " = ";
        //El valor será nulo o una referencia al radio actual en función de su está seleccionado o no
        if(eltoAct.checked) exprCrearVariable += "document.getElementById('" + eltoAct.id + "')";
          else exprCrearVariable += "null";
        //Definimos la variable y asignamos el valor sólo si no existe o si el radio actual está marcado 
        if ( !varExiste(pref_opcActual + eltoAct.name) || eltoAct.checked) eval(exprCrearVariable);}}}

  function gestionarClickRadio(opcPulsada) {
    //El nombre de la variable que contiene el nombre del grupo actual
    var svarOpcAct = pref_opcActual + opcPulsada.name;
    var opcActual = null;
    opcActual = eval(svarOpcAct);  //recupero dinámicamente una referencia al último radio pulsado de este grupo
      if (opcActual == opcPulsada) {
  	opcPulsada.checked = false; //deselecciono
  	asignaVar(svarOpcAct, "null");}  //y quito referencia (es como si nunca se hubiera pulsado)
        else {asignaVar(svarOpcAct, "document.getElementById('" + opcPulsada.id + "')");}}  //Anoto la última opción pulsada de este grupo
</script>

<!-- script para css select option -->
<script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box, then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>

<!-- *****************************************       FIN DES-SELECCIONAR INPUT radio       ***************************************** -->

</div>
</form>
</div>
<script type='text/javascript'>
  document.oncontextmenu = function(){return false}
</script>
</body>
</html>

<!--
  <div class="custom-select" style="position:absolute; text-align:left; left:4.3cm; top:2.2cm; width:5.0cm; background-color:rgba(255,0,0,0)">
    <select name="instalacion" required>
      <option value="">Seleccione su Terminal</option>
      <option value="BUCARAMANGA">BUCARAMANGA</option>
      <option value="BUENAVENTURA">BUENAVENTURA</option>
      <option value="CARTAGENA">CARTAGENA</option>
      <option value="GUALANDAY">GUALANDAY</option>
      <option value="MANCILLA">MANCILLA</option>
      <option value="MEDELLIN">MEDELLIN</option>
      <option value="PUENTE ARANDA">PUENTE ARANDA</option>
      <option value="YUMBO">YUMBO</option>
      <option value="CARTAGO">CARTAGO</option>
      <option value="GALAPA">GALAPA</option>
      <option value="LA DORADA">LA DORADA</option>
    </select>
  </div>
-->
