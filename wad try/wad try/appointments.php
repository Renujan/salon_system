<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Appointments</title>
    <style>
       
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 20px;
    background: linear-gradient(0deg, #ffd5ae, rgb(219, 255, 243));
    background-size: 100% 100%; 
    background-repeat: no-repeat;
    min-height: 100vh;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    background-color: rgba(255, 255, 255, 0.9); 
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}


table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
    color: #555;
    text-transform: uppercase;
}

tbody tr:hover {
    background-color: #f9f9f9;
}


.back-button {
    display: inline-block;
    background-color: #f44336;
    color: white;
    border: none;
    cursor: pointer;
    padding: 10px 20px;
    border-radius: 5px;
    text-align: center;
    text-decoration: none;
    transition: background-color 0.3s ease;
    margin-top: 20px;
}

.back-button:hover {
    background-color: #d32f2f;
}


    </style>
</head>
<body>
    <div class="container">
        <h1>All Appointments</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                    <th>Hairstyle Name</th>
                    <th>Hairstyle Price</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'show_appointments.php'; ?>
            </tbody>
        </table>
        <a href="javascript:history.back()" class="back-button">Back</a>
    </div>
</body>
</html>
