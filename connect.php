<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];

// Database connection
$conn = new mysqli('localhost','root','','project');
if($conn->connect_error){
echo "$conn->connect_error";
die("Connection Failed : ". $conn->connect_error);
} else {
$stmt = $conn->prepare("insert into login(firstname, lastname, email, password, number) values(?, ?, ?, ?, ?)");
$stmt->bind_param("ssssi", $firstname, $lastname, $email, $password, $number);
$execval = $stmt->execute();
echo $execval;
echo "Registration completed successfully...";
$stmt->close();
$conn->close();
}
?>