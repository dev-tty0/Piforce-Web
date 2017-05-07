<?php

$csvfile = '/var/www/html/csv/romsinfo.csv';
$tempfile = tempnam(".", "tmp"); // produce a temporary file name, in the current directory

if(!$input = fopen($csvfile,'r')){
    die('could not open existing csv file');
}
if(!$output = fopen($tempfile,'w')){
    die('could not open temporary output file');
}

while(($data = fgetcsv($input)) !== FALSE){
    if($data[1] == $_GET['rom']){
        $data[11] = $_GET['display'];
    }
    fputcsv($output,$data);
}

fflush($input);
fflush($output);
fclose($input);
fclose($output);

$command = escapeshellcmd("sudo python /sbin/piforce/renamecsv.py $tempfile $csvfile");
shell_exec($command);
header ("Location: editgamelist.php");
?>

