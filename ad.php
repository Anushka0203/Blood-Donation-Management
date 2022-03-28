<?php

$conn=new mysqli("localhost:3304","root","","dinesh");
if(!$conn)
   {
       echo "connect failed";
   }
 if($_POST)
 {
     $username=$_POST['uname'];
     $password=$_POST['password'];
     
    $sql="select password from admin where username='$username'";
    $result=$conn->query($sql);
    if(!$result)
    {
        echo "error";
    }
    $storedpassword=$result->fetch_assoc()['password'];
    if($storedpassword==$password)
    {
        header('location:addetails.php');
    }
    else{
        echo "incorrect password";
    }
    
 }
 ?>