<?php

$id = $_GET['editid'];

$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "project";

$conn = new mysqli($server_name, $user_name, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM applicant WHERE ID=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

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
<div>
<div class="apform">
<h2 align="middle"> MS Application Form </h2>
		<form action="acupdate.php" method="POST">
		<label> Applicant's Name </label>
		 <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
		<input type="text" name="aname" value="<?php echo $row['Name']; ?>">
		<label> Father's Name </label>
		<input type="text" name="fname" value="<?php echo $row['Fathers_name']; ?>">
		<label> Mother's Name </label>
		<input type="text" name="mname" value="<?php echo $row['Mothers_name']; ?>">
		<label> Date of Birth </label>
		<input type="date" name="dob" value="<?php echo $row['Date_of_birth']; ?>" > <br> <br>
		<label> Gender </label> 
		<input type="Radio" value="male" name="gender" value="<?php echo $row['Gender']; ?>">
		<label for="male">Male </label>
		<input type="Radio" value="Female" name="gender" value="<?php echo $row['Gender']; ?>">
		<label for="female">Female</label> <br> <br>
		<label> Nationality </label>
				 <select name="nation" value="<?php echo $row['Nationality']; ?>">
		<option value="Bangladeshi">Bangladeshi </option>
		<option value="Pakistani">Pakistani </option>
		</select>
		<label> Phone </label>
		<input type="text" name="phn" value="<?php echo $row['Phone']; ?>">
		<label> Subject </label>
		 <select name="sub" value="<?php echo $row['Subject']; ?>">
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
		<input type="text" name="uv" value="<?php echo $row['University']; ?>">
		<label> CGPA </label>
		<input type="text" name="cgpa" value="<?php echo $row['CGPA']; ?>">
		<input type="Submit" value="Submit">
		</form>
</div>
<div class="footer"> Developed and maintained by Science and Engineering Faculty BU &copy;2024 </div>		
</body>
</html>	
