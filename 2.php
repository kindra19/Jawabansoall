<?php

$username="HUJIKNM";
$pass="111*aaa";

if(!preg_match("/^[A-Z]*$/",$username))
{ echo"username salah harus huruf besar";
}else if(strlen($username)==7){
    echo " username benar";
}else{
    echo" harus 7 karakter";
}

if(!preg_match("/^[0-9]{3}\*[a-z]{3}$/",$pass))
{
 echo"pasword salah";
}
else{
    echo " password benar";
}


?>