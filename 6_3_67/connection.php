<?php
    $host='sql300.infinityfree.com'; //mysql host name
    $user='if0_35760019'; //mysql username 
    $pass='SharpeNer2546'; //mysql password
    $db='if0_35760019_MyFirstDB'; //mysql database
    $con=mysqli_connect($host,$user,$pass,$db);
    if($con) { echo "Connection successful";}
    else { echo "Connection error";}
?>