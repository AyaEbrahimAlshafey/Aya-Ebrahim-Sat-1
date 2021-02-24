<?php

//Start  5 

$values=[5,5,2,1,7,7,4];

$dups=[];
foreach($values as $value){
    foreach($dups as $dup)
    {
        if($value==$dup){
            $dups[]=$value;
        }
        else{

            $dups[]=$value;
        }
    }
}

//End 5

?>

