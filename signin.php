


<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
	<style type="text/css">
		body{
			margin: 0px;
			padding: 0px;
			font-family: sans-serif;
			text-align: center;
		}

		#form1{
			padding: 30px;
			background-color: lightblue;
			width: 40%;
			height: auto;
			margin-left: auto;
			margin-right: auto;
	        border:2px solid grey;
		}

		#form2{
             padding:30px;
             background-color: yellow;
             width: 40%;
			height: auto;
			margin-left: auto;
			margin-right: auto;
	        border:2px solid grey;
		 
		}
	</style>
</head>
<body>
<form action="signup.php" method="post" id="form1">
<hr/><h1>SIGN IN</h1><hr/>
    <input type="text" name="first" placeholder="firstname"><br/><br/>
	<input type="text" name="uid" placeholder="Username"><br/><br/>
	<input type="password" name="pws" placeholder="Password"><br/><br/>
	<button type="submit">SIGN IN</button><br/><br/>
</form>

<form action="login.php" method="post" id="form2">
	<hr/><h1>LOG IN</h1><hr/>
	<input type="text" name="uid" placeholder="Username"><br/><br/>
	<input type="password" name="pws" placeholder="Password"><br/><br/>
	<button type="submit">LOG IN</button><br/><br/>

</form>

</body>
</html>