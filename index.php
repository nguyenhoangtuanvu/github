<?php 
$dirCurrentFile = $_SERVER['PHP_SELF'];
$dirCurrentFile = ltrim($dirCurrentFile, '/');
echo $dirCurrentFile . "\br";

$arr = explode('/', $dirCurrentFile);
$fileName = $arr[count($arr) -1];
echo $fileName;