<!DOCTYPE html>
<html>
<head>
	<title>
		Sudoku
	</title>
	<style type="text/css">
		input {
			width: 2em;

		}
	</style>
</head>
<body>
<table cellpadding="0" cellspacing="0">

<?php

$nums = array();

$fila=rand(0,8);
$col=rand(0,8);
$val=rand(1,9);
$num=array("fila"=>$fila , "col"=>$col , "val"=>$val );
$c=0;

$nums = $num;
//itera files
for ($i=0;$i<=8;$i++){
	echo "<tr>\n";
	//itera columnes

	for ($j=0;$j<=8;$j++){
		echo "\t<td style='border: 1 px solid black'>";

		if ($i==$num["fila"] && $j==$num["col"]){
			echo $num["val"];
		}

		else {
			echo "<input type='number' name='$c'/>";
		}
		

		echo "</td>\n";
		$c++;
	}

	echo "</tr>\n";
}



?>

</table>

<input type="submit"/>