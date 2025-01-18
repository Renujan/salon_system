<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "renujan"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function sanitize_input($data) {
    global $conn;
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $conn->real_escape_string($data); 
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = sanitize_input($_POST["fname"]);
    $mail = sanitize_input($_POST["mail"]);
    $password = sanitize_input($_POST["password"]); 
    $conf_password = sanitize_input($_POST["conf_password"]);

  
    if ($password !== $conf_password) {
        echo "<script>alert('Passwords do not match. Please try again.');</script>";
        exit();
    }


    
    $stmt = $conn->prepare("INSERT INTO register (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $fname, $mail, $password);

    
    if ($stmt->execute()) {
      
        echo "<script>alert('Registration successful!');</script>";
        
        exit();
    } else {
        
        echo "<script>alert('Error registering user. Please try again later.');</script>";
        
        exit();
    }

    $stmt->close();
}

$conn->close();
?>
