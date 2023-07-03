<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
    <link rel="icon" href="iconfood.jpg" type="image/png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
body {
  margin: 0;
  color: azure;
  background-image: url("bg1.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  font-family: 'Allura';
  font-weight: bold;
  font-size: 38px; 
  border-image-width: auto;
}


.other{
  font-size: 70px;
}
.w3-button {width:180px;}

</style>
</head>
<body>

<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "root";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    $ingredient1   = $_POST['ingredient1'];
    $ingredient2   = $_POST['ingredient2'];
    $ingredient3   = $_POST['ingredient3'];
    $query      = "select * from myfood where ing1 = '$ingredient1' and ing2 = '$ingredient2' or ing1 = '$ingredient1' and ing2 = '$ingredient3' or ing1 = '$ingredient3' and ing2 = '$ingredient2' or ing1 = '$ingredient2' and ing2 = '$ingredient3' or ing1 = '$ingredient2' and ing2 = '$ingredient1' or ing1 = '$ingredient3' and ing2 = '$ingredient1'";
    $resultSet  = $conn->query($query);
    if($resultSet->num_rows > 0){
        while($row = $resultSet->fetch_assoc()) {
        echo " Dish Name: " . $row["dishname"]. "<br>" . "Recipe:" . "<br>" . $row["process"] . "<p>". "<br>" ;
    }
} else {
    echo "<p class='other'>0 results found!"."<br><br><br><br>" . "</p>";
}
$conn->close();
?>


<div class="w3-container">
            <nav class="menu">

              <center><a href="generate.html"><button class="w3-button w3-light-blue w3-round-large">Back</button></a>
 
              <a href="logout.php"><button class="w3-button w3-light-blue  w3-round-large">Sign Out</button></a></center>

                
                            </ul>
            </nav>
          </div>        

</body>
</html>