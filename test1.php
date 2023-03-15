<?php

for($i=2;$i<=20;$i++){
    $count = 0;
    for($j =2;$j<=$i/2;$j++){
        if($i%$j==0){
            $count++;
        }
       
   
}
if($count==0){
    echo "số nguyên tố là: $i <br>" ;
}
   
}
