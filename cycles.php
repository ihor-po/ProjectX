<?php

echo `clear`;

$employees = [
    'Beth' => 1030,
    'Tamekia' => 1800,
    'Nicolle' => 1200,
    'Rex' => 1950,
    'Kecia' => 1750,
    'Estela' => 2000,
    'Karly' => 1050,
    'Ciara' => 1500,
    'Christopher' => 1200,
];

$maxSalary = GetMaxSalary($employees);
$minSalary = GetMinSalary($employees);
$sumSalary = GetSumSalary($employees);

echo "\r\nMax salary: $maxSalary\r\n";
GetEmployees($employees, $maxSalary);

echo "\r\nMin salary: $minSalary\r\n";
GetEmployees($employees, $minSalary);

echo "\r\nSum salary: $sumSalary\r\n";

natsort($employees);
$employees = array_reverse($employees);

echo "\r\nSorted array\r\n";
ShowArray($employees);

function GetMaxSalary($arr)
{
	$max = 0;

	foreach ($arr as $item)
	{
		($item > $max) ? $max = $item : $max; 
	}

	return $max;
}

function GetMinSalary($arr)
{
	$first = true;
	$min = null;
	foreach($arr as $item)
	{
		if ($first == true)
		{
			$first = false;
			$min = $item;
		}
		else
		{
			if ($min > $item)
			{
				$min = $item;
			}
		}
	}
	return $min;
}

function GetSumSalary($arr)
{
	$sum = 0;
	foreach ($arr as $item)
	{
		$sum +=$item;
	}	
	return $sum;
}

function GetEmployees($arr, $salary)
{
	echo "|\tNAME\t|\tSALARY\t|\r\n";

	foreach($arr as $name => $item)
	{
		if ($item == $salary)
		{
			echo "|\t$name\t|\t$item\t|\r\n";
		}
	}
}

function ShowArray($arr)
{	
	foreach($arr as $name => $salary)
	{
		echo "$name:\t $salary\r\n";
	}
}

echo "\r\n";
?>
