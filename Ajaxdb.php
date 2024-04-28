<?php
// Establishing connection to the database
$servername = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "customer"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handling AJAX request
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieving user ID from the AJAX request
    $userId = $_GET['id'];
    $userName = $_GET["name"];

    // Query to fetch user data from the database
    $sql = "SELECT * FROM customerRegistration WHERE id = '$userId'";
    $result = $conn->query($sql);

    
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            $userData = array(
                "id" => $row["id"],
                "name" => $row["name"],
                "email" => $row["email"],
                "password" => $row["password"],
                "confirmPassword" => $row["confirmPassword"],
            );
            // Encoding the user data as JSON and sending it back
            echo json_encode($userData);
        }
    } else {
        echo "No user found with the provided ID";
    }
}

// Closing database connection
$conn->close();
?>