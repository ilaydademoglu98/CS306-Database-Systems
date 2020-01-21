<!doctype html>
<html>
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
	</html>