<?php

for($i = 800; $i < 2200; $i++) 
    if   ( $i % 4 ==0  &&  $i % 100!==0 && $i % 400 ==0 )
    {
echo $i ;

}
?>