<html>
<head>
<style>

body {
background-repeat: no-repeat;
background-size:cover;
}

h1 {
  font-size: 3em; 
}

</style>
</head>
<body background="https://thumbs.dreamstime.com/b/global-business-logistics-import-export-background-container-cargo-freight-ship-transport-concept-137750581.jpg">
<br><br>


<div class="text-left">
  <a href="http://localhost/project/proj.html#hero" style="color: #750606;">Home</a>
  
  </div>


<h1 align="center">Select Pick Up & Destination</h1>
<form action="" method="post">
<br><br><br>
<div align="center">
  <label for="logis"><b>Pickup:</b></label>
  <select name="logis" id="logis">
    <option value="Tamil Nadu">Tamil Nadu</option>
    <option value="Karnataka">Karnataka</option>
    <option value="Andhra Pradhesh">Andhra Pradhesh</option>
    <option value="audi">Kerala</option>
  </select>
<br><br>
   <label for="logs"><b>Destination</b></label>
  <select name="logs" id="logs">
    <option value="Tamil Nadu">Tamil Nadu</option>
    <option value="Karnataka">Karnataka</option>
    <option value="Andhra Pradhesh">Andhra Pradhesh</option>
    <option value="Kerala">Kerala</option>
  </select>
<br><br>
<label for="load"><b>Load Quantity:</b></label>
<input type="text" name="load">
<br><br>
  <input type="submit" name="CheckAvailability" value="CheckAvailability">
  <br><br>
</form>
</div>
</body>
</html>

<?php
if(isset($_POST['CheckAvailability']))
{
    $name=$_REQUEST['logis'];
    $logs=$_REQUEST['logs'];
    $load=$_REQUEST['load'];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    $sql = "INSERT INTO pd VALUES('$name','$logs','$load')";
    $result = mysqli_query($conn, $sql);
    echo "<script>alert('Sent request')</script>";

}
