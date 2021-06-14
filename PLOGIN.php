<?php 
 // to get values passe from form in login.php file
 $username = "";

if(isset($_POST['username'])){
    $username = $_POST['username'];
}
 $password = "";
if(isset($_POST['username'])){
    $password = $_POST['password'];
 }
 // to prevent mysql injection
 $username = stripcslashes($username);
 $password = stripcslashes($password);
 $username = mysqli_real_escape_string($username);
 $password = mysqli_real_escape_string($username);

 //connect to the server select database
 mysqli_connect("localhost", "root", "", "authentication");
 mysqli_select_db("users");

 // Query the database for user
 $result = mysqli_query("select * from users where username = '$username' and password = '$password'")
  or die('Failed to query database'.mysqli_error());
 $row = mysqli_fetch_array($result);
 if ( $row['username'] == $username && $row['password'] == $password ) {
  echo "login success! Welcome".$row['username'];
 } else {
     echo "Failed to login!";
}

?>


<!DOCTYPE html>
<html>
<head>
<title>Logare ReportBot</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="frm">
<form action="process.php" method="$_POST">
<p>
<label>User:</label>
<input type="text" id="user" name="user" />
</p>
<p>
<label>Parola:</label>
<input type="password" id="pass" name="pass" />
</p>
<p>
<input type="submit" id="btn" value="Logare" />
</p>

</form>
</div>

</body>
</html>
