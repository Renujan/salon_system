+<?php
session_start();
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "renujan"; 


$conn = new mysqli($servername, $username, $password, $dbname);
 

 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['username'];
    $password = $_POST['password'];
 
 
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
 
    $result = $conn->query("select * from register where email='$email' and password='$password'");
 
 
    if ($result->num_rows > 0) {
        $_SESSION['logged_in'] = $email;
   
        header("Location: hometoday.html");
    } else {
        echo "wrong pass";
    }
 
   
}
?>

