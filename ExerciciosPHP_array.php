<?php
$a = 1;
$b = 2;
$c = 3;

for($i = 0; $i <10; $i++){
    $a = $a +1;
    if ($i%2==0){
        $b = $b + 1;
    } else{
        $b = $b + $a;
    }
}
$c = $a + $b + $c;
echo $c;

echo "#############<br>";

$i = 0;
 while(1) {
  if($i == 10)
    break;
  echo ++$i;
 }

 ?>