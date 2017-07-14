<?php 
	$num=100;
	for($i=2;$i<$num;$i++){
		for($j=2;$j<$i;$j++){
			if($i%$j==0){
				break;
			}
		}
	if($j==$i)
	echo "prime no is : $j";
	echo "";
	}

 ?>

