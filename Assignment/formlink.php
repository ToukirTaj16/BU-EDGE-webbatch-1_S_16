<?php
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
$sq="INSERT INTO applicant( ID, Name, Fathers_name, Mothers_name, Date_of_birth, Gender, Nationality, Phone, Subject, University, CGPA) 
VALUES ( NULL, '$aname', '$fname', '$mname', '$dob', '$gender', '$nation', '$phone', '$subject','$university','$cgpa')";

$result=$conn->query($sq);
if ($result) {
    header("Location:home.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


exit();

?>