<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php 
    	echo "Project-X";
    ?>
	</title>
	<style type="text/css">
		body{
			width: 100%;
			height: 100vh;
			margin: 0;
			padding: 0;
		}
		.main {
			display: flex;
			flex-flow: column; 
			justify-content: center; 
			align-items: center; 
			width: 100%; 
			height: 100%;
			background-color: #c2c2c2;
		}
		.main h1 {
			text-transform: uppercase;
			color: #a2a2a2;
		}
		.h1--modified {
			line-height: 5rem;
			font-size: 12rem;
			font-weight: 100 ;
			color: #838383;
			text-shadow: 0px 0px 16px rgba(224,224,224,1);
		}
		.main h3 {
			text-transform: uppercase;
			color: #929292;
		}
	</style>
</head>
<body>
<div class="main">
<h1>
	<?php
		//First text
		echo "The trust is out there";
	?>
</h1>
<h1 class="h1--modified">X</h1>
<p>
	<?php
		$a = 100;
		$b = 1;

		//$a += +$b -$b = $a;

		$a = $a + $b - $b = $a;

		echo "$a, $b"; 
	?>
</p>
<h3>
	<?php
	/*
		Second text
	*/ 
		echo "files"; 
	?>
		
</h3>
</div>
</body>
</html>
