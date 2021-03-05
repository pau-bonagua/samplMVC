<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
		<?php
		echo '1 <br>';
		$x=1;
		while ($x<=10) {
			if(is_float($x/2)){
				echo $x . " ";
			}
			$x++;
		}
		
		
		echo '<br><br>';
		echo '2 <br>';
		$x=1;
		while ($x<=10) {
			if(is_float($x/2) ==false){
				echo $x . " ";
			}
			$x++;
		}
		
		
		echo '<br><br>';
		echo '3 <br>';
		$x=10;
		while ($x>=1) {
			if(is_float($x/2)){
				echo $x . " ";
			}
			$x--;
		}
		
		
		
		echo '<br><br>';
		$x = 1;
		while ($x<=10) {
			echo $x . " ";
			$x = $x+2;
		}
		
		
		?>
    </body>
</html>
