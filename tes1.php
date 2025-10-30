<?php
for($i=0; $i<5; $i++){
     for($j=0; $j<6; $j++){
          if($j==$i || $j==5 - $i){
               echo "x";
          }else{
               echo "o";
          }
     }echo PHP_EOL;
}
?>