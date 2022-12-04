

<!DOCTYPE html>
<html>
<head>
<style>
body{
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover;
}
</style>
</head>
<body background="https://wallpaperaccess.com/full/2316758.jpg">
<h1 align="center">Vehicle Details</h1>
<div align="center">
<form action="" method="post"


<p>
<h1><label for="made">MadeIn : <input type="text" name="madein" ></label></h1>
</p>
<p>
<h1><label for ="mileage">Mileage : <input type="text" name="mileage"></label></h1>
</p>
<p>
<h1><label for="vehiclenumber">Vehiclenumber : <input type="text" name="vehiclenum"></label></h1>
</p>
<p>
<h1><label for="regname">Registeredname : <input type="text" name="regname"></label></h1>
</p>
<p>
<button type="submit" name="submit">Submit</button>
</p>
</form>
</div>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $made=$_REQUEST['madein'];
    $mileage=$_REQUEST['mileage'];
    $vehiclenumber=$_REQUEST['vehiclenum'];
     $regname=$_REQUEST['regname'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "admin";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    $sql = "INSERT INTO vehicle_details VALUES('$made','$mileage','$vehiclenumber','$regname')";
    $result = mysqli_query($conn, $sql);


}
