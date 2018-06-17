<?php 

function greeting($name, $time){
	if($time > 0 && $time <= 5){
		echo "Привет, $name ! Удачного рабочего дня!";
	}else if($time > 5 && $time <= 7) { 
		echo "Привет, $name ! Хороших выходных!";
	}else{
		echo "Такого дня недели не существует !";
	}
	
}
 echo "<h2>";

greeting("ребята", 5);

echo "</h2>";

?>

