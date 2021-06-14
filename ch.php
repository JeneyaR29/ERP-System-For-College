<?php
$db = mysqli_connect("localhost", "root", "","authentication");

if(isset($_POST['login_btn'])) {
	session_start();

    $username = mysqli_real_escape_string($db,$_POST['username']);
	$password = mysqli_real_escape_string($db,$_POST['password']);
	
	$password = md5($password);
	$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result = mysqli_query($db, $sql);
	
	if(mysqli_num_rows($result) == 1) {
		$_SESSION['message'] = "Now Logged in";
		$_SESSION['username'] = $username;
		header("location: home.php");
	}else{
		$_SESSION['message'] = "Incorrect combo";
	}
}

?>






<!DOCTYPE html>
<head>
<title>ADD STUDENT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="deconav.css" />
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.11.3.min.js">
</script>
</head>

<nav class="navbar navbar-custom">
  <div class="container-fluid">
    <div class="navbar-header">
	<img src="logomu.jpg"></img>
    </div>
    <ul class="nav navbar-nav navbar-right">
	  <li><a href="file:///C:/Users/GANESH%20SHETTY/Desktop/IP/login.html"> Admins Portal</a></li>
      <li><a href="file:///C:/Users/GANESH%20SHETTY/Desktop/IP/login.html"> Students portal</a></li>
      <li><a href="file:///C:/Users/GANESH%20SHETTY/Desktop/IP/login.html">Teacher's Portal</a></li>
      <li><a href="file:///C:/Users/GANESH%20SHETTY/Desktop/IP/login.html">Librarian's Portal</a></li>
    </ul>
  </div> 
</nav>
 
<body>
<div class="header">
<h1>Reg</h1>
</div>

<form method='post' action='ch.php'>
<table>
<tr>
<td>Username:</td>
<td><input type="text" name="username" class="textInput"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password" class="textInput"></td>
</tr>
<td></td>
<td><input type="submit" name="login_btn" value="login"></td>
</tr>
</table> 
</form>
</body>
</html>