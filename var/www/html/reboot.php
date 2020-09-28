<?php

echo '<html><body><p align="center"><font face="verdana" color="grey">';
echo '</br>';

echo 'rebooting...  ';

//need to delete log file first..
//shell_exec('rm logs/log.txt');

$command = escapeshellcmd('sudo /sbin/reboot now');

shell_exec($command);

?>
