<!DOCTYPE html>
<html lang="en">
<head>
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
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div style="text-align: center;">
                <b style="font-size: 75px fonts:">LONAR LAKE</b>
                <div class="table100">
                        <img style="margin: 10px"src="http://i.imgur.com/xhFlQe4.png" height="180" width="180"></div>
<?php

error_reporting(E_ALL ^ E_DEPRECATED);

$link = mysqli_connect("localhost", "root", "", "websitex");


// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT * FROM `websitex`.`character`, `websitex`.`region` WHERE `region`.`name` = 'lonarLake' and `region`.`name` = `character`.`region`";
$result = $link->query($sql);


if ($result->num_rows > 0) {
    echo "<table><thead>";
    echo "<tr class=\"table100-head\">
    <th class=\"column1\">username</th>
    <th class=\"column2\">charactername</th>
    <th class=\"column2\">inventory_id</th>
    <th class=\"column2\">health</th>
    <th class=\"column2\">mana</th>
    <th class=\"column2\">armor</th>
    <th class=\"column2\">region</th>
    <th class=\"column2\">level</th>
    <th class=\"column2\">location_x</th>
    <th class=\"column2\">location_y</th>
    <th class=\"column2\">gold</th>
    <th class=\"column2\">players_in</th>
    <th class=\"column6\">climate</th><tr></thead>";
    echo "</tbody>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td class=\"column1\">" . $row["username"]. "</td>";
        echo "<td class=\"column2\">" . $row["charactername"]. "</td>";
        echo "<td class=\"column2\">" . $row["inventory_id"]. "</td>";
        echo "<td class=\"column2\">" . $row["health"]. "</td>";
        echo "<td class=\"column2\">" . $row["mana"]. "</td>";
        echo "<td class=\"column2\">" . $row["armor"]. "</td>";
        echo "<td class=\"column2\">" . $row["region"]. "</td>";
        echo "<td class=\"column2\">" . $row["level"]. "</td>";
        echo "<td class=\"column2\">" . $row["location_x"]. "</td>";
        echo "<td class=\"column2\">" . $row["location_y"]. "</td>";
        echo "<td class=\"column2\">" . $row["gold"]. "</td>";
        echo "<td class=\"column2\">" . $row["players_in"]. "</td>";
        echo "<td class=\"column6\">" . $row["climate"]. "</td></tr>";
    }
    echo "</tbody></table>";
} else {
    echo "0 results";
}


$link->close();
?>
</div></div></div></div></body></html>
