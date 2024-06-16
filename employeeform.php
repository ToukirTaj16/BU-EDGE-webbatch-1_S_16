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
<h2 align="middle"> Employee Entry </h2>
		<form action="employeeformlink.php" method="POST">
		<label> Name </label>
		<input type="text" name="name" placeholder="Enter your full name">
		<label> Email </label>
		<input type="email" name="email" placeholder="Enter your email id here">
		<label> Phone Number </label>
		<input type="text" name="phone" placeholder="+88">
		<label> Hire Date </label>
		<input type="date" name="hdate" > <br> <br>
		<label> Salary </label>
		<input type="number" min="20000" max="150000" step="any" name="salary" id="slry">
		<input type="Submit" value="Submit">
		</form>
</div>

</body>
</html>		