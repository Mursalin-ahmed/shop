<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "connection successfull";
}else{
    echo "NO connection";
}
mysqli_select_db($con,'signup');
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$query = " insert into signup (name, username, email, phone, password)
values('$name' ,'$username', '$email', '$phone', '$password')";
mysqli_query($con, $query);
header('location:signup.html');
?>
