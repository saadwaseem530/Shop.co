<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "SAAD-SHOP";
$conn = "";
    $conn = mysqli_connect($db_server,$db_user,$db_password,$db_name); 
if(!$conn){
    echo "YOU ARE NOT CONNECTED";
};
?>
