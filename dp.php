<?php

$conn=new mysqli("localhost:3304","root","","dinesh");
if(!$conn)
{
    echo "connect failed";
}

 $no=$_POST['dno'];
 $sql="delete from ddetails where dno='$no' ";
 $result=$conn->query($sql);
 if(!$result)
 {
    echo "error";
 }
   
else{
        echo"deleted";
    }
?>