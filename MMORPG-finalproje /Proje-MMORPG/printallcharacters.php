
<html>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!--  using boost library    -->

<?php
error_reporting(E_ALL ^ E_DEPRECATED);

   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'website');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   if($db == false){
   	die("ERROR: Could not connect. " . mysqli_connect_error());
   }

$check = mysqli_query($db,"SELECT * FROM `Character`");

if (!$check) { // add this check.
    die('Invalid query: ' . mysql_error());
}

$myarr=array();

while($row = mysqli_fetch_array($check))
{
array_push($myarr, $row);
}

?>

<h1 class="h1"> All Character Information </h1>
<body style="background-color : white">
<table class="table">
            <thead>
                <tr class="success">
                    
                    <th>username</th>
                    <th>charactername</th>
                    <th>inventory_id</th>
                    <th>health</th>
                    <th>mana</th>
                    <th>armor</th>
                    <th>region</th>
                    <th>level</th>
                    <th>gold</th>

					
                </tr>
            </thead>
            <tbody>

				<?php
				$row_number=count($myarr);

				for($i=0;$i<$row_number;$i++)
				{
					//$sid=$myarr[$i]['sid'];
					$username=$myarr[$i]['username'];
					$charactername=$myarr[$i]['charactername'];
					echo "<tr>";
					echo "<td>" .$username.  "</td>";
          			echo "<td>".$charactername .  "</td>";
					echo"<td> " .$myarr[ $i]['inventory_id'].  "</td>";
          			echo "<td>". $myarr[$i]['health'].  "</td>";
          			echo "<td>". $myarr[$i]['mana'].  "</td>";
          			echo "<td>". $myarr[$i]['armor'].  "</td>";
          			echo "<td>". $myarr[$i]['region'].  "</td>";
          			echo "<td>". $myarr[$i]['level'].  "</td>";
          			echo "<td>". $myarr[$i]['gold'].  "</td>";
        			echo "</tr>";
				}
				echo '<a href= "adminanasayfa.html">Previous Page</a>';
				echo '<a href= "logoutuser.php">Log Out</a>';

				?>
				</tbody>




</table>

</html>
