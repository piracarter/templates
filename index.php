<?php
echo '¡Mi nombre de usuario es ' . $_ENV["NOMBRE_USUARIO"] . '! Mi estado de animo: ' . $_ENV["ESTADO_ANIMO"];

$flag_uptime = $_ENV["FLAG_UPTIME"];
$flag_uname = $_ENV["FLAG_UNAME"];

if ( strcmp($flag_uptime,"yes") == 0 ) {
  $salida = shell_exec('uptime');
  echo "<P>$salida</P>";
}

if ( strcmp($flag_uname,"yes") == 0 ) {
  $salida = shell_exec('uname -a');
  echo "<P>$salida</P>";
}
?>
