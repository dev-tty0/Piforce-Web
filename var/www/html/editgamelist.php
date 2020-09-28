<?php
include 'header.php';
echo '<section><center><p>';
echo "<html><body><table>";
echo "<tr><td><b>Game Name</b></td><td><b>Orientation</b></td><td><b>Controls</b></td><td><b>Enabled</b></td></tr>";
$path = '/boot/roms/';
$files = array_values(array_diff(scandir($path), array('.', '..')));
$f = fopen("csv/romsinfo.csv", "r");
while (($row = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($row as $cell) {
             if (in_array($row[1], $files)){
                if ($row[11] == 'Yes') {$toggle = 'No';} else {$toggle = 'Yes';}
                echo '<td>'.$row[4].'</td>';
                echo '<td>'.$row[9].'</td>';
                echo '<td>'.$row[10].'</td>';
                echo '<td><a href="updatecsv.php?rom='.$row[1].'&display='.$toggle.'">'.$row[11].'</a></td>';
                break;
             }
        }
        echo "</tr>";
}
fclose($f);
echo "</table></center></body></html>";
?>