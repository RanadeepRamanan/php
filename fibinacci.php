<?php
	$a=0;
	$b=1;
	$n=5;
		echo "the fibinacci number is \n $a \n $b";
		
	for($i=2;$i<$n;$i++){
		$c=$a+$b;
		
		echo "\n$c";
	
		$a=$b;
		$b=$c;
	}

  ?>