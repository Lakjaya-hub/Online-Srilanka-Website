<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#login{
			padding-top: 520px;
			padding-left:640px;
			width: 75px;
			height: 30px;
		}
		#text{
			padding-top: 100px;
	
		}
		body {
  background-image: url("login.png");
  background-repeat: no-repeat;
}
body {
  font-family: Arial;
}
.main{
	height: 600px;
	width: 600px;
	margin-top: 350px;
	margin-left: 400px;
}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 4px solid #AB57AF;
  border-radius: 8px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 20%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  margin-top: 50px;
  margin-left: 225px;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div.container {
  border-radius: 5px;
  
  padding: 20px;
}

	</style>
</head>
<body>
	
<div class="main">
	
<div class="container">
  <form  method="post" action="vali.php">
    
    <input type="text" id="fname" name="nic" placeholder=" YOUR NIC ">
    <br>

    <input type="text" id="lname" name="pin" placeholder="YOUR PASSWORD">


  
    <input type="submit" value="Submit">
  </form>
</div>


</div>


</body>
</html>
