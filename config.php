<?php 
$link = mysqli_connect('localhost','faf_user','foo','faf_tournaments');

if($link === false){
    die("connection Failded: " . mysqli_connect_error());
}
?>