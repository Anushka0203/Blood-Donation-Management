<?php
 $conn=new mysqli("localhost:3304","root","","dinesh");
 if(!$conn)
 {
     echo "connect failed";
 }
 else{
     echo "success";
 }
 
 ?>