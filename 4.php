<?php

$kaos = "1,2,3,2,1,4,6,4";
if(preg_match("/[0-9]/",$kaos))
{
echo "Bilangan Array";
}else{
    echo "Bilangan Bukan Array ";
}


?>