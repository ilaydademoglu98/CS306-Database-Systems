 <link rel= "stylesheet" href = "test.css" />

<?php
session_start();
$db=mysqli_connect("localhost","root","","websitex");

if(isset($_POST['register_btn']))
{
  $username=mysql_real_escape_string($_POST['username']);
  $email=mysql_real_escape_string($_POST['email']);
  $password=mysql_real_escape_string($_POST['password']);
  $password2=mysql_real_escape_string($_POST['password2']);
  $currentTimeinSeconds = time();  
  $birthday = date('Y-m-d', $currentTimeinSeconds); 
  $birthday=substr($birthday,0,10);
  $level=rand(3,75);
  $team='-';
  $hour=rand(100,3000);
  $url=crypt($username);
  $url=substr($url,15,7);
  $image="https://www.teksteshqip.com/img_upz/galeri_full/157/157947.jpg";

  if($password == $password2)
  {
    session_start();
    $sql="INSERT INTO account(username,email,password,birthday,level,hoursplayed,teamtag,url,image) VALUES('$username','$email','$password','$birthday','$level','$hour','$team','$url','$image')";
    mysqli_query($db,$sql);
    $_SESSION['message'] = "You are now logged in";
    $_SESSION['username']=$username;
    header("location:welcomeuser.php");
    
  }
  else
  {
    $_SESSION['message'] = "Two password do not match";

  }
}



?>

<!DOCTYPE html>
<html>
  <form method="post" action="register.php">
    <table>
      <tr>
        <input type="text" name="username" class="textInput" placeholder="username">
        <input type="email" name="email" class="textInput" placeholder="email">
        <input type="password" name="password" class="textInput" placeholder="password">
        <input type="password" name="password2" class="textInput" placeholder="password">
        <input type="submit" name="register_btn" class="textInput" value="Register" >

      </tr>
    </table>
</form>
</html>