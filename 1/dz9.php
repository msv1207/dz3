<?php
function read(&$s, &$buf)
{
	$i=0;
	$file = fopen('/Users/dmytroaleksandrov/Documents/prog/dz9/1/file.txt', 'r');
	while (! feof($file))
 	{
		$s[$i] = fgets($file);
		$i++;
	}
	$buf=$i;
	fclose($file);
}
function write($s, $buf)
{
	$file2 = fopen('file2.txt', 'w');
	$file2 = fopen('file2.txt', 'r+');
	for($i=0;$i<$buf; $i+=2)
		fwrite($file2, $s[$i]);
	fclose($file2);
	return true;
} 
read($s, $buf);
write($s, $buf);
