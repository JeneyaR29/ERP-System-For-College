<?php
$host='localhost';
$user='root';
$password='';
$dbname='ip_site';
$dsn='mysql:host:'.$host.'dbname='.$dbname;
$pdo=new PDO($dsn,$user,$password);