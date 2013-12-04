<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Advanced 2</title>
	<style type="text/css">
	
	table{
		border:1px black solid;
		border-collapse: collapse;
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
		background-color:black;
	}
	

	</style>

</head>
<body>
	<?php

	function checkers($grid){
		echo '<table>';
		for ($y=0; $y < $grid; $y++) 
		{ 
			echo '<tr>';
			for($x=0; $x<$grid; $x++)
			{
				if($x % 2 == 0 && $y % 2 == 0 || $x % 2 != 0 && $y % 2 != 0)
				{
				echo '<td class="red"></td>';
				}
				else
				{
				echo '<td class="black"></td>';
				}
			}
			echo '</tr>';
		}
			echo '</table>';
	}
	checkers(8);


	?>
</body>
</html>