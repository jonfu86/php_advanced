<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Advanced 1</title>
	<style type="text/css">
	*{
		font-family:arial;
		font-size:18px;
		border:1px black solid;
		padding:10px;
	}
	body{
		border:none;
	}
	.table{
		border-collapse:collapse;
	}
	.title{
		font-weight:bolder;
		font-size:20px;
	}
	table tr:nth-of-type(5n+1){
		background:black;
		color:white;

	}


	</style>
	
</head>
<body>
	<table class="table">
	<?php

	echo '<tr class="title">
		<td>User #</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Full Name</td>
		<td>Full Name in upper case</td>
		<td>Length of name</td>
	</tr>';

	$users_dojo = array(
		array('first_name'=>'Michael', 'last_name'=>'Choi'),
		array('first_name'=>'John', 'last_name'=>'Supsupin'),
		array('first_name'=>'Mark', 'last_name'=>'Guillen'),
		array('first_name'=>'KB', 'last_name'=>'Tonel')
	);

	// array_push($users_dojo, array('first_name'=>'Stephen', 'last_name'=>'Smith'));


	function table_maker($users){
		for ($i = 0; $i < count($users); $i++){ 
			
		$trimmed = trim($users[$i]['first_name']).' '.trim($users[$i]['last_name']);
		$user_num = $i + 1;


			echo '<tr>
					<td>'.$user_num.'</td>
					<td>'.$users[$i]['first_name'].'</td>
					<td>'.$users[$i]['last_name'].'</td>
					<td>'.$trimmed.'</td>
					<td>'.strtoupper($trimmed).'</td>
					<td>'.strlen($trimmed).'</td>
				</tr>';
		}
	}
	array_push($users_dojo, 
		array('first_name'=>'Stephen', 'last_name'=>'Smith'),
		array('first_name'=>'Jack', 'last_name'=>'Crow'),
		array('first_name'=>'Russel', 'last_name'=>'Peters'),
		array('first_name'=>'Bat', 'last_name'=>'Man'),
		array('first_name'=>'Power', 'last_name'=>'Rangers'),
		array('first_name'=>'Star', 'last_name'=>'Bucks'),
		array('first_name'=>'Kobe', 'last_name'=>'Bryant'),
		array('first_name'=>'Lebron', 'last_name'=>'James'),
		array('first_name'=>'Peter', 'last_name'=>'Pan'),
		array('first_name'=>'Bruno', 'last_name'=>'Mars')

		);

	table_maker($users_dojo)

	

	?>
	</table>
</body>
</html>