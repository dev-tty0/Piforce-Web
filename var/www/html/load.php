<?php

include 'header.php';
echo '<section><center><p>';

echo 'Finished loading ' . htmlspecialchars($_GET["rom"]) . ' ...';

$command = escapeshellcmd('sudo python /sbin/piforce/webforce.py '.$_GET["rom"]);
$output = shell_exec($command);

echo '</p><center></body></html>';

?>

