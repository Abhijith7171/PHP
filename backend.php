<?php

$server="localhost";
$username="root";
$password="";


$con = mysqli_connect($server,$username,$password);

if($con){
    echo "Coneected Successfully";
}
else{
    echo "Not Connected";
}



?>