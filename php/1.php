<?php
    for($i = 1;$i <85;$i++){
        if(168 % $i == 0){
            $j = 168 / $i;
            if($i>$j and ($i + $j)%2 == 0){
                $n= ($i+$j)/2;
                $m=($i-$j)/2;
                $x=$m*$m-100;
                echo $x."+100=".$m*$m."\n";
                echo $x."+268=".$n*$n."\n";
            }
        }
    }

?>