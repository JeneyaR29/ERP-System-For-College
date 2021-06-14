<?php

$db = mysqli_connect("localhost", "root", "","authentication");

if(isset($_POST['register_btn'])) {
	session_start();
	$id = mysqli_real_escape_string($_POST['id']);
	$username = mysqli_real_escape_string($_POST['username']);
    $password = mysqli_real_escape_string($_POST['password']);
	$password2 = mysqli_real_escape_string($_POST['password2']);
	$email = mysqli_real_escape_string($_POST['email']);
	$gender = mysqli_real_escape_string($_POST['gender']);
	$PhoneNo= mysqli_real_escape_string($_POST['PhoneNo']);
	
	if($password == $password2) {
		$password = md5($password);
		$id = $_POST['id'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$PhoneNo = $_POST['PhoneNo'];
		$sql = "INSERT INTO lib(id, username, password, email, gender, PhoneNo) VALUES('$id', '$username', '$password', '$email', '$gender', '$PhoneNo')";
		mysqli_query($db, $sql);
		$_SESSION['message'] = "Now Logged in";
		$_SESSION['username'] = $username;
		header("location: home.php");
	}else{
		$_SESSION['message'] = "The 2 passwords do no match";
	}
}

?>




<html>
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="deconav.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.3.min.js">
</script> 
<style type="text/css">
body{
background-image:url(ohh.jpg);
background-size:cover;
background-attachment: fixed;
}

.content{
background: black;
width: 50%;
padding: 40px;
margin: 100px auto;
font-family: georgia,garamond,serif;
border-radius: 10px;
color: white;
}

p{
font-size: 25px;
color: white;
}

td{
color: white;
}

</style>
</head>

<nav class="navbar navbar-custom">
  <div class="container-fluid">
    <div class="navbar-header">
	<img src="logomu.jpg"></img>
    </div>
    <ul class="nav navbar-nav navbar-right">
	  <li><a href="http://localhost/tutorials/authentication/login.html"> Admins Portal</a></li>
      <li><a href="http://localhost/tutorials/authentication/stulog.php"> Students portal</a></li>
      <li><a href="http://localhost/tutorials/authentication/teachlog.php">Teacher's Portal</a></li>
      <li><a href="http://localhost/tutorials/authentication/liblog.php">Librarian's Portal</a></li>
  	 
    </ul>
  </div>
</nav>

<body>
<div class="content">
<h1>ADD LIBRARIAN</h1>

<form method="POST" action="addlib.php">
  <table>
  <tr>
    <td>id :</td>
    <td><input type="text" name="id" class="textInput" required></td>
   </tr>
   <tr>
    <td>Username :</td>
    <td><input type="text" name="username" class="textInput" required></td>
   </tr>
   <tr>
    <td>Password :</td>
    <td><input type="password" name="password" class="textInput" required></td>
   </tr>
   <tr>
	<td>Password again:</td>
	<td><input type="password" name="password2" class="textInput"></td>
   </tr>
   <tr>
    <td>email :</td>
    <td><input type="text" name="email" class="textInput" required>
    </td>  
   </tr>
   <tr>
    <td>gender :</td>
    <td><input type="text" name="dept" class="textInput" required></td>
   </tr>
   <tr>
    <td>Phone no :</td>
    <td><input type="text" name="PhoneNo" class="textInput" required></td>
   </tr>
   <tr>
    <td><input type="submit" name="register_btn" value="Submit"></td>
   </tr>
  </table>
 </form>
</div>
</body>
</html>
