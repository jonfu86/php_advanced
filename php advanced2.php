<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Advanced 2</title>
	<style type="text/css">
	
	table{
		border-collapse: collapse;
		display:inline-block;
		margin: 40px;
	}
	table td{
		border:1px black solid;
		width:70px;
		height:70px;
	}
	.red{
		background:red;
	}
	.black{
		background:black;
	}
	.white{
		background:white;
	}
	.green{
		background:green;
	}
	</style>

</head>
<body>
	<?php

	function checkers($grid, $color_1, $color_2){
		echo '<table>';
		for ($y=0; $y < $grid; $y++) 
		{ 
			echo '<tr>';
			for($x=0; $x<$grid; $x++)
			{
				if($x % 2 == 0 && $y % 2 == 0 || $x % 2 != 0 && $y % 2 != 0)
				{
				echo '<td class="'.$color_1.'"></td>';
				}
				else
				{
				echo '<td class="'.$color_2.'"></td>';
				}
			}
			echo '</tr>';
		}
			echo '</table>';
	}
	checkers(8, 'red', 'black');

	checkers(8, 'white', 'green')

	?>
</body>
</html>