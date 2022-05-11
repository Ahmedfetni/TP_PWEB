<?php 
function OpenCon()
{
$server = "localhost";
$user = "admin_pw";
$pass = "8PVmzNKPh9RQtKG";
$database = "TP_pweb";

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