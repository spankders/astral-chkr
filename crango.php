<?php require_once 'config.php';?>
<?php

$totaluser = mysqli_query("SELECT * FROM user");
$totaluser = mysqli_num_rows($totaluser);
$paiduser = mysqli_query("SELECT * FROM user WHERE admin=2");
$paiduser = mysqli_num_rows($paiduser);
$freeuser = mysqli_query("SELECT * FROM user WHERE admin=0");
$freeuser = mysqli_num_rows($freeuser);
$vendedor = mysqli_query("SELECT * FROM user WHERE admin=3");
$banned = mysqli_num_rows($banned);
if($admin==0){
$type='Free User';
}
if($admin==1){
$type='Admin';
}
if($admin==2){
$type='Usuario VIP';
}
?>