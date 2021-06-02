<?php 

$data = json_decode(file_get_contents($argv[1]),true);

print_r($data).PHP_EOL;

?>