<html>
<head>
<title>INGRESAR USUARIO PRIMAX</title>
<link rel="SHORTCUT ICON" href="imagenes/iconoPRIMAX1.ico">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/fuentes.css">
<style>
  body {color:rgba(0,0,0,1); background-color:rgba(255,255,255,1);
		background:url(imagenes/primax.svg) no-repeat center center; background-size:auto 180%; text-align:center}
  button{font-family:Arlrdbd; font-size:50px; color:rgba(0,0,0,1); background-color:rgba(255,0,0,0); border:0px solid rgba(211,95,134,1); text-align:center; vertical-align:middle;
		border-radius:10px; width:45%; height:100px; padding:12px 0px;}
  input{color:rgba(0,0,0,1); background-color:rgba(0,0,0,0.1);
		border:0px solid rgba(0,0,0,0.5); border-radius:10px;
		font-family:Arlrdbd; text-align:center}
  input:focus  {background-color:rgba(255,112,0,0.33); outline:none}
  td   {background-color:rgba(130,130,130,0); color:rgba(40,40,40,1);
		border:0px solid rgba(0,128,0,1); border-radius:30px;
		font-family:Arlrdbd; font-size:30px; text-align:center}
  input[type=text]:hover {overflow:visible; font-size:100%; background-color:rgba(255,112,0,1); color:rgba(0,0,0,1)}
  input[type=password]:hover {overflow:visible; font-size:100%; background-color:rgba(255,112,0,1); color:rgba(0,0,0,1)}
</style>
</head>
<body>
<? $terminal = $_POST["planta"]; ?>
<script type="text/javascript">document.write('<table height="' + window.innerHeight*0.975 + '" style="width:100%; background-color:rgba(255,255,255,0); margin-left:auto; margin-right:auto" border="0" cellpadding="0" cellspacing="0">')</script>
  <tr style="background-color:rgba(240,0,0,0.0); height:12.5%"><td></td></tr>
  <tr style="background-color:rgba(0,240,0,0.0); height:75.0%">	
	<td>
	  <div style="position:absolute; width:100%; left:0%; top:11.5%; background-color:rgba(255,0,0,0.0)">
		<button style="width:100%; height:60px">INGRESAR USUARIO</button>
		<button style="width:100%; height:20px; font-family:Arlrdlt; font-size:18px">TERMINAL <? echo strtoupper($terminal); ?></button>
	  </div>
	  <form action="verificar_usuario.php" method="post">
		<div style="position:absolute; width:40%; left:30%; top:24.5%; text-align:left; background-color:rgba(255,0,0,0)">
		  <input style="width:85mm; height:50px; font-size:28px; text-align:right" name="usuario" id="usuario" maxlength="16" value="usuario" type="text"
		  pattern="[a-zA-Z0-9._-]{1,16}" title="Ingrese el correo electrónico de la empresa" autocomplete="off" required>@primax.com.co
		</div>
		<div style="position:absolute; width:40%; left:30%; top:30.0%; text-align:left; background-color:rgba(0,255,0,0)">
		  <input style="width:85mm; height:50px; font-size:28px; text-align:right" name="clave" id="clave" maxlength="16" value="clave" type="password"
		  pattern="[a-zA-Z0-9.ÁáÉéÍíÓóÚúÜüÑñ|_\/-]{5,11}" title="Ingrese el password asignado a su usuario,&#x00A;mínimo 5 y máximo 11 caracteres" autocomplete="off" required>
		</div>
		<div style="position:absolute; width:40%; left:30%; top:35.5%; text-align:left; background-color:rgba(0,0,255,0)">
		  <input style="width:85mm; height:50px; font-size:28px; text-align:right; display:none" name="terminal" id="terminal"
		  value="<? echo $terminal; ?>" type="text">
		</div>
		<div style="position:absolute; width:100%; left:0%; top:44.5%">
		  <input style="width:30%; height:70px; font-size:32px; color:rgba(255,112,0,1); background-color:rgba(0,0,0,1); border:0px"
		  type="submit" value="VERIFICAR ACCESO" autofocus>
		</div>
	  </form>
	</td>
  </tr>
  <tr style="background-color:rgba(0,0,240,0.0); height:12.5%"><td></td></tr>
</table>
<div style="position:absolute; left:3%; top:25%; background-color:rgba(255,0,0,0.0)">
  <a href="mailto:comercial@solucionesgraficas.net?Subject=Solicitud%20pedido%20libretas%20permisos%20de%20trabajo">
	<img style="width:200%; height:auto" src="imagenes/pedidos.svg" title="Enviar pedido por correo electrónico a&#x00A;comercial@solucionesgraficas.net">
  </a>
</div>
</body>
</html>