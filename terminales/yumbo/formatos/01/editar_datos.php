<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<link rel="SHORTCUT ICON" href="../../../../imagenes/iconoPRIMAX1.ico">
<link href="../../../../css/noimprimir.css" rel="stylesheet" type="text/css" media="print">
<link rel='stylesheet' type='text/css' href='../../../../css/fuentes.css'>
<meta http-equiv='content-type' content='text/html;charset=utf-8'>
<title>Editar / Modificar informacion</title>
<style type='text/css'>
  input	{background-color:rgba(255,112,0,0.33); color:rgba(0,0,191,1);
		 border:0px solid rgba(0,128,0,1); border-radius:4px;
		 font-family:Arlrdlt; font-size:10px; text-align:left; vertical-align:middle; height:4mm;}
  input[type=checkbox]	{transform:scale(1.0)}
  input[type=radio]	{transform:scale(1.0)}
  .cajainput	{background-color:rgba(255,255,200,1); color:rgba(40,40,40,1);
  		 border:1px dashed rgba(0,0,0,0); border-left:0px solid rgba(0,0,0,0);
  		 width:100%; text-align:center; vertical-align:middle;
		 text-transform:uppercase}
  td,th	{background-color:rgba(255,255,200,1)}
  
/*the container must be positioned relative:*/
.custom-select {position:relative; font-family:Arlrdlt; font-size:10px}

/*hide original SELECT element:*/
.custom-select select {display:none;}
.select-selected {background-color:rgba(255,0,0,1); border-radius:30px;}

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
  border-radius: 2px;}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {border-color:transparent transparent rgba(0,0,191,1) transparent; top:-4px;}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color:rgba(0,0,191,1);
  background-color:rgba(0,255,255,1);
  padding: 2px 2px;
  border: 0px solid transparent;
  border-color: transparent transparent rgba(0,0,0,0.2) transparent;
  border-radius:30px;
  cursor: pointer;
  user-select: none;}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: rgba(255,0,0,0);
  border-radius:30px;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;}

/*hide the items when the select box is closed:*/
.select-hide {display:none;}
.select-items div:hover, .same-as-selected {background-color:rgba(0,255,0,1); border-radius:30px;}
  
</style>
<script type='text/javascript'>
function closed() {window.open('','_parent',''); window.close();}
function comprobarD1(obj) {if (obj.checked){document.getElementById('numeroD1').style.display =''} else{document.getElementById('numeroD1').style.display = 'none';}}
function comprobarD2(obj) {if (obj.checked){document.getElementById('numeroD2').style.display =''} else{document.getElementById('numeroD2').style.display = 'none';}}
function comprobarD3(obj) {if (obj.checked){document.getElementById('numeroD3').style.display =''} else{document.getElementById('numeroD3').style.display = 'none';}}
function comprobarD4(obj) {if (obj.checked){document.getElementById('numeroD4').style.display =''} else{document.getElementById('numeroD4').style.display = 'none';}}
function comprobarD5(obj) {if (obj.checked){document.getElementById('numeroD5').style.display =''} else{document.getElementById('numeroD5').style.display = 'none';}}
function comprobarD6(obj) {if (obj.checked){document.getElementById('numeroD6').style.display =''} else{document.getElementById('numeroD6').style.display = 'none';}}
function comprobarD7(obj) {if (obj.checked){document.getElementById('numeroD7').style.display =''} else{document.getElementById('numeroD7').style.display = 'none';}}
function comprobarD8(obj) {if (obj.checked){document.getElementById('numeroD8').style.display =''} else{document.getElementById('numeroD8').style.display = 'none';}}
function comprobarD9(obj) {if (obj.checked){document.getElementById('numeroD9').style.display =''} else{document.getElementById('numeroD9').style.display = 'none';}}
function comprobarD10(obj) {if (obj.checked){document.getElementById('numeroD10').style.display =''} else{document.getElementById('numeroD10').style.display = 'none';}}
function comprobarD11(obj) {if (obj.checked){document.getElementById('numeroD11').style.display =''} else{document.getElementById('numeroD11').style.display = 'none';}}
function comprobarD12(obj) {if (obj.checked){document.getElementById('numeroD12').style.display =''} else{document.getElementById('numeroD12').style.display = 'none';}}
function comprobarD13(obj) {if (obj.checked){document.getElementById('numeroD13').style.display =''} else{document.getElementById('numeroD13').style.display = 'none';}}
function comprobarD14(obj) {if (obj.checked){document.getElementById('numeroD14').style.display =''} else{document.getElementById('numeroD14').style.display = 'none';}}
function comprobarD15(obj) {if (obj.checked){document.getElementById('numeroD15').style.display =''} else{document.getElementById('numeroD15').style.display = 'none';}}
function comprobarD16(obj) {if (obj.checked){document.getElementById('numeroD16').style.display =''} else{document.getElementById('numeroD16').style.display = 'none';}}
</script>
</head>
<?php
  date_default_timezone_set('America/Bogota');
  $fecha = date("Y-m-d / g:i A");
  $fechamin = date("Y-m-d", strtotime("-2 days", strtotime(date("Y-m-d"))));
  $fechamax = date("Y-m-d", strtotime("-0 days", strtotime(date("Y-m-d"))));
?>
<div class="noimprimir">
<?php
include ("../conectar_db.php");
echo "
<!-- *****************************************       INICIO DEL FORMULARIO       ***************************************** -->
<div style='position:absolute; left:50%; margin-left:-10.75cm; top:0px; width:215mm; height:561mm; background-color: rgba(255,255,255,0.95); overflow:hidden; border:0px solid rgba(0,0,0,0.25)'>
  <div style='position:absolute;left:0mm;top:0mm'><img src='../../../../formatos_SVG/01_tiro.svg' width=812.6px height=auto></div>
<!--  <div style='position:absolute; left:0mm; top:279.5mm'><hr size=1mm style='width:215mm; border-top:1px solid black'></div> -->
  <div style='position:absolute;left:0mm;top:280mm'><img src='../../../../formatos_SVG/01_retiro.svg' width=812.6px height=auto></div>

<!-- *****************************************       encabezado formato       ***************************************** -->
  <div style='position:absolute; left:185.02mm; top:9.05mm'>
    <input style='width:12mm; font-family:SCHLBKB; font-size:16px; vertical-align:top; color:red; background-color:rgba(120,120,120,0)'
    id='consecutivo' name='consecutivo' type='text' value='"; if ($row[0] <= 9) {echo "000";} else {if ($row[0] <= 99) {echo "00";} else {if ($row[0] <= 999) {echo "0";}}} echo "$row[consecutivo]'
    readonly>
  </div>
  <div style='position:absolute; left:4.3cm; top:2.2cm' required>
    <input style='width:50mm; height:4mm; text-align:left; background-color:rgba(0,0,0,0)' id='instalacion' name='instalacion' type='text' value='"; echo strtoupper($terminal); echo "' readonly>
  </div>
<!--
  <div class='custom-select' style='position:absolute; text-align:left; left: 4.3cm; top: 2.17cm; width:3.5cm; background-color:rgba(255,0,0,0)'>
    <select name='instalacion' required>
      <option disabled='disabled' selected>SELECCIONE TERMINAL</option>
      <option "; if ($row[2] == 'BUCARAMANGA') {echo 'value="BUCARAMANGA" selected';} echo ">BUCARAMANGA</option>
      <option "; if ($row[2] == 'BUENAVENTURA') {echo 'value="BUENAVENTURA" selected';} echo ">BUENAVENTURA</option>
      <option "; if ($row[2] == 'CARTAGENA') {echo 'value="CARTAGENA" selected';} echo ">CARTAGENA</option>
      <option "; if ($row[2] == 'GUALANDAY') {echo 'value="GUALANDAY" selected';} echo ">GUALANDAY</option>
      <option "; if ($row[2] == 'MANCILLA') {echo 'value="MANCILLA" selected';} echo ">MANCILLA</option>
      <option "; if ($row[2] == 'MEDELLIN') {echo 'value="MEDELLIN" selected';} echo ">MEDELLIN</option>
      <option "; if ($row[2] == 'PUENTE ARANDA') {echo 'value="PUENTE ARANDA" selected';} echo ">PUENTE ARANDA</option>
      <option "; if ($row[2] == 'YUMBO') {echo 'value="YUMBO" selected';} echo ">YUMBO</option>
      <option "; if ($row[2] == 'CARTAGO') {echo 'value="CARTAGO" selected';} echo ">CARTAGO</option>
      <option "; if ($row[2] == 'GALAPA') {echo 'value="GALAPA" selected';} echo ">GALAPA</option>
      <option "; if ($row[2] == 'LA DORADA') {echo 'value="LA DORADA" selected';} echo ">LA DORADA</option>
    </select>
  </div>
-->
  <div style='position:absolute; left:18.4cm; top: 2.22cm'>
    <input style='width:1.0cm' size='4' id='certificado' name='certificado' maxlength='4' type='text' pattern='^(?:[0-9]{4})$' title='Debe ingresar 4 números.'
    value='$row[certificado]' autofocus required>
  </div>

<!-- *****************************************       sección A       ***************************************** -->
  <div style='position:absolute; left: 3.9cm; top: 3.07cm'>
    <input style='width:11.3cm; text-align:left' size='90' id='ubicacion' name='ubicacion' maxlength='50' type='text' value='$row[ubicacion]'
    pattern='^(?:[a-zA-Z .ÁáÉéÍíÓóÚúÜüÑñ0123456789]+)$' required>
  </div>
  <div style='position:absolute; left:18.5cm; top: 3.07cm'>
    <input style='width:1.0cm' size='4' id='ats' name='ats' maxlength='4' type='text' pattern='^(?:[0-9]{4})$' title='Debe ingresar 4 números.' value='$row[ats]' required>
  </div>
  <div style='position:absolute; left: 3.9cm; top: 3.37cm'>
    <input style='width:3.0cm' size='10' id='equipo' name='equipo' maxlength='10' type='text' pattern='^(?:[0-9]{0,10})$'
    title='Debe ingresar mínimo 10 números.' value='$row[equipo]' required>
  </div>
  <div style='position:absolute; left: 9.4cm; top: 3.37cm'>
    <input style='width:3.0cm' type='date' id='fechaA' name='fechaA' min='"; echo $fechamin; echo "' max='"; echo $fechamax; echo "' value='$row[fechaA]'
    title='Solo se aceptan fechas del año "; echo date('Y'); echo " (dd-mm-aaaa)' required>
  </div>
  <div style='position:absolute; left:14.6cm; top: 3.37cm'>
    <input style='width:2.2cm' type='time' id='horainicioA' name='horainicioA' value='$row[horainicioA]' required>
  </div>
  <div style='position:absolute; left:18.2cm; top: 3.37cm'>
    <input style='width:2.2cm' type='time' id='horafinalA' name='horafinalA' value='$row[horafinalA]' required>
  </div>
  <div style='position:absolute; left: 6.3cm; top: 3.67cm'>
    <input style='width:14.0cm; text-align:left' size='120' id='descripcion' name='descripcion' maxlength='120' type='text' value='$row[descripcion]'
    pattern='^(?:[a-zA-Z .ÁáÉéÍíÓóÚúÜüÑñ0123456789]+)$' required>
  </div>

<!-- *****************************************       sección B       ***************************************** -->
  <div style='position:absolute; left:12.71cm; top: 4.525cm'>
    <input type='radio' id='cambioA' name='cambio' onclick='gestionarClickRadio(this)' value='CME' "; if ($row[11] == 'CME') {echo 'checked';} echo " required>
  </div>
  <div style='position:absolute; left:12.71cm; top: 4.835cm'>
    <input type='radio' id='cambioB' name='cambio' onclick='gestionarClickRadio(this)' value='CDE' "; if ($row[11] == 'CDE') {echo 'checked';} echo ">
  </div>
  <div style='position:absolute; left:17.3cm; top: 4.925cm'>
    <input style='width:1.0cm; "; if ($row[12] == '') {echo 'display:none';} echo "' size='4' id='pedidocambio' name='pedidocambio' maxlength='4' type='text' pattern='^(?:[0-9]{4})$'
    title='Debe ingresar 4 números.' value='$row[pedidocambio]'>
    <script>
      var pedidocambio = document.getElementById('pedidocambio');
      document.getElementById('cambioA').addEventListener('click', function(e) {pedidocambio.disabled = true; pedidocambio.style.display = 'none';});
      document.getElementById('cambioB').addEventListener('click', function(e) {pedidocambio.disabled = false; pedidocambio.style.display = 'block'; pedidocambio.required = true;});
    </script>
  </div>

<!-- *****************************************       sección C       ***************************************** -->
  <div style='position:absolute; left:10.05cm; top: 6.0cm'><input type='radio' id= 'C1' name= 'C1' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[13] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:10.65cm; top: 6.0cm'><input type='radio' id= 'c1' name= 'C1' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[13] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:10.05cm; top: 6.3cm'><input type='radio' id= 'C2' name= 'C2' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[14] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:10.65cm; top: 6.3cm'><input type='radio' id= 'c2' name= 'C2' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[14] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:10.05cm; top: 6.6cm'><input type='radio' id= 'C3' name= 'C3' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[15] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:10.65cm; top: 6.6cm'><input type='radio' id= 'c3' name= 'C3' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[15] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:10.05cm; top: 6.9cm'><input type='radio' id= 'C4' name= 'C4' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[16] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:10.65cm; top: 6.9cm'><input type='radio' id= 'c4' name= 'C4' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[16] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:10.05cm; top: 7.2cm'><input type='radio' id= 'C5' name= 'C5' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[17] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:10.65cm; top: 7.2cm'><input type='radio' id= 'c5' name= 'C5' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[17] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:10.05cm; top: 7.5cm'><input type='radio' id= 'C6' name= 'C6' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[18] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:10.65cm; top: 7.5cm'><input type='radio' id= 'c6' name= 'C6' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[18] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:10.05cm; top: 7.8cm'><input type='radio' id= 'C7' name= 'C7' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[19] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:10.65cm; top: 7.8cm'><input type='radio' id= 'c7' name= 'C7' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[19] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:10.05cm; top: 8.1cm'><input type='radio' id= 'C8' name= 'C8' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[20] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:10.65cm; top: 8.1cm'><input type='radio' id= 'c8' name= 'C8' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[20] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:10.05cm; top: 8.4cm'><input type='radio' id= 'C9' name= 'C9' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[21] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:10.65cm; top: 8.4cm'><input type='radio' id= 'c9' name= 'C9' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[21] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:10.05cm; top: 8.7cm'><input type='radio' id='C10' name='C10' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[22] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:10.65cm; top: 8.7cm'><input type='radio' id='c10' name='C10' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[22] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:10.05cm; top: 9.0cm'><input type='radio' id='C11' name='C11' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[23] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:10.65cm; top: 9.0cm'><input type='radio' id='c11' name='C11' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[23] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:10.05cm; top: 9.3cm'><input type='radio' id='C12' name='C12' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[24] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:10.65cm; top: 9.3cm'><input type='radio' id='c12' name='C12' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[24] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:10.05cm; top: 9.6cm'><input type='radio' id='C13' name='C13' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[25] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:10.65cm; top: 9.6cm'><input type='radio' id='c13' name='C13' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[25] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:10.05cm; top: 9.9cm'><input type='radio' id='C14' name='C14' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[26] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:10.65cm; top: 9.9cm'><input type='radio' id='c14' name='C14' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[26] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:10.05cm; top:10.2cm'><input type='radio' id='C15' name='C15' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[27] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:10.65cm; top:10.2cm'><input type='radio' id='c15' name='C15' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[27] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:10.05cm; top:10.5cm'><input type='radio' id='C16' name='C16' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[28] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:10.65cm; top:10.5cm'><input type='radio' id='c16' name='C16' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[28] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:10.05cm; top:11.1cm'><input type='radio' id='C17' name='C17' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[29] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:10.65cm; top:11.1cm'><input type='radio' id='c17' name='C17' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[29] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:10.05cm; top:11.4cm'><input type='radio' id='C18' name='C18' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[30] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:10.65cm; top:11.4cm'><input type='radio' id='c18' name='C18' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[30] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:10.05cm; top:11.7cm'><input type='radio' id='C19' name='C19' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[31] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:10.65cm; top:11.7cm'><input type='radio' id='c19' name='C19' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[31] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:10.05cm; top:12.3cm'><input type='radio' id='C20' name='C20' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[32] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:10.65cm; top:12.3cm'><input type='radio' id='c20' name='C20' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[32] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:10.05cm; top:12.6cm'><input type='radio' id='C21' name='C21' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[33] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:10.65cm; top:12.6cm'><input type='radio' id='c21' name='C21' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[33] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:19.35cm; top: 6.0cm'><input type='radio' id='C22' name='C22' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[34] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:19.95cm; top: 6.0cm'><input type='radio' id='c22' name='C22' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[34] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:19.35cm; top: 6.3cm'><input type='radio' id='C23' name='C23' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[35] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:19.95cm; top: 6.3cm'><input type='radio' id='c23' name='C23' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[35] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:19.35cm; top: 6.9cm'><input type='radio' id='C24' name='C24' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[36] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:19.95cm; top: 6.9cm'><input type='radio' id='c24' name='C24' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[36] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:19.35cm; top: 7.2cm'><input type='radio' id='C25' name='C25' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[37] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:19.95cm; top: 7.2cm'><input type='radio' id='c25' name='C25' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[37] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:19.35cm; top: 7.5cm'><input type='radio' id='C26' name='C26' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[38] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:19.95cm; top: 7.5cm'><input type='radio' id='c26' name='C26' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[38] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:19.35cm; top: 7.8cm'><input type='radio' id='C27' name='C27' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[39] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:19.95cm; top: 7.8cm'><input type='radio' id='c27' name='C27' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[39] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:19.35cm; top: 8.1cm'><input type='radio' id='C28' name='C28' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[40] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:19.95cm; top: 8.1cm'><input type='radio' id='c28' name='C28' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[40] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:19.35cm; top: 8.4cm'><input type='radio' id='C29' name='C29' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[41] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:19.95cm; top: 8.4cm'><input type='radio' id='c29' name='C29' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[41] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:19.35cm; top: 9.0cm'><input type='radio' id='C30' name='C30' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[42] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:19.95cm; top: 9.0cm'><input type='radio' id='c30' name='C30' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[42] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:19.35cm; top: 9.3cm'><input type='radio' id='C31' name='C31' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[43] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:19.95cm; top: 9.3cm'><input type='radio' id='c31' name='C31' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[43] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:19.35cm; top: 9.6cm'><input type='radio' id='C32' name='C32' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[44] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:19.95cm; top: 9.6cm'><input type='radio' id='c32' name='C32' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[44] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:19.35cm; top: 9.9cm'><input type='radio' id='C33' name='C33' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[45] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:19.95cm; top: 9.9cm'><input type='radio' id='c33' name='C33' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[45] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:19.35cm; top:10.2cm'><input type='radio' id='C34' name='C34' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[46] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:19.95cm; top:10.2cm'><input type='radio' id='c34' name='C34' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[46] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:19.35cm; top:10.5cm'><input type='radio' id='C35' name='C35' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[47] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:19.95cm; top:10.5cm'><input type='radio' id='c35' name='C35' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[47] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:19.35cm; top:10.8cm'><input type='radio' id='C36' name='C36' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[48] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:19.95cm; top:10.8cm'><input type='radio' id='c36' name='C36' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[48] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:19.35cm; top:11.1cm'><input type='radio' id='C37' name='C37' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[49] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:19.95cm; top:11.1cm'><input type='radio' id='c37' name='C37' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[49] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:19.35cm; top:11.4cm'><input type='radio' id='C38' name='C38' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[50] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:19.95cm; top:11.4cm'><input type='radio' id='c38' name='C38' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[50] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left:19.35cm; top:12.0cm'><input type='radio' id='C39' name='C39' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[51] == 'SI') {echo 'checked';} echo " required></div>
  <div style='position:absolute; left:19.95cm; top:12.0cm'><input type='radio' id='c39' name='C39' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[51] == 'NO') {echo 'checked';} echo "></div>
  <div style='position:absolute; left: 8.6cm; top:13.00cm'>
    <input style='width:11.5cm' size='110' id='otrasactividades' name='otrasactividades' maxlength='50' type='text'
    value='$row[otrasactividades]' pattern='^(?:[a-zA-Z .ÁáÉéÍíÓóÚúÜüÑñ+)$'>
  </div>

<!-- *****************************************       sección D       ***************************************** -->
  <div style='position:absolute; left:9.0cm; top:14.3cm'>
    <input name='D1' type='checkbox' id='D1' onChange='comprobarD1(this)' "; if ($row[53] == 'on') {echo 'checked';} echo ">
    <input style='text-align:center; vertical-align:middle; width:1.0cm; font-size:10px; "; if ($row[53] != 'on') {echo 'display:none';} echo "' size='4' id='numeroD1'
    name='numeroD1' maxlength='4' type='text' pattern='^(?:[0-9]{4})$' title='Debe ingresar 4 números.' value='$row[numeroD1]' "; if ($row[53] != 'on') {echo 'disabled';} echo ">
    <script>
    var numeroD1 = document.getElementById('numeroD1');
    document.getElementById('D1').addEventListener('click', function(e) {numeroD1.disabled = false; numeroD1.style.display = 'block'; numeroD1.value = '';});
    </script>
  </div>
  <div style='position:absolute; left:9.0cm; top:14.6cm'>
    <input name='D2' type='checkbox' id='D2' onChange='comprobarD2(this)' "; if ($row[55] == 'on') {echo 'checked';} echo ">
    <input style='text-align:center; vertical-align:middle; width:1.0cm; font-size:10px; "; if ($row[55] != 'on') {echo 'display:none';} echo "' size='4' id='numeroD2'
    name='numeroD2' maxlength='4' type='text' pattern='^(?:[0-9]{4})$' title='Debe ingresar 4 números.' value='$row[numeroD2]' "; if ($row[55] != 'on') {echo 'disabled';} echo ">
    <script>
    var numeroD2 = document.getElementById('numeroD2');
    document.getElementById('D2').addEventListener('click', function(e) {numeroD2.disabled = false; numeroD2.style.display = 'block'; numeroD2.value = '';});
    </script>
  </div>
  <div style='position:absolute; left:9.0cm; top:14.9cm'>
    <input name='D3' type='checkbox' id='D3' onChange='comprobarD3(this)' "; if ($row[57] == 'on') {echo 'checked';} echo ">
    <input style='text-align:center; vertical-align:middle; width:1.0cm; font-size:10px; "; if ($row[57] != 'on') {echo 'display:none';} echo "' size='4' id='numeroD3'
    name='numeroD3' maxlength='4' type='text' pattern='^(?:[0-9]{4})$' title='Debe ingresar 4 números.' value='$row[numeroD3]' "; if ($row[57] != 'on') {echo 'disabled';} echo ">
    <script>
    var numeroD3 = document.getElementById('numeroD3');
    document.getElementById('D3').addEventListener('click', function(e) {numeroD3.disabled = false; numeroD3.style.display = 'block'; numeroD3.value = '';});
    </script>
  </div>
  <div style='position:absolute; left:9.0cm; top:15.2cm'>
    <input name='D4' type='checkbox' id='D4' onChange='comprobarD4(this)' "; if ($row[59] == 'on') {echo 'checked';} echo ">
    <input style='text-align:center; vertical-align:middle; width:1.0cm; font-size:10px; "; if ($row[59] != 'on') {echo 'display:none';} echo "' size='4' id='numeroD4'
    name='numeroD4' maxlength='4' type='text' pattern='^(?:[0-9]{4})$' title='Debe ingresar 4 números.' value='$row[numeroD4]' "; if ($row[59] != 'on') {echo 'disabled';} echo ">
    <script>
    var numeroD4 = document.getElementById('numeroD4');
    document.getElementById('D4').addEventListener('click', function(e) {numeroD4.disabled = false; numeroD4.style.display = 'block'; numeroD4.value = '';});
    </script>
  </div>
  <div style='position:absolute; left:9.0cm; top:15.5cm'>
    <input name='D5' type='checkbox' id='D5' onChange='comprobarD5(this)' "; if ($row[61] == 'on') {echo 'checked';} echo ">
    <input style='text-align:center; vertical-align:middle; width:1.0cm; font-size:10px; "; if ($row[61] != 'on') {echo 'display:none';} echo "' size='4' id='numeroD5'
    name='numeroD5' maxlength='4' type='text' pattern='^(?:[0-9]{4})$' title='Debe ingresar 4 números.' value='$row[numeroD5]' "; if ($row[61] != 'on') {echo 'disabled';} echo ">
    <script>
    var numeroD5 = document.getElementById('numeroD5');
    document.getElementById('D5').addEventListener('click', function(e) {numeroD5.disabled = false; numeroD5.style.display = 'block'; numeroD5.value = '';});
    </script>
  </div>
  <div style='position:absolute; left:9.0cm; top:15.8cm'>
    <input name='D6' type='checkbox' id='D6' onChange='comprobarD6(this)' "; if ($row[63] == 'on') {echo 'checked';} echo ">
    <input style='text-align:center; vertical-align:middle; width:1.0cm; font-size:10px; "; if ($row[63] != 'on') {echo 'display:none';} echo "' size='4' id='numeroD6'
    name='numeroD6' maxlength='4' type='text' pattern='^(?:[0-9]{4})$' title='Debe ingresar 4 números.' value='$row[numeroD6]' "; if ($row[63] != 'on') {echo 'disabled';} echo ">
    <script>
    var numeroD6 = document.getElementById('numeroD6');
    document.getElementById('D6').addEventListener('click', function(e) {numeroD6.disabled = false; numeroD6.style.display = 'block'; numeroD6.value = '';});
    </script>
  </div>
  <div style='position:absolute; left:9.0cm; top:16.1cm'>
    <input name='D7' type='checkbox' id='D7' onChange='comprobarD7(this)' "; if ($row[65] == 'on') {echo 'checked';} echo ">
    <input style='text-align:center; vertical-align:middle; width:1.0cm; font-size:10px; "; if ($row[65] != 'on') {echo 'display:none';} echo "' size='4' id='numeroD7'
    name='numeroD7' maxlength='4' type='text' pattern='^(?:[0-9]{4})$' title='Debe ingresar 4 números.' value='$row[numeroD7]' "; if ($row[65] != 'on') {echo 'disabled';} echo ">
    <script>
    var numeroD7 = document.getElementById('numeroD7');
    document.getElementById('D7').addEventListener('click', function(e) {numeroD7.disabled = false; numeroD7.style.display = 'block'; numeroD7.value = '';});
    </script>
  </div>
  <div style='position:absolute; left:9.0cm; top:16.4cm'>
    <input name='D8' type='checkbox' id='D8' onChange='comprobarD8(this)' "; if ($row[67] == 'on') {echo 'checked';} echo ">
    <input style='text-align:center; vertical-align:middle; width:1.0cm; font-size:10px; "; if ($row[67] != 'on') {echo 'display:none';} echo "' size='4' id='numeroD8'
    name='numeroD8' maxlength='4' type='text' pattern='^(?:[0-9]{4})$' title='Debe ingresar 4 números.' value='$row[numeroD8]' "; if ($row[67] != 'on') {echo 'disabled';} echo ">
    <script>
    var numeroD8 = document.getElementById('numeroD8');
    document.getElementById('D8').addEventListener('click', function(e) {numeroD8.disabled = false; numeroD8.style.display = 'block'; numeroD8.value = '';});
    </script>
  </div>
  <div style='position:absolute; left:18.00cm; top:14.3cm'>
    <input name='D9' type='checkbox' id='D9' onChange='comprobarD9(this)' "; if ($row[69] == 'on') {echo 'checked';} echo ">
    <input style='text-align:center; vertical-align:middle; width:1.0cm; font-size:10px; "; if ($row[69] != 'on') {echo 'display:none';} echo "' size='4' id='numeroD9'
    name='numeroD9' maxlength='4' type='text' pattern='^(?:[0-9]{4})$' title='Debe ingresar 4 números.' value='$row[numeroD9]' "; if ($row[69] != 'on') {echo 'disabled';} echo ">
    <script>
    var numeroD9 = document.getElementById('numeroD9');
    document.getElementById('D9').addEventListener('click', function(e) {numeroD9.disabled = false; numeroD9.style.display = 'block'; numeroD9.value = '';});
    </script>
  </div>
  <div style='position:absolute; left:18.00cm; top:14.6cm'>
    <input name='D10' type='checkbox' id='D10' onChange='comprobarD10(this)' "; if ($row[71] == 'on') {echo 'checked';} echo ">
    <input style='text-align:center; vertical-align:middle; width:1.0cm; font-size:10px; "; if ($row[71] != 'on') {echo 'display:none';} echo "' size='4' id='numeroD10'
    name='numeroD10' maxlength='4' type='text' pattern='^(?:[0-9]{4})$' title='Debe ingresar 4 números.' value='$row[numeroD10]' "; if ($row[71] != 'on') {echo 'disabled';} echo ">
    <script>
    var numeroD10 = document.getElementById('numeroD10');
    document.getElementById('D10').addEventListener('click', function(e) {numeroD10.disabled = false; numeroD10.style.display = 'block'; numeroD10.value = '';});
    </script>
  </div>
  <div style='position:absolute; left:18.00cm; top:14.9cm'>
    <input name='D11' type='checkbox' id='D11' onChange='comprobarD11(this)' "; if ($row[73] == 'on') {echo 'checked';} echo ">
    <input style='text-align:center; vertical-align:middle; width:1.0cm; font-size:10px; "; if ($row[73] != 'on') {echo 'display:none';} echo "' size='4' id='numeroD11'
    name='numeroD11' maxlength='4' type='text' pattern='^(?:[0-9]{4})$' title='Debe ingresar 4 números.' value='$row[numeroD11]' "; if ($row[73] != 'on') {echo 'disabled';} echo ">
    <script>
    var numeroD11 = document.getElementById('numeroD11');
    document.getElementById('D11').addEventListener('click', function(e) {numeroD11.disabled = false; numeroD11.style.display = 'block'; numeroD11.value = '';});
    </script>
  </div>
  <div style='position:absolute; left:18.00cm; top:15.2cm'>
    <input name='D12' type='checkbox' id='D12' onChange='comprobarD12(this)' "; if ($row[75] == 'on') {echo 'checked';} echo ">
    <input style='text-align:center; vertical-align:middle; width:1.0cm; font-size:10px; "; if ($row[75] != 'on') {echo 'display:none';} echo "' size='4' id='numeroD12'
    name='numeroD12' maxlength='4' type='text' pattern='^(?:[0-9]{4})$' title='Debe ingresar 4 números.' value='$row[numeroD12]' "; if ($row[75] != 'on') {echo 'disabled';} echo ">
    <script>
    var numeroD12 = document.getElementById('numeroD12');
    document.getElementById('D12').addEventListener('click', function(e) {numeroD12.disabled = false; numeroD12.style.display = 'block'; numeroD12.value = '';});
    </script>
  </div>
  <div style='position:absolute; left:18.00cm; top:15.5cm'>
    <input name='D13' type='checkbox' id='D13' onChange='comprobarD13(this)' "; if ($row[77] == 'on') {echo 'checked';} echo ">
    <input style='text-align:center; vertical-align:middle; width:1.0cm; font-size:10px; "; if ($row[77] != 'on') {echo 'display:none';} echo "' size='4' id='numeroD13'
    name='numeroD13' maxlength='4' type='text' pattern='^(?:[0-9]{4})$' title='Debe ingresar 4 números.' value='$row[numeroD13]' "; if ($row[77] != 'on') {echo 'disabled';} echo ">
    <script>
    var numeroD13 = document.getElementById('numeroD13');
    document.getElementById('D13').addEventListener('click', function(e) {numeroD13.disabled = false; numeroD13.style.display = 'block'; numeroD13.value = '';});
    </script>
  </div>
  <div style='position:absolute; left:18.00cm; top:15.8cm'>
    <input name='D14' type='checkbox' id='D14' onChange='comprobarD14(this)' "; if ($row[79] == 'on') {echo 'checked';} echo ">
    <input style='text-align:center; vertical-align:middle; width:1.0cm; font-size:10px; "; if ($row[79] != 'on') {echo 'display:none';} echo "' size='4' id='numeroD14'
    name='numeroD14' maxlength='4' type='text' pattern='^(?:[0-9]{4})$' title='Debe ingresar 4 números.' value='$row[numeroD14]' "; if ($row[79] != 'on') {echo 'disabled';} echo ">
    <script>
    var numeroD14 = document.getElementById('numeroD14');
    document.getElementById('D14').addEventListener('click', function(e) {numeroD14.disabled = false; numeroD14.style.display = 'block'; numeroD14.value = '';});
    </script>
  </div>
  <div style='position:absolute; left:18.00cm; top:16.1cm'>
    <input name='D15' type='checkbox' id='D15' onChange='comprobarD15(this)' "; if ($row[81] == 'on') {echo 'checked';} echo ">
    <input style='text-align:center; vertical-align:middle; width:1.0cm; font-size:10px; "; if ($row[81] != 'on') {echo 'display:none';} echo "' size='4' id='numeroD15'
    name='numeroD15' maxlength='4' type='text' pattern='^(?:[0-9]{4})$' title='Debe ingresar 4 números.' value='$row[numeroD15]' "; if ($row[81] != 'on') {echo 'disabled';} echo ">
    <script>
    var numeroD15 = document.getElementById('numeroD15');
    document.getElementById('D15').addEventListener('click', function(e) {numeroD15.disabled = false; numeroD15.style.display = 'block'; numeroD15.value = '';});
    </script>
  </div>
  <div style='position:absolute; left:18.00cm; top:16.4cm'>
    <input name='D16' type='checkbox' id='D16' onChange='comprobarD16(this)' "; if ($row[83] == 'on') {echo 'checked';} echo ">
    <input style='text-align:center; vertical-align:middle; width:1.0cm; font-size:10px; "; if ($row[83] != 'on') {echo 'display:none';} echo "' size='4' id='numeroD16'
    name='numeroD16' maxlength='4' type='text' pattern='^(?:[0-9]{4})$' title='Debe ingresar 4 números.' value='$row[numeroD16]' "; if ($row[83] != 'on') {echo 'disabled';} echo ">
    <script>
    var numeroD16 = document.getElementById('numeroD16');
    document.getElementById('D16').addEventListener('click', function(e) {numeroD16.disabled = false; numeroD16.style.display = 'block'; numeroD16.value = '';});
    </script>
  </div>

<!-- *****************************************       sección E       ***************************************** -->

<!-- *****************************************       sección F       ***************************************** -->
  <div style='position:absolute; left: 2.4cm; top:18.075cm'>
    <input style='width:18.0cm' size='155' id='precauciones' name='precauciones' maxlength='80' type='text' value='$row[precauciones]'
    pattern='^(?:[a-zA-Z .ÁáÉéÍíÓóÚúÜüÑñ0123456789]+)$' required>
  </div>

<!-- *****************************************       sección G       ***************************************** -->
  <div style='position:absolute; left:3.95cm; top:19.495cm'>
    <input type='radio' id='empleadop' name='empleado' value='E' onclick='gestionarClickRadio(this)' value='E' "; if ($row[86] == 'E') {echo 'checked';} echo " required>
  </div>
  <div style='position:absolute; left:10.25cm; top:19.495cm'>
    <input type='radio' id='empleadocp' name='empleado' value='CP' onclick='gestionarClickRadio(this)' value='CP' "; if ($row[86] == 'CP') {echo 'checked';} echo ">
  </div>
  <div style='position:absolute; left:12.75cm; top:19.495cm'>
    <input style='width:6.2cm; "; if ($row[87] == '') {echo 'display:none';} echo "' size='50' id='companiacp' name='companiacp' maxlength='25' type='text'
    pattern='^(?:[a-zA-Z .ÁáÉéÍíÓóÚúÜüÑñ0123456789]+)$' value='$row[companiacp]'>
  </div>
  <div style='position:absolute; left:10.25cm; top:19.825cm'>
    <input type='radio' id='empleadoct' name='empleado' value='CT' onclick='gestionarClickRadio(this)' value='CT' "; if ($row[86] == 'CT') {echo 'checked';} echo ">
  </div>
  <div style='position:absolute; left:12.75cm; top:19.825cm'>
    <input style='width:6.2cm; "; if ($row[88] == '') {echo 'display:none';} echo "' size='50' id='companiact' name='companiact' maxlength='25' type='text'
    pattern='^(?:[a-zA-Z .ÁáÉéÍíÓóÚúÜüÑñ0123456789]+)$' value='$row[companiact]'>
  </div>
  <script>
    var companiacp = document.getElementById('companiacp'); companiact = document.getElementById('companiact');
    document.getElementById('empleadop').addEventListener('click', function(e) {companiacp.disabled = true ; companiacp.style.display = 'none';});
    document.getElementById('empleadop').addEventListener('click', function(e) {companiact.disabled = true ; companiact.style.display = 'none';});
    document.getElementById('empleadocp').addEventListener('click', function(e) {companiacp.disabled = false; companiacp.style.display = 'block'; companiacp.required = true;});
    document.getElementById('empleadocp').addEventListener('click', function(e) {companiact.disabled = true ; companiact.style.display = 'none';});
    document.getElementById('empleadoct').addEventListener('click', function(e) {companiacp.disabled = true ; companiacp.style.display = 'none';});
    document.getElementById('empleadoct').addEventListener('click', function(e) {companiact.disabled = false; companiact.style.display = 'block'; companiact.required = true;});
  </script>
  <div style='position:absolute; left: 3.85cm; top:20.30cm'>
    <input style='width:5.7cm' size='60' id='ejecutorG' name='ejecutorG' maxlength='25' type='text' value='$row[ejecutorG]' pattern='^(?:[a-zA-Z .ÁáÉéÍíÓóÚúÜüÑñ0123456789]+)$' required>
  </div>
  <div style='position:absolute; left:15.35cm; top:20.30cm'>
    <input style='width:3.2cm' type='date' id='fechaejecG' name='fechaejecG' min='"; echo $fechamin; echo "' max='"; echo $fechamax; echo "' value='$row[fechaejecG]'
    title='Solo se aceptan fechas del año "; echo date('Y'); echo " (dd-mm-aaaa)' required>
  </div>

  <div style='position:absolute; left:19.00cm; top:20.30cm'>
    <input style='width:2.2cm' type='time' id='horaejecG' name='horaejecG' value='$row[horaejecG]' required>
  </div>
  <div style='position:absolute; left: 4.00cm; top:20.70cm'>
    <input style='width:5.7cm' size='60' id='inspectorG' name='inspectorG' maxlength='25' type='text' value='$row[inspectorG]' pattern='^(?:[a-zA-Z .ÁáÉéÍíÓóÚúÜüÑñ0123456789]+)$' required>
  </div>
  <div style='position:absolute; left:15.35cm; top:20.70cm'>
    <input style='width:3.2cm' type='date' id='fechainspG' name='fechainspG' min='"; echo $fechamin; echo "' max='"; echo $fechamax; echo "' value='$row[fechainspG]'
    title='Solo se aceptan fechas del año "; echo date('Y'); echo " (dd-mm-aaaa)' required>
  </div>
  <div style='position:absolute; left:19.00cm; top:20.70cm'>
    <input style='width:2.2cm' type='time' id='horainspG' name='horainspG' value='$row[horainspG]' required>
  </div>

<!-- *****************************************       sección H       ***************************************** -->
  <div style='position:absolute; left:2.60cm; top:21.525cm'>
    <input type='radio' id='docum_adic_SI' name='docum_adic' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[95] == 'SI') {echo 'checked';} echo " required>
  </div>
  <div style='position:absolute; left:2.60cm; top:21.825cm'>
    <input type='radio' id='docum_adic_NO' name='docum_adic' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[95] == 'NO') {echo 'checked';} echo ">
  </div>
  <div style='position:absolute; left:11.0cm; top:22.15cm'>
    <input style='width:0.6cm; text-align:center; "; if ($row[95] != 'NO') {echo 'display:none';} echo "' size='1' id='cantidad' name='cantidad' maxlength='1' type='text' value='$row[cantidad]' pattern='^(?:[0-9]{1})$'>
  </div>
  <div style='position:absolute; left:15.40cm; top:22.15cm'>
    <input style='width:5.8cm; "; if ($row[96] < '1') {echo 'display:none';} echo "' size='60' id='nombre1' name='nombre1' maxlength='25' type='text' value='$row[nombre1]' pattern='^(?:[a-zA-Z .ÁáÉéÍíÓóÚúÜüÑñ0123456789]+)$'>
  </div>
  <div style='position:absolute; left:2.4cm; top:22.6cm'>
    <input style='width:5.8cm; "; if ($row[96] < '2') {echo 'display:none';} echo "' size='60' id='nombre2' name='nombre2' maxlength='25' type='text' value='$row[nombre2]' pattern='^(?:[a-zA-Z .ÁáÉéÍíÓóÚúÜüÑñ0123456789]+)$'>
  </div>
  <div style='position:absolute; left:8.9cm; top:22.6cm'>
    <input style='width:5.8cm; "; if ($row[96] < '3') {echo 'display:none';} echo "' size='60' id='nombre3' name='nombre3' maxlength='25' type='text' value='$row[nombre3]' pattern='^(?:[a-zA-Z .ÁáÉéÍíÓóÚúÜüÑñ0123456789]+)$'>
  </div>
  <div style='position:absolute; left:15.40cm; top:22.6cm'>
    <input style='width:5.8cm; "; if ($row[96] < '4') {echo 'display:none';} echo "' size='60' id='nombre4' name='nombre4' maxlength='25' type='text' value='$row[nombre4]' pattern='^(?:[a-zA-Z .ÁáÉéÍíÓóÚúÜüÑñ0123456789]+)$'>
  </div>
  <div style='position:absolute; left:2.4cm; top:23.05cm'>
    <input style='width:5.8cm; "; if ($row[96] < '5') {echo 'display:none';} echo "' size='60' id='nombre5' name='nombre5' maxlength='25' type='text' value='$row[nombre5]' pattern='^(?:[a-zA-Z .ÁáÉéÍíÓóÚúÜüÑñ0123456789]+)$'>
  </div>
  <div style='position:absolute; left:8.9cm; top:23.05cm'>
    <input style='width:5.8cm; "; if ($row[96] < '6') {echo 'display:none';} echo "' size='60' id='nombre6' name='nombre6' maxlength='25' type='text' value='$row[nombre6]' pattern='^(?:[a-zA-Z .ÁáÉéÍíÓóÚúÜüÑñ0123456789]+)$'>
  </div>
  <div style='position:absolute; left:15.40cm; top:23.05cm'>
    <input style='width:5.8cm; "; if ($row[96] < '7') {echo 'display:none';} echo "' size='60' id='nombre7' name='nombre7' maxlength='25' type='text' value='$row[nombre7]' pattern='^(?:[a-zA-Z .ÁáÉéÍíÓóÚúÜüÑñ0123456789]+)$'>
  </div>
  <script>
    var
      c = document.getElementById('cantidad');
      n1 = document.getElementById('nombre1');
      n2 = document.getElementById('nombre2');
      n3 = document.getElementById('nombre3');
      n4 = document.getElementById('nombre4');
      n5 = document.getElementById('nombre5');
      n6 = document.getElementById('nombre6');
      n7 = document.getElementById('nombre7');
    document.getElementById('docum_adic_SI').addEventListener('click', function(e) {
      c.style.display = 'none'; c.disabled = true;
      n1.style.display = 'none'; n1.disabled = true;
      n2.style.display = 'none'; n2.disabled = true;
      n3.style.display = 'none'; n3.disabled = true;
      n4.style.display = 'none'; n4.disabled = true;
      n5.style.display = 'none'; n5.disabled = true;
      n6.style.display = 'none'; n6.disabled = true;
      n7.style.display = 'none'; n7.disabled = true;});
    document.getElementById('docum_adic_NO').addEventListener('focus', function(e) {c.disabled = false; c.style.display = 'block'; c.required = true;});
    document.getElementById('cantidad').addEventListener('focus', function(e) {
      if (c.value == 0) {c.value = 1;
			 n1.disabled = false; n1.style.display = 'block'; n1.required = true;
			 n2.disabled = true; n2.style.display = 'none';
			 n3.disabled = true; n3.style.display = 'none';
			 n4.disabled = true; n4.style.display = 'none';
			 n5.disabled = true; n5.style.display = 'none';
			 n6.disabled = true; n6.style.display = 'none';
			 n7.disabled = true; n7.style.display = 'none';};
      if (c.value == 1) {n1.disabled = false; n1.style.display = 'block'; n1.required = true;
			 n2.disabled = true; n2.style.display = 'none';
			 n3.disabled = true; n3.style.display = 'none';
			 n4.disabled = true; n4.style.display = 'none';
			 n5.disabled = true; n5.style.display = 'none';
			 n6.disabled = true; n6.style.display = 'none';
			 n7.disabled = true; n7.style.display = 'none';};
      if (c.value == 2) {n1.disabled = false; n1.style.display = 'block'; n1.required = true;
			 n2.disabled = false; n2.style.display = 'block'; n2.required = true;
			 n3.disabled = true; n3.style.display = 'none';
			 n4.disabled = true; n4.style.display = 'none';
			 n5.disabled = true; n5.style.display = 'none';
			 n6.disabled = true; n6.style.display = 'none';
			 n7.disabled = true; n7.style.display = 'none';};
      if (c.value == 3) {n1.disabled = false; n1.style.display = 'block'; n1.required = true;
			 n2.disabled = false; n2.style.display = 'block'; n2.required = true;
			 n3.disabled = false; n3.style.display = 'block'; n3.required = true;
			 n4.disabled = true; n4.style.display = 'none';
			 n5.disabled = true; n5.style.display = 'none';
			 n6.disabled = true; n6.style.display = 'none';
			 n7.disabled = true; n7.style.display = 'none';};
      if (c.value == 4) {n1.disabled = false; n1.style.display = 'block'; n1.required = true;
			 n2.disabled = false; n2.style.display = 'block'; n2.required = true;
			 n3.disabled = false; n3.style.display = 'block'; n3.required = true;
			 n4.disabled = false; n4.style.display = 'block'; n4.required = true;
			 n5.disabled = true; n5.style.display = 'none';
			 n6.disabled = true; n6.style.display = 'none';
			 n7.disabled = true; n7.style.display = 'none';};
      if (c.value == 5) {n1.disabled = false; n1.style.display = 'block'; n1.required = true;
			 n2.disabled = false; n2.style.display = 'block'; n2.required = true;
			 n3.disabled = false; n3.style.display = 'block'; n3.required = true;
			 n4.disabled = false; n4.style.display = 'block'; n4.required = true;
			 n5.disabled = false; n5.style.display = 'block'; n5.required = true;
			 n6.disabled = true; n6.style.display = 'none';
			 n7.disabled = true; n7.style.display = 'none';};
      if (c.value == 6) {n1.disabled = false; n1.style.display = 'block'; n1.required = true;
			 n2.disabled = false; n2.style.display = 'block'; n2.required = true;
			 n3.disabled = false; n3.style.display = 'block'; n3.required = true;
			 n4.disabled = false; n4.style.display = 'block'; n4.required = true;
			 n5.disabled = false; n5.style.display = 'block'; n5.required = true;
			 n6.disabled = false; n6.style.display = 'block'; n6.required = true;
			 n7.disabled = true; n7.style.display = 'none';};
      if (c.value == 7) {n1.disabled = false; n1.style.display = 'block'; n1.required = true;
			 n2.disabled = false; n2.style.display = 'block'; n2.required = true;
			 n3.disabled = false; n3.style.display = 'block'; n3.required = true;
			 n4.disabled = false; n4.style.display = 'block'; n4.required = true;
			 n5.disabled = false; n5.style.display = 'block'; n5.required = true;
			 n6.disabled = false; n6.style.display = 'block'; n6.required = true;
			 n7.disabled = false; n7.style.display = 'block'; n7.required = true;}
      if (c.value == 8) {c.value = 7;
			 n1.disabled = false; n1.style.display = 'block'; n1.required = true;
			 n2.disabled = false; n2.style.display = 'block'; n2.required = true;
			 n3.disabled = false; n3.style.display = 'block'; n3.required = true;
			 n4.disabled = false; n4.style.display = 'block'; n4.required = true;
			 n5.disabled = false; n5.style.display = 'block'; n5.required = true;
			 n6.disabled = false; n6.style.display = 'block'; n6.required = true;
			 n7.disabled = false; n7.style.display = 'block'; n7.required = true;}
      if (c.value == 9) {c.value = 7;
			 n1.disabled = false; n1.style.display = 'block'; n1.required = true;
			 n2.disabled = false; n2.style.display = 'block'; n2.required = true;
			 n3.disabled = false; n3.style.display = 'block'; n3.required = true;
			 n4.disabled = false; n4.style.display = 'block'; n4.required = true;
			 n5.disabled = false; n5.style.display = 'block'; n5.required = true;
			 n6.disabled = false; n6.style.display = 'block'; n6.required = true;
			 n7.disabled = false; n7.style.display = 'block'; n7.required = true;}});
    document.getElementById('cantidad').addEventListener('blur', function(e) {
      if (c.value == 0) {c.value = 1;
			 n1.disabled = false; n1.style.display = 'block'; n1.required = true;
			 n2.disabled = true; n2.style.display = 'none';
			 n3.disabled = true; n3.style.display = 'none';
			 n4.disabled = true; n4.style.display = 'none';
			 n5.disabled = true; n5.style.display = 'none';
			 n6.disabled = true; n6.style.display = 'none';
			 n7.disabled = true; n7.style.display = 'none';};
      if (c.value == 1) {n1.disabled = false; n1.style.display = 'block'; n1.required = true;
			 n2.disabled = true; n2.style.display = 'none';
			 n3.disabled = true; n3.style.display = 'none';
			 n4.disabled = true; n4.style.display = 'none';
			 n5.disabled = true; n5.style.display = 'none';
			 n6.disabled = true; n6.style.display = 'none';
			 n7.disabled = true; n7.style.display = 'none';};
      if (c.value == 2) {n1.disabled = false; n1.style.display = 'block'; n1.required = true;
			 n2.disabled = false; n2.style.display = 'block'; n2.required = true;
			 n3.disabled = true; n3.style.display = 'none';
			 n4.disabled = true; n4.style.display = 'none';
			 n5.disabled = true; n5.style.display = 'none';
			 n6.disabled = true; n6.style.display = 'none';
			 n7.disabled = true; n7.style.display = 'none';};
      if (c.value == 3) {n1.disabled = false; n1.style.display = 'block'; n1.required = true;
			 n2.disabled = false; n2.style.display = 'block'; n2.required = true;
			 n3.disabled = false; n3.style.display = 'block'; n3.required = true;
			 n4.disabled = true; n4.style.display = 'none';
			 n5.disabled = true; n5.style.display = 'none';
			 n6.disabled = true; n6.style.display = 'none';
			 n7.disabled = true; n7.style.display = 'none';};
      if (c.value == 4) {n1.disabled = false; n1.style.display = 'block'; n1.required = true;
			 n2.disabled = false; n2.style.display = 'block'; n2.required = true;
			 n3.disabled = false; n3.style.display = 'block'; n3.required = true;
			 n4.disabled = false; n4.style.display = 'block'; n4.required = true;
			 n5.disabled = true; n5.style.display = 'none';
			 n6.disabled = true; n6.style.display = 'none';
			 n7.disabled = true; n7.style.display = 'none';};
      if (c.value == 5) {n1.disabled = false; n1.style.display = 'block'; n1.required = true;
			 n2.disabled = false; n2.style.display = 'block'; n2.required = true;
			 n3.disabled = false; n3.style.display = 'block'; n3.required = true;
			 n4.disabled = false; n4.style.display = 'block'; n4.required = true;
			 n5.disabled = false; n5.style.display = 'block'; n5.required = true;
			 n6.disabled = true; n6.style.display = 'none';
			 n7.disabled = true; n7.style.display = 'none';};
      if (c.value == 6) {n1.disabled = false; n1.style.display = 'block'; n1.required = true;
			 n2.disabled = false; n2.style.display = 'block'; n2.required = true;
			 n3.disabled = false; n3.style.display = 'block'; n3.required = true;
			 n4.disabled = false; n4.style.display = 'block'; n4.required = true;
			 n5.disabled = false; n5.style.display = 'block'; n5.required = true;
			 n6.disabled = false; n6.style.display = 'block'; n6.required = true;
			 n7.disabled = true; n7.style.display = 'none';};
      if (c.value == 7) {n1.disabled = false; n1.style.display = 'block'; n1.required = true;
			 n2.disabled = false; n2.style.display = 'block'; n2.required = true;
			 n3.disabled = false; n3.style.display = 'block'; n3.required = true;
			 n4.disabled = false; n4.style.display = 'block'; n4.required = true;
			 n5.disabled = false; n5.style.display = 'block'; n5.required = true;
			 n6.disabled = false; n6.style.display = 'block'; n6.required = true;
			 n7.disabled = false; n7.style.display = 'block'; n7.required = true;}
      if (c.value == 8) {c.value = 7;
			 n1.disabled = false; n1.style.display = 'block'; n1.required = true;
			 n2.disabled = false; n2.style.display = 'block'; n2.required = true;
			 n3.disabled = false; n3.style.display = 'block'; n3.required = true;
			 n4.disabled = false; n4.style.display = 'block'; n4.required = true;
			 n5.disabled = false; n5.style.display = 'block'; n5.required = true;
			 n6.disabled = false; n6.style.display = 'block'; n6.required = true;
			 n7.disabled = false; n7.style.display = 'block'; n7.required = true;}
      if (c.value == 9) {c.value = 7;
			 n1.disabled = false; n1.style.display = 'block'; n1.required = true;
			 n2.disabled = false; n2.style.display = 'block'; n2.required = true;
			 n3.disabled = false; n3.style.display = 'block'; n3.required = true;
			 n4.disabled = false; n4.style.display = 'block'; n4.required = true;
			 n5.disabled = false; n5.style.display = 'block'; n5.required = true;
			 n6.disabled = false; n6.style.display = 'block'; n6.required = true;
			 n7.disabled = false; n7.style.display = 'block'; n7.required = true;}});
  </script>
  <div style='position:absolute; left: 4.85cm; top:23.4cm'>
    <input style='width:4.6cm' size='60' id='aprobadorH' name='aprobadorH' maxlength='20' type='text' value='$row[aprobadorH]' pattern='^(?:[a-zA-Z .ÁáÉéÍíÓóÚúÜüÑñ0123456789]+)$' required>
  </div>
  <div style='position:absolute; left:15.35cm; top:23.4cm'>
    <input style='width:3.2cm' type='date' id='fechaaprobH' name='fechaaprobH' min='"; echo $fechamin; echo "' max='"; echo $fechamax; echo "' value='$row[fechaaprobH]'
    title='Solo se aceptan fechas del año "; echo date('Y'); echo " (dd-mm-aaaa)' required>
  </div>
  <div style='position:absolute; left:19.00cm; top:23.4cm'>
    <input style='width:2.2cm' type='time' id='horaaprobH' name='horaaprobH' value='$row[horaaprobH]' required>
  </div>
  <div style='position:absolute; left: 3.5cm; top:23.9cm'>
    <input style='width:5.8cm' size='60' id='emisorH' name='emisorH' maxlength='25' type='text' value='$row[emisorH]'
    pattern='^(?:[a-zA-Z .ÁáÉéÍíÓóÚúÜüÑñ0123456789]+)$' required>
  </div>
  <div style='position:absolute; left:15.35cm; top:23.9cm'>
    <input style='width:3.0cm' type='date' id='fechaemisorH' name='fechaemisorH' min='"; echo $fechamin; echo "' max='"; echo $fechamax; echo "' value='$row[fechaemisorH]'
    title='Solo se aceptan fechas del año "; echo date('Y'); echo " (dd-mm-aaaa)' required>
  </div>
  <div style='position:absolute; left:19.00cm; top:23.9cm'>
    <input style='width:2.2cm' type='time' id='horaemisorH' name='horaemisorH' value='$row[horaemisorH]' required>
  </div>

<!-- *****************************************       sección I       ***************************************** -->
  <div style='position:absolute; left:7.15cm; top:24.7cm'>
    <input type='radio' id='completadoSI' name='completado' onclick='gestionarClickRadio(this)' value='SI' "; if ($row[110] == 'SI') {echo 'checked';} echo " required>
  </div>
  <div style='position:absolute; left:10.55cm; top:24.7cm'>
    <input type='radio' id='completadoNO' name='completado' onclick='gestionarClickRadio(this)' value='NO' "; if ($row[110] == 'NO') {echo 'checked';} echo ">
  </div>
  <div style='position:absolute; left: 4.05cm; top:25.18cm'>
    <input style='width:6.2cm' size='60' id='ejecutorI' name='ejecutorI' maxlength='25' type='text' value='$row[ejecutorI]'
    pattern='^(?:[a-zA-Z .ÁáÉéÍíÓóÚúÜüÑñ0123456789]+)$' required>
  </div>
  <div style='position:absolute; left:19.00cm; top:25.18cm'>
    <input style='width:2.2cm' type='time' id='horaejecI' name='horaejecI' value='$row[horaejecI]' required>
  </div>
  <div style='position:absolute; left: 4.05cm; top:25.63cm'>
    <input style='width:6.2cm' size='60' id='inspectorI' name='inspectorI' maxlength='25' type='text' value='$row[inspectorI]'
    pattern='^(?:[a-zA-Z .ÁáÉéÍíÓóÚúÜüÑñ0123456789]+)$' required>
  </div>
  <div style='position:absolute; left:19.00cm; top:25.63cm'>
    <input style='width:2.2cm' type='time' id='horainspI' name='horainspI' value='$row[horainspI]' required>
  </div>
  <div style='position:absolute; left: 4.05cm; top:26.53cm'>
    <input style='width:6.2cm' size='60' id='emisorI' name='emisorI' maxlength='25' type='text' value='$row[emisorI]'
    pattern='^(?:[a-zA-Z .ÁáÉéÍíÓóÚúÜüÑñ0123456789]+)$' required>
  </div>
  <div style='position:absolute; left:19.00cm; top:26.53cm'>
    <input style='width:2.2cm' type='time' id='horaemisorI' name='horaemisorI' value='$row[horaemisorI]' required>
  </div>
<!-- *****************************************       FIN DEL FORMULARIO       ***************************************** -->

<div style='position:absolute; left:50%; margin-left:-107.5mm; top:270.6mm; width:215mm'>
  <div style='position:absolute; left:20mm'>
    <span style='font-family:Arlrdlt; font-size:8px; color:rgba(0,0,0,1); background-color:rgba(255,0,0,0)'>Fecha diligenciamiento: </span>
    <div style='position:absolute; left:22.5mm; top:-1.0mm'>
      <input style='font-family:Arlrdlt; font-size:8px; text-align:left; vertical-align:bottom; color:rgba(0,0,0,1); background-color:rgba(255,255,255,0)' type='text'
      id='fecha' name='fecha' value='$row[fecha]' readonly>
    </div>
  </div>
</div>

<!-- *****************************************       INICIO DES-SELECCIONAR INPUT radio       ***************************************** -->
<!-- *****************************************            debe ir al final del html           ***************************************** -->

<script type='text/javascript'>
  //Para distinguir la opción actualmente pulsada en cada grupo
  var pref_opcActual = 'opcActual_';
  //Verifica si una variable definida dinámicamente existe o no
  function varExiste(sNombre) {return (eval('typeof(' + sNombre + ');') != 'undefined');}
  //Asigna un valor a una variable creada dinámicamente a partir de su nombre
  function asignaVar(sNombre, valor) {eval(sNombre + ' = ' + valor + ';');}
  //generamos dinámicamente variables globales para contener la opción pulsada en cada uno de los grupos
  for (f= 0; f<document.forms.length; f++) {
    for (i = 0; i< document.forms[f].elements.length; i++) {
      var eltoAct = document.forms[f].elements[i];
      var exprCrearVariable = '';
      if (eltoAct.type == 'radio') {
        //Si la variable no existe la definimos siempre,pero sólo la redefinimos en caso de que el elemento actual del grupo esté asignado
        if (!varExiste(pref_opcActual + eltoAct.name) ) exprCrearVariable = 'var ' + pref_opcActual + eltoAct.name + ' = ';
          else exprCrearVariable = pref_opcActual + eltoAct.name + ' = ';
        //El valor será nulo o una referencia al radio actual en función de su está seleccionado o no
        if(eltoAct.checked) exprCrearVariable += 'document.getElementById('' + eltoAct.id + '')';
          else exprCrearVariable += 'null';
        //Definimos la variable y asignamos el valor sólo si no existe o si el radio actual está marcado 
        if ( !varExiste(pref_opcActual + eltoAct.name) || eltoAct.checked) eval(exprCrearVariable);}}}

  function gestionarClickRadio(opcPulsada) {
    //El nombre de la variable que contiene el nombre del grupo actual
    var svarOpcAct = pref_opcActual + opcPulsada.name;
    var opcActual = null;
    opcActual = eval(svarOpcAct);  //recupero dinámicamente una referencia al último radio pulsado de este grupo
      if (opcActual == opcPulsada) {
  	opcPulsada.checked = false; //deselecciono
  	asignaVar(svarOpcAct, 'null');}  //y quito referencia (es como si nunca se hubiera pulsado)
        else {asignaVar(svarOpcAct, 'document.getElementById('' + opcPulsada.id + '')');}}  //Anoto la última opción pulsada de este grupo
</script>

<!-- script para css select option -->
<script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class 'custom-select':*/
x = document.getElementsByClassName('custom-select');
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName('select')[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement('DIV');
  a.setAttribute('class', 'select-selected');
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement('DIV');
  b.setAttribute('class', 'select-items select-hide');
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement('DIV');
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener('click', function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName('select')[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName('same-as-selected');
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute('class');
            }
            this.setAttribute('class', 'same-as-selected');
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener('click', function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle('select-hide');
      this.classList.toggle('select-arrow-active');
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName('select-items');
  y = document.getElementsByClassName('select-selected');
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove('select-arrow-active');
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add('select-hide');
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener('click', closeAllSelect);
</script>


<!-- *****************************************       FIN DES-SELECCIONAR INPUT radio       ***************************************** -->

";
?>
</div>
<div style="position:absolute; left:50%; margin-left:-107.5mm; top:270.6mm; width:215mm">
  <div style="position:absolute; left:167.5mm; background-color:rgba(0,255,0,0)">
    <span style="font-family:Arlrdlt; font-size:8px; color:rgba(0,0,0,1)">Fecha edición: <?echo $fecha;?></span>
  </div>
</div>
  <div style="position:absolute; right:50%; margin-right:88.5mm; top:150mm; width:5mm; text-align:left; background-color:rgba(255,0,0,0)">
    <a href="mailto:comercial@solucionesgraficas.net?Subject=Solicitud%20pedido%20libretas%20permisos%20de%20trabajo">
    <img src="../../../../imagenes/piedepagina.svg" title="Enviar pedido por correo electrónico a&#x00A;comercial@solucionesgraficas.net"></a>
  </div>
</div> <!-- cierre <div class="noimprimir"> -->
<script type='text/javascript'>
  document.oncontextmenu = function(){return false}
</script>
</html>
