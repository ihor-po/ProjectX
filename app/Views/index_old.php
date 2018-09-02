<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
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
		label, input, select, button {
			line-height: 1.5rem;
			font-size: 1.5rem;
		}
		button {
			width: 9rem;
			height: 3rem;
			margin-top: 0.735rem;
		}
		select {
			width: 15rem;
			margin-left:6.8rem;
		}
	</style>
</head>
<body>
<div class="main">
<h1>Project - X</h1>
</div>
</body>
</html>
