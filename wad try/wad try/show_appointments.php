<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "renujan";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT id, name, email, appointment_date, appointment_time, hairstyle_name, hairstyle_price
        FROM appointments
        ORDER BY appointment_date DESC";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['appointment_date']}</td>
                <td>{$row['appointment_time']}</td>
                <td>{$row['hairstyle_name']}</td>
                <td>{$row['hairstyle_price']}</td>
              </tr>";
    }
} else {
    echo '<tr><td colspan="7" style="text-align: center;">No appointments found.</td></tr>';
}


$conn->close();
?>
