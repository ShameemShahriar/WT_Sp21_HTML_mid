<?php
    $a = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
    $b = sizeof($a);
    $sum=0;
    for($i =0; $i <$b; $i++){
        $sum= $sum + $a[$i];
    }
    $avg = $sum/ $b;
    echo "Average temaprature is : ".$avg;
?>