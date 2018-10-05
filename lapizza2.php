 
<?php

	$keys=array_keys($_POST);
	$num_ingredientes=0;
	$ingredientes = array("Masa", "Oregano", "Queso", "Carne", "Bacon", "Pepperoni", "BBQ", "Nata");
	echo "<p font size='30'>";
	//var_dump($_POST); PER VEURE LES DADES QUE REP
	if (!empty($_POST['nombre']) && !empty($_POST['direccion']))
	{
		if (isset($_POST["Masa"]) && isset($_POST["Oregano"])) {
		
			echo "<pre>";
			print_r("Hola ".$_POST['nombre']."! Gracias por su pedido.<br>");
			print_r("En 30 minutos llevaremos la pizza a ".$_POST['direccion'].".");
			echo "<br><br>Su pizza lleva los siguientes ingredientes:<br> ";
			for ($i=0; $i<sizeof($ingredientes); $i++) {
				for ($j=0; $j<sizeof($keys);$j++) {
					if ($ingredientes[$i] == $keys[$j]) {
						echo "$ingredientes[$i]";
						echo "<br>";
						$num_ingredientes+=1;
					}
				}			
			}
			echo "\t\tEl precio de la pizza es: ".($num_ingredientes*0.5+5);
			echo "</pre>";
		}
		else {
			echo "<pre>";
			print_r("Una pizza sin masa y oregano, no es una pizza.");
			echo "</pre>";
		}
		echo "</p>";
	}
	else 
		echo "Necesitamos nombre y direccion para poder hacer un envio a domicilio.";



	/*

	foreach ($_post as $key=>$val)
		blablab...*/
