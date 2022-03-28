<html>
<head>
    <style>
        .ti{
          padding:-6px;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(216, 216, 221, 0.815);
          position: fixed;
          width: 1520px;
          height: 120px;
        }
        p{
            margin-left: 110px;
            font-size: 50px;
            margin-top: -70px;
          font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
       
        }
        .img{
            margin-left: 5px;
          height:100px;
          width:130px;
        }
        .nav{
            margin-top: -30px;
            border-radius: 0%;
            background-color: rgb(221, 36, 36);
            padding:10px;
        }
        .nav2{
            border-color: black;
        }
       .sp{
        
           margin-left:1000px ;
           margin-top: 55;
       }
       
       
    </style>
 </head>
 <body >
   <div class="ti">
    <div class="sp">
        <span  id= 'nav2'><a href="home.php" style="text-decoration:none;color: black; font-weight: bold;font-size:20px;" onmouseover="home()" onmouseout="home1()">Home</a></span>&nbsp;&nbsp;&nbsp;
        <span id = 'nav3'><a href="available.php" style="text-decoration:none;color: black; font-weight: bold;font-size:20px;"onmouseover="avai()" onmouseout="avai1()">Admin</a></span>&nbsp;&nbsp;&nbsp;
        <span id = 'nav4'><a href="patient.php" style="text-decoration:none;color: black; font-weight: bold;font-size:20px;"onmouseover="pat()" onmouseout="pat1()">Patient</a></span>&nbsp;&nbsp;&nbsp;
        <span id = 'nav5'><a href="bn.php" style="text-decoration:none;color: black; font-weight: bold;font-size:20px;"onmouseover="bb()" onmouseout="bb1()">BloodBanksNearby</a></span>
    </div>
   </div>
<img class="img" src = "https://media.istockphoto.com/vectors/drop-vector-id1081786788?k=20&m=1081786788&s=612x612&w=0&h=LbVZIIk-YIkPU2z3smmTa5XhniEkZqZd1i9vRhVk5TA="/>
<p>Blood Donation system</p>
<img src="bb.jpeg" style="height: 490px;width: 600;">
<img src="bbt.jpg" style="height: 490px;width: 600;margin-left: 70px;">

<script>
    function home(){
    document.getElementById("nav2").style.background="red";}
    function home1(){
    document.getElementById("nav2").style.background="none";}
    function avai(){
    document.getElementById("nav3").style.background="red";}
    function avai1(){
    document.getElementById("nav3").style.background="none";}
    function pat(){
    document.getElementById("nav4").style.background="red";}
    function pat1(){
    document.getElementById("nav4").style.background="none";}
    function bb(){
    document.getElementById("nav5").style.background="red";}
    function bb1(){
    document.getElementById("nav5").style.background="none";}

</script>

 </body>
</html>