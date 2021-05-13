<?php
    function read(&$s, &$buf)
    {
	$i=0;
	$file = fopen('/Users/dmytroaleksandrov/Documents/prog/dz9/2/text.txt', 'r');
	while (! feof($file))
 	{
		$s["string"][$i] = fgets($file);
		$i++;
	}
	$buf=$i;
	fclose($file);
	}
	function cunt(&$s, $buf, &$average)
	{
    for($i=0; $i<$buf; $i++)
        {
			$s["length"][$i]=strlen($s["string"][$i]);
			$average+=$s["length"][$i];
		}
    return true;
	}
	function write($s, $buf, $average)
	{
	$file2 = fopen('/Users/dmytroaleksandrov/Documents/prog/dz9/2/text2.txt', 'w');
	$file2 = fopen('text2.txt', 'r+');
	for($i=0;$i<$buf; $i++)
    { 
		if ($s["length"][$i]>$average)
        fwrite($file2, $s["string"][$i]);
    }
	fclose($file2);
	} 
read($s, $buf);
$average=0;
cunt($s, $buf, $average);
$average/=$buf;
write($s, $buf,$average);
