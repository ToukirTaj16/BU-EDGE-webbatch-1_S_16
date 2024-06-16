<html>
<head> <title> Instructor Table </title>
<link rel="stylesheet" href="project.css">
			<style>
			body {background-image: url(phy2.jpeg);
			}
			div{background-color:#ddd; 
				width:40%; margin:auto;border-radius:7px; padding:45px;}
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
<body> 
<div>
<h2 align="middle"> Application Form </h2>
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

</body>
</html>		