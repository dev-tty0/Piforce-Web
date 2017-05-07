<?php

header("Refresh: 5; url=index.html");
echo '<html><body><p align="center"><font face="verdana" color="grey">';
echo '</br>';
$card = $_GET["card"];
$mode = $_GET["mode"];

echo 'Starting card emulator with card '.$card.'';

$command1 = escapeshellcmd('sudo python /sbin/piforce/card_emulator/cardlog.py /boot/config/cards/'.$mode.'/'.$card);
shell_exec($command1);
$command2 = escapeshellcmd('sudo python /sbin/piforce/card_emulator/'.$mode.'cardemu.py -cp /dev/ttyUSB0 -f /boot/config/cards/'.$mode.'/'.$card);
shell_exec($command2);

?>