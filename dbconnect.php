<?php 
$servername="localhost";
$username = "root";
$password = "";
$mydb ="blog";

  $conn = mysqli_connect($servername,$username,$password,$mydb);
if(!$conn){
die("cant reach database" .mysqli_connect_error());
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Database-connect</title>
</head>
<body>
</body>
</html>
