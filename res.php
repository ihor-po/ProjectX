<?php

if (!isset($_POST))
{
	echo "<h1 style=\"color:red;\">Нет данных для обработки!</h1>";
}
else
{
	if (!isset($_POST['action']))
	{
		echo "<h1 style=\"color:red;\">Вы невыбрали действие</h1>";
	}
	else
	{
		if (!isset($_POST['a']) || !isset($_POST['b']))
		{
			echo "<h1 style=\"color:red;\">Вы не ввели данные для проcчета</h1>";
		}
		else
		{
			$action = $_POST['action'];
			
			$a = (int)$_POST['a'];
			$b = (int)$_POST['b'];

			$res = null;
			$text_action = '';

			switch ($action) 
			{
				case '+':
					$res = $a + $b;
					$text_action = 'сложения';
					break;
				
				case '-':
					$res = $a - $b;
					$text_action = 'вычитания';
					break;
				
				case 'x':
					$res = $a * $b;
					$text_action = 'умножения';
					break;

				case '/':	
					if ($b == 0)
					{
						echo "<h1 style=\"color:red;\">Ошибка! Деление на ноль</h1>";
					}
					else
					{
						(float)$res = (float)$a / (float)$b;
						$text_action = 'деления';
					}
					break;
			}
			if (isset($res) && !empty($res))
			{
				echo "<h1 style=\"color:green;\">Результат $text_action: $res</h1>";
				echo "<a href=\"http://project-x.loc:8888/\">Вернуться</a>";
			}
		}
	}
}