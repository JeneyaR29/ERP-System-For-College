<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "authentication");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
	$Eve_id = mysqli_real_escape_string($_POST['Eve_id']);
	$Eve_name = mysqli_real_escape_string($_POST['Eve_name']);
	$Eve_des = mysqli_real_escape_string($_POST['Eve_des']);
	$Eve_date = mysqli_real_escape_string($_POST['Eve_date']);
	$Eve_no = mysqli_real_escape_string($_POST['Eve_no']);
	
	if($Eve_no <= 5) {
		$Eve_no = $_POST['Eve_no'];
		$Eve_id = $_POST['Eve_id'];
	    $Eve_name = $_POST['Eve_name'];
		$Eve_des = $_POST['Eve_des'];
		$Eve_date = $_POST['Eve_date'];
	}
$sql = "UPDATE event SET Eve_id='$Eve_id', Eve_name='$Eve_name', Eve_des='$Eve_des', Eve_date='$Eve_date' WHERE Eve_no='$Eve_no'";
if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>





<!DOCTYPE html>
<head>
<title>ADD EVENT</title>
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
<h1>ADD EVENT</h1>

<form method="POST" action="adddeve.php">
  <table>
  <tr>
    <td>Eve_id :</td>
    <td><input type="text" name="Eve_id" class="textInput" required></td>
   </tr>
   <tr>
    <td>Eve_name:</td>
    <td><input type="text" name="Eve_name" class="textInput" required></td>
   </tr>
    <tr>
    <td>Eve_des :</td>
    <td><input type="text" name="Eve_des" class="textInput" required></td>
   </tr>
    <tr>
    <td>Eve_date :</td>
    <td><input type="date" name="Eve_date" class="date" required></td>
   </tr>
    <tr>
    <td>Eve_no :</td>
    <td><input type="text" name="Eve_no" class="textInput" required></td>
   </tr>
  
   <tr>
    <td><input type="submit" name="register_btn" value="Submit"></td>
   </tr>
  </table>
 </form>
</div>
</body>
</html>
