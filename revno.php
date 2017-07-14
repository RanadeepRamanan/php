<?php 
$n=1369;
$r=0;
while($n!=0){
	$r=$r*10+$n%10;
	$n=(int)($n/10);
}
echo $r ,"\n";
?>