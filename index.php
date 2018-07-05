<?php
echo '¡Mi nombre de usuario es ' . $_ENV["NOMBRE_USUARIO"] . '! Mi estado de animo: ' . $_ENV["ESTADO_ANIMO"];


$salida = shell_exec('uptime');
echo "<P>$salida</P>";

$salida = shell_exec('uname -a');
echo "<P>$salida</P>";

?>
