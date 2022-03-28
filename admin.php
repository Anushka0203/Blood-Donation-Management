<?php
 $conn=new mysqli("localhost:3304","root","","dinesh");
 if(!$conn)
 {
     echo "connect failed";
 }
 else{
     echo "success";
 }
 $sql="create database dinesh";
 if($conn->query($sql)==TRUE)
 {
     echo"created";
 }
 else{
     echo"not created";
 }
 
 ?>