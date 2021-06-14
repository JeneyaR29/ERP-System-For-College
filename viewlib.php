 <!DOCTYPE html>
<head>
<title>VIEW LIBRARIAN</title>
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
  	  <li><a href="http://localhost/tutorials/authentication/logout.php">Logout</a></li>
    </ul>
  </div>
</nav>

<body>

<div class="content">
<h1> VIEW LIBRARIAN</h1>
<form method="post" role="form" enctype="multipart/form-data"> 
	<table>
  <tr>
    <td>Username:</td>
    <td><input type="text" name="username" class="textInput" required></td>
   </tr>
   </table>
	<button id="send" type="submit" name="submit" class="btn btn-success">Submit</button>
</form>
</div>
</body>
</html>


<?php
 $con=mysqli_connect("localhost","root","","authentication");
 if(isset($_POST['submit'])) {
$username=$_POST['username'];
$sql = "SELECT * FROM lib WHERE username='$username'"; 
$res = mysqli_query($con, $sql);
if($res = $con->query($sql)){ 
	if($res->num_rows > 0){ 
	echo "<font size='18' face='Calligrapher'>";
		echo "<table border='2' cellspacing='3' align='center'>"; 
			echo "<tr>"; 
				echo "<th colspan='3' bgcolor='black'>USERNAME </th>"; 
				echo "<th colspan='3' bgcolor='black'>PASSWORD</th>"; 
				echo "<th colspan='3' bgcolor='black'>GENDER</th>"; 
				echo "<th colspan='3' bgcolor='black'>EMAIL</th>"; 
				echo "<th colspan='3' bgcolor='black'>PhoneNo</th>";
			echo "</tr>"; 
			
		while($row = $res->fetch_array()){ 
			echo "<tr>"; 
				echo "<td colspan='3' bgcolor='black'>" . $row['username'] . "</td>";
				echo "<td colspan='3' bgcolor='black'>" . $row['password'] . "</td>"; 
				echo "<td colspan='3' bgcolor='black'>" . $row['gender'] . "</td>";
				echo "<td colspan='3' bgcolor='black'>" . $row['email'] . "</td>";
				echo "<td colspan='3' bgcolor='black'>" . $row['PhoneNo'] . "</td>";
			echo "</tr>"; 
		} 
		echo "</table>"; 
		$res->free(); 
	} else{ 
	$messagee = "No matching records are found.";
	echo "<script type='text/javascript'> alert('$messagee'); </script> " . mysqli_error($con);
	} 
} else{ 
	$messagee = "ERROR: Could not able to execute $sql. ";
	echo "<script type='text/javascript'> alert('$messagee'); </script> " . mysqli_error($con);
}  
/* $mysqli->close(); */

 }
 ?>
 
 