<?php

echo `clear`;

$x = 2;
$y = 10;
$z = true;
$smallArray = array(2,3.1,false,'hello world');
$arr = array(1, 2, 3, $smallArray, 5, $z, 7.8, '8',999999999); 

$res = Exponention($x, $y);
echo "\r\n$x ^ $y = $res\r\n\r\n";

var_info($x);
var_info($arr, $x, $y, $z);

Fibonachchi(100);

/* ======================== Exponention ========================= */
function Exponention(int $n, int $expo) :int
{
	$res = 1;
	for($i = 0; $i < $expo; $i++)
	{
		$res *= $n; 
	}

	return $res;
}

/*  =============================================================  */

/*  ========================= var_info ==========================  */
function var_info(...$var)
{
	$args = func_get_args();

	$argsCount = count($args);

	if ($argsCount > 1)
	{
		foreach ($args as $value) 
		{	
			$res = GetVarInfo($value);
		}
	}
	else
	{
		GetVarInfo($args[0]);
	}
}

function GetVarInfo($_val)
{
	$_type = gettype($_val);

	echo CreateVarInfoString($_type, $_val);
}

function CreateVarInfoString(string $_type, $_var) :string
{
	$res = '';
	switch($_type)
	{
		case 'integer':
			$res = 'int' . "($_var)\r\n";
			break;
		case 'double':
		case 'float':
			$res = $_type . "($_var)\r\n";
			break;
		case 'string':
			$length = strlen($_var);
			$res .= $_type . "($length) \"" . $_var . "\"\r\n";
			break;
		case 'array':
				$count = count($_var);
				$res = $_type . "($count): {\r\n";
				foreach ($_var as $item) 
				{
					$itemType = gettype($item);
					$res .= "\t" . CreateVarInfoString($itemType, $item);
				}
				$res .= "\t}\r\n";
			break;
		case 'boolean':
			($var == true) ? $var = 'true' : $var = 'false';
			$res = "bool" . "($var)\r\n";
			break;
		default:
			$res = $_type . "($_var)\r\n";
			break;					
	}

	return $res;
}
/*  =============================================================  */

/*  ======================== Fibonachchi =========================  */
function Fibonachchi(int $count)
{
	if ($count <= 0)
	{
		echo "Нельзя вывести Числа Фибонначи! Введено неверное количество!\r\n";
	}
	elseif ($count <= 2 )
	{
		echo "\r\nЧисла Фибонначи\r\n0\r\n1\r\n";
	}
	else
	{
		$numbers = array(0, 1);

		echo "\r\nЧисла Фибонначи\r\n0\r\n1\r\n";

		for($i = 2; $i <= $count; $i++)
		{
			$newNumber = $numbers[$i - 2] + $numbers[$i - 1];
			echo "$newNumber\r\n";
			array_push($numbers, (int)$newNumber);
		}
	}
	
}
/*  ==============================================================  */
