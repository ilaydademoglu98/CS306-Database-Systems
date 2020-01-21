<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<title> My Web Page </title>
  <link rel= "stylesheet" href = "test.css" />
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



<head>
    <title> My Web Page </title>
    <link rel= "stylesheet" href = "test.css" />
</head>


<!doctype html>
<html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="$1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>test</title>

    <?php
    include_once 'connection.php';
    ?>

</head>
<body>
     <?php
    if(isset($_POST['save'])){
        $sql ="UPDATE `account` SET `password`='".$_POST["password"]."' WHERE `account`.`username` = '".$_POST["username"]."'";

        $result = mysqli_query($db,$sql);
    }

    ?>

    <form method="post"> 
    <label id="first"> username:</label><br/>
    <input type="text" name="username"><br/>

    <label id="first">password</label><br/>
    <input type="password" name="password"><br/>

    


    <button type="submit" name="save">Change Password</button>
   


    </form>

</body>
</html>