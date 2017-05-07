<?php

$mode = $_GET['mode'];
include 'header.php';
echo '<section><center><p>';
echo '<h1>Card Emulator</h1>';

if ($mode == 'main'){
   echo 'Please select the card emulator mode from the list below</br></br>';
   echo '<a href="cardemulator.php?mode=id2">Initial D2</a></br>';
   echo '<a href="cardemulator.php?mode=id3">Initial D3</a></br>';
   echo '<a href="cardemulator.php?mode=wmmt">Wangan Midnight</a></br>';
   echo '<a href="cardemulator.php?mode=mkgp">Mario Kart GP/2</a></br>';
   echo '<a href="cardemulator.php?mode=fzero">F-Zero AX</a></br>';
}

if ($mode == 'id2'){
   echo '<b>Emulator Mode: Initial D2</b></br></br>';
   echo 'Please choose a card from the list or use the form to create a new card</br>';
   echo 'Once the card emulator has been launched it will stay running until the pi powers off</br></br>';
   $path = '/boot/config/cards/id2/';
   $files = array_values(array_diff(scandir($path), array('.', '..')));
   foreach ($files as $file) {
   echo '<b><a href="launchcard.php?card='.$file.'&mode=id2">'.$file.'</a></b></br></br>';
         }
   echo '<form action="launchcard.php" method="get">Create New Card:<br><br><input type="text" name="card" value="Enter Card Name"><input type="hidden" name="mode" value="id2"><br><br><input type="submit" value="Submit"></form><br><br>';
}

if ($mode == 'id3'){
   echo '<b>Emulator Mode: Initial D3</b></br></br>';
   echo 'Please choose a card from the list or you can use the form to create a new card</br></br>';
   echo 'Once the card emulator has been launched it will stay running until the pi powers off</br></br>';
   $path = '/boot/config/cards/id3/';
   $files = array_values(array_diff(scandir($path), array('.', '..')));
   foreach ($files as $file) {
   echo '<b><a href="launchcard.php?card='.$file.'&mode=id3">'.$file.'</a></b></br></br>';
         }
   echo '<form action="launchcard.php" method="get">Create New Card:<br><br><input type="text" name="card" value="Enter Card Name"><input type="hidden" name="mode" value="id3"><br><br><input type="submit" value="Submit"></form><br><br>';

}

if ($mode == 'wmmt'){
   echo '<b>Emulator Mode: Wangan Midnight</b></br></br>';
   echo 'Please choose a card from the list or you can use the form to create a new card</br></br>';
   echo 'Once the card emulator has been launched it will stay running until the pi powers off</br></br>';
   $path = '/boot/config/cards/wmmt/';
   $files = array_values(array_diff(scandir($path), array('.', '..')));
   foreach ($files as $file) {
   echo '<b><a href="launchcard.php?card='.$file.'&mode=wmmt">'.$file.'</a></b></br></br>';
         }
   echo '<form action="launchcard.php" method="get">Create New Card:<br><br><input type="text" name="card" value="Enter Card Name"><input type="hidden" name="mode" value="wmmt"><br><br><input type="submit" value="Submit"></form><br><br>';

}

if ($mode == 'mkgp'){
   echo '<b>Emulator Mode: Mario Kart GP/GP2</b></br></br>';
   echo 'Please choose a card from the list or you can use the form to create a new card</br></br>';
   echo 'Once the card emulator has been launched it will stay running until the pi powers off</br></br>';
   $path = '/boot/config/cards/mkgp/';
   $files = array_values(array_diff(scandir($path), array('.', '..')));
   foreach ($files as $file) {
   echo '<b><a href="launchcard.php?card='.$file.'&mode=mkgp">'.$file.'</a></b></br></br>';
         }
   echo '<form action="launchcard.php" method="get">Create New Card:<br><br><input type="text" name="card" value="Enter Card Name"><input type="hidden" name="mode" value="mkgp"><br><br><input type="submit" value="Submit"></form><br><br>';

}

if ($mode == 'fzax'){
   echo '<b>Emulator Mode: F-Zero AX</b></br></br>';
   echo 'Please choose a card from the list or you can use the form to create a new card</br></br>';
   echo 'Once the card emulator has been launched it will stay running until the powers off</br></br>';
   $path = '/boot/config/cards/fzero/';
   $files = array_values(array_diff(scandir($path), array('.', '..')));
   foreach ($files as $file) {
   echo '<b><a href="launchcard.php?card='.$file.'&mode=fzero">'.$file.'</a></b></br></br>';
         }
   echo '<form action="launchcard.php" method="get">Create New Card:<br><br><input type="text" name="card" value="Enter Card Name"><input type="hidden" name="mode" value="fzero"><br><br><input type="submit" value="Submit"></form><br><br>';

}
echo '</p><center></body></html>';
?>