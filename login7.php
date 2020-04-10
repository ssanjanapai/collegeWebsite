<?php
$host="localhost";
$user="root";
$password="";
$db="college";
$conn=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from t_log where username='".$uname."'AND password='".$password."' limit 1;";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
        echo"<script> window.location.assign('files7.php');</script>";
        exit();
    }else
    {
     echo"incorrect credentials";
        exit();
    }
}
    ?>
