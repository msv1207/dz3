<?php
function fizzbuzz()
{
    $file=fopen('/Users/dmytroaleksandrov/Documents/prog/dz9/3/somefile.txt', 'r');
    //$l = fgets($file);
    $s=explode (" ", fgets($file));
    $input = $s[0];
    $bazz = $s[1];
    $number = intval($s[2]);
    $file2 = fopen('/Users/dmytroaleksandrov/Documents/prog/dz9/3/text2.txt', 'w');
	$file2 = fopen('text2.txt', 'r+');
    for($i=1; $i<$number; $i++)
    {
    	 if($i % $input==0 || $i % $bazz==0)
    	{
    	    if($i % $input==0)
            fwrite($file2, 'f');
    		if($i % $bazz==0)
            fwrite($file2, 'b');
    	 fwrite($file2, ' ');
        }
        else
         {
           fwrite($file2, $i);
           fwrite($file2, ' ');
         }
        	//echo $i, ' ';
    }
    return;
}
fizzbuzz();