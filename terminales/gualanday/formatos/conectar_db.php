<style>
  body {color:rgba(255,128,0,1); font-family:Arlrdbd; font-size:20px; text-align:center}
</style>

<?php
$terminal = 'gualanday';
$dbhost = 'localhost';
$dbname = 'soluci15_primax_' . $terminal;
$dbuser = 'soluci15_luiscgraciap';
$dbpass = 'aFFe.,0698';

$conexion = new mysqli ($dbhost,$dbuser,$dbpass,$dbname);		// El @ que se ponde delante de la funcion 'mysqli_connect' es para que no muestre el error al momento de ejecutarse.
if (!$conexion) {die('<strong>No se pudo conectar a la base de datos en XAMPP por: </strong>' . mysqli_error());}
//  else {echo 'Se conectó a la base de datos en XAMPP.';} 		// esta línea no es necesaria, se pone solo por información y control.

?>
