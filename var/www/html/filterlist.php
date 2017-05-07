<?php

$path = "/boot/roms/";
$filtertype = $_GET['filter'];
$value = $_GET['value'];
$csvfile = 'csv/romsinfo.csv';
$menumode = file_get_contents('/sbin/piforce/menumode.txt');
include 'header.php';
echo '<section><center><p>';

if ($filtertype == "genre") {
   $files = array_values(array_diff(scandir($path), array('.', '..')));
   $f = fopen($csvfile, "r");
   while (($row = fgetcsv($f)) !== false) {
        foreach ($row as $cell) {
              if ((in_array($row[1], $files)) and ($row[11] == "Yes") and ($row[7] == $value)){
                  $image = $row[2];
                  $gamename = $row[4];
                  if ($menumode == 'advanced'){
                  echo '<a href="gamelist.php?display='.$row[1].'"><img src="images/'.$image.'"></a></br></br>';
                  echo '<b><a href="gamelist.php?display='.$row[1].'">'.$gamename.'</a></b></br></br>';}
                  else {
                  echo '<a href="load.php?rom='.$row[1].'"><img src="images/'.$image.'"></a></br></br>';
                  echo '<b><a href="load.php?rom='.$row[1].'">'.$gamename.'</a></b></br></br>';}
                  break;
              }
         }
     }
   fclose($f);
}

if ($filtertype == "system") {
   $files = array_values(array_diff(scandir($path), array('.', '..')));
   $f = fopen($csvfile, "r");
   while (($row = fgetcsv($f)) !== false) {
        foreach ($row as $cell) {
              if ((in_array($row[1], $files)) and ($row[11] == "Yes") and ($row[0] == $value)){
                  $image = $row[2];
                  $gamename = $row[4];
                  if ($menumode == 'advanced'){
                  echo '<a href="gamelist.php?display='.$row[1].'"><img src="images/'.$image.'"></a></br></br>';
                  echo '<b><a href="gamelist.php?display='.$row[1].'">'.$gamename.'</a></b></br></br>';}
                  else {
                  echo '<a href="load.php?rom='.$row[1].'"><img src="images/'.$image.'"></a></br></br>';
                  echo '<b><a href="load.php?rom='.$row[1].'">'.$gamename.'</a></b></br></br>';}
                  break;
              }
         }
     }
   fclose($f);
}

if ($filtertype == "orientation") {
   $files = array_values(array_diff(scandir($path), array('.', '..')));
   $f = fopen($csvfile, "r");
   while (($row = fgetcsv($f)) !== false) {
        foreach ($row as $cell) {
              if ((in_array($row[1], $files)) and ($row[11] == "Yes") and ($row[9] == $value)){
                  $image = $row[2];
                  $gamename = $row[4];
                  if ($menumode == 'advanced'){
                  echo '<a href="gamelist.php?display='.$row[1].'"><img src="images/'.$image.'"></a></br></br>';
                  echo '<b><a href="gamelist.php?display='.$row[1].'">'.$gamename.'</a></b></br></br>';}
                  else {
                  echo '<a href="load.php?rom='.$row[1].'"><img src="images/'.$image.'"></a></br></br>';
                  echo '<b><a href="load.php?rom='.$row[1].'">'.$gamename.'</a></b></br></br>';}
                  break;
              }
         }
     }
   fclose($f);
}

if ($filtertype == "controls") {
   $files = array_values(array_diff(scandir($path), array('.', '..')));
   $f = fopen($csvfile, "r");
   while (($row = fgetcsv($f)) !== false) {
        foreach ($row as $cell) {
              if ((in_array($row[1], $files)) and ($row[11] == "Yes") and ($row[10] == $value)){
                  $image = $row[2];
                  $gamename = $row[4];
                  if ($menumode == 'advanced'){
                  echo '<a href="gamelist.php?display='.$row[1].'"><img src="images/'.$image.'"></a></br></br>';
                  echo '<b><a href="gamelist.php?display='.$row[1].'">'.$gamename.'</a></b></br></br>';}
                  else {
                  echo '<a href="load.php?rom='.$row[1].'"><img src="images/'.$image.'"></a></br></br>';
                  echo '<b><a href="load.php?rom='.$row[1].'">'.$gamename.'</a></b></br></br>';}
                  break;
              }
         }
     }
   fclose($f);
}

?>