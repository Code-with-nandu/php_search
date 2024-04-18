<?php
$con = mysqli_connect('localhost','root','','laundry');
if(!$con){
    echo "Connection faileld".mysqli_connect_error();
}

?>