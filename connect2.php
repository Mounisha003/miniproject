<?php
$email = $_POST['email'];
$password = $_POST['password'];


// Database connection
$conn = new mysqli('localhost','root','','project');
if($conn->connect_error){
echo "$conn->connect_error";
die("Connection Failed : ". $conn->connect_error);
} else {
$stmt = $conn->prepare("insert into login( email, password) values(?, ?)");
$stmt->bind_param("ssssi", $email, $password);
$execval = $stmt->execute();
echo $execval;
echo "Registration completed successfully...";
$stmt->close();
$conn->close();
}
?>