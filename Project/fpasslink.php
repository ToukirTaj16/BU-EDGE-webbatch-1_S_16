<?php 
$name=$_POST['uname'];
$phone=$_POST['phn'];


$server_name="localhost";
$user_name="root";
$password="";
$database_name="project";

$conn= new mysqli($server_name,$user_name,$password,$database_name);

if($conn->connect_error){
    die("Connection fail".$conn->connect_error);
}

$sql = "SELECT * FROM academicstlist WHERE Name='$name' AND Phone='$phone'";
$result = $conn->query($sql);

?>

<html>
<head> <title> MSC Application </title>
<link rel="stylesheet" href="project.css">
<style>
input[type=text], input[type=password]{
				width:100%; padding:14px 8px; margin:5px; border-radius:5px;}
			input[type=submit]{width:30%; padding:10px 8px; margin:5px; border-radius:5px; float:right;
			background-color:#2ecc71; color:#ffffff; font-size:15px;}
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
		<table>
		<?php   while($row = $result->fetch_assoc()) {
				echo "<tr>";
					echo "<td> Your Name: <td>";
					echo "<td>". $name."</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td> Phone: <td>";
					echo "<td>". $phone."</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td> Password:<td>";
					echo "<td>". $row["Password"]."</td>";
		echo "</tr>";}
				
		?>
		</div>	
		</table>
		<span class="align_button">
		<a href="studentlogin.php">Back to login </a>
		</span>
</div>
<div class="footer"> Developed and maintained by Science and Engineering Faculty BU &copy;2024 </div>
</body>
</html>