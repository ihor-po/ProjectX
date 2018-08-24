<?php

$i = 0;

rec($i);


function rec($i)
{
	$i++;
	if ($i == 10)
	{
		return;
	}
	rec($i);
	echo "$i\r\n";	
}
