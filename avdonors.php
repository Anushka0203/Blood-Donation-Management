
<html>
<head>
<style>
   body {
  background-image: url('https://anokahalloween.com/wp-content/uploads/2019/06/istockphoto-1033906526-612x612-1.jpg');
  background-repeat: no-repeat;
  background-size: 100% 100%;
}
table, th, td {
  border: 1.5px solid black;
  border-collapse: collapse;
  font-size:20px;
}
</style>    

</head>
<body class="bg">
<?php
$conn=new mysqli("localhost:3304","root","","dinesh");
if(!$conn)
{
    echo "connect failed";
}
$sql="select * from ddetails";
$result=$conn->query($sql);
if($result->num_rows>0)
   {
    echo"<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Details Of The Donors</h1>"; 
    echo "<br><br><table border='1'  align='center' style='width:800px;height=400px;'><tr><th>dname</th><th>dage</th><th>dgroup</th><th>dlocation</th><th>dno</th></tr>";
       while($row=$result->fetch_assoc())
       {
           echo "<tr><td>".$row['dname']."</td><td>".$row['dage']."</td><td>".$row['dbgroup']."</td><td>".$row['dlocation']."</td><td>".$row['dno']."</td></tr>";
       }
       echo "</table>";
   
   }
   else{
       echo "no donors";
   }
?>
</body>
</html>