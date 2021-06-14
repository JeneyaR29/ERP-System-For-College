<?php
$con=mysqli_connect("localhost","root","","authentication");
if(isset($_POST['delete'])) {
	$No = $_POST['No'];
$sql=mysqli_query($con,"DELETE FROM `books` WHERE `books`.`No` = 1");
	if($sql){
	echo "Data Deleted Successful";
}
else{
	echo "Data Deletion Error!!";
}

}
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
  	  <li><a href="http://localhost/tutorials/authentication/logout.php">Logout</a></li>
    </ul>
  </div>
</nav>

<body>
<div class="content">
<h1>DELETE BOOKS</h1>

<form method="POST" action="delbook.php">
  <table>
  <tr>
    <td>No :</td>
    <td><input type="text" name="No" class="textInput" required></td>
   </tr>
  </table>
  <br>
 
  <button id="send" type="submit" name="delete" class="btn btn-success">DELETE</button>
 </form>
</div>
</body>
</html>
