<?php

$db = mysqli_connect("localhost", "root", "","authentication");

if(isset($_POST['register_btn'])) {
	session_start();
	$Rollno = mysqli_real_escape_string($_POST['Rollno']);
	$username = mysqli_real_escape_string($_POST['username']);
    $password = mysqli_real_escape_string($_POST['password']);
	$password2 = mysqli_real_escape_string($_POST['password2']);
	$gender = mysqli_real_escape_string($_POST['gender']);
	$email = mysqli_real_escape_string($_POST['email']);
	$phoneCode = mysqli_real_escape_string($_POST['phoneCode']);
	$phone= mysqli_real_escape_string($_POST['phone']);
	
	if($password == $password2) {
		$password = md5($password);
		$Rollno = $_POST['Rollno'];
		$username = $_POST['username'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$phoneCode = $_POST['phoneCode'];
		$phone = $_POST['phone'];
		$sql = "INSERT INTO users(Rollno, username, password, gender, email, phoneCode, phone) VALUES('$Rollno', '$username', '$password', '$gender', '$email', '$phoneCode', '$phone')";
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
<h1>ADD STUDENT</h1>

<form method="POST" action="addstu.php">
  <table>
  <tr>
    <td>Rollno :</td>
    <td><input type="text" name="Rollno" class="textInput" required></td>
   </tr>
   <tr>
    <td>Name :</td>
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
    <td>Gender :</td>
    <td><input type="text" name="gender" class="textInput" required>
    </td>  
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email" class="textInput" required></td>
   </tr>
	<tr>
    <td>Phone Code :</td>
    <td><input type="text" name="phoneCode" class="textInput" required></td>
   </tr>   
   <tr>
    <td>Phone no :</td>
    <td><input type="text" name="phone" class="textInput" required></td>
   </tr>
   <tr>
    <td color:"black" ><input type="submit" name="register_btn" value="Submit"></td>
   </tr>
  </table>
 </form>
 </div>

</body>
</html>
