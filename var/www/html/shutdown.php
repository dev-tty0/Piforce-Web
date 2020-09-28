<?php

echo '<html><body><p align="center"><font face="verdana" color="grey">';
echo '</br>';

echo 'shutting down..  ';

//need to delete log file first..
//shell_exec('rm logs/log.txt');

$command = escapeshellcmd('sudo python /sbin/piforce/shutdown.py');
shell_exec($command);

?>
