#!/usr/bin/php
<?php

$input = "";

$fp = fopen("php://stdin", "r");
while($line = fgets($fp, 1024))
{
	$input .= $line;
}

eval('$result = '.$input.';');

echo $result;

?>