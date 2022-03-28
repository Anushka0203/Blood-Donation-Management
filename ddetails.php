<?php

$conn=new mysqli("localhost:3304","root","","dinesh");
if(!$conn)
{
    echo "connect failed";
}
 $dname=$_POST['dname'];
 $dage=$_POST['dage'];
 $dbgroup=$_POST['dbgroup'];
 $dlocation=$_POST['dlocation'];
 $dno=$_POST['dno'];
 $sql="insert into ddetails values('$dname',' $dage','$dbgroup',' $dlocation',' $dno')";
 $result=$conn->query($sql);
 if(!$result)
 {
    echo "error";
 }
   
    else{
        echo"inserted";
    }
?>