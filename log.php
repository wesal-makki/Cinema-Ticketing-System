<?php
$conn=mysqli_connect("localhost","root","","cimema");
if($conn){
    echo "coonected",
}
else{
    echo "falied";
}
$username=$_POST['username'];
$password_$_POST['password']
$data = "INSERT INTO LOGIN VALUES('','$username','$password')";
$check = mysqli_query($conn,$data);
if($check){
    echo "data sended";
}
else{
    echo "data not send";
}
?>