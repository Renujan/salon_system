<?php
session_start();

if(!isset($_SESSION['user'])){
    echo "login first";
    return;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email =  $_SESSION['user'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    $hairstyle_name = $_POST['hairstyle_name'];
    $hairstyle_price = $_POST['hairstyle_price'];


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "renujan";


    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "INSERT INTO appointments (name, email, appointment_date, appointment_time, hairstyle_name, hairstyle_price)
            VALUES ('$name', '$email', '$appointment_date', '$appointment_time', '$hairstyle_name', '$hairstyle_price')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Appointment booked successfully!');</script>";
        header("Location: type.html?msg=appdone"); 
   
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
}
?>
