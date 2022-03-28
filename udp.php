<?php

$conn=new mysqli("localhost:3304","root","","dinesh");
if(!$conn)
{
    echo "connect failed";
}
 $name=$_POST['dname'];
 $age=$_POST['dage'];
 $bgroup=$_POST['dbgroup'];
 $location=$_POST['dlocation'];
 $no=$_POST['dno'];
 $sql="update ddetails set dname='$name',dage='$age',dbgroup='$bgroup',dlocation='$location' where dno='$no' ";
 $result=$conn->query($sql);
 if(!$result)
 {
    echo "error";
 }
   
else{
        echo"updated";
    }
?>