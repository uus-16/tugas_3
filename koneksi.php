<?php
$server="localhost";
$user="root";
$password="";
$database="semester3";

$rumah=mysqli_connect($server,$user,$password);
if($rumah){
	echo 'Connection';
}else{
	echo 'cek lagi !!';
}
$db=mysqli_select_db($rumah,$database);
if($db){
	echo ' , DB Connection';
}else{
	echo 'cek lagi !!';
}
?>