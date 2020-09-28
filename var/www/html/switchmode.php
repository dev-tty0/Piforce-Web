<?php

header("Refresh: 1; url=options.php");
include 'header.php';
echo '<section><center><p>';
echo 'Updating mode to '.$_GET["mode"].' ...';
echo '</p><center></body></html>';

$command = escapeshellcmd('sudo python /sbin/piforce/switchmode.py '.$_GET["mode"]);

shell_exec($command);

?>