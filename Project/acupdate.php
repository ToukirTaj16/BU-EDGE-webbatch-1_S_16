<?php
$id = $_POST['id'];
$aname=$_POST['aname'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$nation=$_POST['nation'];
$phone=$_POST['phn'];
$subject=$_POST['sub'];
$university=$_POST['uv'];
$cgpa=$_POST['cgpa'];

$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "project";

$conn = new mysqli($server_name, $user_name, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE applicant SET Name='$aname', Fathers_name='$fname', Mothers_name='$mname', Date_of_birth='$dob', Gender= '$gender', 
		Nationality='$nation', Phone='$phone', Subject='$subject', University='$university', CGPA='$cgpa' WHERE ID=$id";
		
		$result=$conn->query($sql);

if ($result) {
    header("Location:Stinfo.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


exit();
?>