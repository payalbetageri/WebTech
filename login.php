<?php
session_start();
$con=mysqli_connect('localhost','root','shwedb');
if($con){
    echo "connection successful";
}
else{
    echo "no connection";
}
mysqli_select_db($con, 'id11648592_webtechpro');
$name=$_POST['fname'];
$pass=$_POST['passwd'];

$q="select * from register where name='$name' && password ='$pass' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
    $_SESSION['username']=$name;
    header('location:home_page2.html');
}
else{
   header('location:login.php');
}

?>