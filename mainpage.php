<?php
session_start();
?>
<?php
$msg = "";
if(isset($_POST['upload']))   {
      $target = "images/".basename($_FILES['image']['name']);

      $db = mysqli_connect("localhost","root","","cart");

      $image = $_FILES['image']['name'];
      $name = $_POST['name'];
      $price = $_POST['price'];

      $sql = "INSERT INTO tbl_product(image, name, price)
      VALUES('$image', '$name', '$price')";

      mysqli_query($db, $sql);

      if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
      {
            $msg = "IMAGE UPLOADED SUCCESSFULLY!!!!!";
      }
      else{
            $msg = "There was something wrong while uploading the image";
      }
}


?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="mainpage.css">
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
     <a href="cart.php"><img src="cart.png" style="width: 70px; height: 50px; float: right; margin-top: 19px; padding: 4px;"></a>
</ul>

 </div>


<div id="main">
	
    <img id="fixed" src="fixed.jpg" width="100%" height="auto">
    <div class="script"><br/>The Pawn Shop</div>
       </div> 
       <div id="contentform" style="width: 70%; height: auto; text-align: center; padding: 50px; border: 2px white solid; color: white;" >
         <?php
         $db = mysqli_connect("localhost","root","","cart");
         $sql = "SELECT * FROM tbl_product";
         $result = mysqli_query($db, $sql);
         while($row= mysqli_fetch_array($result)){
            echo "<div id='img_div'>";
            echo "<img src='images/".$row['image']."' >";
            echo "<p>".$row['name']."</p>";
            echo $row['price'];
            echo "</div>";
         }

         ?>
        <form  action="mainpage.php" method="post" enctype="multipart/form-data" style="border: 2px solid white; background-color: black; padding: 10px; border-radius: 10px;">
              <input type="hidden" name="size" value="1000000">
              <div>
                    <input type="file" name="image" style="width: 40%;
                    background-color:#082537;
                   color: white;
                  margin-left:5%;
                   margin-right: auto;
                    padding: 10px;
                    border-radius: 10px;
                    text-align: center;">
              </div>
              <div>
                    <textarea name="name" 
                    style="width: 90%;
                    background-color:#D7DBDE;
                   color: white;
                  margin-left: auto;
                   margin-right: auto;
                    padding: 10px;
                    border-radius: 10px;
                    opacity: 0.8;"
                    cols="80" rows="8" placeholder="Name of the Antique Item"></textarea>
              </div>
              <div>
                <input type="text" name="price"  style="width: 90%;
                    background-color:#D7DBDE;
                   color: white;
                  margin-left: auto;
                   margin-right: auto;
                    padding: 10px;
                    border-radius: 10px;
                    opacity: 0.8;"
                    placeholder="PRICE IN $">
              </div>

              <div>
                    <input 
                    style="width: 90%;
                    background-color:#394E5A;
                   color: white;
                  margin-left: auto;
                   margin-right: auto;
                   text-align: center;
                    padding: 15px ;
                    margin-left: 10px;
                    border-radius: 10px;
                    opacity: 0.9;"
                    
                    type="submit" name="upload" value="Upload Image">
              </div>
        </form>
        </div>
      </div>
      <div id="footer">
      	<div class="mylogo">
      	<p>website</p>
      	</div>
      </div>
</div>

</body>
</html>