<?php
   session_start();

?>

<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" type="text/css" href="index.css">
      <title>PAWN SHOP</title>
</head>
<body>
<div id="header">
<ul>
      <a href="index.php" style="color: white;"><li>HOME</li></a>
      <a href="register.php" style="color: white;"><li>REGISTER</li></a>
      <a href="loginone.php" style="color: white;"><li>LOG IN</li></a>
      <form action="logout.php">
     <BUTTON style="margin-top: 1.3%; color: rgba(300,260,190,0.7); background-color: #082537; padding: 10px 20px; border: 0.1px solid white; border-radius: 5px; float: right; margin-right: 20px; font-size: 10px;" >LOG OUT</BUTTON></form>
     <a href="#"><img src="cart.png" style="width: 70px; height: 50px; float: right; margin-top: 19px; padding: 4px;"></a>
</ul>

 </div>


<div id="main">
      
    <img id="fixed" src="fixed.jpg" width="100%" height="auto">
    <div class="script"><br/>Log In</div>
       </div>
       
            <form action="logintwo.php" method="post" style="
      padding: 50px;
      background-color:#0B3043;
      opacity: 0.9;
      color: white;
      width: 40%;
      text-align: center;
      margin-left: auto;
      margin-right: auto;
      border-radius: 0px 100px 100px 100px;">
                  
                  <input type="text" name="uid" placeholder="username"
                  style="border: none;
                   color: black;
                   border-radius: 0px 100px 100px 100px;
                   text-align: center;
                   border: 3px solid white;
                   " size="30%"><br/><br/>
                  <input type="password" name="pwd" placeholder="password"
                  style="border: none;
                   color: black;
                   border-radius: 0px 100px 100px 100px;
                   text-align: center;
                   border: 3px solid white;
                   " size="30%"><br/><br/>
                  <button type="submit"
            style="padding:20px 40px; background-color: #0B3043; color:white; border-radius:10px; "
                  >LOG IN</button><br/>
            </form>

            <?php
             if(isset($_SESSION['id'])) {
                  echo $_SESSION['id'];
             }
             else{
                  echo "<p style='color:red; text-align:center; font-weight:bold;'>"."YOU ARE NOT LOGGED IN!!!"."</p>";
             }
             ?>

       <br/><br/><br/>
       <br/><br/><br/>
      <div id="footer">

            <div class="mylogo">
            <p>website </p>
            </div>
      </div>
</div>

</body>
</html>