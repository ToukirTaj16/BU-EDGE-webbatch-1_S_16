<html>
<head> <title> MSC Application </title>
<link rel="stylesheet" href="project.css">
<style>
input[type=text], input[type=password]{
				width:100%; padding:14px 8px; margin:5px; border-radius:5px;}
			input[type=submit]{width:30%; padding:10px 8px; margin:5px; border-radius:5px; float:right;
			background-color:#006622; color:#ffffff; font-size:15px;}
form{width:40%; margin:auto;border-radius:7px; padding:45px;}
</style>
</head> 
<body> <div class="header">
<img src=".\bulogo.png" style="width:70px;height:70px;">
<h1> University of Barishal Executive MS Program </h1>
<p> Accelerate Your Career with Advanced Science Education </p> </div>
<div class="navbar">
<a href="Homepage.php"> Home </a>
<a href="Adminlogin.php"> Admin Login </a>
<a href="studentlogin.php"> Student Login </a> 
<a href="applyonline.php"> Apply Online </a> </div>
<div class="ins">
<h3 align="middle"> Student Login </h3>
<form action="acstudent.php" method="POST"> 
<label> Student ID </label>
<input type="text" name="id" placeholder="Enter your ID">
<label> Password </label>
<input type="password" name="pass" > <br>
<a href="fpass.php"> Forget Your Password? <a>
<input type="Submit" value="Login"> </form>
</div>
<div class="footer"> Developed and maintained by Science and Engineering Faculty BU &copy;2024 </div>
</body>
</html>