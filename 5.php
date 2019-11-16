<?php
    $n=5;
    for($i=1;$i<=$n;$i++){
        for($j=$i;$j<$n;$j++){
            echo " &nbsp";
        }
        for ($j=1;$j<=$i;$j++){
            echo "*";
        }
        echo "<br/>";
    }

   
?>