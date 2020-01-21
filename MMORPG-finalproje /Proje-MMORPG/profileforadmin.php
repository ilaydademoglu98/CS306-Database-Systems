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
echo '<a href= "characters.php">  Previous</a>';

   ?>


  </body>
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



<?php
$dbc=mysqli_connect("localhost","root","","websitex");

$ID = mysqli_real_escape_string($dbc, $_GET['URL']);
$sql = "select * from account where url='$ID'";

$result = mysqli_query($dbc,$sql) or die("Bad Query: $sql");
$row=mysqli_fetch_array($result);
$usname= $row['username'];
?>

<style>
*{margin:0px;}

.container .pp
{
    margin:50px;
    width:200px;
    height:200px;
    background-color:white;
    box-shadow: 5px 10px 15px #888888;
    float:left;
    display:block;
}
.container
{
    width:100%;
    height:400px;
}
.container .info
{
    margin:50px;
    color:white;
  float:left;
    font-size:20px;
    width:400px;
}
.character
{
    margin-top:200px;
    height:200px;
    width:80%;
    
    display:block;
    margin:auto;

}
.heroImage
{
    width:24%;
    height:200px;
    float:left;

}

/*ASKJLFHAKJSFJSAF*/



.character .thumb {
	position:relative;
}
.character .thumb img { 
	vertical-align:bottom;
}
.character .thumb:hover {
	border:0; /* IE6 needs this to show large image */
	z-index:1;
}
.character .thumb span { 
	position:absolute;
	visibility:hidden;
    
}
.character .thumb:hover span { 
	visibility:visible;
	top:37px; left:37px; 
}


</style>
<!DOCTYPE html>
<div>

<div style="margin:auto;width:70%;height:auto;padding-bottom:100px;background:rgba(0, 0, 0, 0.6);">
    <div style="margin:auto;width:100%;height:100px;">
   
    </div>

    <div class="container">
        <div class="pp">
            <img style=width:200px;height:200px; src=<?php echo $row['image'] ?>>
        </div>
        <div class="info">
        <h1><?php echo $row['username'] ?></h1>
            <br>
            <p>Level        : <?php echo $row['level'] ?></p>
            <p>Email        : <?php echo $row['email'] ?></p>
            <p>Registered since   : <?php echo $row['birthday'] ?></p>
            <p>Hours Played : <?php echo $row['hoursplayed'] ?> </p>
            <p>Team Tag     : <?php echo $row['teamtag'] ?></p>
            <p></p>
        </div>
    </div>
     
    <div class="character">
    <?php
$sql2 = "SELECT * FROM `character` WHERE username='$usname'";
$resultChar = mysqli_query($dbc,$sql2) or die("Bad Query: $sql2");

echo "<h1 style='color:white;'>Characters:</h1> ";
    while($row2 = mysqli_fetch_array($resultChar))
    {
      $im= $row2['image'];
      $chanam= $row2['charactername'];
      $lvl= $row2['level'];
      $hp= $row2['health'];
      $mn= $row2['mana'];
      $ar= $row2['armor'];
      $reg= $row2['region'];

     echo "<a class=\"thumb\"> <img class=\"heroImage\"style=width:24%;height:100%; src=$im><span >
     <div style=\"padding:20px;color:white;width:160px;height:200px;background-image:url('https://i.pinimg.com/originals/be/41/59/be4159bda321971099c409a273ae7c3e.jpg');\" >
     <h3>$chanam</h3>
     <p>Level: $lvl</p>
     <p>Health: $hp</p>
     <p>Mana: $mn</p>
     <p>Armor: $ar</p>
     <p>Region: $reg</p>
     </div>
 </span></a>";
        
    }
?>
 
    </div>

</div>





 </div>