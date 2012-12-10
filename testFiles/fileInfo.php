<?php

$fileInfo = $_SERVER['PHP_SELF'];
echo $fileInfo . "\n\n";
$parts = Explode('/', $fileInfo);
echo $parts[count($parts) - 1];

?>