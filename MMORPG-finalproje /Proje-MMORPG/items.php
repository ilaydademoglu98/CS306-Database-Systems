<head>
  <link rel="stylesheet" type="text/css" href="csskopyasiforchar.css">
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

</head>



<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `item` WHERE CONCAT(`item_id`, `attack_range`, `attack_speed`, `health_bonus`) LIKE '%".$valueToSearch."%' ORDER BY level DESC";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `item` ORDER BY item_id DESC";
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
            <table>
                <tr>
                    <th>item_id</th>
                    <th>attack_range</th>
                    <th>attack_speed</th>
                    <th>health_bonus</th>
                </tr>




      <!-- populate table from mysql database -->
                <?php 


                while($row = mysqli_fetch_array($search_result)):?>
                <tr>


                   <td><?php echo  $row['item_id'];?></td>
                    <td><?php echo $row['attack_range'];?></td>
                    <td><?php echo $row['attack_speed'];?></td>
                    <td><?php echo $row['health_bonus'];?></td>

                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html