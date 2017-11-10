<?php
<?php
session_start();
if(isset($_POST['Logout']))
{
	session_destroy();
	session_unset();
	header("Refresh:0; url='Adminlogin.php'");
}

$servername = "localhost";
$username = "root";
$password = "";
$database="test";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<html>
<head>
    
</head>
<body>
<form action="" method="">
    <p>First Name: </p><input type="text"><br>
    <p>Last Name: </p><input type="text">
</form>    
</body>
</html>