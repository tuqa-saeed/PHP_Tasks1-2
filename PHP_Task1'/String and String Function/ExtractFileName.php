<?php
echo "<div style='background-color:lightblue; color: white; font-size: 20px; font-weight: bold; padding: 10px; text-align: center; border-radius: 5px;  margin: 10px auto;'>
============ Extract FileName ================</div>";

$url = 'www.orange.com/index.php';
$_SERVER['SCRIPT_FILENAME'] = $url;
$filename = basename($url);
echo $filename;
?>
