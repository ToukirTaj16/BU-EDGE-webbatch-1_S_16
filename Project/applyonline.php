<html>
<head> <title> MSC Application </title>
<link rel="stylesheet" href="project.css">
			<style>
			input[type=text], input[type=email], input[type=date],  
			input[type=number], select{
				width:100%; padding:14px 8px; margin:5px; border-radius:5px;}
			input[type=submit]{width:35%; padding:12px 7px; margin:5px; border-radius:5px; float:right;
				background-color:#006622; color:#ffffff; font-size:17px;
			input[type=radio]{
				width:20%; padding:14px 8px; margin:5px; border-radius:5px;}	
			}
			input[type=submit]:hover{ background-color:#27ae60; color:#ffffff;}
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
<div class="apform">
<h2 align="middle"> MS Application Form </h2>
		<form action="aponlinesql.php" method="POST">
		<label> Applicant's Name </label>
		<input type="text" name="aname" placeholder="Enter your full name">
		<label> Father's Name </label>
		<input type="text" name="fname" placeholder="Enter your fathers name">
		<label> Mother's Name </label>
		<input type="text" name="mname" placeholder="Enter your mothers name">
		<label> Date of Birth </label>
		<input type="date" name="dob" > <br> <br>
		<label> Gender </label> 
		<input type="Radio" value="male" name="gender">
		<label for="male">Male </label>
		<input type="Radio" value="Female" name="gender">
		<label for="female">Female</label> <br> <br>
		<label> Nationality </label>
				 <select name="nation">
		<option value="Bangladeshi"> Bangladeshi </option>
		<option value="Pakistani"> Pakistani </option>
		</select>
		<label> Phone </label>
		<input type="text" name="phn" placeholder="Enter your phonr number">
		<label> Subject </label>
		 <select name="sub">
				<option value="Physics">Physics </option>
				<option value="Chemistry">Chemistry</option>
				<option value="Mathematics">Mathematics </option>
				<option value="Statistics">Statistics </option>
				<option value="Applied Physics">Applied Physics </option>
				<option value="CSE">CSE </option>
				<option value="EEE">EEE </option>
				<option value="Soil & Environmental Science">Soil & Environmental Science </option> 
				</select>
		<label> University </label>
		<input type="text" name="uv" placeholder="">
		<label> CGPA </label>
		<input type="text" name="cgpa" />
		<input type="Submit" value="Submit">
		</form>
</div>
		<div class="footer"> Developed and maintained by Science and Engineering Faculty BU &copy;2024 </div>
</body>
</html>		