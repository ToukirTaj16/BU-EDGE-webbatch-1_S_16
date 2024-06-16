
<html>
<head> <title> MSC Application </title>
<link rel="stylesheet" href="project.css">
<style>
input[type=text], input[type=password]{
				width:100%; padding:14px 8px; margin:5px; border-radius:5px;}
			input[type=submit]{width:30%; padding:10px 8px; margin:5px; border-radius:5px; float:right;
			background-color:#006622; color:#ffffff; font-size:12px;}
form{width:38%; margin:auto; border-radius:7px; padding:45px;}
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
<div class="admin">
<p align="middle"> If you forget your password then fill up the following data </p>
<form action="fpasslink.php" method="POST"> 
<label> Your Name </label>
<input type="text" name="uname" placeholder="Enter username here">
<label> Phone </label>
<input type="text" name="phn" >
<input type="Submit" value="Show Password"> </form>
</div> </div>
<div class="footer"> Developed and maintained by Science and Engineering Faculty BU &copy;2024 </div>
</body>
</html>