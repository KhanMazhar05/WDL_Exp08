<?php 

$servername ="sql202.epizy.com";
$username = "epiz_27192045";
$password = "DrGIbb9d7NtybBA";
$database = "epiz_27192045_chachastore";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn){
    //COnnection is sucess..
}
else{
    echo "Connection is not established!";
}

?>