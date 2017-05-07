<?php

include 'header.php';
echo '<section><center><p>';
echo '<h1>Game List Filters</h1>';

?>

<form action="/filterlist.php">
<select name="value">
<option value="" selected>Select System</option>

<?php
$unique_ids = array();
$f = fopen('csv/romsinfo.csv', 'r');
$headers = ($row = fgetcsv($f));
while ($row = fgetcsv($f)) {
    $unique_ids[$row[0]] = true;
}
$categories = array_keys($unique_ids);
 foreach($categories as $category => $value) 
  { 
    echo '<option value="'.$value.'">'.$value.'</option>';
  }
fclose($f);
?>

</select>
<input type="submit" name="filter" value="system">
</form>
</br>

<form action="/filterlist.php">
<select name="value">
<option value="" selected>Select Genre</option>
<?php

$unique_ids = array();
$f = fopen('csv/romsinfo.csv', 'r');
$headers = ($row = fgetcsv($f));
while ($row = fgetcsv($f)) {
    $unique_ids[$row[7]] = true;
}
$categories = array_keys($unique_ids);
 foreach($categories as $category => $value) 
  { 
    echo '<option value="'.$value.'">'.$value.'</option>';
  }
fclose($f);
?>
</select>
<input type="submit" name="filter" value="genre">
</form>
</br>

<form action="/filterlist.php">
<select name="value">
<option value="" selected>Select Orientation</option>
<?php

$unique_ids = array();
$f = fopen('csv/romsinfo.csv', 'r');
$headers = ($row = fgetcsv($f));
while ($row = fgetcsv($f)) {
    $unique_ids[$row[9]] = true;
}
$categories = array_keys($unique_ids);
 foreach($categories as $category => $value) 
  { 
    echo '<option value="'.$value.'">'.$value.'</option>';
  }
fclose($f);
?>
</select>
<input type="submit" name="filter" value="orientation">
</form>
</br>

<form action="/filterlist.php">
<select name="value">
<option value="" selected>Select Control Type</option>
<?php

$unique_ids = array();
$f = fopen('csv/romsinfo.csv', 'r');
$headers = ($row = fgetcsv($f));
while ($row = fgetcsv($f)) {
    $unique_ids[$row[10]] = true;
}
$categories = array_keys($unique_ids);
 foreach($categories as $category => $value) 
  { 
    echo '<option value="'.$value.'">'.$value.'</option>';
  }
fclose($f);
?>
</select>
<input type="submit" name="filter" value="controls">
</form>