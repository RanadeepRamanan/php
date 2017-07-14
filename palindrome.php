<?php
	
	$num=121;
	$temp=$num;
	$rev=0;

	while($num!=0){
		$rev=$rev*10+$num%10;
		$num=(int)($num/10);
	}
if($rev==$temp){
	echo "palindrome";
  }
  else{
  	echo "Not palindrome";
  }
  

  ?>

