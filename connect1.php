<?php


$conn = new mysqli('localhost','root','','project');
$email1 = $_POST['email'];
$password1 = $_POST['password'];
if (!$conn) {

    echo "Connection failed!";
die("Connection Failed : ". $conn->connect_error);

}
else
{
$sql = "SELECT * FROM login WHERE email='$email1' AND password='$password1'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

if ($row['email'] === $email1 && $row['password'] === $password1) {

                header("Location:home1.html");

                exit();
 }
else{

                function function_alert($message) {
     
    // Display the alert box
    echo "<script>alert('$message');</script>";
}
 
 
// Function call
function_alert("Incorect User name or password");
 

                exit();

            }

        }else{

           function function_alert($message) {
     
    // Display the alert box
    echo "<script>alert('$message');</script>";
}
 
 
// Function call
function_alert("Incorect User name or password");
 

            exit();

        }

    }


?>