<?php 

// start 1 

$values=[10,5,2,12,8,9];

$mini=$values[0];
$max=$values[0];

foreach($values as $value)   // بتلف على كل قيمه لوحدها علشان اقدر اقارن بيها
{
    if($mini>$value){
        $mini=$value;
    }elseif($max<$value){
        $max=$value;
    }
}
echo "Minimum Num Is $mini <br>";
echo "Maximum Num Is $max <br> <hr>";

// End 1

?>