<!DOCTYPE html>
<html lang="en">
<head>

	<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #330033;
  color: white;
}
</style>

</head>
<body>

<div class="topnav">
  <a href="adminanasayfa.html" class="button">Home</a>
  <a href="characters.php" class="button">Accounts</a>
  <a href="regionroy.php" class="button">Regions</a>
  <a href="insertdata.php" class="button">Add Account</a>
  <a href="deleteData.php" class="button">Delete Data</a>
  <a href="update.php" class="button">Change Password</a>
  <a href="items.php" class="button">Items</a>
  <a href="logoutuser.php" class="button">Log Out</a>
</div>




	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cssroy/util.css">
	<link rel="stylesheet" type="text/css" href="cssroy/main.css">
<!--===============================================================================================-->
<link rel= "stylesheet" href = "test.css" />
</head>
<body>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
<?php

error_reporting(E_ALL ^ E_DEPRECATED);

$link = mysqli_connect("localhost", "root", "", "websitex");


// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT * FROM region";
$result = $link->query($sql);


if ($result->num_rows > 0) {
	
	echo "<table><thead>";
	echo "<tr class=\"table100-head\"><th class=\"column1\">Name</th><th class=\"column2\">Player Count</th><th class=\"column3\">weather</th><tr></thead>";
	echo "<tbody>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td class=\"column1\"><a href = ".$row["name"].".php>" . $row["name"]. " </td>";
        echo " <td class=\"column2\">" . $row["players_in"]. " </td>";
        echo " <td class=\"column3\">" . $row["climate"]. " </td></tr>";
    }
    echo "</tbody></table>";
} else {
    echo "0 results";
}


$link->close();
?>
</div></div></div></div>
</body></html>

