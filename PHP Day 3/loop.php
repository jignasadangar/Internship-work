<?php
	echo" <table border='1'>";
	for($a = 1; $a<=10; $a++){
		echo"<tr>";
		if($a%2==0){
			echo"<td bgcolor='blue'>$a</td>";
		}
		else{
			echo"<td bgcolor='yellow'>$a</td>";
		}

		
		echo"</tr>";
		
	}
	echo" </table>";
?>
