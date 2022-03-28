
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
            .form{
                margin-top: -440px;
                margin-left: 900px;
               padding:5px;
               padding-top: 6px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(216, 216, 221, 0.815);
                width:400px;
                height: 350px;
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
          
           
           
        </style>
     </head>
     <body >
       <div class="ti">
        
       </div>
    <img class="img" src = "https://media.istockphoto.com/vectors/drop-vector-id1081786788?k=20&m=1081786788&s=612x612&w=0&h=LbVZIIk-YIkPU2z3smmTa5XhniEkZqZd1i9vRhVk5TA="/>
    <p>Blood Donation system</p>
    <img src="bb.jpeg" style="height: 490px;width: 600;">
    
    <form  method="POST" action="pdetails.php">
    <div class="form"><br><br>
    <h1>&nbsp;&nbsp;&nbsp; Search For Blood Group</h1><br>
       
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Enter Bloodgroup" name="dbgroup"style="height: 40px;width: 225px;border-radius: 1em;"><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Enter location" name="dlocation" style="height: 40px;width: 225px;border-radius: 1em;" ><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Search" style="height: 40px;width: 100px;color: rgb(248, 242, 244);background-color: crimson;border: 0px;">
    </div>
    </form>
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