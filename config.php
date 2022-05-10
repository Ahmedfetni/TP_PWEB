<?php 
function OpenCon()
{
$server = "localhost";
$user = "root";
$pass = "";
$database = "login_register_pure_coding";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
return $conn;
}
function CloseCon($conn)
{
$conn -> close();
}

?>