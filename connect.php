<?php
$conn = mysqli_connect("localhost", "root", "", "project_db");
if(!$conn){
    echo "Connection failed";
} else {
    echo "Connected ";
}
?>