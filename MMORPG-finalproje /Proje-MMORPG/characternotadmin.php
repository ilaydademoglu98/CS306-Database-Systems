<head>
  <link rel="stylesheet" type="text/css" href="csskopyasiforchar.css">

  <style>
* {margin: 0px; padding: 0px; }

.button {
  background-color: #C7B5D1;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
</style>
<head>
  <title> My Web Page </title>
  <link rel= "stylesheet" href = "test.css" />
</head>

<body>

<?php
session_start();
echo '<a href= "logoutuser.php">Log Out</a>';
echo '<a href= "welcomeuser.php">  MyWebsite</a>';

  echo "<h1>My Website</h1>";
  echo  "<a class='button' href = 'profile.php?URL={$_SESSION['username']}'> Profile</a>";  ?>
  <a href="characternotadmin.php" class="button">My Characters</a>

  </body>

<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function

    $query = "SELECT * FROM `websitex`.`character` WHERE `username` = 'herentug'";
    $search_result = filterTable($query);

    
}
 else {
    $query = "SELECT * FROM `websitex`.`character` WHERE `username` = 'herentug'";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "websitex");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
            table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
}
table#t01 th {
  background-color: black;
  color: white;
}
        </style>
    </head>
    <body>
        
        <form action="" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>username</th>
                    <th>charactername</th>
                    <th>inventory_id</th>
                    <th>health</th>
                </tr>




      <!-- populate table from mysql database -->
                <?php 


                while($row = mysqli_fetch_array($search_result)):?>
                <tr>


                   <td><?php echo  $row['username'];?></td>
                    <td><?php echo $row['charactername'];?></td>
                    <td><?php echo $row['inventory_id'];?></td>
                    <td><?php echo $row['health'];?></td>

                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html