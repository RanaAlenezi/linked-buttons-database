<?php
$host='localhost' ; 
$user='root' ; 
$pass='' ; 
$db='task4'; 
$conn=mysqli_connect($host, $user, $pass,'$db'); 
if(!$conn){
die('Could not connect: '.mysqli_connect_error());
}
else{
echo("Excellent");}
$f = $_POST['f'];
$r = $_POST['r'];
$l = $_POST['l'];
$b = $_POST['b'];



if($_POST['f']){
    $sql = "INSERT INTO test (Direction)
VALUES ('$f')";
}
if($_POST['r']){
    $sql.= "INSERT INTO test (Direction)
VALUES ('$r')";
}
if($_POST['l']){
    $sql.= "INSERT INTO test (Direction)
VALUES ('$l')";
}
if($_POST['b']){
    $sql.= "INSERT INTO test (Direction)
VALUES ('$b')";
}
mysqli_close($conn);?>