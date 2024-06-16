<?php 
$uname=$_POST['uname'];
$pass=$_POST['pass'];


$server_name="localhost";
$user_name="root";
$password="";
$database_name="project";

$conn= new mysqli($server_name,$user_name,$password,$database_name);

if($conn->connect_error){
    die("Connection fail".$conn->connect_error);
}

$sql = "SELECT * FROM admin WHERE Username='$uname' AND Password='$pass'";
$result = $conn->query($sql);
if ($result) {
    header("Location:Stinfo.php"); 
} else {
    echo "Error Information: " . $conn->error;
}

$conn->close();


exit();

?>