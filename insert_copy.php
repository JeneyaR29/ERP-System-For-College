<?php
	require_once('pdo.php');
	$stmt=$pdo->prepare('select * from stu where username=:username and password=:password');
	$stmt->execute(array(':username'=>'abc',':password'=>'abc'));
	while($row=$stmt->fetch(PDO::FETCH_ASSOC){
		echo('hello');
	}