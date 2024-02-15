<?php
$host = "192.168.30.%";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($host, $username, $password, "cyclones_and_anticyclones");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get values from the HTML form
$mid1 = $_POST['mid1'];
$mid2 = $_POST['mid2'];
$mid3 = $_POST['mid3'];
$mid4 = $_POST['mid4'];

// SQL query to insert values into the table
$sql = "INSERT INTO mid_latitude(q1_1, q1_2, q1_3, q1_4) VALUES ('$mid1', '$mid2', '$mid3', '$mid4')";

// Execute the query


    if ($conn->query($sql) === TRUE) {
    echo "Values inserted successfully!";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close the database connection
$conn->close();
?>
