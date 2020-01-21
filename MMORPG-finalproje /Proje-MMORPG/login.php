<?php 

session_start();

include("connection.php");
//session_start();
if(isset($_POST['register'])){
	$adminuser = $_POST['username'] ; 
	$adminpassword = $_POST['password'] ; 
	//$username = $_POST['username'] ;
	//$password = $_POST['password'] ;

	$username = mysqli_real_escape_string($db,$_POST['username']);
	$password = mysqli_real_escape_string($db,$_POST['password']);
	

	if($adminuser == "lollipoptart" and $adminpassword == "ilayda"){
		echo "This is the admin's page";
		header("location:adminanasayfa.html");

	}
	else if($username != "" and $password !=""){ //database connection aç select yap 
		//eger sıfır row geliyorsa böyle bir kullanıcı yok ilk user sonra şifre 
		//user varsa gitmesi gereken sayfayı da kodla bağla 
		    $sql = "SELECT * FROM Account WHERE username = '$username' and password = '$password'";
    $r = mysqli_query($db,$sql);

    while($row =mysqli_fetch_array($r)){
		echo $row['username'];
		$url=$row['url'];
    }

    if (mysqli_num_rows($r) > 0) {
    	$_SESSION['username'] = $url;
    	echo "You are now logged in";
    	header("location:welcomeuser.php");
    }
    else if(mysqli_num_rows($r) == 0){
    	echo "Your password and user name do not match"; 
    	echo '<a href= "logoutuser.php">Main Page</a>';
    }



	}
	else{
		echo "Username and password cannot be empty.";
	}




}
?> 
