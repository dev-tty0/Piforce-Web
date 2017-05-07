<?php

$display = $_GET['display'];
$csvfile = 'csv/romsinfo.csv';
$path = '/boot/roms';
$menumode = file_get_contents('/sbin/piforce/menumode.txt');
include 'header.php';
echo '<section><center><p>';

if ($display == 'all'){
   $files = array_values(array_diff(scandir($path), array('.', '..')));
   $f = fopen($csvfile, "r");
   while (($row = fgetcsv($f)) !== false) {
        foreach ($row as $cell) {
              if ((in_array($row[1], $files)) and ($row[11] == "Yes")){
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

else {
    $f = fopen($csvfile, "r");
    while ($row = fgetcsv($f)) {
        if ($row[1] == $display) {
            $system = $row[0];
            $image = $row[2];
            $video = $row[3];
            $gamename = $row[4];
            $manufacturer = $row[5];
            $year = $row[6];
            $genre = $row[7];
            $rating = $row[8];
            $orientation = $row[9];
            $controls = $row[10];
            $enabled = $row[11];
            if ($video !== ''){echo '<video width="320" height="240" controls><source src="videos/'.$video.'" type="video/mp4"></video></br></br>';}
            else {echo '<img src="images/'.$image.'"></br></br>';}
            echo '<font size=5><b>'.$gamename.'</b></font></br></br>';
            echo 'System: '.$system.'</br>';
            echo 'Manufacturer: '.$manufacturer.'</br>';
            echo 'Year: '.$year.'</br>';
            echo 'Genre: '.$genre.'</br>';
            echo 'Rating: '.$rating.'</br>';
            echo 'Orientation: '.$orientation.'</br>';
            echo 'Controls: '.$controls.'</br>';
            echo '<h1><a href="load.php?rom='.$display.'">Launch Game</a></h1></br></br>';
            break;
        }
    }
   fclose($f);
}

echo '</p><center></body></html>';
?>