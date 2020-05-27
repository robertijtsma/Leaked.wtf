<?php 
$data = PHP_EOL . 'Test';
$fp = fopen('pageNames.ini', 'a');
fwrite($fp, $data);
fclose($fp);
?>