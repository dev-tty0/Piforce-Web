<?php

$powermode = file_get_contents('/sbin/piforce/powerfile.txt');
$bootmode = file_get_contents('/sbin/piforce/bootfile.txt');
$bootrom = file_get_contents('/var/www/logs/log.txt');
$menumode = file_get_contents('/sbin/piforce/menumode.txt');

include 'header.php';
echo '<section><center><p>';
echo '<h1>Current Settings</h1>';
echo 'Menu mode: '.$menumode.'<br>';
echo 'Power mode: '.$powermode.'<br>';
echo 'Boot mode: '.$bootmode.'<br>';
echo 'Last game loaded: '.$bootrom.'<br><br>';
echo '<h1>Configuration Options</h1>';
if ($menumode == 'simple'){echo '<a href="switchmode.php?mode=advanced">Switch to Advanced Game Menu</a><br>';}
if ($menumode == 'advanced'){echo '<a href="switchmode.php?mode=simple">Switch to Simple Game Menu</a><br>';}
if ($powermode == 'always-on'){echo '<a href="switchmode.php?mode=auto-off">Switch to 10 mins Auto Power Off</a><br>';}
if ($powermode == 'auto-off'){echo '<a href="switchmode.php?mode=always-on">Switch to Always On Power</a><br>';}
if ($bootmode == 'multi'){echo '<a href="switchmode.php?mode=single">Switch to Single Boot Mode</a><br>';}
if ($bootmode == 'single'){echo '<a href="switchmode.php?mode=multi">Switch to Multi Boot Mode</a><br>';}
echo '<a href="editgamelist.php">Edit Game List</a></br>';
echo '<a href="cardemulator.php?mode=main">Launch Card Emulator</a><br>';
echo '<a href="importcsv.php">Import CSV from Boot Drive</a><br>';
echo '<a href="dumpcsv.php">View CSV Raw Data</a>';
echo '<br><a href="reboot.php">Reboot Raspberry Pi</a><br>';
echo '</p><center></body></html>';

?>