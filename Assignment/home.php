<?php 
$server_name="localhost";
$user_name="root";
$password="";
$database_name="project";

$conn= new mysqli($server_name,$user_name,$password,$database_name);

if($conn->connect_error){
    die("Connection fail".$conn->connect_error);
}

$sql = "SELECT * FROM applicant";
$result = $conn->query($sql);


$conn->close();
?>

<html>
<head> <title> Instructor table </title>
<style>
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
table, td, th {
  border: 1px solid #ddd;
  padding: 12px;
}
tr:nth-child(even){background-color: #f2f2f2;}
tr:hover {background-color: #ddd;}
th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #006622;
  color: white;
}
span{
  width: 30%;
  margin: auto;
}
span a:link{
  text-decoration: none;
  text-align: center;
  background-color: #04AA6D;
  color: white;
  padding: 8px 12px;
  margin-top: 30px;
}
			span a{
					text-decoration: none;
					text-align: center;
					background-color: #006622;
					color: white;
					padding: 8px 12px;
					border-radius: 5px;
}
.align_button{
margin:auto;}
}
</style>
</head> 
<body> 
<div class="ins">
<h1 align="center">Applicant list</h1>
		<table>
			<tr>
				<th>Name</th>
				<th>Father's name</th>
				<th>Mother's name</th>
				<th>Date of birth</th>
				<th>Gender</th>
				<th>Nationality</th>
				<th>Phone </th>
				<th>Subject </th>
				<th>University</th>
				<th>CGPA</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			
		<?php 
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc())
			{ 
				$id=$row["ID"];
				echo "<tr>";
					echo "<td>". $row["Name"]."</td>";
					echo "<td>". $row["Fathers_name"]."</td>";
					echo "<td>". $row["Mothers_name"]."</td>";
					echo "<td>". $row["Date_of_birth"]."</td>";
					echo "<td>". $row["Gender"]."</td>";
					echo "<td>". $row["Nationality"]."</td>";
					echo "<td>". $row["Phone"]."</td>";
					echo "<td>". $row["Subject"]."</td>";
					echo "<td>". $row["University"]."</td>";
					echo "<td>". $row["CGPA"]."</td>";
					echo "<td>"."<a href='update.php?editid=$id'>Edit</a>"."</td>";
					echo "<td>"."<a href='remove.php?delid=$id'>Delete</a>"."</td>";
					echo "</tr>";
			}
		}
		else echo "0 results";
		?>
			
		</table>
		<span class="align_button">
		<a href="form.php">Add More Applicant</a>
		</span>
</div>
</body>
</html>