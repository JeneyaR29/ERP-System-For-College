
<?php
global $con;

$con=mysqli_connect("localhost","root","","authentication");

if($con === false){ 
	die("ERROR: Could not connect. " 
				. mysqli_connect_error()); 
} 
if(isset($_POST['register_btn'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
$sql = "SELECT id FROM lib WHERE username='$username' AND password='$password'"; 
$res = mysqli_query($con, $sql);

if($res !=null) {
	session_start();
	
	$_SESSION['username'] = $username;
		header("location: librarian.html");
}else{
	echo "NO";
}}

?> 

<!DOCTYPE html>
<head>
<title>LOGIN!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="deconav.css" />
  <link rel="stylesheet" type="text/css" href="style.css" />
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

input[type=text] {
  color: black;
}
.content{
background: black;
width: 50%;
padding: 5px;
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
<h1>LOGIN!</h1>

<form method="POST" action="liblog.php">
  <table>
  <tr>
    <td>username :</td>
    <td><input type="text" name="username" class="textInput" required></td>
   </tr>
   <tr>
    <td>password</td>
    <td><input type="text" name="password" class="textInput" required></td>
   </tr>
  
   <tr>
    <td><input type="submit" name="register_btn" value="Submit"></td>
   </tr>
  </table>
 </form>
</div>
</body>
</html>